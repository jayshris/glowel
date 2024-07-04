<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;
use App\Models\BusinesstypeModel;
use App\Models\FlagsModel;
use App\Models\BusinesstypeFlagModel;

class Businesstype extends BaseController
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
            $businestsypeModel = new BusinesstypeModel();
            $data['businestsype_data'] = $businestsypeModel->orderBy('id', 'DESC')->paginate(50);
            $data['pagination_link'] = $businestsypeModel->pager;
            $data['page_data'] = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Business Type','li_1' => '123','li_2' => 'deals' ] )
            ];
            return view('Businesstype/index',$data);
        }
    }

    public function create()
    {
          $access = $this->_access; 
          if($access === 'false'){
            $session = \Config\Services::session();
            $session->setFlashdata('error', 'You are not permitted to access this page');
            return $this->response->redirect(site_url('/dashboard'));
          }else{
                $flags = new FlagsModel();
                $data['flags']= $flags->where('status','Active')->findAll();
                
              helper(['form', 'url']);
              $data ['page_data']= [
                'page_title' => view( 'partials/page-title', [ 'title' => 'Add Driver','li_2' => 'profile' ] )
                ];
                $request = service('request');
                if($this->request->getMethod()=='POST'){
                  $error = $this->validate([
                    'company_structure_name' =>  'required|alpha_numeric|is_unique[business_type.company_structure_name]',
                    'flags' =>  'required',
                  ]);

                  if(!$error){
                    $data['error'] 	= $this->validator;
                  }else {
                    $businestsypeModel = new BusinesstypeModel();
                    $businestsypeModel->save([
                      'company_structure_name'	    =>	$this->request->getVar('company_structure_name'),
                      'created_at'  =>  date("Y-m-d h:i:sa"),
                    ]);

                    $business_type_id = $businestsypeModel->getInsertID();
                    $flags_array= $this->request->getVar('flags');
                    if(!isset($flags_array)|| empty($flags_array)){
                        $data['error']="Please select atleast one flag";
                    }else{
                        $flagModel= new BusinesstypeFlagModel();
                        $error = $this->validate([
                            'company_structure_name' =>  'required|alpha_numeric|is_unique[business_type.company_structure_name]',
                        ]);
                        foreach ($flags_array as $key => $value) {
                            $flagsData=[
                                    'business_type_id'       =>  $business_type_id,
                                    'flags_id'     =>   $value,       
                            ];  
                            $flagModel->save($flagsData);  
                        }
                    }

                    $session = \Config\Services::session();
                    $session->setFlashdata('success', 'Business type added');
                    return $this->response->redirect(site_url('/Businesstype'));
                  }
                }
                return view( 'Businesstype/create',$data );
          }
    }

    public function edit($id=null)
    {
          $access = $this->_access; 
          if($access === 'false'){
            $session = \Config\Services::session();
            $session->setFlashdata('error', 'You are not permitted to access this page');
            return $this->response->redirect(site_url('/dashboard'));
          }else{
            $businestsypeModel = new BusinesstypeModel();
            $data['business_data'] = $businestsypeModel->where('id', $id)->first();
            
            $flags = new FlagsModel();
            $data['flags']= $flags->where('status','Active')->findAll();

            $businessFlags = new BusinesstypeFlagModel();
            $data['businessFlags'] = $businessFlags->where('business_type_id', $id)->findAll();
            $request = service('request');
            if($this->request->getMethod()=='POST'){
              $id = $this->request->getVar('id');
              $error = $this->validate([
                'company_structure_name' =>  'required|alpha_numeric',
                'flags' =>  'required',
              ]);
              if(!$error) {
                $data['error'] 	= $this->validator;
              }else {
                $businestsypeModel = new BusinesstypeModel();
                $businestsypeModel->update($id,[
                    'company_structure_name'	=>	$this->request->getVar('company_structure_name'),
                    'updated_at'  =>  date("Y-m-d h:i:sa"),
                ]);

                $flagModel= new BusinesstypeFlagModel();
                $flagModeldata = $flagModel->where('business_type_id', $id)->delete();
                $flags_array= $this->request->getVar('flags');

                foreach ($flags_array as $key => $value) {
                    $flagData1 = [ 
                        'business_type_id'       =>  $id,
                        'flags_id'     =>   $value,           
                    ];
                    $flagModel->save($flagData1);
                }
                $session = \Config\Services::session();
                $session->setFlashdata('success', 'Business type updated');
                return $this->response->redirect(site_url('/Businesstype'));
              }
            }
          }

        return view('Businesstype/edit', $data);

    }

    public function delete($id=null){
                
        $access = $this->_access; 
        if($access === 'false'){
                $session = \Config\Services::session();
                $session->setFlashdata('error', 'You are not permitted to access this page');
                return $this->response->redirect(site_url('/dashboard'));
        }else{  
                $BusinesstypeModel = new BusinesstypeModel();
                $BusinesstypeModel->where('id', $id)->delete($id);
                $session = \Config\Services::session();
                $session->setFlashdata('success', 'Business type Deleted');
                return $this->response->redirect(site_url('/Businesstype')); 
        }  
    }

    public function statusupdate($id=null){
      $access = $this->_access; 
        if($access === 'false'){
                $session = \Config\Services::session();
                $session->setFlashdata('error', 'You are not permitted to access this page');
                return $this->response->redirect(site_url('/dashboard'));
        }else{  
                $businesstypeModel = new BusinesstypeModel();
                $model= $businesstypeModel->where('id', $id)->first();
                if($model['condition'] == 'Enable'){
                  $status = 'Disable';
                }elseif($model['condition'] == 'Disable'){
                  $status = 'Enable';
                }
                $businesstypeModel->update($id,[
                  'condition'	=>	$status,
                  'updated_at'  =>  date("Y-m-d h:i:sa"),
                ]);
                $session = \Config\Services::session();
                $session->setFlashdata('success', 'Business type status changed');
                return $this->response->redirect(site_url('/Businesstype')); 
        } 
    }
}
