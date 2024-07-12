<?php

namespace App\Controllers;

use App\Models\PartyModel;
use App\Models\UserModel;   
use App\Models\SalesOrderModel;
use App\Models\SalesInvoiceModel;
use App\Models\SalesProductModel;
use App\Controllers\BaseController;
use App\Models\ProductCategoryModel;
use CodeIgniter\HTTP\ResponseInterface; 

class SalesInvoicesVerifivation extends BaseController
{
    public $access;
    public $session;
    public $added_by;
    public $added_ip; 
    public $partyModel;
    public $SalesInvoiceModel;
    public $SOModel;
    public $PCModel;
    public $SOPModel;
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->partyModel = new PartyModel();
        $this->SalesInvoiceModel = new SalesInvoiceModel();
        $this->SOModel = new SalesOrderModel();
        $this->PCModel = new ProductCategoryModel(); 
        $this->SOPModel = new SalesProductModel();
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
                $this->SalesInvoiceModel->where('status', $this->request->getPost('status'));
            }
            $this->view['orders'] = $this->SalesInvoiceModel 
            ->whereIn('sales_invoices.status',invoice_status_verify)->orderBy('sales_invoices.id', 'desc')->findAll();  
            return view('SalesInvoicesVerifivation/index', $this->view);
        }
    }

    public function edit($id)
    {
        $this->view['invoice_details'] = $this->SalesInvoiceModel->where('sales_order_id', $id)->first();
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
            }else{ 
                $this->validateData([], [
                    'invoice_doc' => 'uploaded[invoice_doc]|mime_in[invoice_doc,image/png,image/PNG,image/jpg,image/jpeg,image/JPEG]',
                ]); 
            } 
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
                    $invoice_data['invoice_doc'] = $this->uploadSalesOrderImages($id,$this->request->getPost(),$this->request->getFile('invoice_doc'),'invoice_doc');
                }
                if($this->request->getFile('packing_list_doc')->getSize() > 0){
                    $invoice_data['packing_list_doc'] = $this->uploadSalesOrderImages($id,$this->request->getPost(),$this->request->getFile('packing_list_doc'),'packing_list_doc');
                }
                if($this->request->getFile('e_way_bill_doc')->getSize() > 0){
                    $invoice_data['e_way_bill_doc'] = $this->uploadSalesOrderImages($id,$this->request->getPost(),$this->request->getFile('e_way_bill_doc'),'e_way_bill_doc');
                }
                if($this->request->getFile('other_doc')->getSize() > 0){
                    $invoice_data['other_doc'] = $this->uploadSalesOrderImages($id,$this->request->getPost(),$this->request->getFile('other_doc'),'other_doc');
                }
                $invoice_data['sales_order_id'] = $id;
                // echo '<pre>';print_r($invoice_data);exit;
                if($this->request->getPost('id')){
                   $result =  $this->SalesInvoiceModel->update($this->request->getPost('id'),$invoice_data);
                   $msg = 'Invoice updated Successfully';
                }else{
                    $result = $this->SalesInvoiceModel->save($invoice_data) ? $this->SalesInvoiceModel->getInsertID() : '0';
                    $msg = 'Invoice generated Successfully';
                }
               
                if($result){
                    //update status Ready for Delivery
                    $this->SOModel->update($id,['status'=>ORDER_STATUS['ready_for_delivery']]); 
                    if($this->request->getPost('for_verification')){ 
                        //if verified then close invoice
                       $this->SalesInvoiceModel->update($this->request->getPost('id'),['status'=>invoice_status['close']]);
                    }
                }
                $this->session->setFlashdata('success', $msg); 
                return $this->response->redirect(base_url('SalesInvoicesVerifivation/index'));
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
          
        $this->view['last_order'] = $this->SalesInvoiceModel->orderBy('id', 'desc')->first();  
        $this->view['sales_order_id'] = $id;  
        $this->view['token'] = $id;
        $this->view['categories'] = $this->PCModel->orderBy('cat_name', 'asc')->findAll();
        $this->view['order_details'] = $this->SOModel->where('id', $id)->first();
        $this->view['added_products'] = $this->SOPModel->select('*,sales_order_products.id as sp_id')->join('products', 'products.id = sales_order_products.product_id')->where('order_id', $id)->findAll();
        // echo '<pre>';print_r($this->view);exit;
        return view('SalesInvoicesVerifivation/save',$this->view);
    }
    function uploadSalesOrderImages($id,$postdata,$image,$flag){
        $imgpath ='public/uploads/SalesInvoices/'; 
        //delete old image
        $sale_details = $this->SalesInvoiceModel->where('sales_order_id', $postdata['id'])->first();
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
        $result = $this->SOModel->update($order_id, [
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
