<?php
namespace App\Controllers;
use App\Models\UserModel;
use App\Models\OfficeModel;
use App\Models\CompanyModel;
use App\Models\EmployeeModel;
use App\Models\UserTypeModel;
use App\Models\UserBranchModel;
use App\Models\UserModulesModel;
use App\Models\UserEmployeeModel;

class User extends BaseController
{
        public $_access;
        public $model = '';
        public $EmployeeModel;
        public $session;

        public function __construct(){
            $this->model = new UserModel();
            $access = $this->model->setPermission();
            $this->_access = $access;
            $this->EmployeeModel = new EmployeeModel();
            $this->session = \Config\Services::session();
        }

        public function index(){
                $access = $this->_access; 
                if($access === 'false'){
                  $session = \Config\Services::session();
                  $session->setFlashdata('error', 'You are not permitted to access this page');
                  return $this->response->redirect(site_url('/dashboard'));
                }else{  
                      $userModel = new UserModel();
                      if ($this->request->getPost('status') != '') {
                              $userModel->where('status', $this->request->getPost('status'));
                      }
              
                      $this->view['user_data'] = $userModel->orderBy('id', 'DESC')->findAll();
                      $this->view['pagination_link'] = $userModel->pager;
                      $this->view['page_data'] = [
                      'page_title' => view( 'partials/page-title', [ 'title' => 'Company','li_1' => '123','li_2' => 'deals' ] )
                      ];
                      return view('User/index',$this->view);
                }
              }

        public function create(){
                $access = $this->_access; 
                if($access === 'false'){
                        $session = \Config\Services::session();
                        $session->setFlashdata('error', 'You are not permitted to access this page');
                        return $this->response->redirect(site_url('/dashboard'));
                }else{  
                        // echo '<pre>';print_r($this->request->getVar('employees')); 
                        $userTypeModel = new UserTypeModel();
                        $this->view['user_type'] = $userTypeModel->where(['status'=>'Active'])->orderBy('user_type_name','ASC')->findAll();

                        $compModel = new CompanyModel();
                        $this->view['company'] = $compModel->where(['status'=>'Active'])->orderBy('id')->findAll();

                        $officeModel = new OfficeModel();
                        $this->view['office'] = $officeModel->where(['status'=>1])->orderBy('id')->findAll();

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
                                        'company_id'        => $this->request->getVar('company_id'),
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
                                         //update employee details
                                        if($this->request->getVar('employees')){   
                                                $this->EmployeeModel->update($this->request->getVar('employees'),['user_id'=>$user_id]);   
                                                $UserEmployeeModel = new UserEmployeeModel();
                                                $userEmployees['user_id']= $user_id;  
                                                $userEmployees['employee_id']= $this->request->getVar('employees');  
                                                $UserEmployeeModel->save($userEmployees);   
                                        } 
                                        $session = \Config\Services::session();
                                        $session->setFlashdata('success', 'User Added');
                                        return redirect()->to('/User/index');
                                }else{
                                        $this->view['validation'] = $this->validator;
                                        return view('User/add_user', $this->view);
                                }
                        }
                        return view('User/add_user',$this->view);
                }
        }

        public function edit($id=null){
                
                $access = $this->_access; 
                if($access === 'false'){
                        $session = \Config\Services::session();
                        $session->setFlashdata('error', 'You are not permitted to access this page');
                        return $this->response->redirect(site_url('/dashboard'));
                }else{  
                        $user = new UserModel();
                        $this->view['userdata'] = $user->where('id', $id)->first();//echo '<pre>';print_r($this->view['userdata']);die;
                        $company_id = ($this->view['userdata']['company_id']) ? $this->view['userdata']['company_id'] : 0;

                        $userTypeModel = new UserTypeModel();
                        $this->view['user_type'] = $userTypeModel->where(['status'=>'Active'])->orderBy('id')->findAll();

                        $compModel = new CompanyModel();
                        $this->view['company'] = $compModel->where(['status'=>'Active'])->orderBy('id')->findAll();

                        $officeModel = new OfficeModel();
                        $this->view['office'] = $officeModel->where(['company_id'=>$company_id])->where(['status'=>1])->orderBy('id')->findAll();
        
                        $userBranches = new UserBranchModel();
                        $this->view['branches'] = $userBranches->where('user_id', $id)->findAll();

                        return view('User/edit',$this->view);
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

                                        $updateCol = [
                                                        'id'                => $id,
                                                        'usertype'          => $this->request->getVar('user_type'),
                                                        'first_name'        => $this->request->getVar('first_name'),
                                                        'last_name'         => $this->request->getVar('last_name'),
                                                        'login_expiry'      => $this->request->getVar('login_expiry'),
                                                        'email'             => $this->request->getVar('email'),
                                                        'mobile'            => $this->request->getVar('mobile'),
                                                        'company_id'        => $this->request->getVar('company_id'),
                                                        'home_branch'       => $this->request->getVar('home_branch'),
                                                        'password'          => $password,
                                                        'updated_at'        => date("Y-m-d h:i:sa"),
                                                        'status'            => 'Active'
                                        ];
                                        
                                        $model->update($id, $updateCol);
                                        //echo '<pre>'.$model->getLastQuery();print_r($updateCol);print_r($this->request->getVar());die;
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
                                        $this->view['error'] 	= $this->validator;
                                        return redirect()->to('/user/edit/'.$id)->with('error', $this->view['error'] );
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

        public function getHomeBranch()
        {
                $company_id = ($this->request->getPost('company_id')) ? $this->request->getPost('company_id') : 0;
                $offModel = new OfficeModel();
                $rows = $offModel->where(['company_id'=>$company_id])->where(['status'=>1])->orderBy('name','asc')->findAll();

                $homeBranch = '';
                if (!empty($rows)) {
                    $homeBranch .= '<option>Select Home Branch/Office</option>';
                    foreach ($rows as $row) {
                        $homeBranch .= '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                    }
                }
                echo $homeBranch;exit;
        }

        public function getBranches()
        {
                $company_id = ($this->request->getPost('company_id')) ? $this->request->getPost('company_id') : 0;
                $offModel = new OfficeModel();
                $rows = $offModel->where(['company_id'=>$company_id])->where(['status'=>1])->orderBy('name','asc')->findAll();

                $branches = '';
                if (!empty($rows)) {
                    foreach ($rows as $row) {
                        $branches .= '<input class="form-check-input" type="checkbox" name="branch[]" id="id_'.$row["id"].'" value="'.$row["id"].'"><label for="id_'.$row["id"].'" class="col-form-label" style=" margin: 0px 20px 0px 3px;">'.ucwords($row["name"]).'</label>';
                    }
                }
                echo $branches;exit;
        }        

        public function permission($id=0)
        {
                $this->view['token'] = $id;
                $access = $this->_access; 
                if($access === 'false'){
                        $session = \Config\Services::session();
                        $session->setFlashdata('error', 'You are not permitted to access this page');
                        return $this->response->redirect(site_url('/dashboard'));
                }else{ 
                        $userModule = new UserModulesModel(); 
                        $request = service('request');
                        if($this->request->getMethod()=='POST'){
                                //echo __LINE__.'<pre>';print_r($this->request->getVar());die;
                                $rules = [
                                        'user_type'	=>'required',
                                        'first_name'	=>'required',
                                        'last_name'	=>'required',
                                        'email'	        =>'required|valid_email|is_unique[users.email]',
                                        'mobile'        =>'required|is_unique[users.mobile]',
                                        'home_branch'   =>'required',
                                ];

                                //if($this->validate($rules)){
                                        //Delete all assigned access
                                        $userModule->where('user_id', $id)->delete();

                                        $modules = ($this->request->getVar('module')) ? $this->request->getVar('module') : [];
                                        //echo __LINE__.'<pre>';print_r($modules);die;
                                        if(!empty($modules)){
                                                foreach($modules as $k=>$m){//echo __LINE__.'<pre>';print_r($m);print_r($modules);die;
                                                        $sections = isset($m['sections']) ? $m['sections'] : [0=>0];
                                                        foreach($sections as $s){
                                                                $data = [
                                                                        'user_id' => $id,
                                                                        'module_id' => $k,
                                                                        'section_id' => $s,
                                                                        'added_by' => 1,
                                                                        'added_ip' => $_SERVER['REMOTE_ADDR']
                                                                ];
                                                                $userModule->save($data);
                                                        }
                                                }
                                        }

                                        $session = \Config\Services::session();
                                        $session->setFlashdata('success', 'User permission added!');
                                        return redirect()->to('/user');
                                /*}else{
                                        $this->view['validation'] = $this->validator;
                                        return view('User/add_user', $this->view);
                                }*/
                        }

                        $this->view['userdata'] = $this->model->where('id', $id)->first();
                        $roleID = (isset($this->view['userdata']['role_id']) && $this->view['userdata']['role_id']>0) ? $this->view['userdata']['role_id'] : 0;
                        $this->view['user_role_modules'] = $this->model->getUserRoleModules($roleID);
                        $this->view['user_modules'] = $userModule->where('user_id', $id)->findAll();
                        //echo '<pre>';print_r($this->view['user_modules']);die;

                        return view('User/permission',$this->view);
                }
        }

        public function getEmployeess()
        {   
                $rows = $this->EmployeeModel->select('id,name')->where(['status'=>'Active'])->orderBy('name','asc')->findAll();
                echo json_encode($rows);exit;
                // echo '<pre>';print_r($rows);exit;
        }
}