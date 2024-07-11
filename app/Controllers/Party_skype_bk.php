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
use App\Models\PartyDocumentsModel;
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

      $partyDocModel = new PartyDocumentsModel();


      if ($this->request->getMethod() == 'POST') {

        $error = $this->validate([
          'party_name'              =>  'required|trim|regex_match[/^[a-z\d\-_\s]+$/i]|is_unique[party.party_name]',
          'state'                   =>  'required',
          'city'                    =>  'required',
          'postcode'                =>  'required',
          'primary_phone'           =>  'required|numeric',
          'business_type_id'        =>  'required'
        ]);

        if (!$error) {
          $data['error']   = $this->validator;
        } else {
          $partyModel = new PartyModel();

          $arr = [
            'party_name'      =>  $this->request->getVar('party_name'),
            'contact_person'   =>  $this->request->getVar('contact_person'),
            'alias' => $this->request->getVar('alias'),
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

          // save party documents
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

          $session = \Config\Services::session();
          $session->setFlashdata('success', 'Party added');
          return $this->response->redirect(site_url('/party'));
        }
      }
      return view('Party/create', $data);
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

      $PartyDocModel = new PartyDocumentsModel();

      $data['partyDocs'] = $PartyDocModel->select('party_documents.*, flags.title')
        ->join('flags', 'flags.id = party_documents.flag_id')
        ->where('party_id', $id)->findAll();

      if ($this->request->getMethod() == 'POST') {
        $id = $this->request->getVar('id');

        $error = $this->validate([
          'party_name'                =>  'required|trim|regex_match[/^[a-z\d\-_\s]+$/i]',
          'state'                     =>  'required',
          'city'                      =>  'required',
          'postcode'                  =>  'required',
          'primary_phone'             =>  'required|numeric'
        ]);
        if (!$error) {
          $data['error']   = $this->validator;
        } else {

          $pcModel = new PartyModel();
          $pcModel->update($id, [
            'party_name'      =>  $this->request->getVar('party_name'),
            'party_classification_id' =>  $this->request->getVar('party_name'),
            'contact_person'   =>  $this->request->getVar('contact_person'),
            'alias' => $this->request->getVar('alias'),
            'business_address'   =>  $this->request->getVar('business_address'),
            'city'   =>  $this->request->getVar('city'),
            'state_id'   =>  $this->request->getVar('state'),
            'postcode'   =>  $this->request->getVar('postcode'),
            'primary_phone'   =>  $this->request->getVar('primary_phone'),
            'other_phone'   =>  $this->request->getVar('other_phone'),
            'email'   =>  $this->request->getVar('email'),
            'updated_at'  =>  date("Y-m-d h:i:sa"),
            'status'     =>  0,
            'approved'   =>  0
          ]);

          $session = \Config\Services::session();
          $session->setFlashdata('success', 'Party  Updated');
          return $this->response->redirect(base_url('party'));
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

      $PartyDocModel = new PartyDocumentsModel();

      $data['partyDocs'] = $PartyDocModel->select('party_documents.*, flags.title')
        ->join('flags', 'flags.id = party_documents.flag_id')
        ->where('party_id', $id)->findAll();

      if ($this->request->getMethod() == 'POST') {


        $id = $this->request->getVar('id');

        $error = $this->validate([
          'party_name'                =>  'required|trim|regex_match[/^[a-z\d\-_\s]+$/i]',
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
            'alias' => $this->request->getVar('alias'),
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
            'updated_at'  =>  date("Y-m-d h:i:sa"),
            'status'                  =>  $this->request->getVar('approve'),
            'approved'                =>  $this->request->getVar('approve'),
            'approval_user_id'        =>  isset($user['id']) ? $user['id'] : '',
            'approval_user_type'      =>  isset($user['usertype']) ? $user['usertype'] : '',
            'approval_date'           =>  date("Y-m-d h:i:sa"),
            'approval_ip_address'     =>  $_SERVER['REMOTE_ADDR'],
          ]);


          // save party documents
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
            } else {
              $img1 = $PartyDocModel->where(['party_id' => $id, 'flag_id' => $flag])->first()['img1'];
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
            } else {
              $img2 = $PartyDocModel->where(['party_id' => $id, 'flag_id' => $flag])->first()['img2'];
            }

            $PartyDocModel->where('party_id', $id)->where('flag_id', $flag)->delete();

            $docarr = [
              'party_id' => $id,
              'flag_id' => $flag,
              'number' => $this->request->getVar('number_' . $flag),
              'img1' => $img1,
              'img2' => $img2
            ];
            $PartyDocModel->save($docarr);
          }


          $session = \Config\Services::session();
          $session->setFlashdata('success', 'Party Approved Successfully');
          return $this->response->redirect(base_url('party'));
        }
      }
    }

    return view('Party/approval', $data);
  }

  public function delete($id = null)
  {

    $access = $this->_access;
    if ($access === 'false') {
      $session = \Config\Services::session();
      $session->setFlashdata('error', 'You are not permitted to access this page');
      return $this->response->redirect(base_url('/dashboard'));
    } else {
      $partyModel = new PartyModel();
      $partyModel->where('id', $id)->delete($id);
      $session = \Config\Services::session();
      $session->setFlashdata('success', 'Party Deleted');
      return $this->response->redirect(base_url('/party'));
    }
  }

  public function get_flags_fields()
  {
    if (isset($_POST['business_type'])) {

      $BTFModel = new BusinessTypeFlagModel();

      $flagData = $BTFModel->select('business_type_flags.*, flags.title,')
        ->join('flags', 'flags.id = business_type_flags.flags_id')
        ->where('business_type_flags.business_type_id', $this->request->getPost('business_type'))
        ->findAll();

       if($this->request->getPost('id')){
          $id=$this->request->getPost('id');
          $PartyDocModel = new PartyDocumentsModel();  
          $data['partyDocs'] = $PartyDocModel->select('party_documents.*, flags.title')
          ->join('flags', 'flags.id = party_documents.flag_id')
          ->where('party_id', $id)->findAll();
       } 

      foreach ($flagData as $flag) {

        echo '<div class="col-md-6">
                  <div class="form-wrap">
                    <label class="col-form-label" >' . $flag['title'] . ' ' . ($flag['mandatory'] ? '<span class="text-danger">*</span>' : '') . '<span class="text-danger" id="span_' . $flag['flags_id'] . '"></span></label>
                    <input type="text" ' . ($flag['mandatory'] ? 'required' : '') . ' name="number_' . $flag['flags_id'] . '" id="num_' . $flag['flags_id'] . '" onchange="$.validate(' . $flag['flags_id'] . ');" class="form-control">
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-wrap">
                    <label class="col-form-label">' . $flag['title'] . ' Image 1 ' . ($flag['mandatory'] ? '<span class="text-danger">*</span>' : '') . '</label>
                    <input type="file" ' . ($flag['mandatory'] ? 'required' : '') . ' name="img_' . $flag['flags_id'] . '_1" class="form-control">
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-wrap">
                    <label class="col-form-label">' . $flag['title'] . '  Image 2</label>
                    <input type="file" name="img_' . $flag['flags_id'] . '_2" class="form-control">
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

  public function status($id = null)
  {
    $access = $this->_access;
    if ($access === 'false') {
      $session = \Config\Services::session();
      $session->setFlashdata('error', 'You are not permitted to access this page');
      return $this->response->redirect(base_url('/dashboard'));
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
      return $this->response->redirect(base_url('/party'));
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
