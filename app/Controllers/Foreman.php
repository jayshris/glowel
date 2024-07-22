<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;
use App\Models\ModulesModel;
use App\Models\ForemanModel;
use App\Models\StateModel;
use App\Models\AadhaarNumberMapModule;


class Foreman extends BaseController
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
            $foremanModel = new ForemanModel();
            $data['foreman_data'] = $foremanModel->orderBy('id', 'DESC')->paginate(50);
            $data['pagination_link'] = $foremanModel->pager;
            $data['page_data'] = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Foreman','li_1' => '123','li_2' => 'deals' ] )
            ];
            return view('Foreman/index',$data); 
    }

    public function create()
    { 
              helper(['form', 'url']);
              $data ['page_data']= [
                'page_title' => view( 'partials/page-title', [ 'title' => 'Add Driver','li_2' => 'profile' ] )
                ];
                $stateModel = new StateModel();
                $data['state'] = $stateModel->where(['isStatus'=>'1'])->orderBy('state_id')->findAll();
                $request = service('request');
                if($this->request->getMethod()=='POST'){
                  $error = $this->validate([
                    'name'	                  =>  'required|alpha_numeric',
                    'mobile'                  =>  'required|numeric',
                    'adhaar_number'           =>  'required|alpha_numeric|is_unique[adhaar_number_map.adhaar_number]',
                    'email'                   => 'valid_email',
                  ]);

                  if(!$error){
                    $data['error'] 	= $this->validator;
                  }else {
                    $foremanModel = new ForemanModel();
                    $newName1='';
                    $image1 = $this->request->getFile('profile_image1');
                    if ($image1->isValid() && !$image1->hasMoved()) {
                            $newName1 = $image1->getRandomName();
                              $imgpath1 = rtrim(WRITEPATH,"writable").'uploads/foreman_profiles'; 
                            if (!is_dir($imgpath1)) {
                                mkdir($imgpath1, 0777, true);
                            }
                            $image1->move($imgpath1, $newName1);
                    }
                    $image_name1 = 'writable/uploads/foreman_profiles/'.$newName1; 
                    $newName2='';
                    $image2 = $this->request->getFile('profile_image2');
                    if ($image2->isValid() && !$image2->hasMoved()) {
                        $newName2 = $image2->getRandomName();
                        $imgpath2 = rtrim(WRITEPATH,"writable"). 'uploads\foreman_profiles';
                        if (!is_dir($imgpath2)) {
                            mkdir($imgpath2, 0777, true);
                        }
                        $image2->move($imgpath2, $newName2);
                    } 
                    $image_name2 = 'writable/uploads/foreman_profiles/'.$newName2;

                    $newName3='';
                    $image3 = $this->request->getFile('adhaar_image_front');
                    if ($image3->isValid() && !$image3->hasMoved()) {
                        $newName3 =  $image3->getRandomName();
                        
                        $imgpath3 = rtrim(WRITEPATH,"writable"). 'uploads\aadhaar_images';
                        if (!is_dir($imgpath3)) {
                            mkdir($imgpath3, 0777, true);
                        }
                        $image3->move($imgpath3, $newName3);
                    } 
                    $image_name3 = 'writable/uploads/aadhaar_images/'. $newName3;
                    
                    $newName4='';
                    $image4 = $this->request->getFile('adhaar_image_back');
                    if ($image4->isValid() && !$image4->hasMoved()) {
                        $newName4 =  $image4->getRandomName();
                        $imgpath4 = rtrim(WRITEPATH,"writable"). 'uploads\aadhaar_images';
                        if (!is_dir($imgpath4)) {
                            mkdir($imgpath4, 0777, true);
                        }
                        $image4->move($imgpath4, $newName4);
                    } 
                    $image_name4 = base_url() . 'writable/uploads/aadhaar_images/'. $newName4;
                    
                    $newName5='';
                    $image5 = $this->request->getFile('upi_id');
                    if ($image5->isValid() && !$image5->hasMoved()) {
                        $newName5 =  $image5->getRandomName();
                        $imgpath5 = rtrim(WRITEPATH,"writable"). 'uploads\upi';
                        if (!is_dir($imgpath5)) {
                            mkdir($imgpath5, 0777, true);
                        }
                        $image5->move($imgpath5, $newName5);
                    } 
                    $image_name5 = base_url() . 'writable/uploads/upi/'. $newName5;

                  $foremanModel->save([
                      'name'	=>	$this->request->getVar('name'),
                      'email'	=>	$this->request->getVar('email'),
                      'mobile'	=>	 $request->getPost('mobile'),
                      'bank_account_number'=>$request->getPost('bank_account_number'),
                      'bank_ifsc_code'=>$request->getPost('bank_ifsc_code'),
                      'adhaar_number'   =>  $request->getPost('adhaar_number'),
                      'status'	=>	$request->getPost('status'),
                      'profile_image1'  =>  $image_name1, 
                      'profile_image2'  => $image_name2, 
                       'upi_id'    =>  $image_name5,
                      'created_at'  =>  date("Y-m-d h:i:sa"),
                    ]);

                    $user_id = $foremanModel->getInsertID();
                    $aadhar =  new AadhaarNumberMapModule();
                    $aadhar->save([
                      'user_type'	        =>	'foreman',
                      'user_id'             =>  $user_id,
                      'adhaar_number'       =>  $request->getPost('adhaar_number'),
                      'adhaar_image_front'  =>  $image_name3,
                      'adhaar_image_back'   =>  $image_name4
                    ]);
                    $session = \Config\Services::session();
                    $session->setFlashdata('success', 'Foreman Added');
                    return $this->response->redirect(site_url('/foreman'));
                  }
                }
                return view( 'Foreman/create',$data );
           
    }

    public function edit($id = null)
    { 
                $foremanModel = new ForemanModel();
                $data['foreman_data'] = $foremanModel->where('id', $id)->first();

                helper(['form', 'url']);
                $data ['page_data']= [
                    'page_title' => view( 'partials/page-title', [ 'title' => 'Add Driver','li_2' => 'profile' ] )
                ];
                $stateModel = new StateModel();
                $data['state'] = $stateModel->where(['isStatus'=>'1'])->orderBy('state_id')->findAll();
                
                $aadhaarModel = new AadhaarNumberMapModule();
                $request = service('request');
                if($this->request->getMethod()=='POST'){
                $id = $this->request->getVar('id'); 
                  $error = $this->validate([
                    'name'	                  =>  'required|alpha_numeric',
                    'mobile'                  =>  'required|numeric',
                    'adhaar_number'           =>  'required|alpha_numeric|is_unique[adhaar_number_map.adhaar_number]',
                    'email'                   => 'valid_email',
                  ]);

                  if(!$error){
                    $data['error'] 	= $this->validator;
                  }else {
                    
                    $amodel = $aadhaarModel->where('user_id', $id)->first();

                    $newName1='';
                    $image1 = $this->request->getFile('profile_image1');
                    if(isset($image1)){
                        if ($image1->isValid() && !$image1->hasMoved()) {
                                $newName1 = $image1->getRandomName();
                                $imgpath1 = rtrim(WRITEPATH,"writable").'uploads/foreman_profiles'; 
                                if (!is_dir($imgpath1)) {
                                    mkdir($imgpath1, 0777, true);
                                }
                                $image1->move($imgpath1, $newName1);
                        }
                        $image_name1 = 'writable/uploads/foreman_profiles/'.$newName1; 
                    }else{
                        $image_name1 = $data['foreman_data']['profile_image1'] ;
                    }
                    $newName2='';
                    
                    $image2 = $this->request->getFile('profile_image2');
                    if(isset($image2)){
                        if ($image2->isValid() && !$image2->hasMoved()) {
                            $newName2 = $image2->getRandomName();
                            $imgpath2 = rtrim(WRITEPATH,"writable"). 'uploads\foreman_profiles';
                            if (!is_dir($imgpath2)) {
                                mkdir($imgpath2, 0777, true);
                            }
                            $image2->move($imgpath2, $newName2);
                        } 
                        $image_name2 = 'writable/uploads/foreman_profiles/'.$newName2;
                    }else{
                        $image_name2 = $data['foreman_data']['profile_image2'] ;
                    }    
                    $newName3='';
                    $image3 = $this->request->getFile('adhaar_image_front');
                    if(isset($image3)){
                        if ($image3->isValid() && !$image3->hasMoved()) {
                            $newName3 =  $image3->getRandomName();
                            
                            $imgpath3 = rtrim(WRITEPATH,"writable"). 'uploads\aadhaar_images';
                            if (!is_dir($imgpath3)) {
                                mkdir($imgpath3, 0777, true);
                            }
                            $image3->move($imgpath3, $newName3);
                        } 
                        $image_name3 = 'writable/uploads/aadhaar_images/'. $newName3;
                    }else{
                        $image_name3  = $amodel['adhaar_image_front'];
                    }    
                    $newName4='';
                    $image4 = $this->request->getFile('adhaar_image_back');
                    if(isset($image4)){
                        if ($image4->isValid() && !$image4->hasMoved()) {
                            $newName4 =  $image4->getRandomName();
                            $imgpath4 = rtrim(WRITEPATH,"writable"). 'uploads\aadhaar_images';
                            if (!is_dir($imgpath4)) {
                                mkdir($imgpath4, 0777, true);
                            }
                            $image4->move($imgpath4, $newName4);
                        } 
                        $image_name4 = base_url() . 'writable/uploads/aadhaar_images/'. $newName4;
                    }else{
                        $image_name4  = $amodel['image_name4'];
                    }   

                    

                    $newName5='';
                    $image5 = $this->request->getFile('upi_id');
                    if(isset($image5)){
                        if ($image5->isValid() && !$image5->hasMoved()) {
                            $newName5 =  $image5->getRandomName();
                            $imgpath5 = rtrim(WRITEPATH,"writable"). 'uploads\upi';
                            if (!is_dir($imgpath5)) {
                                mkdir($imgpath5, 0777, true);
                            }
                            $image5->move($imgpath5, $newName5);
                        } 
                        $image_name5 = base_url() . 'writable/uploads/upi/'. $newName5;
                    }else{
                        $image_name5  = $fModel['upi_id'];
                    }

                    $foremanModel->update($id,[
                      'name'	=>	$this->request->getVar('name'),
                      'email'	=>	$this->request->getVar('email'),
                      'mobile'	=>	 $request->getPost('mobile'),
                      'bank_account_number'=>$request->getPost('bank_account_number'),
                      'bank_ifsc_code'=>$request->getPost('bank_ifsc_code'),
                      'adhaar_number'   =>  $request->getPost('adhaar_number'),
                      'status'	=>	$request->getPost('status'),
                      'profile_image1'  =>  $image_name1, 
                      'profile_image2'  => $image_name2, 
                       'upi_id'    =>  $image_name5,
                      'updated_at'  =>  date("Y-m-d h:i:sa"),
                    ]);
                    if(isset($id)){
                        $amodel= $aadhaarModel->where('user_id', $id)->first();
                        if(isset($amodel)){
                            $aadhar_id = $amodel['id'];
                            $aadhaarModel->update($aadhar_id,[
                              'adhaar_number' =>  $request->getPost('adhaar_number'),
                              'adhaar_image_front' => $image_name3,
                              'adhaar_image_back'   =>  $image_name4
                            ]);
                        }
                    }

                    $session = \Config\Services::session();
                    $session->setFlashdata('success', 'Foreman updated');
                    return $this->response->redirect(site_url('/foreman'));
                }
            }
                return view( 'Foreman/edit',$data );
        
    }

    public function approve($id=null){ 
            if (session()->get('isLoggedIn')) {
                $login_id= session()->get('id');
            }
            $user = new UserModel();
            $user = $user->where('id', $login_id)->first();
            $foremanModel = new ForemanModel();
            $foremanModel->update($id,[
                'approved'              =>  1,
                'approval_user_id'      =>  $user['id'],
                'approval_user_type'    =>  $user['usertype'],
                'approval_date'         =>  date("Y-m-d h:i:sa"),
                'approval_ip_address'   =>  $_SERVER['REMOTE_ADDR']
            ]);
            
            $session = \Config\Services::session();
            $session->setFlashdata('success', 'Foreman Approved');
            return $this->response->redirect(site_url('/foreman'));
         
    }

    public function delete($id){ 
            $foremanModel = new ForemanModel();
            $foremanModel->where('id', $id)->delete($id);
          $session = \Config\Services::session();
          $session->setFlashdata('success', 'Foreman Deleted');
          return $this->response->redirect(site_url('/foreman')); 
      }
}
