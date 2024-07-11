<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth extends CI_Session 
{
    public $CI = '';
    public function  __construct()
	{
		$this->CI =& get_instance();
    }
	
	public function authenticate()
    {
		if(!$this->userdata('ACCESS')) {
			$this->CI->session->set_flashdata('message',LOGIN_MSG);
			redirect(PANEL.'signin');
		}
    }
}
