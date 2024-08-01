<?php

namespace App\Controllers;

use App\Libraries\Permission;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Dashboard extends BaseController
{
    public function index()
    {
        if (session()->get('isLoggedIn')) {
            $permission = new Permission();
            $controllers = ['sales','salesinvoices','salesinvoicesverifivation','purchase','PurchaseInvoices','PurchaseInvoicesVerifivation'];
            $controllerPermissions = [];
            foreach($controllers as $controller){
                $controllerPermissions[$controller] = $permission->checkModulePermission($controller,'index');
            } 
            $this->view['controllerPermissions'] = $controllerPermissions;
            // echo '<pre>';print_r($this->view);exit;
            return view('deals-dashboard', $this->view);
        }else{
            return $this->response->redirect(site_url('/'));
        }
    }
}



