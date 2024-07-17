<?php
namespace App\Models;

use CodeIgniter\Model;
use Exception;

class RoleModel extends Model
{
  protected $table            = 'roles';
  protected $primaryKey       = 'id';
  protected $useAutoIncrement = true;
  protected $returnType       = 'array';
  //protected $useSoftDeletes   = true;
  //protected $protectFields    = true;
  protected $allowedFields    = ['id','parent_id','role_name','status_id','added_date','added_by','added_ip','modify_by','modify_ip','modify_date'];

  public function getModules($roleID=3){
    try{
      $sql = "SELECT t2.module_name, t1.* FROM ".MODULE_SECTION." t1 INNER JOIN ".MODULE." t2 ON t2.id=t1.module_id WHERE t2.status_id='1' AND t2.parent_id=0 ORDER BY t2.sort_order ASC";
      $query = $this->db->query($sql);
      $rows = $query->getResult();//echo __LINE__.'<br>'.$sql.'<br><pre>';print_r($rows);die;
      $result = [];
      if(!empty($rows)){
        foreach($rows as $r){
          $parentId = ($r->module_id) ? $r->module_id : 0;
          $parentName = ($r->module_name) ? $r->module_name : '';
          $parentSection  = ($r->section_id) ? $r->section_id : 0;
          $result[$parentId]['module_id'] = $parentId;
          $result[$parentId]['parent_name'] = $parentName;

          $ssql = "SELECT t2.module_name, t1.* FROM ".MODULE_SECTION." t1 INNER JOIN ".MODULE." t2 ON t2.id=t1.module_id WHERE t2.parent_id=".$parentId." AND t2.status_id='1' ORDER BY t2.sort_order ASC";
          $squery = $this->db->query($ssql);
          $srows = $squery->getResult();
          if(!empty($srows)){
            foreach($srows as $sr){
              $moduleId   = ($sr->module_id) ? $sr->module_id : 0;
              $moduleName = ($sr->module_name) ? $sr->module_name : '';
              $sectionId  = ($sr->section_id) ? $sr->section_id : 0;
              $result[$parentId]['sub_module'][$moduleId]['module_id']   = $moduleId;
              $result[$parentId]['sub_module'][$moduleId]['module_name'] = $moduleName;
              $result[$parentId]['sub_module'][$moduleId]['sections'][$sectionId]  = $sectionId;
            }
          }
          else{
            $result[$parentId]['sections'][$parentSection]  = $parentSection;
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

  public function getSections(){
    try{
      $sql = "SELECT t1.* FROM ".SECTION." t1 WHERE t1.status_id='1' ORDER BY t1.sort_order, t1.section_name ASC";
      $query = $this->db->query($sql);
      return $rows = $query->getResult();
    }
    catch(Exception $e){
      echo 'FILE: '.__FILE__.'<br>LINE: '.__LINE__.'<br><pre>';print_r($e->getMessage());die;
    }
  }
}
