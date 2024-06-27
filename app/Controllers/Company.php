<?php
namespace App\Controllers;
use App\Models\CompanyModel;
use App\Models\UserModel;
use App\Models\ModulesModel;
use App\Models\OfficeModel;

class Company extends BaseController {

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
            $companyModel = new CompanyModel();
  
            $data['company_data'] = $companyModel->where('status','Active')->orderBy('id', 'DESC')->paginate(10);
  
            $data['pagination_link'] = $companyModel->pager;
  
            $data['page_data'] = [
              'page_title' => view( 'partials/page-title', [ 'title' => 'Company','li_1' => '123','li_2' => 'deals' ] )
              ];
            return view('Company/index',$data);
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
              $data = [
                'page_title' => view( 'partials/page-title', [ 'title' => 'Add Company','li_2' => 'profile' ] )
                ];
              return view( 'Company/create',$data );
          }
        }

        public function add_validation()
        {
          $access = $this->_access; 
          if($access === 'false'){
            $session = \Config\Services::session();
            $session->setFlashdata('error', 'You are not permitted to access this page');
            return $this->response->redirect(site_url('/dashboard'));
          }else{
              helper(['form', 'url']);
              $error = $this->validate([
                'company_name'=> [
                  'rules' => 'required|trim|is_unique[company.name]',
                  'errors' => [
                     'required' => 'The company name field is required',
                     'is_unique' => 'Duplicate company name not allowed',
                  ],
                ]
              ]);

              if(!$error)
              {
                echo view('Company/create', [
                  'error' 	=> $this->validator
                ]);
              }
              else
              {
                $companyModel = new CompanyModel();
                $companyModel->save([
                  'name'	=>	$this->request->getVar('company_name'),
                  'status'  =>  'Active',
                  'created_at'  =>  date("Y-m-d h:i:sa"),
                  'creator_ip_address'=>	$_SERVER['REMOTE_ADDR'],
                  'user_id'     => 1
                ]);
                
                $session = \Config\Services::session();

                $session->setFlashdata('success', 'Company Added');

                return $this->response->redirect(site_url('/company'));
              }
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
            $companyModel = new CompanyModel();
            $data['company_data'] = $companyModel->where('id', $id)->first();
            
            $request = service('request');
            if($this->request->getMethod()=='POST'){
              $id = $this->request->getVar('id');
              $error = $this->validate([
                'company_name'	=>	'required',
              ]);
              if(!$error)
              {
                $data['error'] 	= $this->validator;
              }else {
                $officeModel = new CompanyModel();
                $officeModel->update($id,[
                  'name'	=>	$this->request->getVar('company_name'), 
                  'status'  => 'Active',
                  'updated_at'  =>  date("Y-m-d h:i:sa"),
                  'creator_ip_address'=>	$_SERVER['REMOTE_ADDR'],
                  'user_id'     => 1
                ]);
                $session = \Config\Services::session();
    
                $session->setFlashdata('success', 'Company updated');
                return $this->response->redirect(site_url('/company'));
              }
            }
          }

          return view('Company/edit', $data);

        }

        public function delete($id){
          $access = $this->_access; 
          if($access === 'false'){
            $session = \Config\Services::session();
            $session->setFlashdata('error', 'You are not permitted to access this page');
            return $this->response->redirect(site_url('/dashboard'));
          }else{
              $companyModel = new CompanyModel();
              $companyModel->where('id', $id)->delete($id);
              $session = \Config\Services::session();
              $session->setFlashdata('success', 'Company Deleted');
              return $this->response->redirect(site_url('/company'));
          }
        }

      public function status($id=null){
          $access = $this->_access; 
          if($access === 'false'){
              $session = \Config\Services::session();
              $session->setFlashdata('error', 'You are not permitted to access this page');
              return $this->response->redirect(site_url('/dashboard'));
          }else{

              $companyModel = new CompanyModel();
              $cModel = $companyModel->where('id', $id)->first();
              if(isset($cModel)){
                if($cModel['status'] == 'Active'){
                  $status = 'Inactive';
                  $ostatus = 0;
                }else{
                  $status = 'Active';
                  $ostatus = 1;
                }
              }
              $companyModel->update($id,[
                  'status'              => $status,
                  'updated_at'         =>  date("Y-m-d h:i:sa"),
              ]);
              $officeModel = new OfficeModel();
              $offices = $officeModel->where('company_id', $id)->findAll();

              foreach ($offices as $key => $value) {
                $oid = $value['id'];
               $updt= $officeModel->update($oid,[
                  'status'             =>  $ostatus,
                  'updated_at'         =>  date("Y-m-d h:i:sa"),
                ]);
              }
              $session = \Config\Services::session();
              $session->setFlashdata('success', 'Company Status updated');
              return $this->response->redirect(site_url('/company'));
          }
      }

      
      public function searchByStatus(){
        if($this->request->getMethod()=='POST'){
          $status = $this->request->getVar('status');
          $cModel = new CompanyModel();
          $data['cModel'] = $cModel->where('status', $status)->orderBy('id', 'DESC')->findAll();
          $data['page_data'] = [
          'page_title' => view( 'partials/page-title', [ 'title' => 'Party Type','li_1' => '123','li_2' => 'deals' ] )
          ];
          return view('Company/search',$data);
        }
      }
}

?>