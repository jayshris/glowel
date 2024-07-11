<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Dashboard extends BaseController
{
    public function index()
    {
        if (session()->get('isLoggedIn')) {
            return view('deals-dashboard', $this->view);
        }else{
            return $this->response->redirect(site_url('/'));
        }
    }
}
