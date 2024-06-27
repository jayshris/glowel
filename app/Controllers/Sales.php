<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductCategoryModel;
use App\Models\ProductsModel;
use App\Models\ProductWarehouseLinkModel;
use App\Models\SalesOrderModel;
use App\Models\SalesProductModel;
use App\Models\UserModel;

use CodeIgniter\HTTP\ResponseInterface;

class Sales extends BaseController
{
    public $PCModel;
    public $PModel;
    public $SOModel;
    public $SOPModel;
    public $PWLModel;
    public $session;
    public $access;
    public $added_by;
    public $added_ip;

    public function __construct()
    {
        $this->session = \Config\Services::session();

        $this->PCModel = new ProductCategoryModel();
        $this->PModel = new ProductsModel();
        $this->SOModel = new SalesOrderModel();
        $this->SOPModel = new SalesProductModel();
        $this->PWLModel = new ProductWarehouseLinkModel();


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

            $data['orders'] = $this->SOModel->orderBy('id', 'desc')->findAll();

            return view('Sales/index', $data);
        }
    }

    public function create()
    {
        if ($this->access === 'false') {
            $this->session->setFlashdata('error', 'You are not permitted to access this page');
            return $this->response->redirect(base_url('/dashboard'));
        } else if ($this->request->getPost()) {

            $insert_id = $this->SOModel->save([
                'order_no' => $this->request->getPost('order_no'),
                'customer_name' => $this->request->getPost('customer_name'),
                'added_by' => $this->added_by,
                'added_ip' => $this->added_ip
            ]) ? $this->SOModel->getInsertID() : '0';
            $this->session->setFlashdata('success', 'Order Created Successfully');

            return $this->response->redirect(base_url('sales/add-products/' . $insert_id));
        } else {
            $data['last_order'] = $this->SOModel->orderBy('id', 'desc')->first();
            return view('sales/create', $data);
        }
    }

    public function addProducts($id)
    {
        if ($this->request->getPost()) {
            // echo '<pre>';
            // print_r($this->request->getPost());//exit;

            // user home branch
            $UModel = new UserModel();
            $u_home_branch = $UModel->where('id', $_SESSION['id'])->first()['home_branch'];

            // echo 'u_home_branch <pre>';
            // print_r($u_home_branch);exit;
            if ($u_home_branch > 0) {
                foreach ($this->request->getPost('product_id') as $product) {

                    // product rate at home branch warehouse
                    $res = $this->PWLModel->join('warehouses', 'warehouses.id = product_warehouse_link.warehouse_id')->where('product_id', $product)->where('office_id', $u_home_branch)->first();

                    $arr = [
                        'order_id' => $id,
                        'product_id' => $product,
                        'quantity' => $this->request->getPost('qty_' . $product),
                        'rate' => $res['rate'],
                        'amount' => $this->request->getPost('qty_' . $product) *  $res['rate']
                    ];
                    $this->SOPModel->insert($arr);
                }
                $this->session->setFlashdata('success', 'Selected Products Added To Order');
            } else {
                $this->session->setFlashdata('danger', 'Home branch not set for user');
            }


            // die;

            // return $this->response->redirect(base_url('/sales/add-products/' . $id));

            return redirect()->to('/sales/add-products/' . $id);
        }


        $data['token'] = $id;
        $data['categories'] = $this->PCModel->orderBy('cat_name', 'asc')->findAll();
        $data['order_details'] = $this->SOModel->where('id', $id)->first();
        $data['added_products'] = $this->SOPModel->select('*,sales_order_products.id as sp_id')->join('products', 'products.id = sales_order_products.product_id')->where('order_id', $id)->findAll();

        return view('sales/addProducts', $data);
    }

    public function getProducts()
    {
        $category_id = $this->request->getPost('category_id');

        $data['products'] = $this->PModel->where('category_id', $category_id)->where('status', '1')->where('is_deleted', '0')->findAll();
        return view('Sales/productTable', $data);
    }

    public function deleteProd($id, $sp_id)
    {
        // print_r($id, $sp_id);
        // die;

        $this->SOPModel->delete($sp_id);
        $this->session->setFlashdata('danger', 'Product removed from order');

        return $this->response->redirect(base_url('sales/add-products/' . $id));
    }
}
