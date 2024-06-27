<?php

namespace App\Models;

use CodeIgniter\Model;

class DriverVehicleAssignModel extends Model
{
  protected $table            = 'driver_vehicle_map';
  protected $primaryKey       = 'id';
  protected $useAutoIncrement = true;
  protected $returnType       = 'array';
  protected $useSoftDeletes   = false;
  protected $protectFields    = true;
  protected $allowedFields    = ['driver_id', 'vehicle_id', 'vehicle_location', 'vehicle_fuel_status', 'vehicle_km_reading', 'assign_date', 'unassign_date', 'assigned_by', 'unassigned_by', 'created_at'];

  protected bool $allowEmptyInserts = false;
  protected bool $updateOnlyChanged = true;

  protected array $casts = [];
  protected array $castHandlers = [];

  // Dates
  protected $useTimestamps = false;
  protected $dateFormat    = 'datetime';
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';

  // Validation
  protected $validationRules      = [];
  protected $validationMessages   = [];
  protected $skipValidation       = false;
  protected $cleanValidationRules = true;

  // Callbacks
  protected $allowCallbacks = true;
  protected $beforeInsert   = [];
  protected $afterInsert    = [];
  protected $beforeUpdate   = [];
  protected $afterUpdate    = [];
  protected $beforeFind     = [];
  protected $afterFind      = [];
  protected $beforeDelete   = [];
  protected $afterDelete    = [];

  public static function get()
  {
    $drivervehiclemodel = new DriverVehicleAssignModel();
    return $query = $drivervehiclemodel
      ->select('driver_vehicle_map.*, vehicle_type.name, party.party_name, vehicle.owner,driver.id as driver_id')->join('driver', 'driver_vehicle_map.driver_id = driver.id', 'inner')->join('party', 'driver.name = party.id', 'inner')->join('vehicle ', 'driver_vehicle_map.vehicle_id = vehicle.id', 'inner')->join('vehicle_type', 'vehicle.vehicle_type_id = vehicle_type.id', 'inner')->orderBy('driver_vehicle_map.id', 'DESC')
      ->findall();
  }
}
