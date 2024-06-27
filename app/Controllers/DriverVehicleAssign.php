<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DriverModel;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\DriverVehicleAssignModel;
use App\Models\UserModel;
use App\Models\ModulesModel;
use CodeIgniter\Database\RawSql;
use App\Models\VehicleTypeModel;
use App\Models\VehicleModel;

class DriverVehicleAssign extends BaseController
{
  public $access;
  public $session;
  public $DVAModel;
  public $VTModel;
  public $VModel;
  public $DModel;
  public $added_by;
  public $added_ip;

  public function __construct()
  {
    $this->session = \Config\Services::session();

    $this->DVAModel = new DriverVehicleAssignModel();
    $this->VTModel = new VehicleTypeModel();
    $this->VModel = new VehicleModel();
    $this->DModel = new DriverModel();

    $user = new UserModel();
    $this->access = $user->setPermission();

    $this->added_by = isset($_SESSION['id']) ? $_SESSION['id'] : '0';
    $this->added_ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
  }

  public function index()
  {
    if ($this->access === 'false') {
      $this->session->setFlashdata('error', 'You are not permitted to access this page');
      return $this->response->redirect(base_url('/dashboard'));
    } else {
      $data['assign_data'] = $this->DVAModel->get();
      $data['page_data'] = [
        'page_title' => view('partials/page-title', ['title' => 'Assign Vehicle To Driver', 'li_1' => '123', 'li_2' => 'deals'])
      ];
      return view('Assignvehicle/index', $data);
    }
  }

  public function create($id)
  {
    if ($this->access === 'false') {
      $this->session->setFlashdata('error', 'You are not permitted to access this page');
      return $this->response->redirect(base_url('/dashboard'));
    } else if ($this->request->getPost()) {

      $arr = [
        'driver_id' => $id,
        'vehicle_id' => $this->request->getPost('vehicle_id'),
        'vehicle_location' => $this->request->getPost('location'),
        'vehicle_fuel_status' => $this->request->getPost('fuel'),
        'vehicle_km_reading' => $this->request->getPost('km'),
        'assigned_by' => $this->added_by
      ];
      $this->DVAModel->insert($arr);
      $this->session->setFlashdata('success', 'Vehicle assigned to driver');

      // change driver and vehicle status
      $this->VModel->update($this->request->getPost('vehicle_id'), ['vehicle_status' => 'Assigned']);
      $this->DModel->update($id, ['assigned' => '1']);

      return $this->response->redirect(base_url('/driver'));
    } else {

      $data['token'] = $id;
      $data['vehicles'] = $this->VModel->where('vehicle_status', 'Unassigned')->findAll();
      $data['driver_detail'] = $this->DModel->where('id', $id)->first();

      return view('AssignVehicle/create', $data);
    }
  }

  public function unassign($id = null)
  {
    $link = $this->DVAModel->where('driver_id', $id)->where('unassign_date', '')->first();

    $this->DVAModel->update($link['id'], ['unassign_date' =>  date("Y-m-d h:i:sa"), 'unassigned_by' => $this->added_by]);
    $this->VModel->update($link['vehicle_id'], ['vehicle_status' => 'Unassigned']);
    $this->DModel->update($id, ['assigned' => '0']);


    $this->session->setFlashdata('success', 'Driver Unassigned');
    return $this->response->redirect(base_url('/driver'));
  }


  public function list()
  {
    $data['list'] = $this->DVAModel
      ->join('vehicle', 'vehicle.id = driver_vehicle_map.vehicle_id')
      ->join('driver', 'driver.id = driver_vehicle_map.driver_id')
      ->where('unassign_date', '')
      ->orderBy('vehicle.rc_number', 'asc')
      ->findAll();

    return view('AssignVehicle/index', $data);
  }

  // -------------------------------------------------------------------------------
  public function create_old($id = null)
  {
    $access = $this->_access;
    if ($access === 'false') {
      $session = \Config\Services::session();
      $session->setFlashdata('error', 'You are not permitted to access this page');
      return $this->response->redirect(site_url('/dashboard'));
    } else {
      $data['vehicle_types'] = $this->VTModel->where('');
      $data['driver_id'] = $id;
      $data['page_data'] = [
        'page_title' => view('partials/page-title', ['title' => 'Add Driver', 'li_2' => 'profile'])
      ];
      $request = service('request');
      if ($this->request->getMethod() == 'POST') {
        $error = $this->validate([
          'vehicle_type' =>  'required',
          'vehicle_id' =>  'required',
          'driver_id'     =>  'required'
        ]);

        if (!$error) {
          $data['error']   = $this->validator;
        } else {
          $driver_id = $this->request->getVar('driver_id');
          $driver_assign = $this->DVAModel->where('driver_id', $driver_id)->where('unassign_date IS NULL', null, true)->first();
          if (isset($driver_assign)) {
            $session = \Config\Services::session();
            $session->setFlashdata('error', 'Vehicle Driver is already assigned to vehicle');
          } else {
            $this->DVAModel->save([
              'vehicle_id'  =>  $this->request->getVar('vehicle_id'),
              'driver_id'  =>  $driver_id,
              'vehicle_location'  =>  $this->request->getVar('vehicle_location'),
              'vehicle_fuel_status'  =>  $this->request->getVar('vehicle_fuel_status'),
              'vehicle_km_reading'  =>  $this->request->getVar('vehicle_km_reading'),
              'assign_date'  =>  date("Y-m-d h:i:sa"),
              'created_at'  =>  date("Y-m-d h:i:sa"),
            ]);
            $session = \Config\Services::session();
            $session->setFlashdata('success', 'Vehicle Assigned');
          }
          return $this->response->redirect(site_url('/driverVehicleAssign'));
        }
      }
      return view('Assignvehicle/create', $data);
    }
  }

  public function get_vehicle_by_vehicle_type()
  {
    $id = $this->request->getVar('vehicle_id');
    if (isset($id)) {
      $vehicles =  $this->VModel->get_vehicle_from_type($id);
      if (!empty($vehicles)) {
        echo '<option value="">Select Vehicle</option>';
        foreach ($vehicles as $key => $value) {
          echo '<option value=' . $value["id"] . '>' . $value["rc_number"] . '</option>';
        }
      } else {
        echo '<option value="">Vehicle not available</option>';
      }
    }
  }
}
