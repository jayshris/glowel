<?php

namespace App\Controllers;

use App\Models\PartyModel;
use App\Models\UserModel; 
use App\Models\InvoiceModel;
use App\Models\SalesOrderModel;
use App\Controllers\BaseController;
use App\Models\PurchaseInvoiceModel;
use App\Models\PurchaseOrderModel;
use CodeIgniter\HTTP\ResponseInterface;

class PurchaseInvoices extends BaseController
{
    public $access;
    public $session;
    public $added_by;
    public $added_ip;
    public $SOModel;
    public $InvoiceModel;
    public $partyModel;
    public $PurchaseInvoiceModel;
    public $POModel;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->SOModel = new SalesOrderModel();
        $this->InvoiceModel = new InvoiceModel();
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
        if ($this->request->getPost('status') != '') {
            $this->POModel->where('purchase_orders.status', $this->request->getPost('status'));
        }
        $this->view['orders'] = $this->POModel
        ->select('purchase_orders.id,purchase_orders.status,pi.invoice_no,pi.status as pi_status,purchase_orders.added_date,purchase_orders.customer_name,purchase_orders.order_no')
        ->join('purchase_invoices pi','pi.purchase_order_id = purchase_orders.id', 'left')
        ->whereIn('purchase_orders.status',[1,2,5])->orderBy('purchase_orders.id', 'desc')->findAll(); 
        return view('PurchaseInvoices/index', $this->view); 
    }

    public function edit($id)
    {
        $this->view['invoice_details'] = $this->PurchaseInvoiceModel->where('purchase_order_id', $id)->first();
        $inoice_id = isset($this->view['invoice_details']['id']) ? $this->view['invoice_details']['id'] : 0;
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

            if($inoice_id >0){
                if((empty($this->view['invoice_details']['invoice_doc']) && $this->request->getFile('invoice_doc')->getSize() < 1)){
                    $this->validateData([], [
                        'invoice_doc' => 'uploaded[invoice_doc]|mime_in[invoice_doc,image/png,image/PNG,image/jpg,image/jpeg,image/JPEG]',
                    ]);
                } 
                if((empty($this->view['invoice_details']['tally_invoice_doc']) && $this->request->getFile('tally_invoice_doc')->getSize() < 1)){
                    $this->validateData([], [
                        'tally_invoice_doc' => 'uploaded[tally_invoice_doc]|mime_in[tally_invoice_doc,image/png,image/PNG,image/jpg,image/jpeg,image/JPEG]',
                    ]);
                } 
            }else{ 
                $this->validateData([], [
                    'invoice_doc' => 'uploaded[invoice_doc]|mime_in[invoice_doc,image/png,image/PNG,image/jpg,image/jpeg,image/JPEG]',
                    'tally_invoice_doc' => 'uploaded[tally_invoice_doc]|mime_in[tally_invoice_doc,image/png,image/PNG,image/jpg,image/jpeg,image/JPEG]',
                ]); 
            }   

            // echo '<pre>';print_r($this->request->getPost()); 
            // echo '<pre>';print_r($_FILES);
            // echo '<pre>';print_r($this->validator->getErrors());
            // die;

            $validation = \Config\Services::validation(); 
            if (!empty($validation->getErrors())) {
                $this->view['error'] = $this->validator;
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
                if($this->request->getFile('tally_invoice_doc')->getSize() > 0){
                    $invoice_data['tally_invoice_doc'] = $this->uploadPurchaseOrderImages($id,$this->request->getPost(),$this->request->getFile('tally_invoice_doc'),'tally_invoice_doc');
                }
                if($this->request->getFile('tally_packing_list_doc')->getSize() > 0){
                    $invoice_data['tally_packing_list_doc'] = $this->uploadPurchaseOrderImages($id,$this->request->getPost(),$this->request->getFile('tally_packing_list_doc'),'tally_packing_list_doc');
                }
                if($this->request->getFile('other_doc')->getSize() > 0){
                    $invoice_data['other_doc'] = $this->uploadPurchaseOrderImages($id,$this->request->getPost(),$this->request->getFile('other_doc'),'other_doc');
                }
                if($this->request->getFile('other_doc_2')->getSize() > 0){
                    $invoice_data['other_doc_2'] = $this->uploadPurchaseOrderImages($id,$this->request->getPost(),$this->request->getFile('other_doc_2'),'other_doc_2');
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
                       $this->PurchaseInvoiceModel->update($this->request->getPost('id'),['status'=>invoice_status['for_verification']]);
                    }
                }
                $this->session->setFlashdata('success', $msg); 
                return $this->response->redirect(base_url('PurchaseInvoices/index'));
            }
        }   
      
        $customers  = $this->partyModel->select('id,party_name')->where('status', 1)->findAll();
        $this->view['customers']  = array_column( $customers ,'party_name','id'); 
        //   echo '<pre>';print_r($this->view); 
        if( $this->view['invoice_details']){ 
            $this->view['selected_customer'] = $this->view['invoice_details']['customer_name'];
            if(!empty($this->view['invoice_details']['customer_name'])){
                if(!in_array($this->view['invoice_details']['customer_name'],$this->view['customers'])){
                    array_unshift($this->view['customers'],$this->view['invoice_details']['customer_name']);
                }
            } 
        }
        //   echo '<pre>';print_r($this->view);exit;
        $this->view['last_order'] = $this->InvoiceModel->orderBy('id', 'desc')->first();  
        $this->view['sale_order_id'] = $id;  
       
        return view('PurchaseInvoices/save',$this->view);
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
