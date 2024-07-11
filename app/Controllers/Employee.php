<?php
namespace App\Controllers;
use App\Models\EmployeeModel;
use App\Models\CompanyModel;
use App\Models\UserModel;
use App\Models\ModulesModel;
use App\Models\AadhaarNumberMapModule;


class Employee extends BaseController {
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
          $employeeModel = new EmployeeModel();

          $data['employee_data'] = $employeeModel->orderBy('id', 'DESC')->paginate(10);
          $data['pagination_link'] = $employeeModel->pager;

          $data['page_data'] = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Employee','li_1' => '123','li_2' => 'deals' ] )
            ];
          return view('Employee/index',$data);
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
          helper(['form', 'url']);
          $data ['page_data']= [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Add Employee','li_2' => 'profile' ] )
            ];

            $companyModel = new CompanyModel();
            
		        $data['company'] = $companyModel->where(['status'=>'Active'])->orderBy('id')->findAll();
        

            $request = service('request');
            if($this->request->getMethod()=='POST'){
              $error = $this->validate([
                'company_name'   =>  'required',
                'office_location'=> 'required|min_length[3]|max_length[500]',
                'name' => 'required|min_length[3]|max_length[50]',
                'mobile' => 'required|numeric|is_unique[employee.mobile]|min_length[10]|max_length[15]',
                'aadhaar_number' => 'required|numeric|is_unique[employee.adhaar_number_map_id]|min_length[16]|max_length[16]',
                'email' => 'valid_email',
              ]);
              if(!$error)
              {
                $data['error'] 	= $this->validator;
              }else {
                $employeeModel = new EmployeeModel();
                $newName1='';
                $image1 = $this->request->getFile('image1');
                if ($image1->isValid() && !$image1->hasMoved()) {
                  $newName1 = $image1->getRandomName();
                  $imgpath = rtrim(WRITEPATH,"writable\\"). '\public\writable\uploads\profiles';
                  if (!is_dir($imgpath)) {
                      mkdir($imgpath, 0777, true);
                  }

                  $image1->move($imgpath, $newName1);
                } 
                $image_name1 = 'writable/uploads/profiles/'. $newName1;
                $newName2='';
                $image2 = $this->request->getFile('image2');
                if ($image2->isValid() && !$image2->hasMoved()) {
                  $newName2 = $image2->getRandomName();
                  $imgpath = rtrim(WRITEPATH,"writable\\"). '\public\writable\uploads\profiles';
                  if (!is_dir($imgpath)) {
                      mkdir($imgpath, 0777, true);
                  }

                  $image2->move($imgpath, $newName2);
                } 
                $image_name2 = 'writable/uploads/profiles/'. $newName2;
                $employeeModel->save([
                  'company_id'	=>	$this->request->getVar('company_name'),
                  'office_location'	=>	$this->request->getVar('office_location'),
                  'name'	=>	$this->request->getVar('name'),
                  'adhaar_number_map_id'	=>	 $request->getPost('aadhaar_number'),
                  'mobile'	=>	$request->getPost('mobile'),
                  'email'	=>	$request->getPost('email'),
                  'bank_account_number'	=>	$request->getPost('bank_account_number'),
                  'bank_ifsc_code'	=>	$request->getPost('bank_ifsc_code'),
                  'upi_id'  =>  $request->getPost('upi_id'),
                  'profile_image1'  =>  $image_name1,
                  'profile_image2'  =>  $image_name2,
                  'status'  => 'Active',
                  'created_at'  =>  date("Y-m-d h:i:sa"),

                ]);
                $user_id = $employeeModel->getInsertID();
                $aadhaarModel =  new AadhaarNumberMapModule();
                $aadhaarModel->save([
                  'user_type' =>  'employee',
                  'user_id'   =>  $user_id,
                  'adhaar_number' =>  $request->getPost('aadhaar_number'),
                  'adhaar_image_front' => '',
                  'adhaar_image_back'   =>  ''
                ]);
                $adhaar_id = $aadhaarModel->getInsertID();
                $employeeModel->update($user_id,[
                  'adhaar_number_map_id'  =>  $adhaar_id,
                  'updated_at'  =>  date("Y-m-d h:i:sa"),
              ]);
                $session = \Config\Services::session();
    
                $session->setFlashdata('success', 'Employee Added');
                return $this->response->redirect(site_url('/employee'));
              }
    
              
            }
            return view( 'Employee/create',$data );
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
            
          $data['company'] = $companyModel->where(['status'=>'Active'])->orderBy('id')->findAll();
          $employeeModel = new EmployeeModel();
          $aadhaarModel =  new AadhaarNumberMapModule();
          if($id!=''){
            $data['employee_data'] = $employeeModel->where('id', $id)->first();
            
            $data['aadhaar_data'] = $aadhaarModel->where('id', $data['employee_data']['adhaar_number_map_id'])->first();
          }
          $request = service('request');
          if($this->request->getMethod()=='POST'){
            $id = $this->request->getVar('id');
            $data['employee_data'] = $employeeModel->where('id', $id)->first();
            $data['aadhaar_data'] = $aadhaarModel->where('id', $data['employee_data']['adhaar_number_map_id'])->first();
            $error = $this->validate([
              'company_name'   =>  'required',
              'office_location'=> 'required|min_length[3]|max_length[500]',
              'name' => 'required|min_length[3]|max_length[50]',
              'mobile' => 'required|numeric|min_length[10]|max_length[15]',
              'aadhaar_number' => 'required|numeric|min_length[10]|max_length[16]',
              'email' => 'valid_email',
            ]);
            if(!$error)
            {
              $data['error'] 	= $this->validator;
              
            }else {
              $newName1='';
                $image1 = $this->request->getFile('image1');
                if ($image1->isValid() && !$image1->hasMoved()) {
                  $newName1 = $image1->getRandomName();
                  $imgpath = rtrim(WRITEPATH,"writable\\"). '\public\writable\uploads\profiles';
                  if (!is_dir($imgpath)) {
                      mkdir($imgpath, 0777, true);
                  }

                  $image1->move($imgpath, $newName1);
                  $image_name1 = 'writable/uploads/profiles/'. $newName1;
                }else{
                    $image_name1 = $data['employee_data']['profile_image1'];
                } 
                
                $newName2='';
                $image2 = $this->request->getFile('image2');
                if ($image2->isValid() && !$image2->hasMoved()) {
                  $newName2 = $image2->getRandomName();
                  $imgpath = rtrim(WRITEPATH,"writable\\"). '\public\writable\uploads\profiles';
                  if (!is_dir($imgpath)) {
                      mkdir($imgpath, 0777, true);
                  }

                  $image2->move($imgpath, $newName2);
                  $image_name2 = 'writable/uploads/profiles/'. $newName2;
                }else{
                    $image_name2 = $data['employee_data']['profile_image2'];
                }  
                
              $employeeModel = new EmployeeModel();
              $employeeModel->update($id,[
                'company_id'  =>  $this->request->getVar('company_name'),
                  'office_location' =>  $this->request->getVar('office_location'),
                  'name'  =>  $this->request->getVar('name'),
                  'mobile'  =>  $request->getPost('mobile'),
                  'email' =>  $request->getPost('email'),
                  'bank_account_number' =>  $request->getPost('bank_account_number'),
                  'bank_ifsc_code'  =>  $request->getPost('bank_ifsc_code'),
                  'upi_id'  =>  $request->getPost('upi_id'),
                  'profile_image1'  =>  $image_name1,
                  'profile_image2'  =>  $image_name2,
                  'status'  => 'Active',
                  'updated_at'  =>  date("Y-m-d h:i:sa"),
              ]);
              $aadhaarModel =  new AadhaarNumberMapModule();
              $update_id = $data['employee_data']['adhaar_number_map_id'];
              $aadhaarModel->update($update_id,[
                  'adhaar_number'  =>  $request->getPost('aadhaar_number'),
                  'updated_at'  =>  date("Y-m-d h:i:sa"),
              ]);

              $session = \Config\Services::session();
  
              $session->setFlashdata('success', 'Employee updated');
              return $this->response->redirect(site_url('/employee'));
            }
  
            
          }
          return view('Employee/edit_employee', $data);
         }
         }

         public function delete($id){
          $access = $this->_access; 
          if($access === 'false'){
            $session = \Config\Services::session();
            $session->setFlashdata('error', 'You are not permitted to access this page');
            return $this->response->redirect(site_url('/dashboard'));
          }else{
          $employeeModel = new EmployeeModel();
          $employeeModel->where('id', $id)->delete($id);
          $session = \Config\Services::session();
          $session->setFlashdata('success', 'Employee Deleted');
          return $this->response->redirect(site_url('/employee'));
         }
         }

         
        public function view($id=null){
          $access = $this->_access; 
          if($access === 'false'){
            $session = \Config\Services::session();
            $session->setFlashdata('error', 'You are not permitted to access this page');
            return $this->response->redirect(site_url('/dashboard'));
          }else{
          
          $companyModel = new CompanyModel();
            
          $data['company'] = $companyModel->where(['status'=>'Active'])->orderBy('id')->findAll();

          $employeeModel = new EmployeeModel();
          $data['employee_data'] = $employeeModel->where('id', $id)->first();
          $aadhaarModel =  new AadhaarNumberMapModule();
          $data['aadhaar_data'] = $aadhaarModel->where('id', $data['employee_data']['adhaar_number_map_id'])->first();
          
          return view('Employee/details', $data);
        }
      }

      public function approve($id=null){
      $access = $this->_access; 
      if($access === 'false'){
          $session = \Config\Services::session();
          $session->setFlashdata('error', 'You are not permitted to access this page');
          return $this->response->redirect(site_url('/dashboard'));
      }else{
          if (session()->get('isLoggedIn')) {
              $login_id= session()->get('id');
          }
          $user = new UserModel();
          $user = $user->where('id', $login_id)->first();
          $driverModel = new EmployeeModel();
          $driverModel->update($id,[
              'approved'              =>  1,
              'approval_user_id'      =>  $user['id'],
              'approval_user_type'    =>  $user['usertype'],
              'approval_date'         =>  date("Y-m-d h:i:sa"),
              'approval_ip_address'   =>  $_SERVER['REMOTE_ADDR']
          ]);
          
          $session = \Config\Services::session();
          $session->setFlashdata('success', 'Employee Approved');
          return $this->response->redirect(site_url('/employee'));
      }
  }
}
?>