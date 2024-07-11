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
    protected $allowedFields    = ['email','usertype','first_name','last_name','login_expiry','mobile','company_id','home_branch','password','status','created_at','updated_at','deleted_at'];

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

	public function getUserRoleModules($roleID=3){
    try{
      $sql = "SELECT t2.module_name, t1.* FROM ".ROLE_MODULE." t1 INNER JOIN ".MODULE." t2 ON t2.id=t1.module_id WHERE t1.role_id='".$roleID."' AND t2.status_id='1' AND t2.parent_id=0 ORDER BY t2.sort_order ASC";
      $query = $this->db->query($sql);
      $rows = $query->getResult();//echo __LINE__.'<br>'.$sql.'<br><pre>';print_r($rows);die;
      $result = [];
      if(!empty($rows)){
        foreach($rows as $r){
          $parentId = ($r->module_id) ? $r->module_id : 0;
          $parentName = ($r->module_name) ? $r->module_name : '';
          $result[$parentId]['module_id'] = $parentId;
          $result[$parentId]['parent_name'] = $parentName;

          $ssql = "SELECT t2.module_name, t1.* FROM ".ROLE_MODULE." t1 INNER JOIN ".MODULE." t2 ON t2.id=t1.module_id WHERE t1.role_id='".$roleID."' AND t2.status_id='1' AND t2.parent_id=".$parentId." ORDER BY t2.sort_order ASC";
          $squery = $this->db->query($ssql);
          $srows = $squery->getResult();
          if(!empty($srows)){
            foreach($srows as $sr){
              $moduleId   = ($sr->module_id) ? $sr->module_id : 0;
              $moduleName = ($sr->module_name) ? $sr->module_name : '';
              $sectionId  = ($sr->section_id) ? $sr->section_id : 0;
              $result[$parentId]['sub_module'][$moduleId]['module_id']   = $moduleId;
              $result[$parentId]['sub_module'][$moduleId]['module_name'] = $moduleName;
              $result[$parentId]['sub_module'][$moduleId]['sections'][]  = $sectionId;
            }
          }
          else{
            $result[$parentId]['sections'] = [];
          }
        }
      }
      //echo __LINE__.'<pre>';print_r($result);die;
      return $result;
    }
    catch(Exception $e){
      echo 'FILE: '.__FILE__.'<br>LINE: '.__LINE__.'<br><pre>';print_r($e->getMessage());die;
    }
  }
}
