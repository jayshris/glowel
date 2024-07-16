<?php

namespace App\Controllers;
use App\Models\ProfileModel;
use App\Models\StateModel;
use App\Models\UserModel;
use App\Models\ModulesModel;

class Profile extends BaseController
{
    public $_access;

    public function __construct()
    {
        $u = new UserModel();
        $access = $u->setPermission();
        $this->_access = $access; 
    }

    public function index(){
      
      $access = $this->_access; 
      if($access === 'false'){
        $session = \Config\Services::session();
        $session->setFlashdata('error', 'You are not permitted to access this page');
        return $this->response->redirect(site_url('/dashboard'));
      }else{
          if (session()->get('isLoggedIn')) {
            $login_id= session()->get('id');
            $ProfileModel = new ProfileModel();
          $this->view['profile_data'] = $ProfileModel->where(['logged_in_userid'=>$login_id])->first(); 
          // echo $login_id.'<pre>';print_r($this->view['profile_data'] );die;
          }
          
          $this->view['page_title'] = view('partials/page-title', [ 'title' => 'Profile','li_2' => 'profile' ] );
          $stateModel = new StateModel();
          $this->view['state'] = $stateModel->where(['isStatus'=>'1'])->orderBy('state_id')->findAll(); 
          return view( 'profile',$this->view );
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
            
              $validation = \Config\Services::validation();
              $rules = [
                'company_name' => ['rules' => 'required|trim|regex_match[^[a-zA-Z0-9\s]*$]',
                'errors' => [
                        'regex_match' => 'The Company Name field only contain alphanumeric characters.',
                    ]],
                'abbreviation' => ['rules' => 'required|trim|regex_match[^[a-zA-Z0-9\s]*$]',
                'errors' => [
                        'regex_match' => 'The Abbreviation field only contain alphanumeric characters.',
                    ]],
                'email'  => ['rules' => 'required'],
                'phone_number'  => ['rules' => 'required|numeric'],
                'gst'  => ['rules' => 'required|alpha_numeric'],
                'pan_no'  => ['rules' => 'required|alpha_numeric'],
              ];
              if($this->validate($rules)){
                  $profilemodel = new ProfileModel(); 
                  $image = $this->request->getFile('company_logo');
                  $imgpath = 'public/uploads/profiles';
                  if($this->request->getFile('company_logo')->getSize() > 0){
                    if ($image->isValid() && !$image->hasMoved()) {
                      $newName = $image->getRandomName();
                      // $imgpath = rtrim(WRITEPATH,"writable"). 'uploads\profiles'; 
                      if (!is_dir($imgpath)) {
                          mkdir($imgpath, 0777, true);
                      }
  
                      $image->move($imgpath, $newName);
                    } 
                    // $image_name = base_url() . 'writable/uploads/profiles/'. $newName;
                    $image_name = base_url() .$imgpath.'/'. $newName;
                    $profiledata['company_logo']=$image_name; 
                  }
                  
                  $session = \Config\Services::session();
                  $profiledata['logged_in_userid'] = session()->get('id'); 
                  $profiledata['company_name'] = $this->request->getVar('company_name');
                  $profiledata['abbreviation'] = $this->request->getVar('abbreviation');
                  $profiledata['email'] = $this->request->getVar('email');
                  $profiledata['phone_number'] = $this->request->getVar('phone_number');
                  $profiledata['gst'] = $this->request->getVar('gst');
                  $profiledata['pan_no'] =  $this->request->getVar('pan_no');
                  $profiledata['company_business_address'] = $this->request->getVar('company_business_address');
                  $profiledata['country'] = $this->request->getVar('country');
                  $profiledata['state'] = $this->request->getVar('state');
                  $profiledata['city'] = $this->request->getVar('city');
                  $profiledata['pincode'] = $this->request->getVar('pincode');
                  $profiledata['purchase_order_prefix'] = $this->request->getVar('purchase_order_prefix');
                  $profiledata['invoice_prefix'] = $this->request->getVar('invoice_prefix');
                  $profiledata['created_at'] = date("Y-m-d h:i:sa");  

                  // echo  '<pre>';print_r($profiledata);die;
                  if($this->request->getVar('id') >0 ){
                    $profilemodel->update($this->request->getVar('id'),$profiledata); 
                  }else{
                    $profilemodel->save($profiledata); 
                  }
                 
                  $session->setFlashdata('success', 'Profile Added');
                  return redirect()->to('/profile');
              }else{
                if (session()->get('isLoggedIn')) {
                  $login_id= session()->get('id');
                  $ProfileModel = new ProfileModel();
                  $this->view['profile_data'] = $ProfileModel->where(['logged_in_userid'=>$login_id])->first();  
                }
                $stateModel = new StateModel();
                $this->view['state'] = $stateModel->where(['isStatus'=>'1'])->orderBy('state_id')->findAll(); 
                $this->view['validation'] = $this->validator;
                return view('profile', $this->view);
              }
          }
      }
    }
    
 
}
