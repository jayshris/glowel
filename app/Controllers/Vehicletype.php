<?php
namespace App\Controllers;
use App\Models\VehicleTypeModel;
use App\Models\UserModel;
use App\Models\ModulesModel;


class Vehicletype extends BaseController {
      public $_access;
      public $vehicletypeModel;

      public function __construct()
      {
          $u = new UserModel();
          $access = $u->setPermission();
          $this->_access = $access; 
          $this->vehicletypeModel = new VehicleTypeModel();
      }

        public function index()
        {  
          $data['vehicletype_data'] = $this->vehicletypeModel->where(['status'=>'Active'])->orderBy('id', 'DESC')->paginate(10);
          $data['pagination_link'] = $this->vehicletypeModel->pager;

          $data['page_data'] = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Vehicle Type','li_1' => '123','li_2' => 'deals' ] )
            ];
          return view('VehicleType/index',$data); 
        }

        public function create()
        { 
          helper(['form', 'url']);
          $data ['page_data']= [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Add Vehicle Type','li_2' => 'profile' ] )
            ];
            
		        $data['vehicletype_data'] = $this->vehicletypeModel->where(['status'=>'Active'])->orderBy('id')->findAll();
        

            $request = service('request');
            if($this->request->getMethod()=='POST'){
              $error = $this->validate([
                'name'   =>  'required|min_length[3]|max_length[50]|alpha_numeric_space|is_unique[vehicle_type.name]',
                'number_of_tyres'   =>  'required|numeric|greater_than[0]',
                'unladen_weight'   =>  'required|numeric|greater_than[0]',
              ]);
              if(!$error)
              {
                $data['error'] 	= $this->validator;
              }else {
                 $this->vehicletypeModel->save([
                  'name'	=>	$this->request->getVar('name'),
                  'number_of_tyres'  =>  $this->request->getVar('number_of_tyres'),
                  'unladen_weight'  =>  $this->request->getVar('unladen_weight'),
                  'status'  => 'Active',
                  'created_at'  =>  date("Y-m-d h:i:sa"),

                ]);
                
                $session = \Config\Services::session();
    
                $session->setFlashdata('success', 'Vehicle Type Added');
                return $this->response->redirect(site_url('/vehicletype'));
              }
    
              
            }
            return view( 'VehicleType/create',$data ); 
        }

         public function edit($id=null)
         { 
          $request = service('request');
          $data['vehicletype_data'] = $this->vehicletypeModel->where('id', $id)->first();
          if($this->request->getMethod()=='POST'){
            $id = $this->request->getVar('id');
            $data['vehicletype_data'] = $this->vehicletypeModel->where('id', $id)->first();
            $error = $this->validate([
              'name'   =>  'required|min_length[3]|max_length[50]|alpha_numeric_space',
              'number_of_tyres'   =>  'required|numeric|greater_than[0]',
              'unladen_weight'   =>  'required|numeric|greater_than[0]',
            ]);
            if(!$error)
            {
              $data['error'] 	= $this->validator;
              
            }else {
              
              $this->vehicletypeModel->update($id,[
                'name'  =>  $this->request->getVar('name'),
                'number_of_tyres'  =>  $this->request->getVar('number_of_tyres'),
                'unladen_weight'  =>  $this->request->getVar('unladen_weight'),
                'status'  => 'Active',
                'updated_at'  =>  date("Y-m-d h:i:sa"),
              ]);
              $session = \Config\Services::session();
  
              $session->setFlashdata('success', 'Vehicle Type updated');
              return $this->response->redirect(site_url('/vehicletype'));
            }
  
            
          }
          return view('VehicleType/edit', $data); 
         }

         public function delete($id){ 
            $this->vehicletypeModel->where('id', $id)->delete($id);
            $session = \Config\Services::session();
            $session->setFlashdata('success', 'Vehicle Type Deleted');
            return $this->response->redirect(site_url('/vehicletype')); 
         }

         
}
?>