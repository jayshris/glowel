<?php
namespace App\Models;

use CodeIgniter\Model;

class FuelPumpBrandModel extends Model
{
	protected $table = 'fuel_pump_brand';
	protected $primaryKey = 'id';
	protected $useAutoIncrement = true;
    protected $returnType       = 'array';
	protected $useSoftDeletes   = true;
	protected $protectFields    = true;
	protected $allowedFields = ['brand_name', 'abbreviation', 'status', 'created_at', 'updated_at', 'deleted_at'];
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
	
}

// app/Models/FuelPumpBrandTypeModel.php
namespace App\Models;

use CodeIgniter\Model;

class FuelPumpBrandTypeModel extends Model
{
    protected $table = 'fuel_pump_brand_type';
    protected $primaryKey = 'id';
    protected $allowedFields = ['fuel_pump_brand_id', 'fuel_type_id', 'status', 'created_at', 'updated_at', 'deleted_at'];
}

?>