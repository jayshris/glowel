<?php
namespace App\Controllers;
use App\Models\FueltypeModel;
use App\Models\VehicleTModel;
use App\Models\VehicleTypeModel;
use App\Models\UserModel;
use App\Models\ModulesModel;


class Vehiclet extends BaseController {
      public $_access;

      public function __construct()
      {
          $u = new UserModel();
          $access = $u->setPermission();
          $this->_access = $access; 
          $this->vehicletModel = new VehicleTModel();
          $this->fueltypeModel = new FueltypeModel();
          $this->vehicletypeModel = new VehicleTypeModel();
      }

        public function index()
        {
          $access = $this->_access; 
          if($access === 'false'){
            $session = \Config\Services::session();
            $session->setFlashdata('error', 'You are not permitted to access this page');
            return $this->response->redirect(site_url('/dashboard'));
          }else{
          $data['vehiclet_data'] = $this->vehicletModel->select('vehicle_model.*, vehicle_type.name, fuel_type.fuel_name', false)
                ->join('vehicle_type', 'vehicle_type.id = vehicle_model.vehicle_type_id', 'left')
                ->join('fuel_type', 'fuel_type.id = vehicle_model.fuel_type_id', 'left')
                ->where('vehicle_model.status', 'Active')
                ->groupBy('vehicle_model.id')
                ->orderBy('vehicle_model.id', 'DESC')
                ->paginate(10);
          $data['pagination_link'] = $this->vehicletModel->pager;

          $data['page_data'] = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Vehicle Model','li_1' => '123','li_2' => 'deals' ] )
            ];
          return view('VehicleM/index',$data);
          }
        }

        public function create()
        {

        $access = $this->_access; 
        if($access === 'false'){
          $session = \Config\Services::session();
          $session->setFlashdata('error', 'You are not permitted to access this page');
          return $this->response->redirect(site_url('/dashboard'));
        }else{
          helper(['form', 'url']);
          $data ['page_data']= [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Add Vehicle Model','li_2' => 'profile' ] )
            ];
            
		        $data['fueltype_data'] = $this->fueltypeModel->where(['deleted_at'=>NULL])->where(['status'=>'Active'])->orderBy('fuel_name')->findAll();
            $data['vehicletype_data'] = $this->vehicletypeModel->where('status','Active')->where('deleted_at',NULL)->orderBy('id')->findAll();
            $request = service('request');
            if($this->request->getMethod()=='POST'){
              $error = $this->validate([
                'name'   =>  'required',
                'model_no'   =>  'required|alpha_numeric_space',
                'fuel_type_id'   =>  'required',
              ]);
              if(!$error)
              {
                $data['error'] 	= $this->validator;
              }else {
                $normalizedStr = strtolower(str_replace(' ', '', $this->request->getVar('model_no')));

                $vehicletype_data = $this->vehicletModel
                ->where('status','Active')
                ->where('deleted_at',NULL)
                ->where('LOWER(REPLACE(model_no, " ", ""))',$normalizedStr)
                ->orderBy('id')->countAllResults();
                if($vehicletype_data==0){
                     $this->vehicletModel->save([
                    'vehicle_type_id' =>  $this->request->getVar('name'),
                    'model_no' =>  $this->request->getVar('model_no'),
                    'fuel_type_id' =>  $this->request->getVar('fuel_type_id'),
                    'status'  => 'Active',
                    'created_at'  =>  date("Y-m-d h:i:sa"),
                  ]);
                }else{
                  $this->validator->setError('model_no', 'The field must contain a unique value.');
                  $data['error']  = $this->validator;
                  return view( 'VehicleM/create',$data );
                  return false;
                }              
                
                
                $session = \Config\Services::session();
    
                $session->setFlashdata('success', 'Vehicle Model Added');
                return $this->response->redirect(site_url('/vehiclet'));
              }
    
              
            }
            return view( 'VehicleM/create',$data );
          }
        }

         public function edit($id=null)
         {

          $access = $this->_access; 
          if($access === 'false'){
            $session = \Config\Services::session();
            $session->setFlashdata('error', 'You are not permitted to access this page');
            return $this->response->redirect(site_url('/dashboard'));
          }else{
          $data['fueltype_data'] = $this->fueltypeModel->where(['status'=>'Active'])->orderBy('fuel_name')->findAll();
          $data['vehicletype_data'] = $this->vehicletypeModel->where(['status'=>'Active'])->orderBy('id')->findAll();
          $data['vehiclet_data'] = $this->vehicletModel->select('vehicle_model.*, vehicle_type.name, vehicle_type.id as vehicle_type_id, fuel_type.fuel_name, fuel_type.id as fuel_type_id', false)
                ->join('vehicle_type', 'vehicle_type.id = vehicle_model.vehicle_type_id', 'left')
                ->join('fuel_type', 'fuel_type.id = vehicle_model.fuel_type_id', 'left')
                ->where('vehicle_model.status', 'Active')
                ->where('vehicle_model.id', $id)
                ->groupBy('vehicle_model.id')
                ->orderBy('vehicle_model.id', 'DESC')
                ->first(); 

          $request = service('request');
          if($this->request->getMethod()=='POST'){

            $id = $this->request->getVar('id');
            $error = $this->validate([
              'name'   =>  'required',
              'model_no'   =>  'required|alpha_numeric_space',
              'fuel_type_id'   =>  'required',
            ]);
            if(!$error)
            {
              $data['error'] 	= $this->validator; 
            }else { 
              $data['vehiclet_data'] = $this->vehicletModel->select('vehicle_model.*, vehicle_type.name, vehicle_type.id as vehicle_type_id, fuel_type.fuel_name, fuel_type.id as fuel_type_id', false)
                ->join('vehicle_type', 'vehicle_type.id = vehicle_model.vehicle_type_id', 'left')
                ->join('fuel_type', 'fuel_type.id = vehicle_model.fuel_type_id', 'left')
                ->where('vehicle_model.status', 'Active')
                ->where('vehicle_model.id', $id)
                ->groupBy('vehicle_model.id')
                ->orderBy('vehicle_model.id', 'DESC')
                ->first(); 

              $normalizedStr = strtolower(str_replace(' ', '', $this->request->getVar('model_no')));
                $vehicletype_data = $this->vehicletModel
                ->where('status','Active')
                ->where('deleted_at',NULL)
                ->where('LOWER(REPLACE(model_no, " ", ""))',$normalizedStr)
                ->where('id!=',$id)
                ->orderBy('id')->countAllResults();
                if($vehicletype_data==0){
                    $this->vehicletModel->update($id,[
                      'vehicle_type_id' =>  $this->request->getVar('name'),
                      'model_no' =>  $this->request->getVar('model_no'),
                      'fuel_type_id' =>  $this->request->getVar('fuel_type_id'),
                      'status'  => 'Active',
                      'updated_at'  =>  date("Y-m-d h:i:sa"),
                    ]);
                }else{
                  $this->validator->setError('model_no', 'The field must contain a unique value.');
                  $data['error']  = $this->validator;
                  return view( 'VehicleM/edit',$data );
                  return false;
                }  
              
              $session = \Config\Services::session();
  
              $session->setFlashdata('success', 'Vehicle Model updated');
              return $this->response->redirect(site_url('/vehiclet'));
            }
  
            
          }
          return view('VehicleM/edit', $data);
         }
         }

         public function delete($id){
          $access = $this->_access; 
          if($access === 'false'){
            $session = \Config\Services::session();
            $session->setFlashdata('error', 'You are not permitted to access this page');
            return $this->response->redirect(site_url('/dashboard'));
            }else{
            $this->vehicletModel->where('id', $id)->delete($id);
            $session = \Config\Services::session();
            $session->setFlashdata('success', 'Vehicle Model Deleted');
            return $this->response->redirect(site_url('/vehiclet'));
           }
         }

         
}
?>