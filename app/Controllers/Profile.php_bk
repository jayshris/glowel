<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
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

  public function index()
  {
    $access = $this->_access;
    if ($access === 'false') {
      $session = \Config\Services::session();
      $session->setFlashdata('error', 'You are not permitted to access this page');
      return $this->response->redirect(base_url('/dashboard'));
    } else {
      if (session()->get('isLoggedIn')) {
        $login_id = session()->get('id');
      }
      $this->view['page_data'] = [
        'page_title' => view('partials/page-title', ['title' => 'Profile', 'li_2' => 'profile'])
      ];
      $stateModel = new StateModel();
      $this->view['state'] = $stateModel->where(['isStatus' => '1'])->orderBy('state_name', 'ASC')->findAll();
      $profiledata = new ProfileModel();
      $this->view['profile_data'] = $profiledata->where('id', 1)->first();


      $request = service('request');
      if ($this->request->getMethod() == 'POST') {
        $error = $this->validate([
          'company_name'    => 'required|trim|regex_match[/^[a-z\d\-_\s]+$/i]',
          'abbreviation'    =>  'required|trim|regex_match[/^[a-z\d\-_\s]+$/i]',
          'email'           => 'required|valid_email',
          'phone_number'    => 'required|numeric',
          'gst'             => 'required|alpha_numeric',
          'pan_no'          =>  'required|alpha_numeric',
        ]);

        if (!$error) {
          $this->view['error']   = $this->validator;
        } else {
          $profilemodel = new ProfileModel();
          $model = $profilemodel->where('id', 1)->first();
          $id = 1;
          $newName = '';
          $image = $this->request->getFile('company_logo');
          $image_name = '';
          if (isset($image)) {
            if ($image->isValid() && !$image->hasMoved()) {
              $newName = $image->getRandomName();
              $imgpath = rtrim(WRITEPATH, "writable/") . '/public/writable/uploads/profiles';
              if (!is_dir($imgpath)) {
                mkdir($imgpath, 0777, true);
              }
              $image->move($imgpath, $newName);
            }
            $image_name = base_url() . 'public/writable/uploads/profiles/' . $newName;
          } else {
            if (isset($model)) {
              $image_name = $model['company_logo'];
            }
          }
          if (!isset($model)) {
            $profilemodel->save([
              'logged_in_userid'      => session()->get('id'),
              'company_name'          => $this->request->getVar('company_name'),
              'abbreviation'          => $this->request->getVar('abbreviation'),
              'email'                 => $this->request->getVar('email'),
              'landline_number'       =>  $this->request->getVar('landline_number'),

              'phone_number'          => $this->request->getVar('phone_number'),
              'alternate_phone_number'               =>  $this->request->getVar('alternate_phone_number'),

              'gst'                   => $this->request->getVar('gst'),
              'pan_no'                => $this->request->getVar('pan_no'),
              'otherid'               =>  $this->request->getVar('otherid'),
              'company_logo'          => $image_name,
              'company_business_address' => $this->request->getVar('company_business_address'),
              'country'               => $this->request->getVar('country'),
              'state'                 => $this->request->getVar('state'),
              'city'                  => $this->request->getVar('city'),
              'pincode'               => $this->request->getVar('pincode'),
              'purchase_order_prefix' => $this->request->getVar('purchase_order_prefix'),
              'invoice_prefix'        => $this->request->getVar('invoice_prefix'),
              'booking_prefix'        => $this->request->getVar('booking_prefix'),
              'created_at'            => date("Y-m-d h:i:sa")
            ]);
          } else {
            $profilemodel->update($id, [
              'logged_in_userid'      => session()->get('id'),
              'company_name'          => $this->request->getVar('company_name'),
              'abbreviation'          => $this->request->getVar('abbreviation'),
              'email'                 => $this->request->getVar('email'),
              'landline_number'       =>  $this->request->getVar('landline_number'),
              'phone_number'          => $this->request->getVar('phone_number'),
              'alternate_phone_number'               =>  $this->request->getVar('alternate_phone_number'),
              'gst'                   => $this->request->getVar('gst'),
              'pan_no'                => $this->request->getVar('pan_no'),
              'otherid'               =>  $this->request->getVar('otherid'),
              'company_logo'          => $image_name,
              'company_business_address' => $this->request->getVar('company_business_address'),
              'country'               => $this->request->getVar('country'),
              'state'                 => $this->request->getVar('state'),
              'city'                  => $this->request->getVar('city'),
              'pincode'               => $this->request->getVar('pincode'),
              'purchase_order_prefix' => $this->request->getVar('purchase_order_prefix'),
              'invoice_prefix'        => $this->request->getVar('invoice_prefix'),
              'booking_prefix'        => $this->request->getVar('booking_prefix'),
              'updated_at'            => date("Y-m-d h:i:sa")
            ]);
          }
          $session = \Config\Services::session();
          $session->setFlashdata('success', 'Profile Updated Successfully');
          return $this->response->redirect(base_url('profile'));
        }
      }

      return view('profile', $this->view);
    }
  }

  public function edit()
  {

    $access = $this->_access;

    $stateModel = new StateModel();
    $this->view['state'] = $stateModel->where(['isStatus' => '1'])->orderBy('state_name', 'ASC')->findAll();
    $profiledata = new ProfileModel();
    $this->view['profile_data'] = $profiledata->where('id', 1)->first();
    if ($access === 'false') {
      $session = \Config\Services::session();
      $session->setFlashdata('error', 'You are not permitted to access this page');
      return $this->response->redirect(base_url('/dashboard'));
    } else {
      $request = service('request');
      if ($this->request->getMethod() == 'POST') {
        $error = $this->validate([
          'company_name'    => 'required|trim|regex_match[/^[a-z\d\-_\s]+$/i]',
          'abbreviation'    =>  'required|trim|regex_match[/^[a-z\d\-_\s]+$/i]',
          'email'           => 'required|valid_email',
          'phone_number'    => 'required|numeric',
          'gst'             => 'required|alpha_numeric',
          'pan_no'          =>  'required|alpha_numeric',
        ]);

        if (!$error) {
          $this->view['error']   = $this->validator;
        } else {
          $profilemodel = new ProfileModel();
          $model = $profilemodel->where('id', 1)->first();
          $id = 1;
          $newName = '';
          $image = $this->request->getFile('company_logo');
          $image_name = '';
          if (isset($image)) {
            if ($image->isValid() && !$image->hasMoved()) {
              $newName = $image->getRandomName();
              $imgpath = rtrim(WRITEPATH, "writable/") . '/public/writable/uploads/profiles';
              if (!is_dir($imgpath)) {
                mkdir($imgpath, 0777, true);
              }
              $image->move($imgpath, $newName);
            }
            $image_name = base_url() . 'public/writable/uploads/profiles/' . $newName;
          } else {
            if (isset($model)) {
              $image_name = $model['company_logo'];
            }
          }
          if (!isset($model)) {
            $profilemodel->save([
              'logged_in_userid'      => session()->get('id'),
              'company_name'          => $this->request->getVar('company_name'),
              'abbreviation'          => $this->request->getVar('abbreviation'),
              'email'                 => $this->request->getVar('email'),
              'landline_number'       =>  $this->request->getVar('landline_number'),

              'phone_number'          => $this->request->getVar('phone_number'),
              'alternate_phone_number'               =>  $this->request->getVar('alternate_phone_number'),

              'gst'                   => $this->request->getVar('gst'),
              'pan_no'                => $this->request->getVar('pan_no'),
              'otherid'               =>  $this->request->getVar('otherid'),
              'company_logo'          => $image_name,
              'company_business_address' => $this->request->getVar('company_business_address'),
              'country'               => $this->request->getVar('country'),
              'state'                 => $this->request->getVar('state'),
              'city'                  => $this->request->getVar('city'),
              'pincode'               => $this->request->getVar('pincode'),
              'purchase_order_prefix' => $this->request->getVar('purchase_order_prefix'),
              'invoice_prefix'        => $this->request->getVar('invoice_prefix'),
              'booking_prefix'        => $this->request->getVar('booking_prefix'),
              'created_at'            => date("Y-m-d h:i:sa")
            ]);
          } else {
            $profilemodel->update($id, [
              'logged_in_userid'      => session()->get('id'),
              'company_name'          => $this->request->getVar('company_name'),
              'abbreviation'          => $this->request->getVar('abbreviation'),
              'email'                 => $this->request->getVar('email'),
              'landline_number'       =>  $this->request->getVar('landline_number'),
              'phone_number'          => $this->request->getVar('phone_number'),
              'alternate_phone_number'               =>  $this->request->getVar('alternate_phone_number'),
              'gst'                   => $this->request->getVar('gst'),
              'pan_no'                => $this->request->getVar('pan_no'),
              'otherid'               =>  $this->request->getVar('otherid'),
              'company_logo'          => $image_name,
              'company_business_address' => $this->request->getVar('company_business_address'),
              'country'               => $this->request->getVar('country'),
              'state'                 => $this->request->getVar('state'),
              'city'                  => $this->request->getVar('city'),
              'pincode'               => $this->request->getVar('pincode'),
              'purchase_order_prefix' => $this->request->getVar('purchase_order_prefix'),
              'invoice_prefix'        => $this->request->getVar('invoice_prefix'),
              'booking_prefix'        => $this->request->getVar('booking_prefix'),
              'updated_at'            => date("Y-m-d h:i:sa")
            ]);
          }
          $session = \Config\Services::session();
          $session->setFlashdata('success', 'Profile Updated Successfully');
          return $this->response->redirect(base_url('profile'));
        }
      }
    }
    return view('profile', $this->view);
  }
}
