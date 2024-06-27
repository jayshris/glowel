<?php

namespace App\Controllers;

use App\Models\EmployeeModel;

use App\Models\CompanyModel;

use App\Models\UserModel;

use App\Models\ModulesModel;

use App\Models\AadhaarNumberMapModule;

use App\Models\OfficeModel;





class Employee extends BaseController {

      public $_access;



      public function __construct()

      {

          $u = new UserModel();

          $access = $u->setPermission();

          $this->_access = $access; 

          $this->employeeModel = new EmployeeModel();

          $this->companyModel = new CompanyModel();

          $this->aadhaarModel =  new AadhaarNumberMapModule();

          $this->user = new UserModel();

          $this->officeModel = new OfficeModel();

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



          $data['employee_data'] = $this->employeeModel->where(['deleted_at'=>NULL])->orderBy('id', 'DESC')->paginate(10);

          $data['pagination_link'] = $this->employeeModel->pager;



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



		        $data['company'] = $this->companyModel->where(['status'=>'Active'])->orderBy('name')->findAll();

        



            $request = service('request');

            if($this->request->getMethod()=='POST'){

              $error = $this->validate([

                'company_name'   =>  'required',

                'office_location'=> 'required',

                'name' => 'required|min_length[3]|max_length[50]',

                'mobile' => 'required|numeric|min_length[10]|max_length[15]',

                'aadhaar' => 'required|numeric|max_length[16]|is_unique[adhaar_number_map.adhaar_number]',

                'image1'   =>  'max_size[image1,100]|ext_in[image1,jpg,jpeg,png]',

                'image2'   =>  'max_size[image2,100]|ext_in[image2,jpg,jpeg,png]',

                'aadhaarfront'  =>  'max_size[aadhaarfront,100]|ext_in[aadhaarfront,jpg,jpeg,png,pdf]',

                'aadhaarback'  =>  'max_size[aadhaarback,100]|ext_in[aadhaarback,jpg,jpeg,png,pdf]',

                'joiningdate'   =>  'required',

                'upi_id'   =>  'max_size[upi_id,100]|ext_in[upi_id,jpg,jpeg,png]',

              ]);

              if(!$error)

              {

                $data['error'] 	= $this->validator;

              }else {

                $newName1='';

                $image1 = $this->request->getFile('image1');

                if ($image1->isValid() && !$image1->hasMoved()) {

                  $newName1 = $image1->getRandomName();

                  $imgpath = rtrim(WRITEPATH,"writable/"). '/public/writable/uploads/profiles';

                  if (!is_dir($imgpath)) {

                      mkdir($imgpath, 0777, true);

                  }



                  $image1->move($imgpath, $newName1);

                } 

                if($newName1==''){

                  $image_name1 = '';

                }else{

                  $image_name1 = base_url() . 'public/writable/uploads/profiles/'. $newName1;

                }

                

                $newName2='';

                $image2 = $this->request->getFile('image2');

                if ($image2->isValid() && !$image2->hasMoved()) {

                  $newName2 = $image2->getRandomName();

                  $imgpath = rtrim(WRITEPATH,"writable/"). '/public/writable/uploads/profiles';

                  if (!is_dir($imgpath)) {

                      mkdir($imgpath, 0777, true);

                  }



                  $image2->move($imgpath, $newName2);

                } 

                if($newName2==''){

                  $image_name2 = '';

                }else{

                  $image_name2 = base_url() . 'public/writable/uploads/profiles/'. $newName2;

                }

                



                $aadhaarfrontnewName='';

                $aadhaarfront = $this->request->getFile('aadhaarfront');

                if ($aadhaarfront->isValid() && !$aadhaarfront->hasMoved()) {

                  $aadhaarfrontnewName = $aadhaarfront->getRandomName();

                  $imgpathaadhaarfront = rtrim(WRITEPATH,"writable/"). '/public/writable/uploads/aadhaar_images';

                  if (!is_dir($imgpathaadhaarfront)) {

                      mkdir($imgpathaadhaarfront, 0777, true);

                  }



                  $aadhaarfront->move($imgpathaadhaarfront, $aadhaarfrontnewName);

                } 

                if($aadhaarfrontnewName==''){

                  $aadhaarfrontimage_name = '';

                }else{

                  $aadhaarfrontimage_name = base_url() . 'public/writable/uploads/aadhaar_images/'. $aadhaarfrontnewName;

                }

                



                $aadhaarbacknewName='';

                $aadhaarback = $this->request->getFile('aadhaarback');

                if ($aadhaarback->isValid() && !$aadhaarback->hasMoved()) {

                  $aadhaarbacknewName = $aadhaarback->getRandomName();

                  $imgpathaadhaarback = rtrim(WRITEPATH,"writable/"). '/public/writable/uploads/aadhaar_images';

                  if (!is_dir($imgpathaadhaarback)) {

                      mkdir($imgpathaadhaarback, 0777, true);

                  }



                  $aadhaarback->move($imgpathaadhaarback, $aadhaarbacknewName);

                } 

                if($aadhaarbacknewName==''){

                  $aadhaarbackimage_name = '';

                }else{

                  $aadhaarbackimage_name = base_url() . 'public/writable/uploads/aadhaar_images/'. $aadhaarbacknewName;

                }

                



                $upinewName='';

                $upi = $this->request->getFile('upi_id');

                if ($upi->isValid() && !$upi->hasMoved()) {

                  $upinewName = $upi->getRandomName();

                  $imgpathupi = rtrim(WRITEPATH,"writable/"). '/public/writable/uploads/upi';

                  if (!is_dir($imgpathupi)) {

                      mkdir($imgpathupi, 0777, true);

                  }



                  $upi->move($imgpathupi, $upinewName);

                } 

                if($upinewName==''){

                  $upiimage_name = '';

                }else{

                  $upiimage_name = base_url() . 'public/writable/uploads/upi/'. $upinewName;

                }

                



                $this->employeeModel->save([

                  'company_id'	=>	$this->request->getVar('company_name'),

                  'branch_id'	=>	$this->request->getVar('office_location'),

                  'name'	=>	$this->request->getVar('name'),

                  'adhaar_number_map_id'	=>	 $request->getPost('aadhaar'),

                  'mobile'	=>	$request->getPost('mobile'),

                  'email'	=>	$request->getPost('email'),

                  'bank_account_number'	=>	$request->getPost('bank_account_number'),

                  'bank_ifsc_code'	=>	$request->getPost('bank_ifsc_code'),

                  'upi_id'  =>  $upiimage_name,

                  'profile_image1'  =>  $image_name1,

                  'profile_image2'  =>  $image_name2,

                  'joining_date'  =>  $request->getPost('joiningdate'),

                  'status'  => 'Inactive',

                  'created_at'  =>  date("Y-m-d h:i:sa"),



                ]);

                $user_id = $this->employeeModel->getInsertID();

                $this->aadhaarModel->save([

                  'user_type' =>  'employee',

                  'user_id'   =>  $user_id,

                  'adhaar_number' =>  $request->getPost('aadhaar'),

                  'adhaar_image_front' => $aadhaarfrontimage_name,

                  'adhaar_image_back'   =>  $aadhaarbackimage_name

                ]);

                $adhaar_id = $this->aadhaarModel->getInsertID();

                $this->employeeModel->update($user_id,[

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

            

          $data['company'] = $this->companyModel->where(['status'=>'Active'])->orderBy('name')->findAll();

          if($id!=''){

            $this->employeeModel->update($id,[
                'status'                  =>  'Inactive',
                'approved'                =>  '',
                'approval_user_id'        =>  '',
                'approval_user_type'      =>  '',
                'approval_date'           =>  '',
                'approval_ip_address'     =>  $_SERVER['REMOTE_ADDR'],
            ]);

            $data['employee_data'] = $this->employeeModel->where('id', $id)->first();

            $data['office_data'] = $this->officeModel->where('id', $data['employee_data']['branch_id'])->findAll();

            $data['aadhaar_data'] = $this->aadhaarModel->where('id', $data['employee_data']['adhaar_number_map_id'])->first();

          }

          $request = service('request');

          if($this->request->getMethod()=='POST'){

            $id = $this->request->getVar('id');

            $data['employee_data'] = $this->employeeModel->where('id', $id)->first();

            $data['aadhaar_data'] = $this->aadhaarModel->where('id', $data['employee_data']['adhaar_number_map_id'])->first();

            $data['office_data'] = $this->officeModel->where('id', $data['employee_data']['branch_id'])->findAll();

            $error = $this->validate([

                'company_name'   =>  'required',

                'office_location'=> 'required',

                'name' => 'required|min_length[3]|max_length[50]',

                'mobile' => 'required|numeric|min_length[10]|max_length[15]',

                'aadhaar' => 'required|numeric|max_length[16]',

                'image1'   =>  'max_size[image1,100]|ext_in[image1,jpg,jpeg,png]',

                'image2'   =>  'max_size[image2,100]|ext_in[image2,jpg,jpeg,png]',

                'aadhaarfront'  =>  'max_size[aadhaarfront,100]|ext_in[aadhaarfront,jpg,jpeg,png,pdf]',

                'aadhaarback'  =>  'max_size[aadhaarback,100]|ext_in[aadhaarback,jpg,jpeg,png,pdf]',

                'joiningdate'   =>  'required',

                'upi_id'   =>  'max_size[upi_id,100]|ext_in[upi_id,jpg,jpeg,png]',

            ]);

            if(!$error)

            {

              $data['error'] 	= $this->validator;

              

            }else {

              $normalizedStr = strtolower(str_replace(' ', '', $this->request->getVar('aadhaar')));

              $adhaar_data = $this->aadhaarModel

                ->where('LOWER(REPLACE(adhaar_number, " ", ""))',$normalizedStr)

                ->where('id!=',$data['employee_data']['adhaar_number_map_id'])

                ->orderBy('id')->countAllResults();

              if($adhaar_data==0)

            {  

              $newName1='';

                $image1 = $this->request->getFile('image1');

                if ($image1->isValid() && !$image1->hasMoved()) {

                  $newName1 = $image1->getRandomName();

                  $imgpath = rtrim(WRITEPATH,"writable/"). '/public/writable/uploads/profiles';

                  if (!is_dir($imgpath)) {

                      mkdir($imgpath, 0777, true);

                  }



                  $image1->move($imgpath, $newName1);

                  $image_name1 = base_url() . 'public/writable/uploads/profiles/'. $newName1;

                }else{

                    $image_name1 = $data['employee_data']['profile_image1'];

                } 

                

                $newName2='';

                $image2 = $this->request->getFile('image2');

                if ($image2->isValid() && !$image2->hasMoved()) {

                  $newName2 = $image2->getRandomName();

                  $imgpath = rtrim(WRITEPATH,"writable/"). '/public/writable/uploads/profiles';

                  if (!is_dir($imgpath)) {

                      mkdir($imgpath, 0777, true);

                  }



                  $image2->move($imgpath, $newName2);

                  $image_name2 = base_url() . 'public/writable/uploads/profiles/'. $newName2;

                }else{

                    $image_name2 = $data['employee_data']['profile_image2'];

                }  



                $aadhaarfrontnewName='';

                $aadhaarfront = $this->request->getFile('aadhaarfront');

                if ($aadhaarfront->isValid() && !$aadhaarfront->hasMoved()) {

                  $aadhaarfrontnewName = $aadhaarfront->getRandomName();

                  $imgpathaadhaarfront = rtrim(WRITEPATH,"writable/"). '/public/writable/uploads/aadhaar_images';

                  if (!is_dir($imgpathaadhaarfront)) {

                      mkdir($imgpathaadhaarfront, 0777, true);

                  }



                  $aadhaarfront->move($imgpathaadhaarfront, $aadhaarfrontnewName);

                  $aadhaarfrontimage_name = base_url() . 'public/writable/uploads/aadhaar_images/'. $aadhaarfrontnewName;

                } else{

                  $aadhaarfrontimage_name = $data['aadhaar_data']['adhaar_image_front'];

                }

                



                $aadhaarbacknewName='';

                $aadhaarback = $this->request->getFile('aadhaarback');

                if ($aadhaarback->isValid() && !$aadhaarback->hasMoved()) {

                  $aadhaarbacknewName = $aadhaarback->getRandomName();

                  $imgpathaadhaarback = rtrim(WRITEPATH,"writable/"). '/public/writable/uploads/aadhaar_images';

                  if (!is_dir($imgpathaadhaarback)) {

                      mkdir($imgpathaadhaarback, 0777, true);

                  }



                  $aadhaarback->move($imgpathaadhaarback, $aadhaarbacknewName);

                  $aadhaarbackimage_name = base_url() . 'public/writable/uploads/aadhaar_images/'. $aadhaarbacknewName;

                } else{

                  $aadhaarbackimage_name = $data['aadhaar_data']['adhaar_image_back'];

                }

                



                $upinewName='';

                $upi = $this->request->getFile('upi_id');

                if ($upi->isValid() && !$upi->hasMoved()) {

                  $upinewName = $upi->getRandomName();

                  $imgpathupi = rtrim(WRITEPATH,"writable/"). '/public/writable/uploads/upi';

                  if (!is_dir($imgpathupi)) {

                      mkdir($imgpathupi, 0777, true);

                  }



                  $upi->move($imgpathupi, $upinewName);

                  $upiimage_name = base_url() . 'public/writable/uploads/upi/'. $upinewName;

                } else{

                  $upiimage_name = $data['employee_data']['upi_id'];

                }



                if($this->request->getVar('approve') == 1){

                    $status = 'Active';

                  }else{

                      $status = 'Inactive';

                  }

    

              $this->employeeModel->update($id,[

                'company_id'  =>  $this->request->getVar('company_name'),

                  'branch_id' =>  $this->request->getVar('office_location'),

                  'name'  =>  $this->request->getVar('name'),

                  'mobile'  =>  $request->getPost('mobile'),

                  'email' =>  $request->getPost('email'),

                  'bank_account_number' =>  $request->getPost('bank_account_number'),

                  'bank_ifsc_code'  =>  $request->getPost('bank_ifsc_code'),

                  'upi_id'  =>  $upiimage_name,

                  'profile_image1'  =>  $image_name1,

                  'profile_image2'  =>  $image_name2,

                  'joining_date'  =>  $request->getPost('joiningdate'),

                  'status'                  =>  $status,

                  'approved'                =>  $this->request->getVar('approve'),

                  'approval_user_id'        =>  isset($user['id'])?$user['id']:'',

                  'approval_user_type'      =>  isset($user['usertype'])?$user['usertype']:'',

                  'approval_date'           =>  date("Y-m-d h:i:sa"),

                  'approval_ip_address'     =>  $_SERVER['REMOTE_ADDR'],

                  'updated_at'              =>  date("Y-m-d h:i:sa"),

              ]);

              $update_id = $data['employee_data']['adhaar_number_map_id'];

              $this->aadhaarModel->update($update_id,[

                  'adhaar_number'  =>  $request->getPost('aadhaar'),

                  'adhaar_image_front' => $aadhaarfrontimage_name,

                  'adhaar_image_back'   =>  $aadhaarbackimage_name,

                  'updated_at'  =>  date("Y-m-d h:i:sa"),

              ]);

            }else{

                $this->validator->setError('aadhaar', 'The Aadhaar must contain a unique value.');

                $data['error']  = $this->validator;

                return view( 'Employee/edit_employee',$data );

                return false;

              }

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

          $this->employeeModel->where('id', $id)->delete($id);

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

          

            

          $data['company'] = $this->companyModel->where(['status'=>'Active'])->orderBy('name')->findAll();



          $data['employee_data'] = $this->employeeModel->where('id', $id)->first();

          $data['aadhaar_data'] = $this->aadhaarModel->where('id', $data['employee_data']['adhaar_number_map_id'])->first();

          $data['office_data'] = $this->officeModel->where('id', $data['employee_data']['branch_id'])->first();

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

          $user = $this->user->where('id', $login_id)->first();

          $this->employeeModel->update($id,[

              'approved'              =>  1,

              'approval_user_id'      =>  $user['id'],

              'approval_user_type'    =>  $user['usertype'],

              'approval_date'         =>  date("Y-m-d h:i:sa"),

              'approval_ip_address'   =>  $_SERVER['REMOTE_ADDR'],

              'status'  => 'Active',

          ]);

          

          $session = \Config\Services::session();

          $session->setFlashdata('success', 'Employee Approved');

          return $this->response->redirect(site_url('/employee'));

      }

  }





  public function getOfficeLocations()

    {



        $companyId = $this->request->getPost('company_id');

        $officeLocations = $this->officeModel->where('company_id', $companyId)->orderBy('name')->findAll();



        return $this->response->setJSON($officeLocations);

    }

}

?>