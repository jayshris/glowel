<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductCategoryModel;
use App\Models\ProductTypeModel;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class ProductCategory extends BaseController
{
    public $PCModel;
    public $PTModel;
    public $access;
    public $session;
    public $added_by;
    public $added_ip;

    public function __construct()
    {
        $this->session = \Config\Services::session();

        $this->PCModel = new ProductCategoryModel();

        $this->PTModel = new ProductTypeModel();

        $user = new UserModel();
        $this->access = $user->setPermission();

        $this->added_by = isset($_SESSION['id']) > 0 ? $_SESSION['id'] : '0';
        $this->added_ip = isset($_SERVER['REMOTE_ADDR']) > 0 ? $_SERVER['REMOTE_ADDR'] : '';
    }

    public function index()
    {
        if ($this->access === 'false') {
            $this->session->setFlashdata('error', 'You are not permitted to access this page');
            return $this->response->redirect(base_url('/dashboard'));
        } else {
            $this->PCModel->select('product_categories.*,product_types.type_name');
            $this->PCModel->join('product_types', 'product_types.id = product_categories.prod_type_id');

            if ($this->request->getPost('product_type') != '') {
                $this->PCModel->where('product_categories.prod_type_id', $this->request->getPost('product_type'));
            }

            if ($this->request->getPost('status') != '') {
                $this->PCModel->where('product_categories.status', $this->request->getPost('status'));
            }

            $this->PCModel->orderBy('product_categories.id', 'desc');
            $data['product_categories'] =  $this->PCModel->findAll();

            $data['product_types'] = $this->PTModel->select('id,type_name')->where('status', 1)->findAll();
            $data['post_data'] = $this->request->getPost();

            return view('ProductCategory/index', $data);
        }
    }

    public function create()
    {
        if ($this->access === 'false') {
            $this->session->setFlashdata('error', 'You are not permitted to access this page');
            return $this->response->redirect(base_url('/dashboard'));
        } else if ($this->request->getPost()) {

            $error = $this->validate([
                'category_name' => [
                    'rules' => 'required|trim|is_unique[product_categories.cat_name]',
                    'errors' => [
                        'required' => 'The type name field is required',
                        'is_unique' => 'Duplicate type name is not allowed',
                    ],
                ],
                'category_abbr' => [
                    'rules' => 'required|trim|is_unique[product_categories.cat_abbreviation]',
                    'errors' => [
                        'required' => 'The abbreviation field is required',
                        'is_unique' => 'Duplicate abbreviation is not allowed',
                    ],
                ],
                'category_img' => [
                    'rules' => 'uploaded[category_img]|max_size[category_img,100]|mime_in[category_img,image/png,image/PNG,image/jpg,image/jpeg,image/JPEG]',
                    'errors' => [
                        'mime_in' => 'Image must be in jpeg/png format',
                        'max_size' => 'Image must be under 100KB'
                    ]
                ]
            ]);

            if (!$error) {
                $data['product_types'] = $this->PTModel->select('id,type_name')->where('status', 1)->findAll();
                $data['error'] = $this->validator;
                return view('ProductCategory/create', $data);
            } else {

                // process image
                $image = $this->request->getFile('category_img');
                if ($image->isValid() && !$image->hasMoved()) {
                    $newName = $image->getRandomName();
                    $imgpath = 'public/uploads/product_categories';
                    if (!is_dir($imgpath)) {
                        mkdir($imgpath, 0777, true);
                    }
                    $image->move($imgpath, $newName);
                }
                // die;

                $this->PCModel->save([
                    'prod_type_id' => $this->request->getVar('product_type'),
                    'cat_name' => $this->request->getVar('category_name'),
                    'cat_abbreviation' => $this->request->getVar('category_abbr'),
                    'cat_image' => $newName,
                    'added_by' => $this->added_by,
                    'added_ip' => $this->added_ip,
                ]);
                $this->session->setFlashdata('success', 'Product Category Successfully Added');

                return $this->response->redirect(base_url('/product-categories'));
            }
        } else {
            $data['product_types'] = $this->PTModel->select('id,type_name')->where('status', 1)->findAll();
            return view('ProductCategory/create', $data);
        }
    }

    public function edit($id)
    {
        if ($this->access === 'false') {
            $this->session->setFlashdata('error', 'You are not permitted to access this page');
            return $this->response->redirect(base_url('/dashboard'));
        } else if ($this->request->getPost()) {

            $error = $this->validate([
                'category_name' => [
                    'rules' => 'required|trim',
                    'errors' => [
                        'required' => 'The type name field is required',
                        'is_unique' => 'Duplicate type name is not allowed',
                    ],
                ],
                'category_abbr' => [
                    'rules' => 'required|trim',
                    'errors' => [
                        'required' => 'The abbreviation field is required',
                        'is_unique' => 'Duplicate abbreviation is not allowed',
                    ],
                ],
                'category_img' => [
                    'rules' => 'max_size[category_img,100]|mime_in[category_img,image/png,image/PNG,image/jpg,image/jpeg,image/JPEG]',
                    'errors' => [
                        'mime_in' => 'Image must be in jpeg/png format',
                        'max_size' => 'Image must be under 100KB'
                    ]
                ]
            ]);

            if (!$error) {
                $data['product_types'] = $this->PTModel->select('id,type_name')->where('status', 1)->findAll();
                $data['category_details'] = $this->PCModel->where('id', $id)->first();
                $data['error'] = $this->validator;

                return view('ProductCategory/edit', $data);
            } else {

                $this->PCModel->update($id, [
                    'prod_type_id' => $this->request->getVar('product_type'),
                    'cat_name' => $this->request->getVar('category_name'),
                    'cat_abbreviation' => $this->request->getVar('category_abbr'),
                    'status' => $this->request->getVar('status'),
                    'modify_by' => $this->added_by,
                    'modify_date' => date('Y-m-d h:i:s'),
                    'modify_ip' => $this->added_ip
                ]);

                // update image if found
                if ($this->request->getFile('category_img')->getSize() > 0) {

                    //delete old image
                    // $category_details = $this->PCModel->where('id', $id)->first();
                    // unlink('public/uploads/product_categories/' . $category_details['cat_image']);

                    // process image
                    $image = $this->request->getFile('category_img');
                    if ($image->isValid() && !$image->hasMoved()) {
                        $newName = $image->getRandomName();
                        $imgpath = 'public/uploads/product_categories';
                        if (!is_dir($imgpath)) {
                            mkdir($imgpath, 0777, true);
                        }
                        $image->move($imgpath, $newName);
                    }
                    $this->PCModel->update($id, ['cat_image' => $newName]);
                }

                $this->session->setFlashdata('success', 'Product Category Edited Successfully ');

                return $this->response->redirect(base_url('/product-categories'));
            }
        } else {
            $data['category_details'] = $this->PCModel->where('id', $id)->first();
            $data['product_types'] = $this->PTModel->select('id,type_name')->where('status', 1)->findAll();
            return view('ProductCategory/edit', $data);
        }
    }

    public function delete($id)
    {
        $this->PCModel->delete($id);

        $this->session->setFlashdata('danger', 'Product Category Deleted Successfully');

        return $this->response->redirect(base_url('/product-categories'));
    }
}
