<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\UserTypeModel;
use App\Models\UserTypePermissionModel;
use App\Models\ModulesModel;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['email','usertype','first_name','last_name','login_expiry','mobile','home_branch','password','status','created_at','updated_at','deleted_at'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getUserType($id){
        $data = self::where('id',$id)->first();
        return $data['usertype'];
    }

    public function checkAccess(){
        if (session()->get('isLoggedIn')){
            $login_id= session()->get('id');
            $type = self::getUserType($login_id);
            $type_id = new UserTypeModel();
            $type_id = $type_id->where('user_type_name',$type)->first();
            $type_id = $type_id['id'];
            $permission = new UserTypePermissionModel();
            $permissions = $permission->get_permission($type_id);

            $modules = [];
            foreach ($permissions as $key => $value) {
                 foreach ($value as $k => $v) {
                   if($k == 'module_id'){
                     $modules[] = $v;
                   }
                 }
            }
            return $modules;
        }else{
            return false;
        }
    }

    public function grant($id=null){
        $access = self::checkAccess();
        if($access == true){
          if(in_array($id,$access)){
              return 'true';
          }else{
              return 'false';
          }
        }
    }

    public function setPermission(){
            $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); 
            $module_name = '';

          if(in_array('create', $uriSegments)){
            $module_name = $uriSegments[count($uriSegments)-2];
          }elseif (in_array('edit', $uriSegments)){
            $module_name = $uriSegments[count($uriSegments)-3];
          }elseif(in_array('delete', $uriSegments)){
            $module_name = $uriSegments[count($uriSegments)-3];
          }elseif(in_array('index', $uriSegments)){
            $module_name = $uriSegments[count($uriSegments)-2];
          } else{
            $module_name = $uriSegments[count($uriSegments)-1];
          }
          $m = new ModulesModel();
          $m =$m->getModelId($module_name);
          if(isset($m)){
              $modelid = $m['id'];
              $u = new UserModel();
              $access = $u->grant($modelid);
              return $access;
          }else{
            return false;
          }
    }
}
