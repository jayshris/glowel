<?php

namespace App\Models;

use CodeIgniter\Model;

class SalesProductModel extends Model
{
    protected $table            = 'sales_order_products';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['order_id', 'product_id', 'quantity', 'rate', 'amount'];
}
