<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\PartyModel;
use App\Models\ProductsModel;
use App\Models\NotificationModel;
use App\Models\PurchaseOrderModel;
use App\Controllers\BaseController;
use App\Models\ProductCategoryModel;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProductWarehouseLinkModel;
use App\Models\PurchaseOrderProductModel;

class Purchase extends BaseController
{
    public $PCModel;
    public $PModel;
    public $PWLModel;
    public $session;
    public $access;
    public $added_by;
    public $added_ip;
    public $partyModel;
    public $NModel;
    public $POModel;
    public $POPModel;
    public function __construct()
    {
        $this->session = \Config\Services::session();

        $this->PCModel = new ProductCategoryModel();
        $this->PModel = new ProductsModel();
        $this->PWLModel = new ProductWarehouseLinkModel();
        $this->partyModel = new PartyModel();
        $this->NModel = new NotificationModel();
        $this->POModel = new PurchaseOrderModel();
        $this->POPModel = new PurchaseOrderProductModel();
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

            $data['orders'] = $this->POModel->orderBy('id', 'desc')->findAll();

            return view('Purchase/index', $data);
        }
    }

    public function create()
    {
        if ($this->access === 'false') {
            $this->session->setFlashdata('error', 'You are not permitted to access this page');
            return $this->response->redirect(base_url('/dashboard'));
        } else if ($this->request->getPost()) {
            // echo '<pre>';print_r($this->request->getPost());exit;
            $insert_id = $this->POModel->save([
                'order_no' => $this->request->getPost('order_no'),
                'customer_name' => $this->request->getPost('customer_name'),
                'added_by' => $this->added_by,
                'added_ip' => $this->added_ip
            ]) ? $this->POModel->getInsertID() : '0';
            $this->session->setFlashdata('success', 'Order Created Successfully');

            return $this->response->redirect(base_url('purchase/add-products/' . $insert_id));
        } else {
            $data['customers'] = $this->partyModel->select('party.id,party.party_name')
            ->join('party_type_party_map', ' party.id = party_type_party_map.party_id')
            ->join('party_type', ' party_type.id = party_type_party_map.party_type_id')
            ->where(['party_type.name'=> 'Vendor','party.status'=> 'Active'])
            ->where('party.status', 'Active')->findAll();
            $data['last_order'] = $this->POModel->orderBy('id', 'desc')->first();
            return view('purchase/create', $data);
        }
    }
    public function addProducts($id)
    {
        if ($this->request->getPost()) {
            // user home branch
            $UModel = new UserModel();
            $u_home_branch = $UModel->where('id', $_SESSION['id'])->first()['home_branch'];
            // echo $u_home_branch.'<pre>';
            // print_r($this->request->getPost());
            // $db = \Config\Database::connect();  
            // echo  $db->getLastQuery()->getQuery();
            // echo ' res <pre>';
            // print_r($res);
            // exit; 
            if ($u_home_branch > 0) {
                foreach ($this->request->getPost('product_id') as $product) {
                    $purchase_order_product = $this->POPModel->where(['product_id'=>$product,'order_id'=>$id])->first();
                    // product rate at home branch warehouse
                    $res = $this->PWLModel->join('warehouses', 'warehouses.id = product_warehouse_link.warehouse_id')->where('product_id', $product)->where('office_id', $u_home_branch)->first();
                    if(!$res){
                        $this->session->setFlashdata('danger', 'Inventory Locations does not allocated for selected product, please check!!!');
                        return redirect()->to('/purchase/add-products/' . $id);
                    }
                    if(isset($purchase_order_product) && !empty($purchase_order_product)){
                        //edit purchase order product 
                        $qty= $this->request->getPost('qty_' . $product) + $purchase_order_product['quantity'];
                        $this->POPModel->update($purchase_order_product['id'], [
                            'quantity' => $qty,
                            'amount' =>$qty *  $res['rate']
                        ]);
                    }else{
                        $arr = [
                            'order_id' => $id,
                            'product_id' => $product,
                            'quantity' => $this->request->getPost('qty_' . $product),
                            'rate' => $res['rate'],
                            'amount' => $this->request->getPost('qty_' . $product) *  $res['rate']
                        ];
                        $this->POPModel->insert($arr);
                    }
                }
                $this->session->setFlashdata('success', 'Selected Products Added To Order');
            } else {
                $this->session->setFlashdata('danger', 'Home branch not set for user');
            }
            return redirect()->to('/purchase/add-products/' . $id);
        }
        $data['token'] = $id;
        $data['categories'] = $this->PCModel->orderBy('cat_name', 'asc')->findAll();
        $data['order_details'] = $this->POModel->where('id', $id)->first();
        $data['added_products'] = $this->POPModel->select('*,purchase_order_products.id as sp_id')->join('products', 'products.id = purchase_order_products.product_id')->where('order_id', $id)->findAll();

        return view('purchase/addProducts', $data);
    }

    public function getProducts()
    {
        $category_id = $this->request->getPost('category_id');
        $data['products'] = $this->PModel->where('category_id', $category_id)->where('status', '1')->where('is_deleted', '0')->findAll();
        return view('purchase/productTable', $data);
    }

    public function deleteProd($id, $sp_id)
    {
        $this->POPModel->delete($sp_id);
        $this->session->setFlashdata('danger', 'Product removed from order');
        return $this->response->redirect(base_url('purchase/add-products/' . $id));
    }

    function getOrderProducts($order_id){
        $purchase_order_product = $this->POPModel->where(['order_id'=>$order_id])->first();
        if(!empty($purchase_order_product)){
            echo 1;exit;
        }else{
            echo 0;exit;
        }
    }

    function purchaseCheckout($orderId){
        $data['token'] = $orderId;
        $data['order_details'] = $this->POModel->where('id', $orderId)->first();
        $data['added_products'] = $this->POPModel->select('*,purchase_order_products.id as sp_id')->join('products', 'products.id = purchase_order_products.product_id')->where('order_id', $orderId)->findAll();
        return view('purchase/purchaseCheckout', $data);
    }

    function sendToInvoice($order_id){
        $order = $this->POModel->where('id', $order_id)->first();
        $result = $this->POModel->update($order_id, [
            'status' => 1
        ]);
        if($result){
            $this->NModel->save([
                'order_id' => $order_id,
                'message' => $order['order_no'].' order has been placed succefully'
            ]);
            $this->session->setFlashdata('success', 'Order has been placed succefully');
            echo 1;exit;
        }else{
            echo 0;exit;
        }
    }

    public function deletePurchaseOrder($id)
    {
        //delete order product first 
        $this->POPModel->where('order_id', $id)->delete();
        //delete order
        $this->POModel->delete($id);
        $this->session->setFlashdata('danger', 'Order deleted succefully.');

        return $this->response->redirect(base_url('purchase'));
    }
}
