<?php

namespace App\Controllers;

use App\Models\PartyModel;
use App\Models\UserModel;   
use App\Controllers\BaseController;
use App\Models\PurchaseInvoiceModel;
use App\Models\PurchaseOrderModel;
use CodeIgniter\HTTP\ResponseInterface;

class PurchaseInvoicesVerifivation extends BaseController
{
    public $access;
    public $session;
    public $added_by;
    public $added_ip; 
    public $partyModel;
    public $PurchaseInvoiceModel;
    public $POModel;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->partyModel = new PartyModel();
        $this->PurchaseInvoiceModel = new PurchaseInvoiceModel();
        $this->POModel = new PurchaseOrderModel();
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
                $this->PurchaseInvoiceModel->where('status', $this->request->getPost('status'));
            }
            $data['orders'] = $this->PurchaseInvoiceModel 
            ->whereIn('purchase_invoices.status',invoice_status_verify)->orderBy('purchase_invoices.id', 'desc')->findAll();  
            return view('PurchaseInvoicesVerifivation/index', $data);
        }
    }

    public function save($id)
    {
        $data['invoice_details'] = $this->PurchaseInvoiceModel->where('purchase_order_id', $id)->first();
        if ($this->request->getPost()) {
            $error = $this->validate([
                'customer_name' => [ 
                    'rules' => 'required|trim|regex_match[^[a-zA-Z0-9\s]*$]', 
                    'errors' => [
                        'regex_match' => 'The customer field only contain alphanumeric characters.',
                    ],
                ], 
                'delivery_address'   =>'required',  
            ]);
            // echo '<pre>';print_r($this->request->getPost()); 
            // echo '<pre>';print_r($_FILES);
            // echo '<pre>';print_r($this->validator->getErrors());
            // die;

            $validation = \Config\Services::validation(); 
            if (!empty($validation->getErrors())) {
                $data['error'] = $this->validator;
            } else {  
                $invoice_data =  [
                    'customer_name' => $this->request->getPost('customer_name'),
                    'delivery_address' => $this->request->getPost('delivery_address'),
                    'invoice_no' => $this->request->getPost('invoice_no'),
                    'added_by' => $this->added_by,
                    'added_ip' => $this->added_ip
                ];
                if($this->request->getFile('invoice_doc')->getSize() > 0){
                    $invoice_data['invoice_doc'] = $this->uploadPurchaseOrderImages($id,$this->request->getPost(),$this->request->getFile('invoice_doc'),'invoice_doc');
                }
                if($this->request->getFile('packing_list_doc')->getSize() > 0){
                    $invoice_data['packing_list_doc'] = $this->uploadPurchaseOrderImages($id,$this->request->getPost(),$this->request->getFile('packing_list_doc'),'packing_list_doc');
                }
                if($this->request->getFile('e_way_bill_doc')->getSize() > 0){
                    $invoice_data['e_way_bill_doc'] = $this->uploadPurchaseOrderImages($id,$this->request->getPost(),$this->request->getFile('e_way_bill_doc'),'e_way_bill_doc');
                }
                if($this->request->getFile('other_doc')->getSize() > 0){
                    $invoice_data['other_doc'] = $this->uploadPurchaseOrderImages($id,$this->request->getPost(),$this->request->getFile('other_doc'),'other_doc');
                }
                $invoice_data['purchase_order_id'] = $id;
                // echo '<pre>';print_r($invoice_data);exit;
                if($this->request->getPost('id')){
                   $result =  $this->PurchaseInvoiceModel->update($this->request->getPost('id'),$invoice_data);
                   $msg = 'Invoice updated Successfully';
                }else{
                    $result = $this->PurchaseInvoiceModel->save($invoice_data) ? $this->PurchaseInvoiceModel->getInsertID() : '0';
                    $msg = 'Invoice generated Successfully';
                }
               
                if($result){
                    //update status Ready for Delivery
                    $this->POModel->update($id,['status'=>ORDER_STATUS['ready_for_delivery']]); 
                    if($this->request->getPost('for_verification')){ 
                        //if verified then close invoice
                       $this->PurchaseInvoiceModel->update($this->request->getPost('id'),['status'=>invoice_status['close']]);
                    }
                }
                $this->session->setFlashdata('success', $msg); 
                return $this->response->redirect(base_url('PurchaseInvoicesVerifivation/index'));
            }
        }   
      
        $customers  = $this->partyModel->select('id,party_name')->where('status', 1)->findAll();
        $data['customers']  = array_column( $customers ,'party_name','id'); 
        //   echo '<pre>';print_r($data); 
        if( $data['invoice_details']){ 
            $data['selected_customer'] = $data['invoice_details']['customer_name'];
            if(!empty($data['invoice_details']['customer_name'])){
                if(!in_array($data['invoice_details']['customer_name'],$data['customers'])){
                    array_unshift($data['customers'],$data['invoice_details']['customer_name']);
                }
            } 
        }
        //   echo '<pre>';print_r($data);exit;
        $data['last_order'] = $this->PurchaseInvoiceModel->orderBy('id', 'desc')->first();  
        $data['sale_order_id'] = $id;  
       
        return view('PurchaseInvoicesVerifivation/save',$data);
    }
    function uploadPurchaseOrderImages($id,$postdata,$image,$flag){
        $imgpath ='public/uploads/PurchaseInvoices/'; 
        //delete old image
        $sale_details = $this->PurchaseInvoiceModel->where('purchase_order_id', $postdata['id'])->first();
        if (!empty($sale_details[$flag]) && file_exists($imgpath.$sale_details[$flag])) {
            unlink( $imgpath. $sale_details[$flag]);
        }
        // process image
        $newName ='';
        if ($image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName(); 
            if (!is_dir($imgpath)) {
                mkdir($imgpath, 0777, true);
            }
            $image->move($imgpath, $newName);
        }
        return $newName;
    }
    function getPartyAddress(){
        $id = $this->request->getPost('id');
        $address= $this->partyModel->select('business_address')->where(['status'=>1,'id'=>$id])->first();
        echo $address['business_address'];exit;
    }

    function changeStatus($order_id){
        $result = $this->POModel->update($order_id, [
            'status' => 2
        ]); 
        if($result){ 
            $this->session->setFlashdata('success', 'Order status changed');
            echo 1;exit;
        }else{
            echo 0;exit;
        }
    }
}
