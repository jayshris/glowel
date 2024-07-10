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
use App\Models\InventoryModel;
use App\Models\OfficeModel;
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
    public $InventoryModel;
    public $OfficeModel;
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
            // echo '<pre>';print_r($this->request->getPost());exit;
            if ($this->request->getPost('status') != '') {
                $this->POModel->where('status', $this->request->getPost('status'));
            }

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
            $error = $this->validate([
                'customer_name' => [
                    // 'rules' => 'trim|regex_match[/^[a-z\d\s]+$/i]', 
                    'rules' => 'trim|regex_match[^[a-zA-Z0-9\s]*$]', 
                    'errors' => [
                        'regex_match' => 'The customer  field only contain alphanumeric characters.',
                    ],
                ], 
                'branch_id'   =>'required'
            ]);
            $validation = \Config\Services::validation();
            // echo 'error<pre>';print_r($this->request->getPost());
            // echo 'error<pre>';print_r($validation->getErrors());exit;
            if (!empty($validation->getErrors())) {
                $data['error'] = $this->validator;
            } else {
                $insert_id = $this->POModel->save([
                    'order_no' => $this->request->getPost('order_no'),
                    'customer_name' => $this->request->getPost('customer_name'),
                    'added_by' => $this->added_by,
                    'added_ip' => $this->added_ip,
                    'added_date' => $this->request->getPost('order_date'),
                    'branch_id' => $this->request->getPost('branch_id'),
                    'party_id' => $this->request->getPost('party_id')
                ]) ? $this->POModel->getInsertID() : '0';
                $this->session->setFlashdata('success', 'Order Created Successfully');

                return $this->response->redirect(base_url('purchase/add-products/' . $insert_id));
            }
           
        } 
        $data['customers'] = $this->partyModel->select('party.id,party.party_name')
        ->join('party_type_party_map', ' party.id = party_type_party_map.party_id')
        ->join('party_type', ' party_type.id = party_type_party_map.party_type_id')
        ->where(['party_type.name'=> 'Vendor','party.status'=> 'Active'])
        ->where('party.status', 'Active')->findAll();
        $data['last_order'] = $this->POModel->orderBy('id', 'desc')->first();
        $data['branches'] = $this->selectUserBranches(); 
        return view('Purchase/create', $data);
        
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
                    // 'rules' => 'trim|regex_match[/^[a-z\d\s]+$/i]', 
                    'rules' => 'trim|regex_match[^[a-zA-Z0-9\s]*$]', 
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
            if($this->request->getFile('img_3')->getSize() > 0) {
                $this->validateData([], [
                    'img_3' => 'uploaded[img_3]|mime_in[img_3,application/pdf,image/jpg,image/jpeg,image/JPEG]',
                ]); 
            }
            if($this->request->getFile('img_4')->getSize() > 0) {
                $this->validateData([], [
                    'img_4' => 'uploaded[img_4]|mime_in[img_4,application/pdf,image/jpg,image/jpeg,image/JPEG]',
                ]); 
            }
            $validation = \Config\Services::validation();
             
            // echo 'Files<pre>';print_r($_FILES);
            // echo 'POst dt<pre>';print_r($this->request->getPost());
            // echo 'getErrors<pre>';print_r($validation->getErrors());//exit;

            if (!empty($validation->getErrors())) {
                $data['error'] = $this->validator;
            } else {   
                $po_data = ['customer_name' => $this->request->getPost('customer_name'),
                            'added_by' => $this->added_by,
                            'added_ip' => $this->added_ip,
                            'added_date' => $this->request->getPost('order_date'),
                            'branch_id' => $this->request->getPost('branch_id'),
                            'party_id' => $this->request->getPost('party_id')
                            ];
                  // update image if found or either upload with webcam
                if ($this->request->getFile('img_1')->getSize() > 0) {
                   $po_data['image_1'] = $this->uploadPurchaseOrderImages($id,$this->request->getPost(),$this->request->getFile('img_1'),'image_1');
                }else if($this->request->getPost('image_1')){
                   $po_data['image_1'] = $this->uploadFileWithCam($id,$this->request->getPost(),'image_1');
                }
                if ($this->request->getFile('img_2')->getSize() > 0) {
                    $po_data['image_2'] = $this->uploadPurchaseOrderImages($id,$this->request->getPost(),$this->request->getFile('img_2'),'image_2');
                }else if($this->request->getPost('image_2')){
                    $po_data['image_2'] = $this->uploadFileWithCam($id,$this->request->getPost(),'image_2');
                 }
                if ($this->request->getFile('img_3')->getSize() > 0) {
                    $po_data['image_3'] = $this->uploadPurchaseOrderImages($id,$this->request->getPost(),$this->request->getFile('img_3'),'image_3');
                }else if($this->request->getPost('image_3')){
                    $po_data['image_3'] = $this->uploadFileWithCam($id,$this->request->getPost(),'image_3');
                 }
                if ($this->request->getFile('img_4')->getSize() > 0) {
                    $po_data['image_4'] = $this->uploadPurchaseOrderImages($id,$this->request->getPost(),$this->request->getFile('img_4'),'image_4');
                }else if($this->request->getPost('image_4')){
                    $po_data['image_4'] = $this->uploadFileWithCam($id,$this->request->getPost(),'image_4');
                 }
                // echo 'customers<pre>';print_r($po_data);exit;
                $this->POModel->update($id, $po_data);
                $this->session->setFlashdata('success', 'Order Updated Successfully');

                return $this->response->redirect(base_url('purchase/add-products/' . $id));
            }
           
        } 
        $this->checkOrderStatus($id); 
        
        $customers = $this->partyModel->select('party.id,party.party_name')
        ->join('party_type_party_map', ' party.id = party_type_party_map.party_id')
        ->join('party_type', ' party_type.id = party_type_party_map.party_type_id')
        ->where(['party_type.name'=> 'Vendor','party.status'=> 'Active'])
        ->where('party.status', 'Active')->findAll();

        $data['customers']  = array_column($customers,'party_name','id');

        $data['last_order'] = $this->POModel->orderBy('id', 'desc')->first();
        $data['order_details'] = $this->POModel->where('id',$id)->orderBy('id', 'desc')->first();
        $data['selected_customer'] = $data['order_details']['customer_name'];
        if(!empty($data['order_details']['customer_name'])){
            if(!in_array($data['order_details']['customer_name'],$data['customers'])){
                array_push($data['customers'],$data['order_details']['customer_name']);
            }
        } 
        $data['branches'] = $this->selectUserBranches();
        return view('Purchase/edit', $data);  
    }

    function checkOrderStatus($id){
        //order can be edited only 2 times as per doc
        $data['order_details'] = $this->POModel->where('id', $id)->first();
        if (!in_array($data['order_details']['status'],PURCHASE_STATUS_EDIT_PERMITIONS)) {
            $this->session->setFlashdata('danger', 'Order can not be editable!!!'); 
            return $this->response->redirect(base_url('purchase/index'));
        }
        if(isset($data['order_details']['edit_count']) && $data['order_details']['edit_count'] < 2){
            $this->POModel->update($id, [ 
                'edit_count' => ( $data['order_details']['edit_count']+1)
            ]);
        }else{
            $this->session->setFlashdata('danger', 'Order can be edited only 2 times!!!');
            return $this->response->redirect(base_url('purchase/index'));
        }
    }
    function uploadFileWithCam($id,$postdata,$flag){ 
        $path ='public/uploads/purchase/';
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }
        //delete old image
        $purchaase_details = $this->POModel->where('id', $id)->first();
        if (!empty($purchaase_details[$flag]) && file_exists($path.$purchaase_details[$flag])) {
            unlink( $path. $purchaase_details[$flag]);
        }
        $image_parts = explode(";base64,", $postdata[$flag]);  
        $fileName = uniqid().strtotime(date('Y-m-d')). '.jpg'; 
        $file = $path . $fileName;
        file_put_contents($file, base64_decode($image_parts[1]));
        return $fileName;
    }
    function uploadPurchaseOrderImages($id,$postdata,$image,$flag){
        $path ='public/uploads/purchase/';
        //delete old image
        $purchaase_details = $this->POModel->where('id', $id)->first();
        if (!empty($purchaase_details[$flag]) && file_exists($path.$purchaase_details[$flag])) {
            unlink( $path. $purchaase_details[$flag]);
        }
        // process image
        $newName ='';
        if ($image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName();
            $imgpath = 'public/uploads/purchase';
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
                        $qty = $this->request->getPost('qty_' . $product);
                        $arr = [
                            'order_id' => $id,
                            'product_id' => $product,
                            'quantity' => $qty,
                            'rate' => $res['rate'],
                            'amount' => $this->request->getPost('qty_' . $product) *  $res['rate']
                        ];
                        $this->POPModel->insert($arr);
                    }

                    //Check inventory for this purchase or product is available or not
                    $inventory = $this->InventoryModel->where(['product_id'=>$product,'purchase_order_id'=>$id])->first();

                    //insert to inventory data
                    $inventoryData['product_id'] = $product;
                    $inventoryData['warehouse_id'] = $res['warehouse_id'];
                    $inventoryData['qty_in'] =  $qty; 
                    $inventoryData['purchase_order_id'] = $id;
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
            if($this->request->getPost('purchase_invoice_verification_form')){
                return redirect()->to('/purchase-invoices-verifivation/save/' . $id);
            }else{
                return redirect()->to('/purchase/add-products/' . $id);
            }
        }
        $data['token'] = $id;
        $data['categories'] = $this->PCModel->orderBy('cat_name', 'asc')->findAll();
        $data['order_details'] = $this->POModel->where('id', $id)->first();
        $data['added_products'] = $this->POPModel->select('*,purchase_order_products.id as sp_id')->join('products', 'products.id = purchase_order_products.product_id')->where('order_id', $id)->findAll();

        return view('Purchase/addProducts', $data);
    }

    public function getProducts()
    {
        $category_id = $this->request->getPost('category_id');
        $data['products'] = $this->PModel->where('category_id', $category_id)->where('status', '1')->where('is_deleted', '0')->findAll();
        return view('Purchase/productTable', $data);
    }

    public function showWebCam()
    { 
        $data['data'] =  $this->request->getPost(); 
        return view('Purchase/webCam',$data);
    }

    public function deleteProd($id, $sp_id)
    {
        $purchase_order_product = $this->POPModel->where(['id'=>$sp_id])->first();
        $this->InventoryModel->where(['product_id'=>$purchase_order_product['product_id'],'purchase_order_id'=>$id,])->delete();
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
        return view('Purchase/purchaseCheckout', $data);
    }

    function sendToInvoice($order_id){
        $order = $this->POModel->where('id', $order_id)->first();
        $result = $this->POModel->update($order_id, [
            'status' => 1
        ]);
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

    public function deletePurchaseOrder($id)
    {
        //delete inventory
        $this->InventoryModel->where('purchase_order_id', $id)->delete();
        
        //delete order product first 
        $this->POPModel->where('order_id', $id)->delete();
        
        //delete order
        $this->POModel->delete($id);
        $this->session->setFlashdata('danger', 'Order deleted succefully.');

        return $this->response->redirect(base_url('purchase'));
    }

    function updateStatus($order_id){
        $result = $this->POModel->update($order_id, [
            'status' => ORDER_STATUS['cancel']
        ]);
        $this->session->setFlashdata('success', 'Order has been updated succefully');
        return $this->response->redirect(base_url('sales'));
    }

    function view($orderId){
        $this->checkOrderStatus($orderId); 
        $data['token'] = $orderId;
        $data['order_details'] = $this->POModel->where('id', $orderId)->first();
        $data['added_products'] = $this->POPModel->select('*,purchase_order_products.id as sp_id')->join('products', 'products.id = purchase_order_products.product_id')->where('order_id', $orderId)->findAll();
        return view('Purchase/view', $data);
    }

    function purchaseCheckoutPrint($orderId){
        $data['token'] = $orderId;
        $data['order_details'] = $this->POModel->select('purchase_orders.*,p.business_address,p.primary_phone')
        ->join('party p', ' p.id = purchase_orders.party_id','left')->where('purchase_orders.id', $orderId)->first();
        
        $data['added_products'] = $this->POPModel->select('*,purchase_order_products.id as sp_id,u.unit')
        ->join('products', 'products.id = purchase_order_products.product_id')
        ->join('units u', 'u.id = products.unit_id','left')
        ->where('order_id', $orderId)->findAll();

        $data['total_quantity_per_units'] = $this->POPModel->select('products.product_name product_name,sum(purchase_order_products.quantity) as sop_quantity,u.unit as unit')
        ->join('products', 'products.id = purchase_order_products.product_id')
        ->join('units u', 'u.id = products.unit_id','left')
        ->where('order_id', $orderId)
        ->groupBy('unit,product_name')
        ->findAll();
 
        //Get employee signature
        $user = new UserModel();
        $data['emp_details']=  $user->select('e.id, e.digital_sign') 
        ->join('employee e','e.user_id= users.id')                    
        ->where(['users.id'=>$_SESSION['id']])->where(['e.status'=>1])->first();
        // $db = \Config\Database::connect();  
        // echo  $db->getLastQuery()->getQuery(); 
        //      echo '  <pre>';print_r($data['emp_details']);exit; 
        

        return view('Purchase/purchaseCheckoutPrint', $data);
    }
}
