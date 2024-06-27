<?php
namespace App\Models;

use CodeIgniter\Model;

class OfficeModel extends Model
{
	protected $table = 'office';

	protected $primaryKey = 'id';
	protected $useSoftDeletes        = true;

	protected $allowedFields = ['name', 'company_id','status','gst','office_code','address','state','city','postcode','booking_prefix','created_at','updated_at','creator_ip_address','user_id'];


	
}

?>