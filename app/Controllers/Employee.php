<?php

namespace App\Controllers;

use App\Models\EmployeeModel;
use App\Models\CompanyModel;
use App\Models\UserModel;
use App\Models\ModulesModel;
use App\Models\AadhaarNumberMapModule;
use App\Models\OfficeModel;

class Employee extends BaseController
{
  public $_access;

  public function __construct()
  {
    $u = new UserModel();
    $access = $u->setPermission();
    $this->_access = $access;
    $this->employeeModel = new EmployeeModel();
    $this->companyModel = new CompanyModel();
    $this->aadhaarModel = new AadhaarNumberMapModule();
    $this->user = new UserModel();
    $this->officeModel = new OfficeModel();

    $this->added_by = isset($_SESSION['id']) ? $_SESSION['id'] : '0';
    $this->added_ip = isset($_SERVER['REMOTE_ADDR'])  ? $_SERVER['REMOTE_ADDR'] : '';
  }


  public function index()
  {
    $access = $this->_access;
    if ($access === 'false') {
      $session = \Config\Services::session();
      $session->setFlashdata('error', 'You are not permitted to access this page');
      return $this->response->redirect(site_url('/dashboard'));
    } else {

      $this->view['employee_data'] = $this->employeeModel->orderBy('id', 'DESC')->paginate(10);
      $this->view['pagination_link'] = $this->employeeModel->pager;
      $this->view['page_data'] = ['page_title' => view('partials/page-title', ['title' => 'Employee', 'li_1' => '123', 'li_2' => 'deals'])];
      return view('Employee/index', $this->view);
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
      $this->view['page_data'] = ['page_title' => view('partials/page-title', ['title' => 'Add Employee', 'li_2' => 'profile'])];
      $this->view['company'] = $this->companyModel->where(['status' => 'Active'])->orderBy('name')->findAll();


      if ($this->request->getMethod() == 'POST') {

        $error = $this->validate([
          'company_name' => 'required',
          'office_location' => 'required',
          'name' => 'required|min_length[3]|max_length[50]',
          'mobile' => 'required|numeric|min_length[10]|max_length[15]',
          'image1' => 'max_size[image1,100]|ext_in[image1,jpg,jpeg,png]',
          'image2' => 'max_size[image2,100]|ext_in[image2,jpg,jpeg,png]',
          'aadhaarfront' => 'max_size[aadhaarfront,100]|ext_in[aadhaarfront,jpg,jpeg,png,pdf]',
          'aadhaarback' => 'max_size[aadhaarback,100]|ext_in[aadhaarback,jpg,jpeg,png,pdf]',
          'joiningdate' => 'required',
          'upi_id' => 'max_size[upi_id,100]|ext_in[upi_id,jpg,jpeg,png]',
        ]);
        if (!$error) {
          $this->view['error'] = $this->validator;
        } else {

          $newName1 = '';
          $image1 = $this->request->getFile('image1');
          if ($image1->isValid() && !$image1->hasMoved()) {
            $newName1 = $image1->getRandomName();
            $imgpath = 'public/uploads/employeeDocs';
            if (!is_dir($imgpath)) {
              mkdir($imgpath, 0777, true);
            }
            $image1->move($imgpath, $newName1);
          }
          if ($newName1 == '') {
            $image_name1 = '';
          } else {
            $image_name1 = $newName1;
          }

          $newName2 = '';
          $image2 = $this->request->getFile('image2');
          if ($image2->isValid() && !$image2->hasMoved()) {
            $newName2 = $image2->getRandomName();
            $imgpath = 'public/uploads/employeeDocs';
            if (!is_dir($imgpath)) {
              mkdir($imgpath, 0777, true);
            }
            $image2->move($imgpath, $newName2);
          }
          if ($newName2 == '') {
            $image_name2 = '';
          } else {
            $image_name2 = $newName2;
          }

          $aadhaarfrontnewName = '';
          $aadhaarfront = $this->request->getFile('aadhaarfront');
          if ($aadhaarfront->isValid() && !$aadhaarfront->hasMoved()) {
            $aadhaarfrontnewName = $aadhaarfront->getRandomName();
            $imgpathaadhaarfront = 'public/uploads/employeeDocs';
            if (!is_dir($imgpathaadhaarfront)) {
              mkdir($imgpathaadhaarfront, 0777, true);
            }
            $aadhaarfront->move($imgpathaadhaarfront, $aadhaarfrontnewName);
          }
          if ($aadhaarfrontnewName == '') {
            $aadhaarfrontimage_name = '';
          } else {
            $aadhaarfrontimage_name = $aadhaarfrontnewName;
          }

          $aadhaarbacknewName = '';
          $aadhaarback = $this->request->getFile('aadhaarback');
          if ($aadhaarback->isValid() && !$aadhaarback->hasMoved()) {
            $aadhaarbacknewName = $aadhaarback->getRandomName();
            $imgpathaadhaarback = 'public/uploads/employeeDocs';
            if (!is_dir($imgpathaadhaarback)) {
              mkdir($imgpathaadhaarback, 0777, true);
            }
            $aadhaarback->move($imgpathaadhaarback, $aadhaarbacknewName);
          }
          if ($aadhaarbacknewName == '') {
            $aadhaarbackimage_name = '';
          } else {
            $aadhaarbackimage_name = $aadhaarbacknewName;
          }

          $upinewName = '';
          $upi = $this->request->getFile('upi_id');
          if ($upi->isValid() && !$upi->hasMoved()) {
            $upinewName = $upi->getRandomName();
            $imgpathupi = 'public/uploads/employeeDocs';
            if (!is_dir($imgpathupi)) {
              mkdir($imgpathupi, 0777, true);
            }
            $upi->move($imgpathupi, $upinewName);
          }
          if ($upinewName == '') {
            $upiimage_name = '';
          } else {
            $upiimage_name = $upinewName;
          }

          $digitalSign = '';
          $upi = $this->request->getFile('digital_sign');
          if ($upi->isValid() && !$upi->hasMoved()) {
            $digitalSign = $upi->getRandomName();
            $imgpathupi = 'public/uploads/employeeDocs';
            if (!is_dir($imgpathupi)) {
              mkdir($imgpathupi, 0777, true);
            }
            $upi->move($imgpathupi, $digitalSign);
          }
          if ($digitalSign == '') {
            $signature = '';
          } else {
            $signature =  $digitalSign;
          }

          $this->employeeModel->save([
            'company_id' => $this->request->getVar('company_name'),
            'branch_id' => $this->request->getVar('office_location'),
            'name' => $this->request->getVar('name'),
            'adhaar_number' => $this->request->getPost('aadhaar'),
            'aadhar_img_front' => $aadhaarfrontimage_name,
            'aadhar_img_back' => $aadhaarbackimage_name,
            'mobile' => $this->request->getPost('mobile'),
            'email' => $this->request->getPost('email'),
            'company_phone' => $this->request->getPost('comp_mobile'),
            'company_email' => $this->request->getPost('comp_email'),
            'emergency_person' => $this->request->getPost('emergency_person'),
            'emergency_contact_number' => $this->request->getPost('emergency_phone'),
            'digital_sign' => $signature,
            'bank_account_number' => $this->request->getPost('bank_account_number'),
            'bank_ifsc_code' => $this->request->getPost('bank_ifsc_code'),
            'upi_img' => $upiimage_name,
            'upi_id' => $this->request->getPost('upi'),
            'profile_image1' => $image_name1,
            'profile_image2' => $image_name2,
            'joining_date' => $this->request->getPost('joiningdate'),
            'created_by' => $this->added_by,
            'created_ip' =>  $this->added_ip,
          ]);


          $session = \Config\Services::session();
          $session->setFlashdata('success', 'Employee Added Successfully');
          return $this->response->redirect(base_url('employee'));
        }
      }
      return view('Employee/create', $this->view);
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

      $this->view['employee_detail'] = $this->employeeModel->where('id', $id)->first();

      $this->view['company'] = $this->companyModel->where(['status' => 'Active'])->orderBy('name')->findAll();
      $this->view['office_data'] = $this->officeModel->where('id', $this->view['employee_detail']['branch_id'])->findAll();


      $request = service('request');

      if ($this->request->getMethod() == 'POST') {

        $error = $this->validate([
          'company_name' => 'required',
          'name' => 'required|min_length[3]|max_length[50]',
          'mobile' => 'required|numeric|min_length[10]|max_length[15]',
          'aadhaar' => 'required|numeric|max_length[16]',
          'image1' => 'max_size[image1,100]|ext_in[image1,jpg,jpeg,png]',
          'image2' => 'max_size[image2,100]|ext_in[image2,jpg,jpeg,png]',
          'aadhaarfront' => 'max_size[aadhaarfront,100]|ext_in[aadhaarfront,jpg,jpeg,png,pdf]',
          'aadhaarback' => 'max_size[aadhaarback,100]|ext_in[aadhaarback,jpg,jpeg,png,pdf]',
          'joiningdate' => 'required',
          'upi_id' => 'max_size[upi_id,100]|ext_in[upi_id,jpg,jpeg,png]'
        ]);
        if (!$error) {
          $this->view['error'] = $this->validator;
        } else {

          $this->employeeModel->update($id, [
            'company_id' => $this->request->getVar('company_name'),
            'branch_id' => $this->request->getVar('office_location'),
            'name' => $this->request->getVar('name'),
            'adhaar_number' => $this->request->getPost('aadhaar'),
            'mobile' => $this->request->getPost('mobile'),
            'email' => $this->request->getPost('email'),
            'company_phone' => $this->request->getPost('comp_mobile'),
            'company_email' => $this->request->getPost('comp_email'),
            'emergency_person' => $this->request->getPost('emergency_person'),
            'emergency_contact_number' => $this->request->getPost('emergency_phone'),
            'bank_account_number' => $this->request->getPost('bank_account_number'),
            'bank_ifsc_code' => $this->request->getPost('bank_ifsc_code'),
            'upi_id' => $this->request->getPost('upi'),
            'joining_date' => $this->request->getPost('joiningdate'),
            'status' => '0',
            'approved' => '0',
            'updated_at' => date('Y-m-d'),
            'updated_by' =>  $this->added_by
          ]);


          if ($_FILES['aadhaarfront']['name'] != '') {
            $newName1 = '';
            $image1 = $this->request->getFile('aadhaarfront');
            if ($image1->isValid() && !$image1->hasMoved()) {
              $newName1 =  $image1->getRandomName();
              $imgpath1 = 'public/uploads/employeeDocs';
              if (!is_dir($imgpath1)) {
                mkdir($imgpath1, 0777, true);
              }
              $image1->move($imgpath1, $newName1);
            }
            $this->employeeModel->update($id, ['aadhar_img_front' => $newName1]);
          }

          if ($_FILES['aadhaarback']['name'] != '') {
            $newName1 = '';
            $image1 = $this->request->getFile('aadhaarback');
            if ($image1->isValid() && !$image1->hasMoved()) {
              $newName1 =  $image1->getRandomName();
              $imgpath1 = 'public/uploads/employeeDocs';
              if (!is_dir($imgpath1)) {
                mkdir($imgpath1, 0777, true);
              }
              $image1->move($imgpath1, $newName1);
            }
            $this->employeeModel->update($id, ['aadhar_img_back' => $newName1]);
          }

          if ($_FILES['image1']['name'] != '') {
            $newName1 = '';
            $image1 = $this->request->getFile('image1');
            if ($image1->isValid() && !$image1->hasMoved()) {
              $newName1 =  $image1->getRandomName();
              $imgpath1 = 'public/uploads/employeeDocs';
              if (!is_dir($imgpath1)) {
                mkdir($imgpath1, 0777, true);
              }
              $image1->move($imgpath1, $newName1);
            }
            $this->employeeModel->update($id, ['profile_image1' => $newName1]);
          }

          if ($_FILES['image2']['name'] != '') {
            $newName1 = '';
            $image1 = $this->request->getFile('image2');
            if ($image1->isValid() && !$image1->hasMoved()) {
              $newName1 =  $image1->getRandomName();
              $imgpath1 = 'public/uploads/employeeDocs';
              if (!is_dir($imgpath1)) {
                mkdir($imgpath1, 0777, true);
              }
              $image1->move($imgpath1, $newName1);
            }
            $this->employeeModel->update($id, ['profile_image2' => $newName1]);
          }

          if ($_FILES['digital_sign']['name'] != '') {
            $newName1 = '';
            $image1 = $this->request->getFile('digital_sign');
            if ($image1->isValid() && !$image1->hasMoved()) {
              $newName1 =  $image1->getRandomName();
              $imgpath1 = 'public/uploads/employeeDocs';
              if (!is_dir($imgpath1)) {
                mkdir($imgpath1, 0777, true);
              }
              $image1->move($imgpath1, $newName1);
            }
            $this->employeeModel->update($id, ['digital_sign' => $newName1]);
          }

          if ($_FILES['upi_id']['name'] != '') {
            $newName1 = '';
            $image1 = $this->request->getFile('upi_id');
            if ($image1->isValid() && !$image1->hasMoved()) {
              $newName1 =  $image1->getRandomName();
              $imgpath1 = 'public/uploads/employeeDocs';
              if (!is_dir($imgpath1)) {
                mkdir($imgpath1, 0777, true);
              }
              $image1->move($imgpath1, $newName1);
            }
            $this->employeeModel->update($id, ['upi_img' => $newName1]);
          }



          // if ($this->request->getVar('approve') == 1) {
          //   $status = 'Active';
          // } else {
          //   $status = 'Inactive';
          // }


          $session = \Config\Services::session();
          $session->setFlashdata('success', 'Employee updated');
          return $this->response->redirect(base_url('employee'));
        }
      }
      return view('Employee/edit_employee', $this->view);
    }
  }


  public function approve($id = null)
  {
    $access = $this->_access;
    if ($access === 'false') {
      $session = \Config\Services::session();
      $session->setFlashdata('error', 'You are not permitted to access this page');
      return $this->response->redirect(site_url('/dashboard'));
    } else {

      $this->view['employee_detail'] = $this->employeeModel->where('id', $id)->first();

      $this->view['company'] = $this->companyModel->where(['status' => 'Active'])->orderBy('name')->findAll();
      $this->view['office_data'] = $this->officeModel->where('id', $this->view['employee_detail']['branch_id'])->findAll();


      $request = service('request');

      if ($this->request->getMethod() == 'POST') {

        $error = $this->validate([
          'company_name' => 'required',
          'name' => 'required|min_length[3]|max_length[50]',
          'mobile' => 'required|numeric|min_length[10]|max_length[15]',
          'aadhaar' => 'required|numeric|max_length[16]',
          'image1' => 'max_size[image1,100]|ext_in[image1,jpg,jpeg,png]',
          'image2' => 'max_size[image2,100]|ext_in[image2,jpg,jpeg,png]',
          'aadhaarfront' => 'max_size[aadhaarfront,100]|ext_in[aadhaarfront,jpg,jpeg,png,pdf]',
          'aadhaarback' => 'max_size[aadhaarback,100]|ext_in[aadhaarback,jpg,jpeg,png,pdf]',
          'joiningdate' => 'required',
          'upi_id' => 'max_size[upi_id,100]|ext_in[upi_id,jpg,jpeg,png]'
        ]);
        if (!$error) {
          $this->view['error'] = $this->validator;
        } else {

          $this->employeeModel->update($id, [
            'company_id' => $this->request->getVar('company_name'),
            'branch_id' => $this->request->getVar('office_location'),
            'name' => $this->request->getVar('name'),
            'adhaar_number' => $this->request->getPost('aadhaar'),
            'mobile' => $this->request->getPost('mobile'),
            'email' => $this->request->getPost('email'),
            'company_phone' => $this->request->getPost('comp_mobile'),
            'company_email' => $this->request->getPost('comp_email'),
            'emergency_person' => $this->request->getPost('emergency_person'),
            'emergency_contact_number' => $this->request->getPost('emergency_phone'),
            'bank_account_number' => $this->request->getPost('bank_account_number'),
            'bank_ifsc_code' => $this->request->getPost('bank_ifsc_code'),
            'upi_id' => $this->request->getPost('upi'),
            'joining_date' => $this->request->getPost('joiningdate'),
            'status' => $this->request->getVar('approve') == '1' ? '1' : '0',
            'approved' => $this->request->getVar('approve') == '1' ? '1' : '0',
            'approval_by' =>  $this->added_by,
            'approval_date' => date('Y-m-d'),
            'approval_ip' =>  $this->added_ip
          ]);


          if ($_FILES['aadhaarfront']['name'] != '') {
            $newName1 = '';
            $image1 = $this->request->getFile('aadhaarfront');
            if ($image1->isValid() && !$image1->hasMoved()) {
              $newName1 =  $image1->getRandomName();
              $imgpath1 = 'public/uploads/employeeDocs';
              if (!is_dir($imgpath1)) {
                mkdir($imgpath1, 0777, true);
              }
              $image1->move($imgpath1, $newName1);
            }
            $this->employeeModel->update($id, ['aadhar_img_front' => $newName1]);
          }

          if ($_FILES['aadhaarback']['name'] != '') {
            $newName1 = '';
            $image1 = $this->request->getFile('aadhaarback');
            if ($image1->isValid() && !$image1->hasMoved()) {
              $newName1 =  $image1->getRandomName();
              $imgpath1 = 'public/uploads/employeeDocs';
              if (!is_dir($imgpath1)) {
                mkdir($imgpath1, 0777, true);
              }
              $image1->move($imgpath1, $newName1);
            }
            $this->employeeModel->update($id, ['aadhar_img_back' => $newName1]);
          }

          if ($_FILES['image1']['name'] != '') {
            $newName1 = '';
            $image1 = $this->request->getFile('image1');
            if ($image1->isValid() && !$image1->hasMoved()) {
              $newName1 =  $image1->getRandomName();
              $imgpath1 = 'public/uploads/employeeDocs';
              if (!is_dir($imgpath1)) {
                mkdir($imgpath1, 0777, true);
              }
              $image1->move($imgpath1, $newName1);
            }
            $this->employeeModel->update($id, ['profile_image1' => $newName1]);
          }

          if ($_FILES['image2']['name'] != '') {
            $newName1 = '';
            $image1 = $this->request->getFile('image2');
            if ($image1->isValid() && !$image1->hasMoved()) {
              $newName1 =  $image1->getRandomName();
              $imgpath1 = 'public/uploads/employeeDocs';
              if (!is_dir($imgpath1)) {
                mkdir($imgpath1, 0777, true);
              }
              $image1->move($imgpath1, $newName1);
            }
            $this->employeeModel->update($id, ['profile_image2' => $newName1]);
          }

          if ($_FILES['digital_sign']['name'] != '') {
            $newName1 = '';
            $image1 = $this->request->getFile('digital_sign');
            if ($image1->isValid() && !$image1->hasMoved()) {
              $newName1 =  $image1->getRandomName();
              $imgpath1 = 'public/uploads/employeeDocs';
              if (!is_dir($imgpath1)) {
                mkdir($imgpath1, 0777, true);
              }
              $image1->move($imgpath1, $newName1);
            }
            $this->employeeModel->update($id, ['digital_sign' => $newName1]);
          }

          if ($_FILES['upi_id']['name'] != '') {
            $newName1 = '';
            $image1 = $this->request->getFile('upi_id');
            if ($image1->isValid() && !$image1->hasMoved()) {
              $newName1 =  $image1->getRandomName();
              $imgpath1 = 'public/uploads/employeeDocs';
              if (!is_dir($imgpath1)) {
                mkdir($imgpath1, 0777, true);
              }
              $image1->move($imgpath1, $newName1);
            }
            $this->employeeModel->update($id, ['upi_img' => $newName1]);
          }



          // if ($this->request->getVar('approve') == 1) {
          //   $status = 'Active';
          // } else {
          //   $status = 'Inactive';
          // }


          $session = \Config\Services::session();
          $session->setFlashdata('success', 'Employee Approved');
          return $this->response->redirect(base_url('employee'));
        }
      }
      return view('Employee/approve', $this->view);
    }
  }


  public function delete($id)
  {
    $access = $this->_access;
    if ($access === 'false') {
      $session = \Config\Services::session();
      $session->setFlashdata('error', 'You are not permitted to access this page');
      return $this->response->redirect(site_url('/dashboard'));
    } else {
      $this->employeeModel->where('id', $id)->delete($id);
      $session = \Config\Services::session();
      $session->setFlashdata('success', 'Employee Deleted');
      return $this->response->redirect(site_url('/employee'));
    }
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
      $emeModel = new EmployeeModel();
      $eModel = $emeModel->where('id', $id)->first();
      if (isset($eModel)) {
        if ($eModel['status'] == '1') {
          $status = '0';
        } else {
          $status = '1';
        }
      }

      $emeModel->update($id, [
        'status' => $status,
        'updated_at' =>  date("Y-m-d h:i:sa"),
      ]);
      $session = \Config\Services::session();
      $session->setFlashdata('success', 'Employee Status Updated');
      return $this->response->redirect(base_url('employee'));
    }
  }

  public function getOfficeLocations()
  {
    $companyId = $this->request->getPost('company_id');
    $officeLocations = $this->officeModel->where('company_id', $companyId)->orderBy('name')->findAll();
    return $this->response->setJSON($officeLocations);
  }
}
