<?php

namespace App\Models;

use CodeIgniter\Model;

class SalesOrderModel extends Model
{
    protected $table            = 'sales_orders';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['order_no', 'customer_name','status', 'added_date', 'added_by', 'added_ip', 'modify_date', 'modify_by', 'modify_ip', 'is_deleted','image_1','image_2'];
}
