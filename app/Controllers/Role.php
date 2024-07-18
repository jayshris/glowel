<?php
namespace App\Controllers;
use App\Models\RoleModel;
use App\Models\RoleModulesModel;

class Role extends BaseController
{
        public $_access;
        public $model = '';
        public $view = [];

        public function __construct(){
            $this->model = new RoleModel();
        }

        public function index(){
                $this->view['rows'] = $this->model->where('id!=1')->where('status_id', '1')->orderBy('role_name', 'ASC')->paginate(10);
                //echo __LINE__.$this->model->getLastQuery().'<pre>';print_r($this->view['rows']);die;
                // $this->view['pagination_link'] = $this->model->pager;
                // $this->view['page_data'] = [
                // 'page_title' => view( 'partials/page-title', [ 'title' => 'Company','li_1' => '123','li_2' => 'deals' ] )
                // ];
                return view($this->view['currentController'].'/'.$this->view['currentMethod'],$this->view);
        }

        public function create(){
                $request = service('request');
                if($this->request->getMethod()=='POST'){
                        $rules = [
                                'role_name' =>'required|is_unique[roles.role_name]'
                        ];

                        if($this->validate($rules)){
                                $data = [
                                        'role_name' => $this->request->getVar('role_name')
                                ];
                                $this->model->save($data);
                                $session = \Config\Services::session();
                                $session->setFlashdata('success', 'User Added');
                                return redirect()->to('/'.$this->view['currentController']);
                        }else{
                                $this->view['validation'] = $this->validator;
                                return view($this->view['currentController'].'/action', $this->view);
                        }
                }
                return view($this->view['currentController'].'/action',$this->view);
        }

        public function edit($id=0){
                $this->view['token'] = $id;
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
                                $modelData = $this->model->where('id',$id)->first();
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
                                
                                $this->model->update($id, $updateCol);
                                //echo '<pre>'.$model->getLastQuery();print_r($updateCol);print_r($this->request->getVar());die;
                                
                                $userBranch= new UserBranchModel();
                                $userBranchData = $userBranch->where('user_id', $id)->delete();
                                
                                $branches= $this->request->getVar('branch');
                                if(!empty($branches)){
                                        foreach ($branches as $key => $value) {
                                                $userBranchData1 = [ 
                                                        'user_id'       =>   $id,
                                                        'office_id'     =>   $value,       
                                                ];
                                                $userBranch->save($userBranchData1);
                                        }
                                }

                                $session = \Config\Services::session();
                                $session->setFlashdata('success', 'User Added');
                                return redirect()->to('/user');
                        }else{
                                $this->view['error'] 	= $this->validator;
                                return redirect()->to('/user/edit/'.$id)->with('error', $this->view['error'] );
                        }
                }

                $this->view['userdata'] = $this->model->where('id', $id)->first();
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

        public function delete($id=null){
                $this->model->where('id', $id)->delete($id);
                $session = \Config\Services::session();
                $session->setFlashdata('success', 'User Deleted');
                return $this->response->redirect(site_url('/user'));
        }       

        public function permission($id=0)
        {
                $this->view['token'] = $id;
                $roleModule = new RoleModulesModel(); 
                $request = service('request');
                if($this->request->getMethod()=='POST'){
                        //Delete all assigned access
                        $roleModule->where('role_id', $id)->delete();

                        $modules = ($this->request->getVar('module')) ? $this->request->getVar('module') : [];
                        //echo __LINE__.'<pre>';print_r($modules);die;
                        if(!empty($modules)){
                                foreach($modules as $k=>$m){//echo __LINE__.'<pre>';print_r($m);print_r($modules);die;
                                        $sections = isset($m['sections']) ? $m['sections'] : [0=>0];
                                        foreach($sections as $s){
                                                $data = [
                                                        'role_id' => $id,
                                                        'module_id' => $k,
                                                        'section_id' => $s,
                                                        'added_by' => 1,
                                                        'added_ip' => $_SERVER['REMOTE_ADDR']
                                                ];
                                                $roleModule->save($data);
                                        }
                                }
                        }

                        $session = \Config\Services::session();
                        $session->setFlashdata('success', 'Role permission added!');
                        return redirect()->to('/'.$this->view['currentController']);
                }

                $this->view['row'] = $this->model->where('id', $id)->first();
                $this->view['modules'] = $this->model->getModules();
                $this->view['sections'] = $this->model->getSections();
                $this->view['role_modules'] = $roleModule->where('role_id', $id)->findAll();
                //echo '<pre>';print_r($this->view['sections']);die;

                return view($this->view['currentController'].'/'.$this->view['currentMethod'],$this->view);
        }
}