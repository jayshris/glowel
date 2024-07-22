<?php
namespace App\Controllers;
use App\Models\FlagsModel;
use App\Models\UserModel;
use App\Models\ModulesModel;


class Flags extends BaseController {
      public $_access;
      public $flagsModel;
      public function __construct()
      {
          $u = new UserModel();
          $access = $u->setPermission();
          $this->_access = $access; 
          $this->flagsModel = new FlagsModel();
      }

        public function index()
        {  
          // $this->view['flags_data'] = $this->flagsModel->where(['status'=>'Active'])->orderBy('id', 'DESC')->paginate(10);
          // $this->view['pagination_link'] = $this->flagsModel->pager;
          if ($this->request->getPost('status') != '') {
            $this->flagsModel->where('status', $this->request->getPost('status'));
          }else{
            $this->flagsModel->where(['status'=>'Active']);
          }
          $this->view['flags_data'] = $this->flagsModel->orderBy('id', 'DESC')->findAll();
          $this->view['page_data'] = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Flags','li_1' => '123','li_2' => 'deals' ] )
            ];
          return view('Flags/index',$this->view); 
        }

        public function create()
        {
 
          helper(['form', 'url']);
          $this->view ['page_data']= [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Add Flags','li_2' => 'profile' ] )
            ];
            
		        $this->view['flags_data'] = $this->flagsModel->where(['status'=>'Active'])->orderBy('id')->findAll();
        

            $request = service('request');
            if($this->request->getMethod()=='POST'){
              $error = $this->validate([
                'title'   =>  'required|min_length[3]|max_length[50]|alpha_numeric_space',
              ]);
              if(!$error)
              {
                $this->view['error'] 	= $this->validator;
              }else {
                 $this->flagsModel->save([
                  'title'	=>	$this->request->getVar('title'),
                  'status'  => 'Active',
                  'created_at'  =>  date("Y-m-d h:i:sa"),

                ]);
                
                $session = \Config\Services::session();
    
                $session->setFlashdata('success', 'Flags Added');
                return $this->response->redirect(site_url('/flags'));
              }
    
              
            }
            return view( 'Flags/create',$this->view ); 
        }

         public function edit($id=null)
         { 
          $request = service('request');
          $this->view['flags_data'] = $this->flagsModel->where('id', $id)->first();
          if($this->request->getMethod()=='POST'){
            $id = $this->request->getVar('id');
            $this->view['flags_data'] = $this->flagsModel->where('id', $id)->first();
            $error = $this->validate([
              'title'   =>  'required|min_length[3]|max_length[50]|alpha_numeric_space',
            ]);
            if(!$error)
            {
              $this->view['error'] 	= $this->validator;
              
            }else {
              
              $this->flagsModel->update($id,[
                'title'  =>  $this->request->getVar('title'),
                'status'  => 'Active',
                'updated_at'  =>  date("Y-m-d h:i:sa"),
              ]);
              $session = \Config\Services::session();
  
              $session->setFlashdata('success', 'Flags updated');
              return $this->response->redirect(site_url('/flags'));
            }
  
            
          }
          return view('Flags/edit', $this->view); 
         }

         public function delete($id){ 
            $this->flagsModel->where('id', $id)->delete($id);
            $session = \Config\Services::session();
            $session->setFlashdata('success', 'Flag Deleted');
            return $this->response->redirect(site_url('/flags')); 
         }

         
}
?>