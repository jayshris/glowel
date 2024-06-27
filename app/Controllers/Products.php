<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OfficeModel;
use App\Models\ProductCategoryModel;
use App\Models\ProductsModel;
use App\Models\ProductTypeModel;
use App\Models\ProductWarehouseLinkModel;
use App\Models\UserBranchModel;
use App\Models\UserModel;
use App\Models\WarehousesModel;
use CodeIgniter\HTTP\ResponseInterface;

class Products extends BaseController
{
    public $UBModel;
    public $PCModel;
    public $PTModel;
    public $PModel;
    public $OModel;
    public $WModel;
    public $PWLModel;
    public $access;
    public $session;
    public $added_by;
    public $added_ip;

    public function __construct()
    {
        $this->session = \Config\Services::session();

        $this->PCModel = new ProductCategoryModel();
        $this->PTModel = new ProductTypeModel();
        $this->PModel = new ProductsModel();
        $this->OModel = new OfficeModel();
        $this->WModel = new WarehousesModel();
        $this->PWLModel = new ProductWarehouseLinkModel();
        $this->UBModel = new UserBranchModel();

        $user = new UserModel();
        $this->access = $user->setPermission();

        $this->added_by = isset($_SESSION['id']) ? $_SESSION['id'] : '0';
        $this->added_ip = isset($_SERVER['REMOTE_ADDR'])  ? $_SERVER['REMOTE_ADDR'] : '';
    }

    public function index()
    {
        if ($this->access === 'false') {
            $this->session->setFlashdata('error', 'You are not permitted to access this page');
            return $this->response->redirect(base_url('/dashboard'));
        } else {
            $this->PModel->select('products.*,product_types.type_name,product_categories.cat_name');
            $this->PModel->join('product_types', 'product_types.id = products.type_id');
            $this->PModel->join('product_categories', 'product_categories.id = products.category_id');

            if ($this->request->getPost('product_type') != '') {
                $this->PModel->where('products.type_id', $this->request->getPost('product_type'));
            }

            if ($this->request->getPost('status') != '') {
                $this->PModel->where('products.status', $this->request->getPost('status'));
            }

            $this->PModel->where('is_deleted', '0')->orderBy('products.id', 'desc');
            $data['products'] =  $this->PModel->findAll();

            $data['product_types'] = $this->PTModel->select('id,type_name')->where('status', 1)->findAll();
            $data['post_data'] = $this->request->getPost();

            return view('Products/index', $data);
        }
    }

    public function create()
    {
        if ($this->access === 'false') {
            $this->session->setFlashdata('error', 'You are not permitted to access this page');
            return $this->response->redirect(base_url('/dashboard'));
        } else if ($this->request->getPost()) {

            $error = $this->validate([
                'product_name' => [
                    'rules' => 'required|trim|is_unique[products.product_name]',
                    'errors' => [
                        'required' => 'The product name field is required',
                        'is_unique' => 'Duplicate product name is not allowed',
                    ],
                ],
                'product_img_1' => [
                    'rules' => 'uploaded[product_img_1]|max_size[product_img_1,100]|mime_in[product_img_1,image/png,image/PNG,image/jpg,image/jpeg,image/JPEG]',
                    'errors' => [
                        'mime_in' => 'Image must be in jpeg/png format',
                        'max_size' => 'Image must be under 100KB'
                    ]
                ],
                'product_img_2' => [
                    'rules' => 'uploaded[product_img_2]|max_size[product_img_2,300]|mime_in[product_img_2,image/png,image/PNG,image/jpg,image/jpeg,image/JPEG]',
                    'errors' => [
                        'mime_in' => 'Image must be in jpeg/png format',
                        'max_size' => 'Image must be under 100KB'
                    ]
                ]
            ]);

            // var_dump($this->request->getPost());
            // var_dump($error);
            // var_dump($this->validator->getErrors());
            // die;

            if (!$error) {
                $data['user_offices'] = $this->UBModel->select()->where('user_id', $_SESSION['id'] ? $_SESSION['id'] : 0)->findAll();
                $data['offices'] = $this->OModel->where('status', 1)->findAll();
                $data['WModel'] = $this->WModel;
                $data['PWLModel'] = $this->PWLModel;
                $data['product_types'] = $this->PTModel->select('id,type_name')->where('status', 1)->findAll();
                $data['error'] = $this->validator;
                return view('Products/create', $data);
            } else {

                // echo '<pre>';
                // print_r($this->request->getPost());
                // die;
                // process image
                $imgpath = 'public/uploads/products';

                $image1 = $this->request->getFile('product_img_1');
                if ($image1->isValid() && !$image1->hasMoved()) {
                    $newName1 = $image1->getRandomName();
                    if (!is_dir($imgpath)) {
                        mkdir($imgpath, 0777, true);
                    }
                    $image1->move($imgpath, $newName1);
                }

                $image2 = $this->request->getFile('product_img_2');
                if ($image2->isValid() && !$image2->hasMoved()) {
                    $newName2 = $image2->getRandomName();
                    if (!is_dir($imgpath)) {
                        mkdir($imgpath, 0777, true);
                    }
                    $image2->move($imgpath, $newName2);
                }

                $insert_id =  $this->PModel->save([
                    'type_id' => $this->request->getVar('product_type'),
                    'category_id' => $this->request->getVar('product_category'),
                    'product_name' => $this->request->getVar('product_name'),
                    'product_image_1' => $newName1,
                    'product_image_2' => $newName2,
                    'added_by' => $this->added_by,
                    'added_ip' => $this->added_ip
                ]) ? $this->PModel->getInsertID() : '0';


                // update warehouse locations
                if ($this->request->getVar('offices')) {

                    foreach ($this->request->getVar('offices') as $office) {

                        $linkArr = [
                            'product_id' => $insert_id,
                            'warehouse_id' => $this->request->getVar('warehouse' . $office),
                            'rate' => $this->request->getVar('warehouse_rate' . $office . '_' . $this->request->getVar('warehouse' . $office)),
                            'unit' => $this->request->getVar('warehouse_unit' . $office . '_' . $this->request->getVar('warehouse' . $office)),
                        ];
                        print_r($linkArr);
                        $this->PWLModel->insert($linkArr);
                    }
                }




                $this->session->setFlashdata('success', 'Product Successfully Added');

                // var_dump($this->request->getPost());
                // die;
                return $this->response->redirect(base_url('/products'));
            }
        } else {
            $data['user_offices'] = $this->UBModel->select()->where('user_id', $_SESSION['id'] ? $_SESSION['id'] : 0)->findAll();
            $data['offices'] = $this->OModel->where('status', 1)->findAll();
            $data['WModel'] = $this->WModel;
            $data['PWLModel'] = $this->PWLModel;
            $data['product_types'] = $this->PTModel->select('id,type_name')->where('status', 1)->findAll();
            // echo 'dd<pre>';print_r($data);exit;
            return view('Products/create', $data);
        }
    }

    public function getCategory()
    {
        $rows = $this->PCModel->where('prod_type_id', $this->request->getPost('type_id'))->findAll();

        $html = '<option value="">Select Category</option>';
        if (count($rows) > 0) {
            foreach ($rows as $row) {
                $html .= '<option value="' . $row['id'] . '">' . $row['cat_name'] . '</option>';
            }
        }

        return $html;
    }

    public function edit($id)
    {
        if ($this->access === 'false') {
            $this->session->setFlashdata('error', 'You are not permitted to access this page');
            return $this->response->redirect(base_url('/dashboard'));
        } else if ($this->request->getPost()) {

            $error = $this->validate([
                'product_name' => [
                    'rules' => 'required|trim',
                    'errors' => [
                        'required' => 'The product name field is required',
                        'is_unique' => 'Duplicate product name is not allowed',
                    ],
                ],
                'product_img_1' => [
                    'rules' => 'max_size[product_img_1,100]|mime_in[product_img_1,image/png,image/PNG,image/jpg,image/jpeg,image/JPEG]',
                    'errors' => [
                        'mime_in' => 'Image must be in jpeg/png format',
                        'max_size' => 'Image must be under 100KB'
                    ]
                ],
                'product_img_2' => [
                    'rules' => 'max_size[product_img_2,300]|mime_in[product_img_2,image/png,image/PNG,image/jpg,image/jpeg,image/JPEG]',
                    'errors' => [
                        'mime_in' => 'Image must be in jpeg/png format',
                        'max_size' => 'Image must be under 100KB'
                    ]
                ]
            ]);

            if (!$error) {
                $data['offices'] = $this->OModel->where('status', 1)->findAll();
                $data['WModel'] = $this->WModel;
                $data['PWLModel'] = $this->PWLModel;
                $data['user_offices'] = $this->UBModel->select()->where('user_id', $_SESSION['id'] ? $_SESSION['id'] : 0)->findAll();
                // $data['user_offices'] = $this->UBModel->select()->where('user_id', 2)->findAll();

                $data['product_types'] = $this->PTModel->select('id,type_name')->where('status', 1)->findAll();
                $data['product_categories'] = $this->PCModel->where('status', 1)->findAll();
                $data['product_details'] = $this->PModel->where('id', $id)->first();
                $data['error'] = $this->validator;

                return view('Products/edit', $data);
            } else {

                // echo '<pre>';
                // print_r($_POST);


                // update warehouse locations
                if ($this->request->getVar('offices')) {

                    $this->PWLModel->where('product_id', $id)->delete();
                    foreach ($this->request->getVar('offices') as $office) {
                        if ($this->request->getVar('warehouse' . $office)) {
                            $linkArr = [
                                'product_id' => $id,
                                'warehouse_id' => $this->request->getVar('warehouse' . $office),
                                'rate' => $this->request->getVar('warehouse_rate' . $office . '_' . $this->request->getVar('warehouse' . $office)),
                                'unit' => $this->request->getVar('warehouse_unit' . $office . '_' . $this->request->getVar('warehouse' . $office)),
                            ];
                            $this->PWLModel->insert($linkArr);
                        }
                    }
                }

                $this->PModel->update($id, [
                    'type_id' => $this->request->getVar('product_type'),
                    'category_id' => $this->request->getVar('product_category'),
                    'product_name' => $this->request->getVar('product_name'),
                    'status' => $this->request->getVar('status'),
                    'modify_by' => $this->added_by,
                    'modify_date' => date('Y-m-d h:i:s'),
                    'modify_ip' => $this->added_ip
                ]);

                // update image1 if found
                if ($this->request->getFile('product_img_1')->getSize() > 0) {

                    //delete old image
                    // $category_details = $this->PCModel->where('id', $id)->first();
                    // unlink('public/uploads/product_categories/' . $category_details['cat_image']);

                    // process image
                    $image = $this->request->getFile('product_img_1');
                    if ($image->isValid() && !$image->hasMoved()) {
                        $newName = $image->getRandomName();
                        $imgpath = 'public/uploads/products';
                        if (!is_dir($imgpath)) {
                            mkdir($imgpath, 0777, true);
                        }
                        $image->move($imgpath, $newName);
                    }
                    $this->PModel->update($id, ['product_image_1' => $newName]);
                }

                // update image2 if found
                if ($this->request->getFile('product_img_2')->getSize() > 0) {

                    //delete old image
                    // $category_details = $this->PCModel->where('id', $id)->first();
                    // unlink('public/uploads/product_categories/' . $category_details['cat_image']);

                    // process image
                    $image = $this->request->getFile('product_img_2');
                    if ($image->isValid() && !$image->hasMoved()) {
                        $newName = $image->getRandomName();
                        $imgpath = 'public/uploads/products';
                        if (!is_dir($imgpath)) {
                            mkdir($imgpath, 0777, true);
                        }
                        $image->move($imgpath, $newName);
                    }
                    $this->PModel->update($id, ['product_image_2' => $newName]);
                }

                $this->session->setFlashdata('success', 'Product Edited Successfully ');

                return $this->response->redirect(base_url('/products'));
            }
        } else {
            $data['offices'] = $this->OModel->where('status', 1)->findAll();
            $data['WModel'] = $this->WModel;
            $data['PWLModel'] = $this->PWLModel;
            $data['user_offices'] = $this->UBModel->select()->where('user_id', $_SESSION['id'] ? $_SESSION['id'] : 0)->findAll();
            // $data['user_offices'] = $this->UBModel->select()->where('user_id', 2)->findAll();

            $data['product_types'] = $this->PTModel->select('id,type_name')->where('status', 1)->findAll();
            $data['product_categories'] = $this->PCModel->where('status', 1)->findAll();
            $data['product_details'] = $this->PModel->where('id', $id)->first();

            return view('Products/edit', $data);
        }
    }

    public function delete($id)
    {
        $this->PModel->update($id, ['is_deleted' => '1']);

        $this->session->setFlashdata('danger', 'Product Deleted Successfully');

        return $this->response->redirect(base_url('/products'));
    }
}
