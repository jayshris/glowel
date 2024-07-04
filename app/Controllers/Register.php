<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;
use App\Models\ProfileModel;


class Register extends BaseController
{
    public function __construct(){
        helper(['form']);
    }
 
    public function index()
    {
        $data = [];
        return view('register', $data);
    }
   
    public function register()
    {
        $rules = [
            'email' => ['rules' => 'required|min_length[4]|max_length[255]|valid_email|is_unique[users.email]'],
            'password' => ['rules' => 'required|min_length[8]|max_length[255]'],
            'confirm_password'  => [ 'label' => 'confirm password', 'rules' => 'matches[password]']
        ];
           

        if($this->validate($rules)){
            $model = new UserModel();
            $data = [
                'email'         => $this->request->getVar('email'),
                'password'      => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'usertype'      =>  'user',
                'created_at'    =>  date("Y-m-d h:i:sa"),
            ];
            $model->save($data);
            $user_id = $model->getInsertID();
            $session = \Config\Services::session();
            $session->setFlashdata('success', 'Company Added');
            return redirect()->to('/login');
        }else{
            $data['validation'] = $this->validator;
            return view('register', $data);
        }
           
    }
}
