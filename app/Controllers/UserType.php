<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserTypeModel;
use App\Models\UserTypePermissionModel;
use App\Models\UserModel;
use App\Models\ModulesModel;

class UserType extends BaseController
{
    public $_access;

    public function __construct()
    {
        $u = new UserModel();
        $access = $u->setPermission();
        $this->_access = $access; 
    }
    public function index()
    {
      $access = $this->_access; 
      if($access === 'false'){
        $session = \Config\Services::session();
        $session->setFlashdata('error', 'You are not permitted to access this page');
        return $this->response->redirect(site_url('/dashboard'));
      }else{  
        $userTypeModel = new UserTypeModel();
        
        if ($this->request->getPost('status') != '') {
            $userTypeModel->where('status', $this->request->getPost('status'));
        }
        $this->view['usertype_data'] = $userTypeModel->orderBy('id', 'DESC')->findAll();
        $this->view['pagination_link'] = $userTypeModel->pager;
        $this->view['page_data'] = [
          'page_title' => view( 'partials/page-title', [ 'title' => 'User Types','li_1' => '123','li_2' => 'deals' ] )
          ];
        return view('UserType/index',$this->view);
      }
    }

    public function create(){
        
      $access = $this->_access; 
      if($access === 'false'){
        $session = \Config\Services::session();
        $session->setFlashdata('error', 'You are not permitted to access this page');
        return $this->response->redirect(site_url('/dashboard'));
      }else{ 
        $modules = new ModulesModel();
        $this->view['modules'] = $modules->where('status','Active')->findAll();

        if($this->request->getMethod()=='POST'){
            $id = $this->request->getVar('id');
            $error = $this->validate([
              'user_type_name'	=>	'required|is_unique[usertypes.user_type_name]',
            ]);
            
            if(!$error){
              $this->view['error'] 	= $this->validator;
            }else {
              $usertypeModel = new UserTypeModel();
              $usertypeModel->save([
                'user_type_name'	  =>	$this->request->getVar('user_type_name'), 
                'status'            => 'Active',
                'created_at'        =>  date("Y-m-d h:i:sa"),
              ]);

              $usertype_id = $usertypeModel->getInsertID();
              $modules= $this->request->getVar('modules');

              $usertypepermission= new UserTypePermissionModel();
              foreach ($modules as $key => $value) {
                  $userTypeData=[
                          'user_type_id'  =>  $usertype_id,
                          'module_id'     =>  $value,
                          'access'        =>  1,       
                  ];  
                  $usertypepermission->save($userTypeData);   
              }
              $session = \Config\Services::session();
  
              $session->setFlashdata('success', 'User Type added');
              return $this->response->redirect(site_url('/usertype'));
            }
          }

        return view('UserType/create', $this->view);
      }
    }

    public function edit($id=null){
      
      $access = $this->_access; 
      if($access === 'false'){
        $session = \Config\Services::session();
        $session->setFlashdata('error', 'You are not permitted to access this page');
        return $this->response->redirect(site_url('/dashboard'));
      }else{ 
        $userTypeModel = new UserTypeModel();
        $this->view['usertype_data'] = $userTypeModel->where('id', $id)->first();
        
        $permissions = new UserTypePermissionModel();
        $this->view['permissiondata'] = $permissions->where('user_type_id', $id)->findAll();
        $modules = new ModulesModel();
        $this->view['modules'] = $modules->where('status','Active')->findAll();
        $request = service('request');
        if($this->request->getMethod()=='POST'){
          $id = $this->request->getVar('id');
          $error = $this->validate([
            'user_type_name'	=>	'required|is_unique[usertypes.user_type_name]',
          ]);
          if(!$error)
          {
            $this->view['error'] 	= $this->validator;
          }else {
            $usertypeModel = new UserTypeModel();
            $usertypeModel->update($id,[
              'name'	=>	$this->request->getVar('user_type_name'), 
              'status'  => 'Active',
              'updated_at'  =>  date("Y-m-d h:i:sa"),
            ]);
            
            $modules= $this->request->getVar('modules');
            $usertypepermission= new UserTypePermissionModel();
            $usertypepermissiondata = $usertypepermission->where('user_type_id', $id)->delete();
            foreach ($modules as $key => $value) {
                $userTypeData = [ 
                    'user_type_id'  =>  $id,
                    'module_id'     =>  $value,
                    'access'        =>  1,         
                ];
                $usertypepermission->save($userTypeData);
            }
            $session = \Config\Services::session();
            $session->setFlashdata('success', 'User Type updated');
            return $this->response->redirect(site_url('/usertype'));
          }
        }
        return view('UserType/edit', $this->view);
      }
    }

    public function delete($id){
      $access = $this->_access; 
      if($access === 'false'){
        $session = \Config\Services::session();
        $session->setFlashdata('error', 'You are not permitted to access this page');
        return $this->response->redirect(site_url('/dashboard'));
      }else{ 
        $usertypeModel = new UserTypeModel();
        $usertypeModel->where('id', $id)->delete($id);
        $session = \Config\Services::session();
        $session->setFlashdata('success', 'User Type Deleted');
        return $this->response->redirect(site_url('/usertype'));
      }
    }


}
