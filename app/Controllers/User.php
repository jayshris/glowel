<?php
namespace App\Controllers;
use App\Models\UserModel;
use App\Models\UserTypeModel;
use App\Models\OfficeModel;
use App\Models\ModulesModel;
use App\Models\UserBranchModel;

class User extends BaseController {

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
                $userModel = new UserModel();
                $data['user_data'] = $userModel->orderBy('id', 'DESC')->paginate(10);
                $data['pagination_link'] = $userModel->pager;
                $data['page_data'] = [
                'page_title' => view( 'partials/page-title', [ 'title' => 'Company','li_1' => '123','li_2' => 'deals' ] )
                ];
                return view('User/index',$data);
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
                        $userTypeModel = new UserTypeModel();
                        $data['user_type'] = $userTypeModel->where(['status'=>'Active'])->orderBy('user_type_name','ASC')->findAll();

                        $officeModel = new OfficeModel();
                        $data['office'] = $officeModel->where(['status'=>1])->orderBy('id')->findAll();

                        $request = service('request');
                        if($this->request->getMethod()=='POST'){
                                $rules = [
                                        'user_type'	=>'required',
                                        'first_name'	=>'required',
                                        'last_name'	=>'required',
                                        'email'	        =>'required|valid_email|is_unique[users.email]',
                                        'mobile'        =>'required|is_unique[users.mobile]',
                                        'home_branch'   =>'required',
                                ];

                                if($this->validate($rules)){
                                        $model = new UserModel();
                                        $data = [
                                        'usertype'          => $this->request->getVar('user_type'),
                                        'first_name'        => $this->request->getVar('first_name'),
                                        'last_name'         => $this->request->getVar('last_name'),
                                        'login_expiry'      => $this->request->getVar('login_expiry'),
                                        'email'             => $this->request->getVar('email'),
                                        'mobile'            => $this->request->getVar('mobile'),
                                        'home_branch'       => $this->request->getVar('home_branch'),
                                        'password'          => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                                        'created_at'        => date("Y-m-d h:i:sa"),
                                        'status'            => 'Active'
                                        ];
                                        $model->save($data);
                                        $user_id = $model->getInsertID();
                                        $branches= $this->request->getVar('branch');
                                        $userBranch= new UserBranchModel();
                                        foreach ($branches as $key => $value) {
                                                $userBranchData=[
                                                        'user_id'       =>  $user_id,
                                                        'office_id'     =>   $value,       
                                                ];  
                                                $userBranch->save($userBranchData);   
                                        }

                                        $session = \Config\Services::session();
                                        $session->setFlashdata('success', 'User Added');
                                        return redirect()->to('/User/index');
                                }else{
                                        $data['validation'] = $this->validator;
                                        return view('User/add_user', $data);
                                }
                        }
                        return view('User/add_user',$data);
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
                        $data['user_type'] = $userTypeModel->where(['status'=>'Active'])->orderBy('id')->findAll();
                        $officeModel = new OfficeModel();
                        $data['office'] = $officeModel->where(['status'=>1])->orderBy('id')->findAll();
        
                        $user = new UserModel();
                        $data['userdata'] = $user->where('id', $id)->first();

                        $userBranches = new UserBranchModel();
                        $data['branches'] = $userBranches->where('user_id', $id)->findAll();

                        return view('User/edit',$data);
                }
        }

        public function update(){
                
                $access = $this->_access; 
                if($access === 'false'){
                        $session = \Config\Services::session();
                        $session->setFlashdata('error', 'You are not permitted to access this page');
                        return $this->response->redirect(site_url('/dashboard'));
                }else{  

                        if($this->request->getMethod()=='POST'){

                                $id = $this->request->getVar('id');
                                $rules = [
                                        'user_type'	=>'required',
                                        'first_name'	=>'required',
                                        'last_name'	=>'required',
                                        'email'	        =>'required|valid_email|is_unique[users.email,users.id,'.$id.']',
                                        'mobile'        =>'required|is_unique[users.mobile,users.id,'.$id.']',
                                        'home_branch'   =>'required',
                                ];

                                if($this->validate($rules)){
                                        
                                        $model = new UserModel();
                                        $modelData = $model->where('id',$id)->first();
                                        $pwd= $this->request->getVar('password');

                                        if(isset($pwd) && !empty($pwd)){
                                                $password = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
                                        }else{
                                                $password = $modelData['password'];
                                        }
                                        
                                        $model->update($id,[
                                        'id'                => $id,
                                        'usertype'          => $this->request->getVar('user_type'),
                                        'first_name'        => $this->request->getVar('first_name'),
                                        'last_name'         => $this->request->getVar('last_name'),
                                        'login_expiry'      => $this->request->getVar('login_expiry'),
                                        'email'             => $this->request->getVar('email'),
                                        'mobile'            => $this->request->getVar('mobile'),
                                        'home_branch'       => $this->request->getVar('home_branch'),
                                        'password'          => $password,
                                        'updated_at'        => date("Y-m-d h:i:sa"),
                                        'status'            => 'Active'
                                        ]);
                                        $branches= $this->request->getVar('branch');
                                        $userBranch= new UserBranchModel();
                                        $userBranchData = $userBranch->where('user_id', $id)->delete();
                                        
                                        foreach ($branches as $key => $value) {
                                                $userBranchData1 = [ 
                                                        'user_id'       =>   $id,
                                                        'office_id'     =>   $value,       
                                                ];
                                                $userBranch->save($userBranchData1);
                                        }

                                        $session = \Config\Services::session();
                                        $session->setFlashdata('success', 'User Added');
                                        return redirect()->to('/User/index');
                                }else{
                                        $data['error'] 	= $this->validator;
                                        return redirect()->to('/user/edit/'.$id)->with('error', $data['error'] );
                                }
                        }
                }
        }

        public function delete($id=null){
                
                $access = $this->_access; 
                if($access === 'false'){
                        $session = \Config\Services::session();
                        $session->setFlashdata('error', 'You are not permitted to access this page');
                        return $this->response->redirect(site_url('/dashboard'));
                }else{  
                        $userModel = new UserModel();
                        $userModel->where('id', $id)->delete($id);
                        $session = \Config\Services::session();
                        $session->setFlashdata('success', 'User Deleted');
                        return $this->response->redirect(site_url('/user')); 
                }  
        }
}