<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModulesModel extends Model
{
    protected $table            = 'user_modules';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['user_id', 'module_id', 'section_id', 'added_by', 'added_ip', 'added_date'];
}
