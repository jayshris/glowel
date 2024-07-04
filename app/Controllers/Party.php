<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;
use App\Models\PartyModel;
use App\Models\PartytypeModel;
use App\Models\StateModel;
use App\Models\FlagsModel;
use App\Models\BusinessTypeModel;
use App\Models\BusinessTypeFlagModel;
use App\Models\PartyTypePartyModel;

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
      $stateModel = new StateModel();
      $data['state'] = $stateModel->where(['isStatus' => '1'])->orderBy('state_id')->findAll();
      $businesstypeModel = new BusinessTypeModel();
      $data['businesstype'] = $businesstypeModel->orderBy('id')->findAll();
      $request = service('request');
      if ($this->request->getMethod() == 'POST') {
        $id = $this->request->getVar('id');

        $error = $this->validate([
          'party_name'                =>  'required|trim|regex_match[/^[a-z\d\-_\s]+$/i]',
          'party_types'              =>  'required',
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

          $partyTypes = $this->request->getVar('party_types');
          $party_types = new PartyTypePartyModel();
          $partytypes = $party_types->where('party_id', $id)->delete();

          foreach ($partyTypes as $key => $value) {
            $partyTypes1 = [
              'party_type_id' =>  $value,
              'party_id'      =>   $id,
            ];
            $party_types->save($partyTypes1);
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
      $stateModel = new StateModel();
      $data['state'] = $stateModel->where(['isStatus' => '1'])->orderBy('state_id')->findAll();
      $businesstypeModel = new BusinessTypeModel();
      $data['businesstype'] = $businesstypeModel->orderBy('id')->findAll();
      $request = service('request');
      if ($this->request->getMethod() == 'POST') {
        $id = $this->request->getVar('id');

        $error = $this->validate([
          'party_name'                =>  'required|trim|regex_match[/^[a-z\d\-_\s]+$/i]',
          'party_types'              =>  'required',
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

          $partyTypes = $this->request->getVar('party_types');
          $party_types = new PartyTypePartyModel();
          $partytypes = $party_types->where('party_id', $id)->delete();

          foreach ($partyTypes as $key => $value) {
            $partyTypes1 = [
              'party_type_id' =>  $value,
              'party_id'      =>   $id,
            ];
            $party_types->save($partyTypes1);
          }

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
          'party_types'              =>  'required',

          'state'                     =>  'required',
          'city'                      =>  'required',
          'postcode'                  =>  'required',
          'primary_phone'             =>  'required|numeric',
          'business_type_id'          =>  'required',

          // 'aadhaar_img_front' => [
          //   'rules' => 'max_size[aadhaar_img_front,100]|mime_in[aadhaar_img_front,image/png,image/PNG,image/jpg,image/JPG,image/jpeg,image/JPEG]',
          //   'errors' => [
          //     'mime_in' => 'Image must be in jpeg/png format',
          //     'max_size' => 'Image must be under 100KB'
          //   ]
          // ],
          // 'aadhaar_img_back' => [
          //   'rules' => 'max_size[aadhaar_img_back,100]|mime_in[aadhaar_img_back,image/png,image/PNG,image/jpg,image/JPG,image/jpeg,image/JPEG]',
          //   'errors' => [
          //     'mime_in' => 'Image must be in jpeg/png format',
          //     'max_size' => 'Image must be under 100KB'
          //   ]
          // ],
          // 'itpan_img_front' => [
          //   'rules' => 'max_size[itpan_img_front,100]|mime_in[itpan_img_front,image/png,image/PNG,image/jpg,image/JPG,image/jpeg,image/JPEG]',
          //   'errors' => [
          //     'mime_in' => 'Image must be in jpeg/png format',
          //     'max_size' => 'Image must be under 100KB'
          //   ]
          // ],
          // 'itpan_img_back' => [
          //   'rules' => 'max_size[itpan_img_back,100]|mime_in[itpan_img_back,image/png,image/PNG,image/jpg,image/JPG,image/jpeg,image/JPEG]',
          //   'errors' => [
          //     'mime_in' => 'Image must be in jpeg/png format',
          //     'max_size' => 'Image must be under 100KB'
          //   ]
          // ],
          // 'gst_img_front' => [
          //   'rules' => 'max_size[gst_img_front,100]|mime_in[gst_img_front,image/png,image/PNG,image/jpg,image/JPG,image/jpeg,image/JPEG]',
          //   'errors' => [
          //     'mime_in' => 'Image must be in jpeg/png format',
          //     'max_size' => 'Image must be under 100KB'
          //   ]
          // ],
          // 'gst_img_back' => [
          //   'rules' => 'max_size[gst_img_back,100]|mime_in[gst_img_back,image/png,image/PNG,image/jpg,image/JPG,image/jpeg,image/JPEG]',
          //   'errors' => [
          //     'mime_in' => 'Image must be in jpeg/png format',
          //     'max_size' => 'Image must be under 100KB'
          //   ]
          // ]
        ]);

        if (!$error) {
          $data['error']   = $this->validator;
        } else {
          $partyModel = new PartyModel();

          $aadhar_img_front = '';
          if ($this->request->getFile('aadhaar_img_front') != null) {

            $image = $this->request->getFile('aadhaar_img_front');
            if ($image->isValid() && !$image->hasMoved()) {
              $newName = $image->getRandomName();
              $imgpath = 'public/uploads/partyDocs';
              if (!is_dir($imgpath)) {
                mkdir($imgpath, 0777, true);
              }
              $image->move($imgpath, $newName);
            }
            $aadhar_img_front = $newName;
          }

          $aadhar_img_back = '';
          if ($this->request->getFile('aadhaar_img_back') != null) {

            $image = $this->request->getFile('aadhaar_img_back');
            if ($image->isValid() && !$image->hasMoved()) {
              $newName = $image->getRandomName();
              $imgpath = 'public/uploads/partyDocs';
              if (!is_dir($imgpath)) {
                mkdir($imgpath, 0777, true);
              }
              $image->move($imgpath, $newName);
            }
            $aadhar_img_back = $newName;
          }

          $itpan_img_front = '';
          if ($this->request->getFile('itpan_img_front') != null) {

            $image = $this->request->getFile('itpan_img_front');
            if ($image->isValid() && !$image->hasMoved()) {
              $newName = $image->getRandomName();
              $imgpath = 'public/uploads/partyDocs';
              if (!is_dir($imgpath)) {
                mkdir($imgpath, 0777, true);
              }
              $image->move($imgpath, $newName);
            }
            $itpan_img_front = $newName;
          }

          $itpan_img_back = '';
          if ($this->request->getFile('itpan_img_back') != null) {

            $image = $this->request->getFile('itpan_img_back');
            if ($image->isValid() && !$image->hasMoved()) {
              $newName = $image->getRandomName();
              $imgpath = 'public/uploads/partyDocs';
              if (!is_dir($imgpath)) {
                mkdir($imgpath, 0777, true);
              }
              $image->move($imgpath, $newName);
            }
            $itpan_img_back = $newName;
          }

          $gst_img_front = '';
          if ($this->request->getFile('gst_img_front') != null) {

            $image = $this->request->getFile('gst_img_front');
            if ($image->isValid() && !$image->hasMoved()) {
              $newName = $image->getRandomName();
              $imgpath = 'public/uploads/partyDocs';
              if (!is_dir($imgpath)) {
                mkdir($imgpath, 0777, true);
              }
              $image->move($imgpath, $newName);
            }
            $gst_img_front = $newName;
          }

          $gst_img_back = '';
          if ($this->request->getFile('gst_img_back') != null) {

            $image = $this->request->getFile('gst_img_back');
            if ($image->isValid() && !$image->hasMoved()) {
              $newName = $image->getRandomName();
              $imgpath = 'public/uploads/partyDocs';
              if (!is_dir($imgpath)) {
                mkdir($imgpath, 0777, true);
              }
              $image->move($imgpath, $newName);
            }
            $gst_img_back = $newName;
          }

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
            'gstnumber'   =>  $this->request->getVar('gstnumber'),
            'itpan'   =>  $this->request->getVar('itpan'),
            'tanno'   =>  $this->request->getVar('tanno'),
            'aadhaar'   =>  $this->request->getVar('aadhaar'),
            'msmenumber'   =>  $this->request->getVar('msmenumber'),
            'otherid'   =>  $this->request->getVar('otherid'),

            'aadhar_img_1' => $aadhar_img_front,
            'aadhar_img_2' => $aadhar_img_back,
            'pan_img_1' => $itpan_img_front,
            'pan_img_2' => $itpan_img_back,
            'gst_img_1' => $gst_img_front,
            'gst_img_2' => $gst_img_back,

            'created_at'  =>  date("Y-m-d h:i:sa"),
          ];
          $partyModel->save($arr);

          $party_id = $partyModel->getInsertID();
          $party_types = $this->request->getVar('party_types');
          $partytypes = new PartyTypePartyModel();
          foreach ($party_types as $key => $value) {
            $ptData = [
              'party_type_id' =>  $value,
              'party_id'      => $party_id,
            ];
            $partytypes->save($ptData);
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

  public function get_flags_fields()
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
}
