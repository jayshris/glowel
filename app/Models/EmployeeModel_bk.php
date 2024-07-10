<?php
namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
	protected $table = 'employee';
	protected $primaryKey = 'id';
	protected $useAutoIncrement = true;
    protected $returnType       = 'array';
	protected $useSoftDeletes        = true;
	protected $protectFields    = true;
	protected $allowedFields = ['company_id', 'branch_id', 'name','adhaar_number_map_id','mobile','email','bank_account_number','bank_ifsc_code','profile_image1','profile_image2','joining_date','upi_id','department_id','reporting_manager_id','status','created_at','updated_at','office_location','deleted_at','approved','approval_user_id','approval_user_type','approval_date','approval_ip_address'];
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

?>