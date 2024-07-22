<?php /*if (!defined('BASEPATH')) exit('No direct script access allowed');
ini_set('memory_limit', '50M');
date_default_timezone_set('Asia/Kolkata');

$ci = &get_instance();
$ci->load->database();
$ci->db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));");
$ci->db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'NO_ZERO_DATE', ''));");*/

define('PROJECT', 'Glowel');
define('PANEL', base_url() . '');//panel/
define('PANEL_F', '');//panel/
define('PANEL_HEADER', PANEL_F . 'layout/header');
define('PANEL_BOTTOM', PANEL_F . 'layout/footer');
define('PANEL_ASSET', base_url().'public/panel/assets/');

define('IMAGE_MANAGER', 'pichub/uploads/');
define('IMAGE_MANAGER_THUMB', 'pichub/uploads/thumbs/');

define('PER_PAGE', 50);
define('URI_SEGMENT', 4);
define('PURCHASE_ORDER_NO_FIRST', "PO/" . date("Ymd") . "/0001");
define('CURRENCY', 'US $');
define('LOGIN_MSG', 'Please sign-in in your account to continue!!');
define('ACCESS_MSG', "You don't have access, please contact to administrator!!");
define('droplist', "Getlist");
define('BTL', '<i class="fa fa-arrow-circle-left"></i> Back');
define('KANCEL', '<i class="fa fa-arrow-circle-left"></i> Cancel');
define('RECET', 'Reset');
define('PRNT', '<i class="fa fa-print"></i> Print');
define('SAVE_BTN', 'saveit');
define('SABE', '<i class="fa fa-save"></i> &nbsp;');
define('RECEIVE', '<i class="fa fa-arrow-right"></i> Receive');
define('APPROVE', '<i class="fa fa-check"></i> Approve');
define('ADDNEW', '<i class="fa fa-plus"></i> Add New');
define('REMOVE', '<i class="fa fa-trash"></i> Remove');
define('SEARCHL', '<i class="fa fa-search"></i>  Search');
define('RELOADLIST', '<i class="fa fa-remove"></i> Reset');
define('SEARCHNFILTER', 'Search / Filter / Add New');
define('SEARCHNFILTERONLY', 'Search / Filter');
define('SALERT', 'alert-solid-success');
define('DALERT', 'alert-solid-danger');

//Date Format
define('DTFORMAT', 'd M, Y h:i A'); //'D j<\s\u\p>S</\s\u\p> M, Y h:i A'
define('DFORMAT', 'd M Y'); //'D j<\s\u\p>S</\s\u\p> M, Y'
define('GETLIST', base_url() . 'Getlist');

define('TABLE_PRE', '');
define('TABLE_SUF', '');

// System Settings
define('MODULE', TABLE_PRE . 'modules' . TABLE_SUF);
define('SECTION', TABLE_PRE . 'sections' . TABLE_SUF);
define('MODULE_SECTION', TABLE_PRE . 'module_sections' . TABLE_SUF);
define('ROLE', TABLE_PRE . 'roles' . TABLE_SUF);
define('ROLE_MODULE', TABLE_PRE . 'role_modules' . TABLE_SUF);
define('USER', TABLE_PRE . 'users' . TABLE_SUF);
define('USER_MODULE', TABLE_PRE . 'user_modules' . TABLE_SUF);

function makeListActions($module='', $actions=[], $token=0, $pos='2'){
	$menu = '';//echo __LINE__.'<pre>'.$token;print_r($actions);die;
	if(!empty($actions)){
		$token = ($token>0) ? encryptToken($token) : $token;		
		if($pos==1){
			$menu .= '<ul>';
		}
		elseif($pos==2){
			$menu .= '<div class="dropdown table-action">';// text-end
			$menu .= '<a href="#" class="action-icon " data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>';
			$menu .= '<div class="dropdown-menu dropdown-menu-right">';
		}
		
		foreach($actions as $act){
			if(isset($act->show_position) && $act->show_position==$pos){
				$secName  = isset($act->section_name) ? $act->section_name : '';
				$secLink  = strtolower(str_replace(' ','_',$secName));
				$cssClass = isset($act->section_icon) ? $act->section_icon : '';
				$confirm  = ($act->alert_msg=='1') ? "return confirm('Are you sure want to delete this record?')" : '';
				
				if($pos==1){
					$menu .= '<li>'.anchor(PANEL.$module.'/'.$secLink,'<i class="'.$cssClass.'"></i> &nbsp;'.ucfirst($secName), ['class'=>'btn btn-primary']).'</li>';
				}
				elseif($pos==2 && !empty($token)){
					$menu .= anchor(PANEL.$module.'/'.$secLink.'/'.$token,'<i class="'.$cssClass.'"></i> '.ucfirst($secName), ['class'=>'dropdown-item', 'onclick'=>$confirm]);
				}
			}
		}
		if($pos==1){
			$menu .= '<div class="dropdown-menu dropdown-menu-right">';
		}
		elseif($pos==2){
			$menu .= '</ul>';
		}
	}
	
	return $menu;
}

function encryptToken($token=0){return $token;
	$options 		= 0;
	$ciphering 		= "AES-128-CBC";
	$iv_length 		= openssl_cipher_iv_length($ciphering);
	$encryption_iv 	= random_bytes($iv_length);
	$encryption_key = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';//openssl_digest(php_uname(), 'MD5', TRUE);
	$encrypted 		= bin2hex(openssl_encrypt($token, $ciphering, $encryption_key, $options, $encryption_iv));
	$decrypted 		= openssl_decrypt(hex2bin($encrypted),$ciphering,$encryption_key, $options, $encryption_iv);
	//echo 'Token: '.$token.'<br>Encrypted:'.$encrypted.'<br>Decrypted: '.$decrypted;die;
	return $encrypted;
}

function decryptToken($token=0){return $token;
	$options 		= 0;
	$ciphering 		= "AES-128-CBC";
	$iv_length 		= openssl_cipher_iv_length($ciphering);
	$encryption_iv 	= random_bytes($iv_length);
	$encryption_key = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';//openssl_digest(php_uname(), 'MD5', TRUE);
	$decrypted 		= openssl_decrypt(hex2bin($token), $ciphering, $encryption_key, $options, $encryption_iv);
	//echo 'Token: '.$token.'<br>Encrypted:'.$encrypted.'<br>Decrypted: '.$decrypted;die;
	return $decrypted;
}
