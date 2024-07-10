<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\PartyModel;
use App\Models\ProductsModel;
use App\Models\InventoryModel;
use App\Models\SalesOrderModel;
use App\Models\NotificationModel;
use App\Models\SalesProductModel;
use App\Controllers\BaseController;
use App\Models\ProductCategoryModel;
use App\Models\OfficeModel;

use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProductWarehouseLinkModel;

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
    public $partyModel;
    public $NModel;
    public $InventoryModel;
    public $OfficeModel;
    public function __construct()
    {
        $this->session = \Config\Services::session();

        $this->PCModel = new ProductCategoryModel();
        $this->PModel = new ProductsModel();
        $this->SOModel = new SalesOrderModel();
        $this->SOPModel = new SalesProductModel();
        $this->PWLModel = new ProductWarehouseLinkModel();
        $this->partyModel = new PartyModel();
        $this->NModel = new NotificationModel();
        $this->InventoryModel = new InventoryModel();
        $this->OfficeModel = new OfficeModel();

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
            if ($this->request->getPost('status') != '') {
                $this->SOModel->where('status', $this->request->getPost('status'));
            }
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
            $error = $this->validate([
                'customer_name' => [ 
                    'rules' => 'trim|regex_match[^[a-zA-Z0-9\s]*$]', 
                    'errors' => [
                        'regex_match' => 'The customer field only contain alphanumeric characters.',
                    ],
                ], 
                'branch_id'   =>'required'
            ]);
            $validation = \Config\Services::validation(); 
            if (!empty($validation->getErrors())) {
                $data['error'] = $this->validator;
            } else {
                $insert_id = $this->SOModel->save([
                    'order_no' => $this->request->getPost('order_no'),
                    'customer_name' => $this->request->getPost('customer_name'),
                    'added_by' => $this->added_by,
                    'added_ip' => $this->added_ip,
                    'added_date' => $this->request->getPost('order_date'),
                    'branch_id' => $this->request->getPost('branch_id'),
                    'party_id' => $this->request->getPost('party_id')
                ]) ? $this->SOModel->getInsertID() : '0';
                $this->session->setFlashdata('success', 'Order Created Successfully'); 
                return $this->response->redirect(base_url('sales/add-products/' . $insert_id));
            } 
        }  
        $data['customers'] = $this->partyModel->select('id,party_name')->where('status', 1)->findAll();
        $data['last_order'] = $this->SOModel->orderBy('id', 'desc')->first();   
        $data['branches'] = $this->selectUserBranches(); 
        return view('Sales/create', $data);
         
    }
    function selectUserBranches(){
       $user = new UserModel();
       return $user->select('o.id,o.name')
        ->join('company c','users.company_id = c.id') 
        ->join('office o','c.id= o.company_id')                    
        ->where(['users.id'=>$_SESSION['id']])->where(['o.status'=>1])->orderBy('o.name','asc')->findAll();
    }
    public function edit($id)
    {
        if ($this->access === 'false') {
            $this->session->setFlashdata('error', 'You are not permitted to access this page');
            return $this->response->redirect(base_url('/dashboard'));
        } else if ($this->request->getPost()) {
            $error = $this->validate([
                'customer_name' => [ 
                    'rules' => 'regex_match[^[a-zA-Z0-9\s]*$]', 
                    'errors' => [
                        'regex_match' => 'The customer  field only contain alphanumeric characters.',
                    ], 
                ], 
                'branch_id'   =>'required'
            ]); 
            
            //as per discussed max size validation not required
            if($this->request->getFile('img_1')->getSize() > 0) {
                $this->validateData([], [
                    'img_1' => 'uploaded[img_1]|mime_in[img_1,application/pdf,image/jpg,image/jpeg,image/JPEG]',
                ]); 
            }
            if($this->request->getFile('img_2')->getSize() > 0) {
                $this->validateData([], [
                    'img_2' => 'uploaded[img_2]|mime_in[img_2,application/pdf,image/jpg,image/jpeg,image/JPEG]',
                ]); 
            }
            $validation = \Config\Services::validation(); 

            // echo 'Files<pre>';print_r($_FILES);
            // echo 'POst dt<pre>';print_r($this->request->getPost());
            // echo 'getErrors<pre>';print_r($validation->getErrors());exit;
            if (!empty($validation->getErrors())) {
                $data['error'] = $this->validator;
            } else {   
                $so_data =  [
                    'customer_name' => $this->request->getPost('customer_name'),
                    'added_by' => $this->added_by,
                    'added_ip' => $this->added_ip,
                    'added_date' => $this->request->getPost('order_date'),
                    'branch_id' => $this->request->getPost('branch_id'),
                    'party_id' => $this->request->getPost('party_id')
                ];
                // update image if found or either upload with webcam
                if ($this->request->getFile('img_1')->getSize() > 0) {
                $so_data['image_1'] = $this->uploadPurchaseOrderImages($id,$this->request->getPost(),$this->request->getFile('img_1'),'image_1');
                }else if($this->request->getPost('image_1')){
                $so_data['image_1'] = $this->uploadFileWithCam($id,$this->request->getPost(),'image_1');
                }
                if ($this->request->getFile('img_2')->getSize() > 0) {
                    $so_data['image_2'] = $this->uploadPurchaseOrderImages($id,$this->request->getPost(),$this->request->getFile('img_2'),'image_2');
                }else if($this->request->getPost('image_2')){
                    $so_data['image_2'] = $this->uploadFileWithCam($id,$this->request->getPost(),'image_2');
                }
                // echo '<pre>';print_r($so_data);exit;
                $this->SOModel->update($id,$so_data);
                $this->session->setFlashdata('success', 'Order Updated Successfully'); 
                return $this->response->redirect(base_url('sales/add-products/' . $id));
            }
        }  
        //order can be edited only 2 times as per doc
        $this->checkOrderStatus($id); 
        
        $customers = $this->partyModel->select('id,party_name')->where('status', 1)->findAll();
        
        $data['customers']  = array_column($customers,'party_name','id');
        $data['last_order'] = $this->SOModel->orderBy('id', 'desc')->first();
        $data['order_details'] = $this->SOModel->where('id', $id)->first();
        $data['selected_customer'] = $data['order_details']['customer_name'];
        if(!in_array($data['order_details']['customer_name'],$data['customers'])){
            array_push($data['customers'],$data['order_details']['customer_name']);
        }
        
        $data['branches'] = $this->selectUserBranches();

        // echo '<pre>';print_r($customers);
        // echo 'customers<pre>';print_r($data['customers']);exit;
        return view('Sales/edit', $data); 
    }
    function uploadFileWithCam($id,$postdata,$flag){ 
        $path ='public/uploads/sales/';
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }
        //delete old image
        $sale_details = $this->SOModel->where('id', $id)->first();
        if (!empty($sale_details[$flag]) && file_exists($path.$sale_details[$flag])) {
            unlink( $path. $sale_details[$flag]);
        }
        $image_parts = explode(";base64,", $postdata[$flag]);  
        $fileName = uniqid().strtotime(date('Y-m-d')). '.jpg'; 
        $file = $path . $fileName;
        file_put_contents($file, base64_decode($image_parts[1]));
        return $fileName;
    }
    function uploadPurchaseOrderImages($id,$postdata,$image,$flag){
        $path ='public/uploads/sales/'; 
        //delete old image
        $sale_details = $this->SOModel->where('id', $id)->first();
        if (!empty($sale_details[$flag]) && file_exists($path.$sale_details[$flag])) {
            unlink( $path. $sale_details[$flag]);
        }
        // process image
        $newName ='';
        if ($image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName();
            $imgpath = 'public/uploads/sales';
            if (!is_dir($imgpath)) {
                mkdir($imgpath, 0777, true);
            }
            $image->move($imgpath, $newName);
        }
        return $newName;
    }

    public function addProducts($id)
    {
        if ($this->request->getPost()) {
            // echo '<pre>';
            // print_r($this->request->getPost());exit; 
            // user home branch
            $UModel = new UserModel();
            $u_home_branch = $UModel->where('id', $_SESSION['id'])->first()['home_branch'];
            
            // echo 'u_home_branch <pre>';
            // print_r($u_home_branch);exit;
            if ($u_home_branch > 0) {
                foreach ($this->request->getPost('product_id') as $product) {
                    $sale_order_product = $this->SOPModel->where(['product_id'=>$product,'order_id'=>$id])->first();

                    // product rate at home branch warehouse
                    $res = $this->PWLModel->join('warehouses', 'warehouses.id = product_warehouse_link.warehouse_id')->where('product_id', $product)->where('office_id', $u_home_branch)->first();
                    // print_r($res);exit;
                    if(!$res){
                        $this->session->setFlashdata('danger', 'Home Branch not found, please check!!!');
                        return redirect()->to('/sales/add-products/' . $id);
                    }

                    if(isset($sale_order_product) && !empty($sale_order_product)){
                        //edit sales order product 
                        $qty= $this->request->getPost('qty_' . $product) + $sale_order_product['quantity'];
                        $this->SOPModel->update($sale_order_product['id'], [
                            'quantity' => $qty,
                            'amount' =>$qty *  $res['rate']
                        ]);
                    }else{
                        $qty=$this->request->getPost('qty_' . $product);
                        $arr = [
                            'order_id' => $id,
                            'product_id' => $product,
                            'quantity' => $this->request->getPost('qty_' . $product),
                            'rate' => $res['rate'],
                            'amount' => $this->request->getPost('qty_' . $product) *  $res['rate']
                        ];
                        $this->SOPModel->insert($arr);
                    }

                    //Check inventory for this purchase or product is available or not
                    $inventory = $this->InventoryModel->where(['product_id'=>$product,'sales_order_id'=>$id])->first();

                    //insert to inventory data
                    $inventoryData['product_id'] = $product;
                    $inventoryData['warehouse_id'] = $res['warehouse_id'];
                    $inventoryData['qty_out'] =  $qty; 
                    $inventoryData['sales_order_id'] = $id;
                    if(!empty($inventory)){
                        $this->InventoryModel->update($inventory['id'],$inventoryData);
                    }else{
                        $this->InventoryModel->insert($inventoryData);
                    }
                }
                $this->session->setFlashdata('success', 'Selected Products Added To Order');
            } else {
                $this->session->setFlashdata('danger', 'Home branch not set for user');
            }
            
            if($this->request->getPost('sales_invoice_verification_form')){
                return redirect()->to('/sales-invoices-verifivation/save/' . $id);
            }else{
                return redirect()->to('/sales/add-products/' . $id);
            }
        }

        $data['token'] = $id;
        $data['categories'] = $this->PCModel->orderBy('cat_name', 'asc')->findAll();
        $data['order_details'] = $this->SOModel->where('id', $id)->first();
        $data['added_products'] = $this->SOPModel->select('*,sales_order_products.id as sp_id')->join('products', 'products.id = sales_order_products.product_id')->where('order_id', $id)->findAll();

        return view('Sales/addProducts', $data);
    }

    public function getProducts()
    {
        $category_id = $this->request->getPost('category_id');

        $data['products'] = $this->PModel->where('category_id', $category_id)->where('status', '1')->where('is_deleted', '0')->findAll();
        return view('Sales/productTable', $data);
    }

    public function deleteProd($id, $sp_id)
    {
        $order_product = $this->SOPModel->where(['id'=>$sp_id])->first();
        $this->InventoryModel->where(['product_id'=>$order_product['product_id'],'sales_order_id'=>$id,])->delete();
        $this->SOPModel->delete($sp_id);
        $this->session->setFlashdata('danger', 'Product removed from order');

        return $this->response->redirect(base_url('sales/add-products/' . $id));
    }

    function getOrderProducts($order_id){
        $sale_order_product = $this->SOPModel->where(['order_id'=>$order_id])->first();
        if(!empty($sale_order_product)){
            echo 1;exit;
        }else{
            echo 0;exit;
        }
    }

    function salesCheckout($orderId){
        $data['token'] = $orderId;
        $data['order_details'] = $this->SOModel->where('id', $orderId)->first();
        $data['added_products'] = $this->SOPModel->select('*,sales_order_products.id as sp_id')->join('products', 'products.id = sales_order_products.product_id')->where('order_id', $orderId)->findAll();
        return view('Sales/salesCheckout', $data);
    }

    function sendToInvoice($order_id){
        $order = $this->SOModel->where('id', $order_id)->first();

        $result = $this->SOModel->update($order_id, [
            'status' => 1
        ]);
//  echo $order_id.'<pre>'; print_r($sale_order_product );exit;
        if($result){
            $this->NModel->save([
                'order_id' => $order_id,
                'user_id'=>$_SESSION['id'],
                'message' => $order['order_no'].' order has been placed succefully'
            ]);
            $this->session->setFlashdata('success', 'Order has been placed succefully');
            echo 1;exit;
        }else{
            echo 0;exit;
        }
    }

    public function deleteSaleOrder($id)
    {
        //delete inventory
        $this->InventoryModel->where('sales_order_id', $id)->delete();

        //delete order product first 
        $this->SOPModel->where('order_id', $id)->delete();
        //delete order
        $this->SOModel->delete($id);
        $this->session->setFlashdata('danger', 'Order deleted succefully.');

        return $this->response->redirect(base_url('sales'));
    }

    function updateStatus($order_id){
        $result = $this->SOModel->update($order_id, [
            'status' => ORDER_STATUS['cancel']
        ]);
        $this->session->setFlashdata('success', 'Order has been updated succefully');
        return $this->response->redirect(base_url('sales'));
    }

    function view($orderId){
        $this->checkOrderStatus($orderId);
        $data['token'] = $orderId;
        $data['order_details'] = $this->SOModel->where('id', $orderId)->first();
        $data['added_products'] = $this->SOPModel->select('*,sales_order_products.id as sp_id')->join('products', 'products.id = sales_order_products.product_id')->where('order_id', $orderId)->findAll();
        return view('Sales/view', $data);
    }

    function checkOrderStatus($id){
        //order can be edited only 2 times as per doc and only update if status is open, ready_for_invoicing, in_invoicing
        $data['order_details'] = $this->SOModel->where('id', $id)->first();
        if (!in_array($data['order_details']['status'],PURCHASE_STATUS_EDIT_PERMITIONS)) {
            $this->session->setFlashdata('danger', 'Order can not be editable!!!'); 
            return $this->response->redirect(base_url('sales/index'));
        }
        if(isset($data['order_details']['edit_count']) && $data['order_details']['edit_count'] < 1){
            $this->SOModel->update($id, [ 
                'edit_count' => ( $data['order_details']['edit_count']+1),
                'status'=>0
            ]);
            //send notification to all user for order is open for edit
            $this->NModel->save([
                'order_id' => $id, 
                'user_id'=>$_SESSION['id'],
                'message' => $data['order_details']['order_no'].' order has been opened for edit'
            ]);
        }else{
            $this->session->setFlashdata('danger', 'Order can be edited only 1 times!!!');
            return $this->response->redirect(base_url('sales/index'));
        }
    }

    function salesCheckoutPrint($orderId){
        $data['token'] = $orderId;
        $data['order_details'] = $this->SOModel->where('id', $orderId)->first();
        $data['added_products'] = $this->SOPModel->select('*,sales_order_products.id as sp_id')->join('products', 'products.id = sales_order_products.product_id')->where('order_id', $orderId)->findAll();
        return view('Sales/salesCheckoutPrint', $data);
    }
}
