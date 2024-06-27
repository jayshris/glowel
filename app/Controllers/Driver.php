<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\DriverModel;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\StateModel;
use App\Models\ForemanModel;
use App\Models\AadhaarNumberMapModule;
use App\Models\PartyModel;
use App\Models\VehicleTypeModel;
use App\Models\PartytypeModel;
use App\Models\PartyTypePartyModel;
use App\Models\DriverVehicleType;

class Driver extends BaseController
{
    public $_access;

    public function __construct()
    {
        $u = new UserModel();
        $access = $u->setPermission();
        $this->_access = $access; 
        $this->partyModel = new PartyModel();
        $this->partyTypeModel = new PartytypeModel();
        $this->partyTypePartyModel = new PartyTypePartyModel();
        $this->vehicletypeDriver =  new DriverVehicleType();
        $this->vehicletype = new VehicleTypeModel();
    }

    public function index()
    {
        $userModel = new UserModel();
        $data['driver'] = $userModel->where('usertype','driver')->orderBy('id', 'DESC')->paginate(10);
        $driverModel = new DriverModel();
        $data['driver_data'] = $driverModel->orderBy('id', 'DESC')->paginate(10);
        $data['pagination_link'] = $userModel->pager;
        $data['page_data'] = [  'page_title' => view( 'partials/page-title', [ 'title' => 'Driver','li_1' => '123','li_2' => 'deals' ] ) ];
        return view('Driver/index',$data);
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
                'page_title' => view( 'partials/page-title', [ 'title' => 'Add Driver','li_2' => 'profile' ] )
                ];

                $stateModel = new StateModel();
                $data['state'] = $stateModel->where(['isStatus'=>'1'])->orderBy('state_id')->findAll();
                $data['partytpe'] = $this->partyTypeModel->like('name','%Driver%')->first();
                if(isset($data['partytpe'])){
                  $data['party_map_data']= $this->partyTypePartyModel->where(['party_type_id'=>$data['partytpe']['id']])->findAll();
                }
                
                $data['vehicletypes'] = $this->vehicletype->where('status','Active')->findAll();
                
                //print_r($data['vehicletypes']); die;
                $foremanModel = new ForemanModel();
                $data['foreman'] = $foremanModel->where(['status'=>'Active'])->findAll();
                $request = service('request');
                if($this->request->getMethod()=='POST'){
                  $error = $this->validate([
                    'name'	                  =>	'required|regex_match[/^[a-z\d\-_\s]+$/i]',
                    'foreman_id'              =>  'required',
                    'driver_type'             =>  'required',
                    'driving_licence_number'  =>  'required|alpha_numeric|trim|is_unique[driver.driving_licence_number]',
                    'mobile'                  =>  'required|numeric',
                    'vehicle_types'            =>  'required',
                    //'adhaar_number'           =>  'required|alpha_numeric|is_unique[adhaar_number_map.adhaar_number]',
                    // 'adhaar_image_front'      =>  'required',
                    // 'adhaar_image_back'       =>  'required'
                  ]);
                  if(!$error){
                    $data['error'] 	= $this->validator;
                  }else {
                    $driverModel = new DriverModel();
                  $newName1='';
                  $image1 = $this->request->getFile('profile_image1');
                  if ($image1->isValid() && !$image1->hasMoved()) {
                      $newName1 = $image1->getRandomName();
                      $imgpath1 = rtrim(WRITEPATH,"writable/"). '/public/writable/uploads/driver_profiles';
                      if (!is_dir($imgpath1)) {
                          @mkdir($imgpath1, 0777, true);
                      }

                      $image1->move($imgpath1, $newName1);
                  } 
                  $image_name1 = base_url() . 'public/writable/uploads/driver_profiles/'. $newName1;

                  $newName2='';
                  $image2 = $this->request->getFile('profile_image2');
                  if ($image2->isValid() && !$image2->hasMoved()) {
                      $newName2 = $image2->getRandomName();
                      $imgpath1 = rtrim(WRITEPATH,"writable/"). '/public/writable/uploads/driver_profiles';
                      if (!is_dir($imgpath2)) {
                          @mkdir($imgpath2, 0777, true);
                      }
                      $image2->move($imgpath1, $newName2);
                  } 

                  $image_name2 = base_url() . 'public/writable/uploads/driver_profiles/'. $newName2;
                  $newName3='';
                  $image3 = $this->request->getFile('adhaar_image_front');
                  if ($image3->isValid() && !$image3->hasMoved()) {
                      $newName3 =  $image3->getRandomName();
                      
                      $imgpath3 = rtrim(WRITEPATH,"writable"). 'public\writable\uploads\aadhaar_images'; 
                      if (!is_dir($imgpath3)) {
                          @mkdir($imgpath3, 0777, true);
                      }
                      $image3->move($imgpath3, $newName3);
                  } 
                   $image_name3 = base_url() . 'public/writable/uploads/aadhaar_images/'. $newName3;
                  
                  $newName4='';
                  $image4 = $this->request->getFile('adhaar_image_back');
                  if ($image4->isValid() && !$image4->hasMoved()) {
                      $newName4 =  $image4->getRandomName();
                      $imgpath4 = rtrim(WRITEPATH,"writable"). 'public\writable\uploads\aadhaar_images'; 
                      if (!is_dir($imgpath4)) {
                          @mkdir($imgpath4, 0777, true);
                      }
                      $image4->move($imgpath4, $newName4);
                  } 
                  $image_name4 = base_url() . 'public/writable/aadhaar_images/'. $newName4;
                  
                  $newName5='';
                  $image5 = $this->request->getFile('upi_id');
                  if ($image5->isValid() && !$image5->hasMoved()) {
                      $newName5 =  $image5->getRandomName();
                      $imgpath5 = rtrim(WRITEPATH,"writable/"). 'public\writable\uploads\upi'; 
                      if (!is_dir($imgpath5)) {
                          mkdir($imgpath5, 0777, true);
                      }

                      $image5->move($imgpath5, $newName5);
                  } 
                   $image_name5 = base_url() . 'public/writable/uploads/upi/'. $newName5; 

                  $driverModel->save([
                      'name'	=>	$this->request->getVar('name'),
                      'foreman_id'	=>	$this->request->getVar('foreman_id'),
                      'driver_type'	=>	 $request->getPost('driver_type'),
                      'driving_licence_number'	=>	$request->getPost('driving_licence_number'),
                      'mobile'	=>	 $request->getPost('mobile'),
                      'alternate_number'	=>	 $request->getPost('alternate_number'),
                      'adhaar_number'   =>  $request->getPost('adhaar_number'),
                      'address'	=>	 $request->getPost('address'),
                     
                      'city'	=>	 $request->getPost('city'),
                      'state'	=>	$request->getPost('state'),
                      'zip'	=>	$request->getPost('zip'),
                      'status'	=>	'Inactive',
                      'profile_image1'  =>  $image_name1, 
                      'profile_image2'  => $image_name2, 
                      'upi_id'    =>  $image_name5,
                      'created_at'  =>  date("Y-m-d h:i:sa"),
                    ]);                   

                    $user_id = $driverModel->getInsertID();
                    $aadhar =  new AadhaarNumberMapModule();
                    $aadhar->save([
                      'user_type'	          =>	'driver',
                      'user_id'             =>  $user_id,
                      'adhaar_number'       =>  $request->getPost('adhaar_number'),
                      'adhaar_image_front'  =>  $image_name3,
                      'adhaar_image_back'   =>  $image_name4
                    ]);
                    $vehicle= $this->request->getVar('vehicle_types');
                    foreach ($vehicle as $key => $value) {
                      $vehicledata=[
                              'vehicle_type_id' =>  $value,
                              'driver_id'       =>  $user_id,     
                      ];  
                      $this->vehicletypeDriver->save($vehicledata);   
                    }

                    $session = \Config\Services::session();
                    $session->setFlashdata('success', 'Driver Added');
                    return $this->response->redirect(site_url('/driver'));
                  }
                }
                return view( 'Driver/create',$data );
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
            
            if (session()->get('isLoggedIn')) {
              $login_id= session()->get('id');
            }
            if(isset($login_id)){
              $user = new UserModel();
              $user = $user->where('id', $login_id)->first();
            }
            $stateModel = new StateModel();
            $data['state'] = $stateModel->where(['isStatus'=>'1'])->orderBy('state_id')->findAll();
            
            $data['partytpe'] = $this->partyTypeModel->like('name','%Driver%')->first();
            $data['party_map_data']= $this->partyTypePartyModel->where(['party_type_id'=>$data['partytpe']['id']])->findAll();
            $foremanModel = new ForemanModel();
            $data['foreman'] = $foremanModel->where(['status'=>'Active'])->findAll();
            $driverModel = new DriverModel();
            $data['driver_data'] = $driverModel->where('id', $id)->first();
            $aadhaarModel = new AadhaarNumberMapModule();
            $data['aadhaar_data'] = $aadhaarModel->where('user_id', $id)->first();
            
            $data['vehicletypes'] = $this->vehicletype->where('status','Active')->findAll();
            $data['vehicletypesdriver'] = $this->vehicletypeDriver->where('driver_id', $id)->findAll();
              $request = service('request');
              if($this->request->getMethod()=='POST'){
                $id = $this->request->getVar('id');
                $error = $this->validate([
                  'name'	                  =>	'required',
                  'foreman_id'              =>  'required',
                  'driver_type'             =>  'required',
                  'driving_licence_number'  =>  'required|alpha_numeric|trim',
                  'vehicle_types'            =>  'required',
                  //'adhaar_number'           =>  'required|alpha_numeric'
                ]);
                if(!$error) {
                  $data['error'] 	= $this->validator;
                }else {
                  $driverModel = new DriverModel();
                  $dModel= $driverModel->where('id', $id)->first();
                  $amodel =  $aadhaarModel->where('user_id', $id)->first();
                  $newName1='';
                  $image1 = $this->request->getFile('profile_image1');
                  if(isset($image1)){
                    if ($image1->isValid() && !$image1->hasMoved()) {
                      $newName1 = $image1->getRandomName();
                      //$imgpath1 = rtrim(WRITEPATH,"writable\\"). '\uploads\driver_profiles';
                      $imgpath1 = rtrim(WRITEPATH). 'uploads\driver_profiles';
                      if (!is_dir($imgpath1)) {
                          mkdir($imgpath1, 0777, true);
                      }
                      $image1->move($imgpath1, $newName1);
                    } 
                      $image_name1 = 'writable/uploads/driver_profiles/'. $newName1;
                  }else{
                    $image_name1  = $dModel['profile_image1'];
                  }
                  $newName2='';
                  $image2 = $this->request->getFile('profile_image2');
                  if(isset($image1)){
                    if ($image2->isValid() && !$image2->hasMoved()) {
                        $newName2 = $image2->getRandomName();
                      $imgpath2 = rtrim(WRITEPATH,"writable\\"). '\public\writable\uploads\driver_profiles';
                        if (!is_dir($imgpath2)) {
                            mkdir($imgpath2, 0777, true);
                        }
                        $image2->move($imgpath1, $newName2);
                    } 
                  $image_name2 = 'writable/uploads/driver_profiles/'. $newName2;
                  }else{
                    $image_name2  = $dModel['profile_image2'];
                  }  
                  $newName3='';
                  $image3 = $this->request->getFile('adhaar_image_front');
                  if(isset($image3)){
                    if ($image3->isValid() && !$image3->hasMoved()) {
                        $newName3 =  $image3->getRandomName();
                        
                      $imgpath3 = rtrim(WRITEPATH,"writable\\"). '\public\writable\uploads\aadhaar_images';
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
                      $imgpath4 = rtrim(WRITEPATH,"writable\\"). '\public\writable\uploads\aadhaar_images';
                        if (!is_dir($imgpath4)) {
                            mkdir($imgpath4, 0777, true);
                        }
                        $image4->move($imgpath4, $newName4);
                    } 
                  $image_name4 = base_url() . 'writable/uploads/aadhaar_images/'. $newName4;
                  }else{
                    $image_name4  = $amodel['adhaar_image_back'];
                  }
                  $newName5='';
                  $image5 = $this->request->getFile('upi_id');
                  if(isset($image5)){
                      if ($image5->isValid() && !$image5->hasMoved()) {
                          $newName5 =  $image5->getRandomName();
                      $imgpath5 = rtrim(WRITEPATH,"writable\\"). '\public\writable\uploads\upi';
                          if (!is_dir($imgpath5)) {
                              mkdir($imgpath5, 0777, true);
                          }
                          $image5->move($imgpath5, $newName5);
                      }
                  $image_name5 = base_url() . 'writable/uploads/upi/'. $newName5;
                  }
                  if($this->request->getVar('approve') == 1){
                    $status = 'Active';
                  }else{
                      $status = 'Inactive';
                  }
                  $driverModel->update($id,[
                      'name'	                  =>	$this->request->getVar('name'),
                      'foreman_id'	            =>	$this->request->getVar('foreman_id'),
                      'driver_type'	            =>	$request->getPost('driver_type'),
                      'driving_licence_number'	=>	$request->getPost('driving_licence_number'),
                      'mobile'	                =>	$request->getPost('mobile'),
                      'alternate_number'	      =>	$request->getPost('alternate_number'),
                      'adhaar_number'           =>  $request->getPost('adhaar_number'),
                      'address'	                =>	$request->getPost('address'),
                      'vehicle_type'            =>  $request->getPost('vehicle_type'),
                      'city'	                  =>	$request->getPost('city'),
                      'state'	                  =>	$request->getPost('state'),
                      'zip'	                    =>	$request->getPost('zip'),
                      'profile_image1'          =>  $image_name1, 
                      'profile_image2'          =>  $image_name2, 
                      'upi_id'                  =>  $image_name5,
                      'status'	                =>	$status,
                      'approved'                =>  $this->request->getVar('approve'),
                      'approval_user_id'        =>  isset($user['id'])?$user['id']:'',
                      'approval_user_type'      =>  isset($user['usertype'])?$user['usertype']:'',
                      'approval_date'           =>  date("Y-m-d h:i:sa"),
                      'approval_ip_address'     =>  $_SERVER['REMOTE_ADDR'],
                      'updated_at'              =>  date("Y-m-d h:i:sa"),
                  ]);
                  $amodel= $aadhaarModel->where('user_id', $id)->first();
                  if (isset($amodel)) {
                    $aadhar_id = $amodel['id'];
                    $aadhaarModel->update($aadhar_id,[
                      'adhaar_number' =>  $request->getPost('adhaar_number'),
                      'adhaar_image_front' => $image_name3,
                      'adhaar_image_back'   =>  $image_name4
                    ]);
                  }
                  $session = \Config\Services::session();
                  $session->setFlashdata('success', 'Driver updated');
                  return $this->response->redirect(site_url('/driver'));
                }
              }

              return view('Driver/edit', $data);
          }
      }

    public function delete($id){
      $access = $this->_access; 
      if($access === 'false'){
        $session = \Config\Services::session();
        $session->setFlashdata('error', 'You are not permitted to access this page');
        return $this->response->redirect(site_url('/dashboard'));
      }else{ 
        $driverModel = new DriverModel();
        $driverModel->where('id', $id)->delete($id);
        $session = \Config\Services::session();
        $session->setFlashdata('success', 'Driver Deleted');
        return $this->response->redirect(site_url('/driver'));
      }
    }
    public function view($id=null){
      $access = $this->_access; 
          if($access === 'false'){
            $session = \Config\Services::session();
            $session->setFlashdata('error', 'You are not permitted to access this page');
            return $this->response->redirect(site_url('/dashboard'));
          }else{
              $driverModel = new DriverModel();
              $data['driver_data'] = $driverModel->where('id', $id)->first();
              
              return view('Driver/view', $data);
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
          $driverModel = new DriverModel();
          $driverModel->update($id,[
              'approved'              =>  1,
              'approval_user_id'      =>  $user['id'],
              'approval_user_type'    =>  $user['usertype'],
              'approval_date'         =>  date("Y-m-d h:i:sa"),
              'approval_ip_address'   =>  $_SERVER['REMOTE_ADDR']
          ]);
          
          $session = \Config\Services::session();
          $session->setFlashdata('success', 'Driver Approved');
          return $this->response->redirect(site_url('/foreman'));
      }
    }

    public function populate_fields_data(){
      if(isset($_POST['party_id'])){
        $party = $this->partyModel->where('id',$_POST['party_id'])->first();
        $mobile =  $party['primary_phone'];
        $other_phone = $party['other_phone'];
        $aadhaar = $party['aadhaar'];

        if(isset($_POST['driver_id'])){
          $driver = new DriverModel();
          $driver = $driver->where('id',$_POST['driver_id'])->first();
          if(isset($driver['mobile'])){
            $mobile = $driver['mobile'];
          }else{
            $mobile = $party['primary_phone'];
          }
          if(isset($driver['alternate_number'])){
            $other_phone = $driver['alternate_number'];
          }else{
            $other_phone = $party['other_phone'];
          }
          if(isset($driver['adhaar_number'])){
            $aadhaar = $driver['adhaar_number'];
          }else{
            $aadhaar = $party['aadhaar'];
          }
        }
        
        if(isset($party)){
            echo '<div class="row"><div class="col-md-6">
                  <div class="form-wrap">
                    <label class="col-form-label">
                      Phone number
                    </label>
                    <input readonly type="text" required name="mobile" class="form-control" value="'.  $mobile.'">
                  </div>
                </div>
                
                
                <div class="col-md-6">
                  <div class="form-wrap">
                    <label class="col-form-label">
                      Alternate number
                    </label>
                    <input readonly type="text"  name="alternate_number" class="form-control" value="'. $other_phone.'">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-wrap">
                    <label class="col-form-label">
                      Aadhaar number 
                    </label>
                    <input readonly type="text" required name="adhaar_number" class="form-control" value="'.$aadhaar.'">
                  </div>
                </div></div>
        ';
         }
      }
    }
}
