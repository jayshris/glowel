<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomersModel extends Model
{
    protected $table            = 'customer';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['party_type_id', 'party_id', 'address', 'city', 'state_id', 'postcode', 'phone', 'status', 'added_date', 'added_ip', 'added_by', 'modify_date', 'modify_ip', 'modify_by'];
}
