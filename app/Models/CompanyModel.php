<?php
namespace App\Models;

use CodeIgniter\Model;

class CompanyModel extends Model
{
	protected $table = 'company';

	protected $primaryKey = 'id';
	protected $useSoftDeletes        = true;
	protected $allowedFields = ['name', 'status', 'created_at','creator_ip_address','user_id','updated_at'];
	
}

?>