<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\PartyModel;
use App\Models\ProductsModel;
use App\Models\SalesOrderModel;
use App\Models\NotificationModel;
use App\Models\SalesProductModel;
use App\Models\PurchaseOrderModel;
use App\Controllers\BaseController;
use App\Models\ProductCategoryModel;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProductWarehouseLinkModel;

class Purchase extends BaseController
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
    public $POModel;
    public $SPOModelOModel;
    public function __construct()
    {
        $this->session = \Config\Services::session();

        $this->PCModel = new ProductCategoryModel();
        $this->PModel = new ProductsModel();
        $this->SPOModelOModel = new SalesOrderModel();
        $this->SOPModel = new SalesProductModel();
        $this->PWLModel = new ProductWarehouseLinkModel();
        $this->partyModel = new PartyModel();
        $this->NModel = new NotificationModel();
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

            $data['orders'] = $this->POModel->orderBy('id', 'desc')->findAll();

            return view('Purchase/index', $data);
        }
    }
}
