<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;
use App\Models\LoginLogModel;
use App\Models\ModulesModel;

class Login extends BaseController
{
    public function index()
    {
        if (session()->get('isLoggedIn')) {
            return $this->response->redirect(site_url('/dashboard'));
        }else{
            return view('index');
        }
    }

    public function authenticate()
    {
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $user = $userModel->where('email', $email)->first();
        $model = new LoginLogModel();
        //avoid multiple login
        $login_status = $model->where('email', $email)->where('logout_at',NULL)->first();

        /*if(isset( $login_status )){
            return redirect()->back()->withInput()->with('error', 'Multiple browser login is not allowed!');
        }*/

        if(is_null($user)) {
            return redirect()->back()->withInput()->with('error', 'User does not exists!');
        }
        
        $pwd_verify = password_verify($password, $user['password']);
 
        if(!$pwd_verify) {
            return redirect()->back()->withInput()->with('error', 'Invalid username or password.');
        }
 
        $ses_data = [
            'id' => $user['id'],
            'email' => $user['email'],
            'isLoggedIn' => TRUE,
            'ACCESS' => $user['id'],
            'ROLE' => $user['role_id'],
            'PARENT' => $user['parent_id'],
            'NAME' => $user['first_name'].' '.$user['last_name']
        ];
 
        $session->set($ses_data);
        $agent = $this->request->getUserAgent();

        if ($agent->isBrowser()) {
            $currentAgent = $agent->getBrowser() . ' ' . $agent->getVersion();
        } elseif ($agent->isRobot()) {
            $currentAgent = $agent->getRobot();
        } elseif ($agent->isMobile()) {
            $currentAgent = $agent->getMobile();
        } else {
            $currentAgent = 'Unidentified User Agent';
        }
        //login log
        $data = [
            'userid'    =>      $user['id'],
            'email'     =>      $user['email'],
            'agent'     =>      $currentAgent,
            'login_at'  =>      date("Y-m-d h:i:sa"),
            'ip_address'=>	    $_SERVER['REMOTE_ADDR'],
        ];
        $model->save($data);

        return redirect()->to('/dashboard');
    }
 
    public function logout() {
        
        try {
            if (session()->get('isLoggedIn')){
                $userid= session()->get('id');
                $websiteConfig = new LoginLogModel();
                $data = array('logout_at'  =>  date("Y-m-d h:i:sa"));            
            
                $websiteConfig  
                    ->where('userid', [$userid])
                    ->set( $data)
                    ->update();
                session_destroy();
                return redirect()->to('/login/index');
            }else{
                return redirect()->to('/login/index');
            }
                    
            } catch (\ReflectionException $e) {
                return $e;
            }
        
    }

    public function getUserAgentInfo()
    {
        $agent = $this->request->getUserAgent();
        if($agent->isBrowser()){
            $currentAgent= $agent->get_browser();
        }
        elseif($agent->isRobot()){
            $currentAgent= $this->agent->robot();
        }elseif($agent->isMobile()){
            $currentAgent= $agent->getMobile();
        }else{
            $currentAgent = 'Unidentified User Agent';
        }
        return $currentAgent;
    }
}
