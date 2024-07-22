<?php
namespace App\Libraries;

use CodeIgniter\Model;
use CodeIgniter\I18n\Time;

class Permission
{
	protected $db;
	protected $router;
	public $session;
	public $viewData = [];
	
	public function __construct() {
		$this->router = \Config\Services::router();
		$this->session = \Config\Services::session();//echo __LINE__.'<pre>';print_r($this->session->get('NAME'));die;
		
		$this->db = \Config\Database::connect();

		$this->viewData['session']   = $this->session;
		$this->viewData['loggedIn']   = ($this->session->get('ACCESS')) ? $this->session->get('ACCESS') : 0;
		$this->viewData['logLevel']   = ($this->session->get('ROLE')) ? $this->session->get('ROLE') : 3;
		$this->viewData['logParent']  = ($this->session->get('PARENT')) ? $this->session->get('PARENT') : 0;
		$this->viewData['logName']    = ($this->session->get('NAME')) ? $this->session->get('NAME') : '';
		$this->viewData['actionTime'] = new Time('now', 'Asia/Kolkata', 'en_US');
		$this->viewData['loggedIP']   = $_SERVER['REMOTE_ADDR'];

		$this->viewData['curController']  = class_basename($this->router->controllerName());
		$this->viewData['currentController']  = strtolower($this->viewData['curController']);
		$this->viewData['currentMethod'] = $this->router->methodName();//echo __LINE__.'<pre>';print_r($this->viewData);die;
		$this->viewData['page_title'] = ucwords(str_replace('_',' ',$this->viewData['currentMethod'])).' '.ucwords($this->viewData['currentController']);
		if($this->viewData['currentMethod']=='index'){
			$this->viewData['page_title'] = ucwords($this->viewData['currentController']).' List';
		}		
	}
	
	public function checkPrivileged($data=[]){
		$roleID 	 = ($this->session->get('ROLE'))  ? trim($this->session->get('ROLE'))  : 0;
		$controllers = (isset($data['controllers'])) ? $data['controllers'] : [];
		$actions 	 = (isset($data['actions'])) 	 ? $data['actions'] 	: [];
		$controller  = (isset($data['controller']))  ? $data['controller']  : '';
		$action 	 = (isset($data['action'])) 	 ? $data['action'] 	 	: '';
		if($roleID != 1) {
			if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {
				return 1;
			}
			else {
				$sectionNames = isset($actions[$controller]) ? array_column($actions[$controller],'section_link') : [];
				//echo __LINE__.'<pre>';print_r($sectionNames);print_r($action);die;
				if((!in_array($controller,$controllers,TRUE)) || ($action != 'index' && !in_array($action, $sectionNames, TRUE))) {
					return 0;
				}
				else {
					return 1;
				}
			}
		}
		else {
			return 1;
		}
	}
	
	public function HeaderMenuItems($model=''){
		if(!in_array($this->viewData['currentController'], ['home','login','kyc']) && empty($this->viewData['loggedIn'])){
			$this->session->setFlashdata('error', LOGIN_MSG);//echo __LINE__.'<br>File: '.__FILE__.'<br>'.base_url();die;
			header("Location: ".base_url());die;
		}

		$this->viewData['parent_menu'] = $this->getParentController();
		$menuItems = ($this->viewData['logLevel']==1) ? $this->getSuperUserPrivileges() : $this->getUserPrivileges($this->viewData['loggedIn']);//echo __LINE__.'<pre>';print_r($menuItems);die;
		$this->viewData['menus']= (isset($menuItems['Names'])) ? $menuItems['Names'] : [];
		$Controllers 			= (isset($menuItems['Controllers'])) ? $menuItems['Controllers'] : [];
		$Actions 				= (isset($menuItems['Actions'])) ? $menuItems['Actions'] : [];
		$this->viewData['Action']  = (isset($Actions[$this->viewData['currentController']])) ? $Actions[$this->viewData['currentController']] : [];
		$this->viewData['Actions'] = $Actions;

		$condition = ['controllers'=>$Controllers,'actions'=>$Actions,'controller'=>$this->viewData['currentController'],'action'=>$this->viewData['currentMethod']];
		if($this->checkPrivileged($condition)==0 && !in_array($this->viewData['currentController'], ['home','login','dashboard','kyc']) && !in_array($this->viewData['currentMethod'], ['add-products','addProducts'])) {
			$this->session->setFlashdata('error', ACCESS_MSG);//echo __LINE__.'<br>File: '.__FILE__;die;
			header("Location: ".base_url()."dashboard");die;
		}

		$this->viewData['token']  = 0;//($this->uri->segment(URI_SEGMENT)) ? $this->uri->segment(URI_SEGMENT) : 0;
		$this->viewData['detail'] = [];
		/*if(!empty($model)){
			if($this->viewData['token']>0){
				$this->viewData['token'] = decryptToken($this->viewData['token']);
			}

			$this->viewData['detail'] = ($this->viewData['token']>0) ? $model->getDetail($this->viewData['token']) : [];
			if(($this->viewData['currentMethod']=='edit' || $this->viewData['currentMethod']=='delete' || $this->viewData['currentMethod']=='view') && isset($this->viewData['detail'])!=1){
				$messge = ['message'=>ucwords(str_replace('_',' ',$this->router->class)).' not found!','class'=>DALERT];
				$this->session->set_flashdata('flash',$messge);
				redirect(PANEL.$this->router->class);
			}
		}*/
		
		$this->viewData['backlist'] = anchor(PANEL.$this->viewData['currentController'], '<i class="fa fa-arrow-circle-left"></i> '.lang('back'), ['class'=>'btn btn-danger']);
		$this->viewData['save'] 	= form_button(array('type'=>'submit','name'=>SAVE_BTN,'id'=>$this->viewData['currentMethod'],'value'=>'true','content'=>SABE.ucwords(str_replace('_',' ',$this->viewData['currentMethod'])).' '.ucwords(str_replace('_',' ',$this->viewData['currentController'])),'class'=> 'btn btn-primary'));
		$this->viewData['cancel']	= anchor(PANEL.$this->viewData['currentController'], KANCEL, array('class'=>'btn btn-light'));
		$this->viewData['reset'] 	= anchor(PANEL.$this->viewData['currentController'].'/'.$this->viewData['currentMethod'].(($this->viewData['token']>0) ? '/'.$this->viewData['token'] : ''), '<i class="fa fa-refresh"></i> '.lang('reset'), array('class'=>'btn btn-info'));
		$this->viewData['print'] 	= form_button($this->viewData['currentMethod'],PRNT,array('onclick'=>"window.print();",'class'=>'btn btn-info'));	
		$this->viewData['searchL'] 	= form_button(array('name'=>'search','id'=>'search','type'=>'submit','content'=>SEARCHL,'class'=>'btn btn-success'));
		$this->viewData['reloadL'] 	= anchor(PANEL.$this->viewData['currentController'],RELOADLIST, array('class'=>'btn btn-danger'));
		
		$this->viewData['status']  		= [];//$this->droplist->getStatus();
		$this->viewData['statusFilter'] = ['999'=>'All',1=>'Active',2=>'Inactive',3=>'Deleted'];
		$this->viewData['statusList'] 	= [1=>'Active',2=>'Inactive',3=>'Deleted'];
		$this->viewData['statusLabel'] 	= [1=>'success',2=>'warning',3=>'danger',4=>'danger',5=>'info'];
		
		return $this->viewData;
	}
	
	public function getUserPrivileges($UserID=0){
		$sql = "SELECT t1.module_id, t2.parent_id, t2.module_name, t2.module_controller, t2.module_action, t2.module_icon  FROM ".USER_MODULE." t1 INNER JOIN ".MODULE." t2 ON t2.id=t1.module_id WHERE t1.user_id='".$UserID."' AND t2.status_id='1' GROUP BY t1.module_id ORDER BY t2.sort_order ASC";
      	$query = $this->db->query($sql);
      	$rows = $query->getResult();//echo __LINE__.'<br>'.$sql.'<br><pre>';print_r($rows);die;
      	$modules 	= [];
		$controllers= [];
		$actions 	= [];
      	if(!empty($rows)){
			foreach($rows as $key=>$r){
				if($r->parent_id == 0) {
					$modules[$key]['name'] 		 = ucfirst($r->module_name);
					$modules[$key]['controller'] = $r->module_controller;
					$modules[$key]['action'] 	 = strtolower($r->module_action);
					$modules[$key]['icon'] 	 	 = $r->module_icon;
					$modules[$key]['submodule']  = $this->getSubmoduleAccess(['UserID'=>$UserID,'Module'=>$r->module_id]);
				}

				$controllers[] = $r->module_controller;
				$actions[$r->module_controller] = $this->getModuleAction(['UserID'=>$UserID,'Module'=>$r->module_id]);
			}
		}

		$result = ['Names'=>$modules,'Controllers'=>$controllers,'Actions'=>$actions];//echo '<pre>';print_r($result);die;
		return $result;
	}
	
	public function getSubmoduleAccess($data=[]){
		$UserID = (isset($data['UserID'])) ? trim($data['UserID']) : 0;
		$Module = (isset($data['Module'])) ? trim($data['Module']) : 0;

		$sql = "SELECT t2.module_name, t2.module_controller, t2.module_action, t2.module_icon  FROM ".USER_MODULE." t1 INNER JOIN ".MODULE." t2 ON t2.id=t1.module_id WHERE t1.user_id='".$UserID."' AND t2.parent_id='".$Module."' AND t2.status_id='1' GROUP BY t1.module_id ORDER BY t2.sort_order ASC";
      	$query = $this->db->query($sql);
      	return $rows = $query->getResult();echo __LINE__.'<br>'.$sql.'<br><pre>';print_r($rows);die;
	}
	
	public function getModuleAction($data=[]){
		$UserID = (isset($data['UserID'])) ? trim($data['UserID']) : 0;
		$Module = (isset($data['Module'])) ? trim($data['Module']) : 0;

		$sql = "SELECT t3.id, LOWER(t3.section_name) AS section_name, LOWER(REPLACE(t3.section_name, ' ', '_')) AS section_link, t3.alert_msg, t3.show_position, t3.section_icon, t2.page_modal  FROM ".USER_MODULE." t1 INNER JOIN ".MODULE_SECTION." t2 ON t2.module_id=t1.module_id INNER JOIN ".SECTION." t3 ON t3.id=t2.section_id WHERE t1.user_id='".$UserID."' AND t1.module_id='".$Module."' AND t3.status_id='1' AND t2.section_id=t1.section_id ORDER BY t3.sort_order ASC";
      	$query = $this->db->query($sql);
      	$rows = $query->getResult();//if($Module==4){ echo __LINE__.'<br>'.$sql.'<br><pre>';print_r($rows);die;}
		$actions = [];
		if(!empty($rows)){
			foreach($rows as $r) {
				$actions[$r->id] = $r;//strtolower(str_replace(' ','_',$r->section_name));
			}
		}
		return $actions;
	}
	
	public function getSuperUserPrivileges(){
		$this->db->select('t1.id, t1.parent_id, t1.module_name, t1.module_controller, t1.module_action, t1.module_icon');
		$this->db->where('t1.status_id','1');
		$this->db->order_by('t1.set_order','ASC');
		$modules = [];
		$moduleController = [];
		$moduleAction = [];
		foreach($this->db->get(MODULE.' t1')->result() as $key=>$info) {
			if($info->parent_id == 0) {
				$modules[$key]['name'] 		= $info->module_name;
				$modules[$key]['controller']= $info->module_controller;
				$modules[$key]['action'] 	= strtolower($info->module_action);
				$modules[$key]['icon']		= $info->module_icon;
				$modules[$key]['submodule'] = $this->getSuperSubmoduleAccess(['Module'=>$info->id]);
			}
			$moduleController[] = $info->module_controller;
			$moduleAction[$info->module_controller] = $this->getSuperModuleAction(['Module'=>$info->id]);
		}
		return array('Names'=>$modules, 'Controllers'=>$moduleController, 'Actions'=>$moduleAction);
	}	
	
	public function getSuperSubmoduleAccess($data=[]){
		$Module = (isset($data['Module'])) ? trim($data['Module']) : 0;
		$this->db->select('module_name, module_controller, module_action, module_icon');
		$this->db->where('parent_id',(int)$Module);
		$this->db->where('status_id','1');
		$this->db->order_by('set_order','ASC');
		return $this->db->get(MODULE)->result();
	}
	
	public function getSuperModuleAction($data=[]){
		$Module = (isset($data['Module'])) ? trim($data['Module']) : 0;
		$this->db->select('t2.id, t2.section_name, t2.alert_msg, t2.show_position, t2.section_icon, t1.page_modal');
		$this->db->join(SECTION.' t2', 't2.id=t1.section_id', 'inner');
		$this->db->where('t1.module_id', (int)$Module);
		$this->db->where('t2.status_id', '1');
		$this->db->group_by('t1.section_id');
		$this->db->order_by('t2.sort_order','ASC');
		$rows = $this->db->get(MODULE_SECTION.' t1')->result();
		$actions = [];
		if(!empty($rows)){
			foreach($rows as $r) {
				$actions[$r->id] = $r;//['name'=>strtolower(str_replace(' ','_', $r->section_name)), 'page_modal'=>$r->page_modal, 'alert_msg'=>$r->alert_msg, 'show_position'=>$r->show_position, 'section_icon'=>$r->section_icon];
			}
		}
		return $actions;
	}

	public function getParentController(){
		$sql = "SELECT t2.module_controller FROM ".MODULE." t1 INNER JOIN ".MODULE." t2 ON t2.id=t1.parent_id WHERE t1.module_controller='".$this->viewData['currentController']."'";
		$query = $this->db->query($sql);
		$row = $query->getRow();//echo __LINE__.'<br>'.$sql.'<br><pre>';print_r($row);die;
		return !empty($row) ? $row->module_controller : '';
    }
	
	/*public function makeActions($action=array(),$records=array()){
		$top   = '';
		$right = $other = [];
		if(count($action)>0) {
			$this->db->distinct();
			$this->db->select('section_id,section_name,section_icon,show_position');
			$this->db->where('status_id','1');
			$this->db->where_in('section_id',array_keys($action));
			$results = $this->db->get(SECTION)->result();//echo '<pre>';print_r($results);die;
			
			//Top Action Link
			foreach($results as $key=>$section) {
				$secLabel = ucwords($section->section_name);
				$secLink  = strtolower(str_replace(' ','_',$section->section_name));
				$secIcon  = strtolower($section->section_icon);
				if($section->show_position==1) {
					$top .= anchor(RISK.$this->router->class.'/'.$secLink,'<i class="fa fa-'.$secIcon.'"></i> '.$secLabel,array('class'=>"btn btn-primary")).' &nbsp;&nbsp;';
				}
				if($section->show_position==3) {
					$other[$section->section_id] = $section;
				}
			}
			
			// Right Action Link
			if(count($records)>0) {
				foreach($records as $row) { //echo "<pre>";print_r($row);die;
					$token = (isset($row->token)) ? $row->token : (isset($row['row']->token) ? $row['row']->token : 0);
					if(count($results)>0) {
						$rightLink = '';
						foreach($results as $key=>$section) {
							$secLabel = ucwords($section->section_name);
							$secLink  = strtolower(str_replace(' ','_',$section->section_name));
							$secIcon  = strtolower($section->section_icon);
							if($section->show_position==2) {
								$confirm = ($secLink=='delete') ? "return confirm('Are you sure want to delete this record?')" : '';
								$rightLink .= '<li>'.anchor(RISK.$this->router->class.'/'.$secLink.'/'.$token,'<i class="fa fa-'.$secIcon.'"></i> '.$secLabel,array('onclick'=>$confirm)).'</li>';
							}
						}
						if(!empty($rightLink)) {
							$right[$token] = '<div class="btn-group"><button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i> <span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button><ul class="dropdown-menu" role="menu">'.$rightLink.'</ul></div>';
						}
					}
				}
			}
		}
		return array('top'=>$top,'right'=>$right,'other'=>$other);
	}
	
	public function uploadMedia($mediaFile,$folderName='',$width=500,$height=400,$allowed_types='png|jpg|jpeg|gif',$max_size='1020KB',$max_width='1024',$max_height='768'){
		$config['upload_path'] 	 = IMAGE_MANAGER.strtolower($folderName);
		$config['allowed_types'] = $allowed_types;
		//$config['max_size']		 = $max_size;
		//$config['max_width']  	 = $max_width;
		//$config['max_height']  	 = $max_height;
		$this->load->library('upload',$config);
		$this->upload->initialize($config);
		if(!$this->upload->do_upload($mediaFile)){
			$filename['OK']  = '';
			$filename['ERR'] = $this->upload->display_errors();
		}
		else {
		  	$image_data = $this->upload->data();
		  	$filename['OK'] = $image_data['file_name'];
		}
	   	return $filename;	
 	}*/
}
