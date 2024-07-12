<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Controllers\BaseController;
use App\Models\UnitModel;
use CodeIgniter\HTTP\ResponseInterface;

class Units extends BaseController
{
    
    public $access;
    public $UnitModel;
    public $session;

    public function __construct()
    {
        $u = new UserModel();
        $access = $u->setPermission();
        $this->access = $access; 
        $this->session = \Config\Services::session();
        $this->UnitModel = new UnitModel();
    }
    
    public function index()
    { 
        if($this->access === 'false'){
            $this->session->setFlashdata('error', 'You are not permitted to access this page');
            return $this->response->redirect(site_url('/dashboard'));
        }else{
            
            if ($this->request->getPost('unit') != '') {
                $this->UnitModel->where('unit', $this->request->getPost('unit'));
            }  
           
            $this->view['data'] =  $this->UnitModel->where(['status'=>1])->orderBy('id', 'desc')->findAll();
            return view('Unit/index',$this->view);
        }
    }
    public function create()
    {
        if ($this->access === 'false') {
            $this->session->setFlashdata('error', 'You are not permitted to access this page');
            return $this->response->redirect(site_url('/dashboard'));
        } else if ($this->request->getPost()) {

            $error = $this->validate([
                'unit' => [
                    'rules' => 'required|trim|is_unique[units.unit]',
                    'errors' => [
                        'required' => 'The type name field is required',
                        'is_unique' => 'Duplicate type name is not allowed',
                    ],
                ]
            ]);

            if (!$error) { 
                return view('Unit/create', [ 'error'   => $this->validator]);
            } else {
                $this->UnitModel->save([
                    'unit' => $this->request->getVar('unit'),
                    'status' =>1
                ]);
                $this->session->setFlashdata('success', 'Unit added successfully ');

                return $this->response->redirect(base_url('/units'));
            }
        } else {
            return view('Unit/create',$this->view);
        }
    }

    public function edit($id)
    {
        if ($this->access === 'false') {
            $this->session->setFlashdata('error', 'You are not permitted to access this page');
            return $this->response->redirect(site_url('/dashboard'));
        } else if ($this->request->getPost()) {

            $error = $this->validate([
                'unit' => [
                    'rules' => 'required|trim|is_unique[units.unit,id,'.$id.']',
                    'errors' => [
                        'required' => 'The type name field is required',
                        'is_unique' => 'Duplicate name is not allowed',
                    ],
                ]
            ]);

            if (!$error) {
                return view('Unit/edit', [ 'error'   => $this->validator]);
            } else {
                $this->UnitModel->update($id, [
                    'unit' => $this->request->getVar('unit') 
                ]); 

                $this->session->setFlashdata('success', 'Unit edited successfully ');

                return $this->response->redirect(site_url('/units'));
            }
        } else {
            $this->view['data'] = $this->UnitModel->where('id', $id)->first();

            return view('Unit/edit', $this->view);
        }
    }

    function view($id){
        if ($this->access === 'false') {
            $this->session->setFlashdata('error', 'You are not permitted to access this page');
            return $this->response->redirect(site_url('/dashboard'));
        }else {
            $this->view['data'] = $this->UnitModel->where('id', $id)->first();

            return view('Unit/view', $this->view);
        }
    }

    public function delete($id)
    {  
        $this->UnitModel->delete($id); 

        $this->session->setFlashdata('danger', 'Unit deleted successfully ');

        return $this->response->redirect(site_url('/units'));
    }
}
