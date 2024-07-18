<?php 
use App\Models\ProfileModel;
use CodeIgniter\CodeIgniter;
use App\Models\NotificationModel;

function getNotifications(){
    $NModel = new NotificationModel();
    return $NModel->where(['status'=>0,'user_id'=>0,'is_deleted'=>0])->orderBy('id', 'desc')->findAll();
   
    // echo 'd <pre>';print_r($data);exit;
}
function getCompanyName(){
    $session = \Config\Services::session();
    $ProfileModel = new ProfileModel();
    $user= $ProfileModel->select('company_name')->where(['logged_in_userid' => session()->get('id'),])->first(); 
    return isset($user['company_name']) ? $user['company_name'] : 'GCM Group CRM';
}
?>