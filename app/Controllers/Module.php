<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModulesModel;

class Module extends BaseController
{
    public function index()
    {
        $moduleModel = new ModulesModel();

        $data['module_data'] = $moduleModel->orderBy('id', 'DESC')->paginate(10);

        $data['pagination_link'] = $moduleModel->pager;

        $data['page_data'] = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Company','li_1' => '123','li_2' => 'deals' ] )
        ];
        return view('Module/index',$data);
    }

    public function add(){
        $modules = new ModulesModel();
        $data['modules'] = $modules->where('status','Active')->findAll();

        if($this->request->getMethod()=='POST'){
            $id = $this->request->getVar('id');
            $error = $this->validate([
              'name'	=>	'required',
            ]);
            
            if(!$error){
              $data['error'] 	= $this->validator;
            }else {
              $modulesModel = new ModulesModel();
              $modulesModel->save([
                'name'	        =>	$this->request->getVar('name'), 
                'status'        => 'Active',
                'created_at'    =>  date("Y-m-d h:i:sa"),
              ]);
              $session = \Config\Services::session();
              $session->setFlashdata('success', 'Module added');
              return $this->response->redirect(site_url('/module'));
            }
          }
        return view('Module/create', $data);     
    }

    public function edit($id=null)
    {
        $moduleModel = new ModulesModel();
        $data['module_data'] = $moduleModel->where('id', $id)->first();

        $request = service('request');
        if($this->request->getMethod()=='POST'){
          $id = $this->request->getVar('id');
          $error = $this->validate([
            'name'	=>	'required',
          ]);
          if(!$error) {
            $data['error'] 	= $this->validator;
          }else {
            $usertypeModel = new ModulesModel();
            $usertypeModel->update($id,[
              'name'	=>	$this->request->getVar('name'), 
              'status'  => 'Active',
              'updated_at'  =>  date("Y-m-d h:i:sa"),
            ]);
            $session = \Config\Services::session();
            $session->setFlashdata('success', 'Module updated');
            return $this->response->redirect(site_url('/module'));
          }
        }

        return view('Module/edit', $data);
    }

    public function delete($id=null)
    {
        $moduleModel = new ModulesModel();
        $moduleModel->where('id', $id)->delete($id);
        $session = \Config\Services::session();
        $session->setFlashdata('success', 'Module Deleted');
        return $this->response->redirect(site_url('/module'));        
    }
}
