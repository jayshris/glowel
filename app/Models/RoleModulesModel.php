<?php
namespace App\Models;
use CodeIgniter\Model;

class RoleModulesModel extends Model
{
    protected $table            = 'role_modules';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id', 'role_id', 'module_id', 'section_id', 'added_by', 'added_ip', 'added_date'];
}
