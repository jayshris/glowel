<?php 
use CodeIgniter\CodeIgniter;
use App\Models\NotificationModel;

function getNotifications(){
    $NModel = new NotificationModel();
    return $NModel->where(['status'=>0,'user_id'=>0,'is_deleted'=>0])->orderBy('id', 'desc')->findAll();
    // echo 'd <pre>';print_r($data);exit;
}
?>