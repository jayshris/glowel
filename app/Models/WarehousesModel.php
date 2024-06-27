<?php

namespace App\Models;

use CodeIgniter\Model;

class WarehousesModel extends Model
{
    protected $table            = 'warehouses';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [ 'name', 'company_id', 'office_id', 'status', 'added_date', 'added_by', 'added_ip', 'modify_date', 'modify_by', 'modify_ip', 'is_deleted'];
}
