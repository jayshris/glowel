<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\InventoryModel;
use App\Models\SalesOrderModel;
use App\Models\SalesInvoiceModel;
use App\Models\SalesProductModel;
use App\Controllers\BaseController;
use App\Models\ProductCategoryModel;
use CodeIgniter\HTTP\ResponseInterface;

class StockMovementSummary extends BaseController
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
    public $InventoryModel;

    public function __construct()
    {
        $this->session = \Config\Services::session(); 
        $this->SalesInvoiceModel = new SalesInvoiceModel();
        $this->SOModel = new SalesOrderModel();
        $this->PCModel = new ProductCategoryModel(); 
        $this->SOPModel = new SalesProductModel();
        $this->InventoryModel = new InventoryModel();
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
            $this->view['data']='';
            if (isset($_POST['product_category']) && isset($_POST['from_date']) && isset($_POST['to_date'])) {
                $this->view['data'] = $this->InventoryModel->call_stock_report_products($_POST['from_date'], $_POST['to_date'],$_POST['product_category']);
                // echo $_POST['from_date'].' / '. $_POST['to_date'].' / '.$_POST['product_category'].'<pre>';print_r($this->view['data']);exit;
            }    

            $this->view['product_categories'] = $this->PCModel->where('status', 1)->findAll();
            //  echo '<pre>';print_r($this->view['product_categories']);exit;
            return view('StockMovementSummary/index', $this->view);
        }
    }
}
