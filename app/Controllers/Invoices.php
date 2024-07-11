<?php

namespace App\Controllers;

use App\Models\PartyModel;
use App\Models\UserModel; 
use App\Models\InvoiceModel;
use App\Models\SalesOrderModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Invoices extends BaseController
{
    public $access;
    public $session;
    public $added_by;
    public $added_ip;
    public $SOModel;
    public $InvoiceModel;
    public $partyModel;
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->SOModel = new SalesOrderModel();
        $this->InvoiceModel = new InvoiceModel();
        $this->partyModel = new PartyModel();
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
            $data['orders'] = $this->SOModel
            ->select('sales_orders.id,sales_orders.status,i.invoice_no,sales_orders.added_date,sales_orders.customer_name,sales_orders.order_no')
            ->join('invoices i','i.sales_order_id = sales_orders.id', 'left')
            ->whereIn('sales_orders.status',[1,2,5])->orderBy('sales_orders.id', 'desc')->findAll(); 
            return view('Invoices/index', $data);
        }
    }

    public function create($id)
    {
        $invoice_details = $this->InvoiceModel->where('sales_order_id', $id)->first();
        if(!empty($invoice_details)){
            return $this->response->redirect(base_url('invoices/index'));
        } else if ($this->request->getPost()) {
            $error = $this->validate([
                'customer_name' => [ 
                    'rules' => 'required|trim|regex_match[^[a-zA-Z0-9\s]*$]', 
                    'errors' => [
                        'regex_match' => 'The customer field only contain alphanumeric characters.',
                    ],
                ], 
                'delivery_address'   =>'required',  
                // 'invoice_doc' => [
                //     'rules' => 'uploaded[invoice_doc]|mime_in[invoice_doc,image/png,image/PNG,image/jpg,image/jpeg,image/JPEG]',
                //     'errors' => [
                //         'mime_in' => 'Image must be in jpeg/png format',
                //     ]
                // ],
                // 'packing_list_doc' => [
                //     'rules' => 'uploaded[packing_list_doc]|mime_in[packing_list_doc,image/png,image/PNG,image/jpg,image/jpeg,image/JPEG]',
                //     'errors' => [
                //         'mime_in' => 'Image must be in jpeg/png format',
                //     ]
                // ] ,
                // 'e_way_bill_doc' => [
                //     'rules' => 'uploaded[e_way_bill_doc]|mime_in[e_way_bill_doc,image/png,image/PNG,image/jpg,image/jpeg,image/JPEG]',
                //     'errors' => [
                //         'mime_in' => 'Image must be in jpeg/png format',
                //     ]
                // ]  
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
                $invoice_data['sales_order_id'] = $id;
                // echo '<pre>';print_r($invoice_data);exit;
                $insert_id = $this->InvoiceModel->save($invoice_data) ? $this->InvoiceModel->getInsertID() : '0';
                if($insert_id>0){
                    //update status Ready for Delivery
                    $this->SOModel->update($id,['status'=>5]);
                }
                $this->session->setFlashdata('success', 'Invoice generated Successfully'); 
                return $this->response->redirect(base_url('invoices/index'));
            }
        } 
        $data['customers'] = $this->partyModel->select('id,party_name')->where('status', 1)->findAll(); 
        $data['last_order'] = $this->InvoiceModel->orderBy('id', 'desc')->first();  
        $data['sale_order_id'] = $id;  
        //  echo '<pre>';print_r($data);exit;
        return view('Invoices/create',$data);
    }
    function uploadPurchaseOrderImages($id,$postdata,$image,$flag){
        $imgpath ='public/uploads/invoices/'; 
        //delete old image
        // $sale_details = $this->InvoiceModel->where('sales_order_id', $id)->first();
        // if (!empty($sale_details[$flag]) && file_exists($imgpath.$sale_details[$flag])) {
        //     unlink( $imgpath. $sale_details[$flag]);
        // }
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
