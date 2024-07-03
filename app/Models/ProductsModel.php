<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model
{
    protected $table            = 'products';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id', 'type_id', 'category_id', 'product_name', 'product_image_1', 'product_image_2', 'rate', 'measurement_unit', 'status', 'added_date', 'added_by', 'added_ip', 'modify_date', 'modify_by', 'modify_ip', 'is_deleted','summary','description'];
}
