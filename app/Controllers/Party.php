<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\FlagsModel;
use App\Models\PartyModel;
use App\Models\StateModel;
use App\Models\PartytypeModel;
use App\Models\BusinessTypeModel;
use App\Controllers\BaseController;
use App\Models\PartyDocumentsModel;
use App\Models\PartyTypePartyModel;
use App\Models\BusinessTypeFlagModel;
use CodeIgniter\HTTP\ResponseInterface;

class Party extends BaseController
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
    if ($access === 'false') {
      $session = \Config\Services::session();
      $session->setFlashdata('error', 'You are not permitted to access this page');
      return $this->response->redirect(site_url('/dashboard'));
    } else {
      $partyModel = new PartyModel();
      $data['party_data'] = $partyModel->orderBy('id', 'DESC')->paginate(10);
      $data['pagination_link'] = $partyModel->pager;
      $data['page_data'] = [
        'page_title' => view('partials/page-title', ['title' => 'Party', 'li_1' => '123', 'li_2' => 'deals'])
      ];
      return view('Party/index', $data);
    }
  }

  public function edit($id = null)
  {
    $access = $this->_access;
    if ($access === 'false') {
      $session = \Config\Services::session();
      $session->setFlashdata('error', 'You are not permitted to access this page');
      return $this->response->redirect(site_url('/dashboard'));
    } else {
      $pcModel = new PartyModel();
      $data['pc_data'] = $pcModel->where('id', $id)->first();

      $partytype = new PartytypeModel();
      $data['partytype'] = $partytype->orderby('name', 'ASC')->where('status', 'Active')->findAll();
      $partyTypes = new PartyTypePartyModel();
      $data['partyTypes'] = $partyTypes->where('party_id', $id)->findAll();

       /**Add code */
       $PartyTypePartyModel = new PartyTypePartyModel();
       $party_type_ids = $PartyTypePartyModel->select('party_type_id')
         ->join('party p','p.id= party_type_party_map.party_id')
         ->join('party_type pt','pt.id= party_type_party_map.party_type_id')
         ->where('p.id', $id)->findAll(); 
       // echo '<pre>';print_r($data['pc_data']);exit;
       $data['selected_party_type_ids'] = ($party_type_ids) ? array_column($party_type_ids,'party_type_id') : [];
      /** End */
      
      $stateModel = new StateModel();
      $data['state'] = $stateModel->where(['isStatus' => '1'])->orderBy('state_id')->findAll();
      $businesstypeModel = new BusinessTypeModel();
      $data['businesstype'] = $businesstypeModel->orderBy('id')->findAll();
      $request = service('request');
      if ($this->request->getMethod() == 'POST') {
        $id = $this->request->getVar('id');

        $error = $this->validate([
          'party_name'                =>  'required|trim|regex_match[/^[a-z\d\-_\s]+$/i]',
          'party_type_id'              =>  'required',
          'primary_phone'             =>  'required|numeric'
        ]);
        if (!$error) {
          $data['error']   = $this->validator;
        } else {
          // echo '<pre>';print_r($this->request->getVar());
          // echo '<pre>';print_r($_FILES);// exit;

          
          $pcModel = new PartyModel();
          $pcModel->update($id, [
            'party_name'      =>  $this->request->getVar('party_name'),
            'party_classification_id' =>  $this->request->getVar('party_name'),
            'business_owner_name'   =>  $this->request->getVar('business_owner_name'),
            'accounts_person'   =>  $this->request->getVar('accounts_person'),
            'contact_person'   =>  $this->request->getVar('contact_person'),
            'business_address'   =>  $this->request->getVar('business_address'),
            'city'   =>  $this->request->getVar('city'),
            'state_id'   =>  $this->request->getVar('state'),
            'postcode'   =>  $this->request->getVar('postcode'),
            'primary_phone'   =>  $this->request->getVar('primary_phone'),
            'other_phone'   =>  $this->request->getVar('other_phone'),
            'email'   =>  $this->request->getVar('email'),
            'business_type_id'   =>  $this->request->getVar('business_type_id'),
            // 'gstnumber'   =>  $this->request->getVar('gstnumber'),
            // 'itpan'   =>  $this->request->getVar('itpan'),
            // 'tanno'   =>  $this->request->getVar('tanno'),
            // 'aadhaar'   =>  $this->request->getVar('aadhaar'),
            // 'msmenumber'   =>  $this->request->getVar('msmenumber'),
            // 'otherid'   =>  $this->request->getVar('otherid'),

            'updated_at'  =>  date("Y-m-d h:i:sa"),
            'status'     =>  0,
            'approved'   =>  0

          ]);



          if ($this->request->getFile('aadhaar_img_front') != null) {

            $image = $this->request->getFile('aadhaar_img_front');
            if ($image->isValid() && !$image->hasMoved()) {
              $newName = $image->getRandomName();
              $imgpath = 'public/uploads/partyDocs';
              if (!is_dir($imgpath)) {
                mkdir($imgpath, 0777, true);
              }
              $image->move($imgpath, $newName);
              $pcModel->update($id, ['aadhar_img_1' => $newName]);
            }
          }

          if ($this->request->getFile('aadhaar_img_back') != null) {

            $image = $this->request->getFile('aadhaar_img_back');
            if ($image->isValid() && !$image->hasMoved()) {
              $newName = $image->getRandomName();
              $imgpath = 'public/uploads/partyDocs';
              if (!is_dir($imgpath)) {
                mkdir($imgpath, 0777, true);
              }
              $image->move($imgpath, $newName);
              $pcModel->update($id, ['aadhar_img_2' => $newName]);
            }
          }

          if ($this->request->getFile('itpan_img_front') != null) {

            $image = $this->request->getFile('itpan_img_front');
            if ($image->isValid() && !$image->hasMoved()) {
              $newName = $image->getRandomName();
              $imgpath = 'public/uploads/partyDocs';
              if (!is_dir($imgpath)) {
                mkdir($imgpath, 0777, true);
              }
              $image->move($imgpath, $newName);
              $pcModel->update($id, ['pan_img_1' => $newName]);
            }
          }

          if ($this->request->getFile('itpan_img_back') != null) {

            $image = $this->request->getFile('itpan_img_back');
            if ($image->isValid() && !$image->hasMoved()) {
              $newName = $image->getRandomName();
              $imgpath = 'public/uploads/partyDocs';
              if (!is_dir($imgpath)) {
                mkdir($imgpath, 0777, true);
              }
              $image->move($imgpath, $newName);
              $pcModel->update($id, ['pan_img_2' => $newName]);
            }
          }

          if ($this->request->getFile('gst_img_front') != null) {

            $image = $this->request->getFile('gst_img_front');
            if ($image->isValid() && !$image->hasMoved()) {
              $newName = $image->getRandomName();
              $imgpath = 'public/uploads/partyDocs';
              if (!is_dir($imgpath)) {
                mkdir($imgpath, 0777, true);
              }
              $image->move($imgpath, $newName);
              $pcModel->update($id, ['gst_img_1' => $newName]);
            }
          }

          if ($this->request->getFile('gst_img_back') != null) {

            $image = $this->request->getFile('gst_img_back');
            if ($image->isValid() && !$image->hasMoved()) {
              $newName = $image->getRandomName();
              $imgpath = 'public/uploads/partyDocs';
              if (!is_dir($imgpath)) {
                mkdir($imgpath, 0777, true);
              }
              $image->move($imgpath, $newName);
              $pcModel->update($id, ['gst_img_2' => $newName]);
            }
          }

          $partyTypes = $this->request->getVar('party_type_id');
          $PartyTypePartyModel = new PartyTypePartyModel();
           $PartyTypePartyModel->where('party_id', $id)->delete();

          foreach ($partyTypes as $key => $value) {
            $partyTypes1 = [
              'party_type_id' =>  $value,
              'party_id'      =>   $id,
            ];
            $PartyTypePartyModel->save($partyTypes1);
          } 

           //Upload party doc
            // save party documents
            $partyDocModel = new PartyDocumentsModel(); 
            // echo 'flag <pre>';print_r($flag);
              //delete existing party doc 
              $partyDocModel->where(['party_id'=>$id])->delete();
          
            if($this->request->getVar('flag_id')){
              foreach ($this->request->getVar('flag_id') as $flag) {
                if ($_FILES['img_' . $flag . '_1']['name'] != '') {
                  $image = $this->request->getFile('img_' . $flag . '_1');
                  // $image = $FILES['img_' . $flag . '_1'];
                  if ($image->isValid() && !$image->hasMoved()) {
                    $newName1 = $image->getRandomName();
                    $imgpath = 'public/uploads/partyDocs';
                    if (!is_dir($imgpath)) {
                      mkdir($imgpath, 0777, true);
                    }
                    $image->move($imgpath, $newName1);
                  }
                  $img1 = $newName1;
                  $docarr['img1'] =$img1;
                  $partyDoc_details = $partyDocModel->where(['flag_id'=>$flag,'party_id'=>$id,'img1' =>$img1])->first();
                  if (!empty($partyDoc_details['img1']) && file_exists($imgpath.$partyDoc_details['img1'])) {
                      unlink( $imgpath. $partyDoc_details['img1']);
                  }
                }else{
                  $docarr['img1'] = $_POST['existing_img_' . $flag . '_1'];
                } 
          
                if ($_FILES['img_' . $flag . '_2']['name'] != '') { 
                  $image = $this->request->getFile('img_' . $flag . '_2');
                  // $image = $FILES['img_' . $flag . '_2'];
                  if ($image->isValid() && !$image->hasMoved()) {
                    $newName2 = $image->getRandomName();
                    $imgpath = 'public/uploads/partyDocs';
                    if (!is_dir($imgpath)) {
                      mkdir($imgpath, 0777, true);
                    }
                    $image->move($imgpath, $newName2);
                  }
                  $img2 = $newName2;
                  $docarr['img2'] =$img2;
                  
                  // //delete old image
                  $partyDoc_details = $partyDocModel->where(['flag_id'=>$flag,'party_id'=>$id,'img2' =>$img2])->first();
                  if (!empty($partyDoc_details['img2']) && file_exists($imgpath.$partyDoc_details['img2'])) {
                      unlink( $imgpath. $partyDoc_details['img2']);
                  }
                }else{
                  $docarr['img2'] = $_POST['existing_img_' . $flag . '_2'];
                }
              
                //update new
                $docarr['party_id'] =$id;
                $docarr['flag_id'] =$flag;
                $docarr['number'] =$_POST['number_' . $flag];     
                // echo 'docarr <pre>';print_r($docarr); 
                $partyDocModel->save($docarr);
               } 
            }  
           

          $session = \Config\Services::session();
          $session->setFlashdata('success', 'Party  Updated');
          return $this->response->redirect(site_url('/party'));
        }
      }
    }

    return view('Party/edit', $data);
  }
  

  public function approve($id = null)
  {
    $access = $this->_access;
    if ($access === 'false') {
      $session = \Config\Services::session();
      $session->setFlashdata('error', 'You are not permitted to access this page');
      return $this->response->redirect(site_url('/dashboard'));
    } else {
      $pcModel = new PartyModel();
      $data['pc_data'] = $pcModel->where('id', $id)->first();

      $partytype = new PartytypeModel();
      $data['partytype'] = $partytype->orderby('name', 'ASC')->where('status', 'Active')->findAll();
      $partyTypes = new PartyTypePartyModel();
      $data['partyTypes'] = $partyTypes->where('party_id', $id)->findAll();

         /**Add code */
         $PartyTypePartyModel = new PartyTypePartyModel();
         $data['pc_data']['party_type_id'] = $PartyTypePartyModel
           ->join('party p','p.id= party_type_party_map.party_id')
           ->join('party_type pt','pt.id= party_type_party_map.party_type_id')
           ->where('p.id', $id)->first();
         /** End */
         // echo '<pre>';print_r($data['pc_data']);exit;

      $stateModel = new StateModel();
      $data['state'] = $stateModel->where(['isStatus' => '1'])->orderBy('state_id')->findAll();
      $businesstypeModel = new BusinessTypeModel();
      $data['businesstype'] = $businesstypeModel->orderBy('id')->findAll();
      $request = service('request');
      if ($this->request->getMethod() == 'POST') {
        $id = $this->request->getVar('id');

        $error = $this->validate([
          'party_name'                =>  'required|trim|regex_match[/^[a-z\d\-_\s]+$/i]',
          'party_type_id'              =>  'required',
          'state'                     =>  'required',
          'city'                      =>  'required',
          'postcode'                  =>  'required',
          'primary_phone'             =>  'required|numeric',
          'business_type_id'          =>  'required',
        ]);
        if (!$error) {
          $data['error']   = $this->validator;
        } else {



          $pcModel = new PartyModel();
          $pcModel->update($id, [
            'party_name'      =>  $this->request->getVar('party_name'),
            'party_classification_id' =>  $this->request->getVar('party_name'),
            'business_owner_name'   =>  $this->request->getVar('business_owner_name'),
            'accounts_person'   =>  $this->request->getVar('accounts_person'),
            'contact_person'   =>  $this->request->getVar('contact_person'),
            'business_address'   =>  $this->request->getVar('business_address'),
            'city'   =>  $this->request->getVar('city'),
            'state_id'   =>  $this->request->getVar('state'),
            'postcode'   =>  $this->request->getVar('postcode'),
            'primary_phone'   =>  $this->request->getVar('primary_phone'),
            'other_phone'   =>  $this->request->getVar('other_phone'),
            'email'   =>  $this->request->getVar('email'),
            'business_type_id'   =>  $this->request->getVar('business_type_id'),
            'gstnumber'   =>  $this->request->getVar('gstnumber'),
            'itpan'   =>  $this->request->getVar('itpan'),
            'tanno'   =>  $this->request->getVar('tanno'),
            'aadhaar'   =>  $this->request->getVar('aadhaar'),
            'msmenumber'   =>  $this->request->getVar('msmenumber'),
            'otherid'   =>  $this->request->getVar('otherid'),

            'updated_at'  =>  date("Y-m-d h:i:sa"),
            'status'                  =>  0,
            'approved'                =>  $this->request->getVar('approve'),
            'approval_user_id'        =>  isset($user['id']) ? $user['id'] : '',
            'approval_user_type'      =>  isset($user['usertype']) ? $user['usertype'] : '',
            'approval_date'           =>  date("Y-m-d h:i:sa"),
            'approval_ip_address'     =>  $_SERVER['REMOTE_ADDR'],
          ]);


          if ($this->request->getFile('aadhaar_img_front') != null) {

            $image = $this->request->getFile('aadhaar_img_front');
            if ($image->isValid() && !$image->hasMoved()) {
              $newName = $image->getRandomName();
              $imgpath = 'public/uploads/partyDocs';
              if (!is_dir($imgpath)) {
                mkdir($imgpath, 0777, true);
              }
              $image->move($imgpath, $newName);
              $pcModel->update($id, ['aadhar_img_1' => $newName]);
            }
          }

          if ($this->request->getFile('aadhaar_img_back') != null) {

            $image = $this->request->getFile('aadhaar_img_back');
            if ($image->isValid() && !$image->hasMoved()) {
              $newName = $image->getRandomName();
              $imgpath = 'public/uploads/partyDocs';
              if (!is_dir($imgpath)) {
                mkdir($imgpath, 0777, true);
              }
              $image->move($imgpath, $newName);
              $pcModel->update($id, ['aadhar_img_2' => $newName]);
            }
          }

          if ($this->request->getFile('itpan_img_front') != null) {

            $image = $this->request->getFile('itpan_img_front');
            if ($image->isValid() && !$image->hasMoved()) {
              $newName = $image->getRandomName();
              $imgpath = 'public/uploads/partyDocs';
              if (!is_dir($imgpath)) {
                mkdir($imgpath, 0777, true);
              }
              $image->move($imgpath, $newName);
              $pcModel->update($id, ['pan_img_1' => $newName]);
            }
          }

          if ($this->request->getFile('itpan_img_back') != null) {

            $image = $this->request->getFile('itpan_img_back');
            if ($image->isValid() && !$image->hasMoved()) {
              $newName = $image->getRandomName();
              $imgpath = 'public/uploads/partyDocs';
              if (!is_dir($imgpath)) {
                mkdir($imgpath, 0777, true);
              }
              $image->move($imgpath, $newName);
              $pcModel->update($id, ['pan_img_2' => $newName]);
            }
          }

          if ($this->request->getFile('gst_img_front') != null) {

            $image = $this->request->getFile('gst_img_front');
            if ($image->isValid() && !$image->hasMoved()) {
              $newName = $image->getRandomName();
              $imgpath = 'public/uploads/partyDocs';
              if (!is_dir($imgpath)) {
                mkdir($imgpath, 0777, true);
              }
              $image->move($imgpath, $newName);
              $pcModel->update($id, ['gst_img_1' => $newName]);
            }
          }

          if ($this->request->getFile('gst_img_back') != null) {

            $image = $this->request->getFile('gst_img_back');
            if ($image->isValid() && !$image->hasMoved()) {
              $newName = $image->getRandomName();
              $imgpath = 'public/uploads/partyDocs';
              if (!is_dir($imgpath)) {
                mkdir($imgpath, 0777, true);
              }
              $image->move($imgpath, $newName);
              $pcModel->update($id, ['gst_img_2' => $newName]);
            }
          }

          $party_type_id = $this->request->getVar('party_type_id');
          $party_types = new PartyTypePartyModel();
          $partytypes = $party_types->where('party_id', $id)->delete();

          // foreach ($partyTypes as $key => $value) {
            $partyTypes1 = [
              'party_type_id' =>  $party_type_id,
              'party_id'      =>   $id,
            ];
            $party_types->save($partyTypes1);
          // }

          $session = \Config\Services::session();
          $session->setFlashdata('success', 'Party Approved Successfully');
          return $this->response->redirect(site_url('/party'));
        }
      }
    }

    return view('Party/approval', $data);
  }


  public function create()
  {
    $access = $this->_access;
    if ($access === 'false') {
      $session = \Config\Services::session();
      $session->setFlashdata('error', 'You are not permitted to access this page');
      return $this->response->redirect(site_url('/dashboard'));
    } else {
      helper(['form', 'url']);
      $data['page_data'] = [
        'page_title' => view('partials/page-title', ['title' => 'Add Party', 'li_2' => 'profile'])
      ];
      $partytype = new PartytypeModel();
      $data['partytype'] = $partytype->orderby('name', 'ASC')->findAll();

      $stateModel = new StateModel();
      $data['state'] = $stateModel->where(['isStatus' => '1'])->orderBy('state_name', 'ASC')->findAll();

      $businesstypeModel = new BusinessTypeModel();
      $data['businesstype'] = $businesstypeModel->orderBy('company_structure_name', 'ASC')->findAll();

      $flagsmodel = new FlagsModel();
      $data['flags'] = $flagsmodel->where('status', 'Active')->orderBy('id')->findAll();

      $request = service('request');
      if ($this->request->getMethod() == 'POST') {
        $error = $this->validate([
          'party_name'              =>  'required|trim|regex_match[/^[a-z\d\-_\s]+$/i]|is_unique[party.party_name]',
          'party_type_id'              =>  'required', 
          'primary_phone'             =>  'required|numeric', 
 
        ]);
        $validation = \Config\Services::validation();
              
        // echo 'POst dt<pre>';print_r($this->request->getPost());
        // echo 'getErrors<pre>';print_r($validation->getErrors());exit;

        if (!$error) {
          $data['error']   = $this->validator;
        } else {
          $partyModel = new PartyModel();
 
          $arr = [
            'party_name'      =>  $this->request->getVar('party_name'),
            'business_owner_name'   =>  $this->request->getVar('business_owner_name'),
            'accounts_person'   =>  $this->request->getVar('accounts_person'),
            'contact_person'   =>  $this->request->getVar('contact_person'),
            'business_address'   =>  $this->request->getVar('business_address'),
            'city'   =>  $this->request->getVar('city'),
            'state_id'   =>  $this->request->getVar('state'),
            'postcode'   =>  $this->request->getVar('postcode'),
            'primary_phone'   =>  $this->request->getVar('primary_phone'),
            'other_phone'   =>  $this->request->getVar('other_phone'),
            'email'   =>  $this->request->getVar('email'),
            'business_type_id'   =>  $this->request->getVar('business_type_id'),
            'created_at'  =>  date("Y-m-d h:i:sa"),
          ];
          $partyModel->save($arr);

          $party_id = $partyModel->getInsertID();
          $party_types = $this->request->getVar('party_type_id');
          $PartyTypePartyModel = new PartyTypePartyModel();
           foreach ($party_types as $key => $value) {
            $ptData = [
              'party_type_id' =>  $value,
              'party_id'      => $party_id,
            ];
            $PartyTypePartyModel->save($ptData);
           }

           /**
            *  Added party doc
            */
           // save party documents
           $partyDocModel = new PartyDocumentsModel();
           if($this->request->getVar('flag_id') ){
            foreach ($this->request->getVar('flag_id') as $flag) {
              $img1 = '';
              if ($_FILES['img_' . $flag . '_1']['name'] != '') {
  
                $image = $this->request->getFile('img_' . $flag . '_1');
                if ($image->isValid() && !$image->hasMoved()) {
                  $newName1 = $image->getRandomName();
                  $imgpath = 'public/uploads/partyDocs';
                  if (!is_dir($imgpath)) {
                    mkdir($imgpath, 0777, true);
                  }
                  $image->move($imgpath, $newName1);
                }
                $img1 = $newName1;
              }
  
              $img2 = '';
              if ($_FILES['img_' . $flag . '_2']['name'] != '') {
  
                $image = $this->request->getFile('img_' . $flag . '_2');
                if ($image->isValid() && !$image->hasMoved()) {
                  $newName2 = $image->getRandomName();
                  $imgpath = 'public/uploads/partyDocs';
                  if (!is_dir($imgpath)) {
                    mkdir($imgpath, 0777, true);
                  }
                  $image->move($imgpath, $newName2);
                }
                $img2 = $newName2;
              }
  
              $docarr = [
                'party_id' => $party_id,
                'flag_id' => $flag,
                'number' => $this->request->getVar('number_' . $flag),
                'img1' => $img1,
                'img2' => $img2
              ];
              $partyDocModel->save($docarr);
            }
           }

          $session = \Config\Services::session();
          $session->setFlashdata('success', 'Party added');
          return $this->response->redirect(site_url('/party'));
        }
      }
      return view('Party/create', $data);
    }
  }

  public function delete($id = null)
  {

    $access = $this->_access;
    if ($access === 'false') {
      $session = \Config\Services::session();
      $session->setFlashdata('error', 'You are not permitted to access this page');
      return $this->response->redirect(site_url('/dashboard'));
    } else {
      $partyModel = new PartyModel();
      $partyModel->where('id', $id)->delete($id);
      $session = \Config\Services::session();
      $session->setFlashdata('success', 'Party Deleted');
      return $this->response->redirect(site_url('/party'));
    }
  }

  public function get_flags_fields_bk()
  {
    if (isset($_POST['business_type'])) {
      $btf = new BusinessTypeFlagModel();
      $flags = $btf->where('business_type_id', $_POST['business_type'])->findAll();
      if (isset($_POST['party_id'])) {
        $party = new PartyModel();
        $party = $party->where('id', $_POST['party_id'])->first();
      }
      if (isset($flags)) {

        foreach ($flags as $row) {
          $flag_data = new FlagsModel();
          $fdata = $flag_data->where('id', $row['flags_id'])->first();

          $title =  strtolower($fdata['title']);
          $titlename = str_replace(' ', '', $title);

          if (isset($party[$titlename])) {
            $value = $party[$titlename];
          } else {
            $value = '';
          }
          echo '
                <div class="col-md-6">
                  <div class="form-wrap">
                    <label class="col-form-label">' . $fdata['title'] . '<span class="text-danger">*</span></label>
                    <input type="text" required name="' . $titlename . '" class="form-control">
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-wrap">
                    <label class="col-form-label">' . $fdata['title'] . ' Image - Front<span class="text-danger">*</span></label>
                    <input type="file" required name="' . $titlename . '_img_front" class="form-control">
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-wrap">
                    <label class="col-form-label">' . $fdata['title'] . '  Image - Back</label>
                    <input type="file" name="' . $titlename . '_img_back" class="form-control">
                  </div>
                </div>
                ';
        }
      }
    }
  }

  public function status($id = null)
  {
    $access = $this->_access;
    if ($access === 'false') {
      $session = \Config\Services::session();
      $session->setFlashdata('error', 'You are not permitted to access this page');
      return $this->response->redirect(site_url('/dashboard'));
    } else {
      $status = '';
      $partyModel = new PartyModel();
      $pModel = $partyModel->where('id', $id)->first();
      if (isset($pModel)) {
        if ($pModel['status'] == '1') {
          $status = '0';
        } else {
          $status = '1';
        }
      }

      $partyModel->update($id, [
        'status'              => $status,
        'updated_at'         =>  date("Y-m-d h:i:sa"),
      ]);
      $session = \Config\Services::session();
      $session->setFlashdata('success', 'Party Status updated');
      return $this->response->redirect(site_url('/party'));
    }
  }

  public function searchByStatus()
  {
    if ($this->request->getMethod() == 'POST') {
      $status = $this->request->getVar('status');
      $partModel = new PartyModel();
      $data['party_data'] = $partModel->where('status', $status)->orderBy('id', 'DESC')->findAll();
      $data['page_data'] = [
        'page_title' => view('partials/page-title', ['title' => 'Party', 'li_1' => '123', 'li_2' => 'deals'])
      ];
      return view('Party/search', $data);
    }
  }


  public function get_flags_fields()
  { 
    // echo '<pre>';print_r($_POST); 
    //     exit;
    if (isset($_POST['business_type'])) {

      $BTFModel = new BusinessTypeFlagModel();

      $flagData = $BTFModel->select('business_type_flags.*, flags.title,')
        ->join('flags', 'flags.id = business_type_flags.flags_id')
        ->where('business_type_flags.business_type_id', $this->request->getPost('business_type'))
        ->findAll();  
        
      /* edit start*/
      foreach ($flagData as $flag) {
        if($this->request->getPost('id') > 0){
          $id=$this->request->getPost('id');
          $partyModel = new PartyModel();
          $partyDoc= $partyModel->select('party_documents.*, flags.title')
          ->join('party_documents', 'party.id = party_documents.party_id')
          ->join('flags', 'flags.id = party_documents.flag_id')
          ->where(['party_id'=>$id,'flag_id'=>$flag['flags_id'],'party.business_type_id'=>$this->request->getPost('business_type')])->first(); 

          $PartyDocModel = new PartyDocumentsModel();  
          // $partyDoc= $PartyDocModel->select('party_documents.*, flags.title')
          // ->join('flags', 'flags.id = party_documents.flag_id')
          // ->where(['party_id'=>$id,'flag_id'=>$flag['flags_id']])->first(); 
        } 
        $partyDocNumber = isset($partyDoc['number']) ? $partyDoc['number'] : '';
        $img1 = isset($partyDoc['img1']) ? $partyDoc['img1'] : '';
        $img2 = isset($partyDoc['img2']) ? $partyDoc['img2'] : '';
        $iamge1 = !empty($img1) ? '<img src="'. base_url('public/uploads/partyDocs/') . $img1.'" style="height: 150px;">' :'';
        $iamge2 = !empty($img2) ? '<img src="'. base_url('public/uploads/partyDocs/') . $img2.'" style="height: 150px;">' :'';
        /* edit end*/

        echo '<div class="col-md-6">
                  <div class="form-wrap">
                    <label class="col-form-label" >' . $flag['title'] . ' ' . ($flag['title'] ? '<span class="text-danger">*</span>' : '') . '<span class="text-danger" id="span_' . $flag['flags_id'] . '"></span></label>
                    <input type="text" ' . ($flag['title'] ? 'required' : '') . ' value="'.$partyDocNumber.'" name="number_' . $flag['flags_id'] . '" id="num_' . $flag['flags_id'] . '" onchange="$.validate(' . $flag['flags_id'] . ');" class="form-control">
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-wrap">
                    <label class="col-form-label">' . $flag['title'] . ' Image 1 ' . ($flag['title'] ? '<span class="text-danger">*</span>' : '') . '</label>
                    '.$iamge1.'
                    <input type="hidden" name="existing_img_' . $flag['flags_id'] . '_1" value="'.$img1.'"/>
                    <input type="file" ' . (!$img1 ? 'required' : '') . ' value="'.$img1.'" name="img_' . $flag['flags_id'] . '_1" class="form-control">
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-wrap">
                    <label class="col-form-label">' . $flag['title'] . '  Image 2</label>
                    '.$iamge2.'
                    <input type="hidden" name="existing_img_' . $flag['flags_id'] . '_2" value="'.$img2.'"/>
                    <input type="file" value="'.$img2.'" name="img_' . $flag['flags_id'] . '_2" class="form-control">
                  </div>
                </div>

                <input type="hidden" name="flag_id[]" value="' . $flag['flags_id'] . '">
                ';
      } 
    }
  }

  public function validate_doc()
  {
    $partyDocModel = new PartyDocumentsModel();

    $row = $partyDocModel->where('flag_id', $this->request->getPost('flag_id'))->where('number', $this->request->getPost('number'))->first();

    echo  $row ? '1' : '0';
  }
  public function kyc()
  {
    $partytype = new PartytypeModel();
    $data['partytype'] = $partytype->where('status', 'Active')->orderby('name', 'ASC')->findAll();

    $stateModel = new StateModel();
    $data['state'] = $stateModel->where(['isStatus' => '1'])->orderBy('state_name', 'ASC')->findAll();

    $businesstypeModel = new BusinessTypeModel();
    $data['businesstype'] = $businesstypeModel->orderBy('company_structure_name', 'ASC')->findAll();

    $flagsmodel = new FlagsModel();
    $data['flags'] = $flagsmodel->where('status', 'Active')->orderBy('id')->findAll();


    return view('Party/kyc_form', $data);
  }
}
