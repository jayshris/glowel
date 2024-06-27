<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductCategoryModel extends Model
{
    protected $table            = 'product_categories';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id', 'prod_type_id', 'cat_name', 'cat_abbreviation', 'cat_image', 'status', 'added_date', 'added_by', 'added_ip', 'modify_date', 'modify_by', 'modify_ip', 'deleted_at'];
}
