<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductWarehouseLinkModel extends Model
{
    protected $table            = 'product_warehouse_link';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['product_id', 'warehouse_id', 'rate', 'unit'];
}
