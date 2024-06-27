<?php

namespace App\Controllers;

use App\Models\FuelPumpBrandModel;

use App\Models\FuelPumpBrandTypeModel;

use App\Models\FueltypeModel;

use App\Models\UserModel;

use App\Models\ModulesModel;





class Fuelpumpbrand extends BaseController {

      public $_access;



      public function __construct()

      {

          $u = new UserModel();

          $access = $u->setPermission();

          $this->_access = $access; 

          $this->fuelpumpbrandModel = new FuelPumpBrandModel();

          $this->fuelpumpbrandtypeModel = new FuelPumpBrandTypeModel();

      }



        public function index()

        {

          $access = $this->_access; 

          if($access === 'false'){

            $session = \Config\Services::session();

            $session->setFlashdata('error', 'You are not permitted to access this page');

            return $this->response->redirect(site_url('/dashboard'));

          }else{

          $data['fuelpumpbrand_data'] = $this->fuelpumpbrandModel->select('fuel_pump_brand.*, MAX(fuel_pump_brand_type.fuel_type_id) as fuel_type_id, GROUP_CONCAT(fuel_type.fuel_name) as fuel_type_names', false)

                ->join('fuel_pump_brand_type', 'fuel_pump_brand.id = fuel_pump_brand_type.fuel_pump_brand_id', 'left')

                ->join('fuel_type', 'fuel_pump_brand_type.fuel_type_id = fuel_type.id', 'left')

                ->where('fuel_pump_brand.status', 'Active')

                ->groupBy('fuel_pump_brand.id')
                ->orderBy('fuel_pump_brand.id', 'DESC')
                ->paginate(10);

          $data['pagination_link'] = $this->fuelpumpbrandModel->pager;



          $data['page_data'] = [

            'page_title' => view( 'partials/page-title', [ 'title' => 'Pump Brand Listing','li_1' => '123','li_2' => 'deals' ] )

            ];

          return view('FuelPumpBrand/index',$data);

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

            'page_title' => view( 'partials/page-title', [ 'title' => 'Add Fuel Pump Brand','li_2' => 'profile' ] )

            ];

            
            $fueltypeModel = new FueltypeModel();

            $data['fueltype_data'] = $fueltypeModel->where(['status'=>'Active'])->orderBy('fuel_name')->findAll();

            $request = service('request');

            if($this->request->getMethod()=='POST'){
              
              $error = $this->validate([

                'brand_name'   =>  'required|min_length[2]|max_length[50]|alpha_numeric_space',

                'abbreviation'   =>  'required|min_length[2]|max_length[50]|alpha_numeric_space',

              ]);

              if(!$error)
              {
                $data['error'] 	= $this->validator;
              }else {
                $normalizedStr = strtolower(str_replace(' ', '', $this->request->getVar('brand_name')));
                $normalizedStrr = strtolower(str_replace(' ', '', $this->request->getVar('abbreviation')));
                $fuelpumpbrandbdcnt = $this->fuelpumpbrandModel
                ->where('status','Active')
                ->where('deleted_at',NULL)
                ->where('LOWER(REPLACE(brand_name, " ", ""))',$normalizedStr)
                ->orderBy('id')->countAllResults();
                $fuelpumpbrandabbcnt = $this->fuelpumpbrandModel
                ->where('status','Active')
                ->where('deleted_at',NULL)
                ->where('LOWER(REPLACE(abbreviation, " ", ""))',$normalizedStrr)
                ->orderBy('id')->countAllResults();
                $selectedFuelNameId = $this->request->getPost('fuel_types');
                if(empty($selectedFuelNameId)){
                  $this->validator->setError('fuel_types', 'Selection of minimum 1 Fuel Type is Mandatory.');
                  $data['error']  = $this->validator;
                  return view('FuelPumpBrand/create',$data);
                  return false;
                }else{
                if($fuelpumpbrandbdcnt==0 && $fuelpumpbrandabbcnt==0){
                   $this->fuelpumpbrandModel->save([

                  'brand_name'  =>  $this->request->getVar('brand_name'),

                  'abbreviation'  =>  $this->request->getVar('abbreviation'),

                  'status'  => 'Active',

                  'created_at'  =>  date("Y-m-d h:i:sa"),

                  ]);

                  $fuel_pump_brand_id = $this->fuelpumpbrandModel->getInsertID();

                  

                  foreach ($selectedFuelNameId as $fuelTypeId) {

                      $this->fuelpumpbrandtypeModel->save([

                          'fuel_pump_brand_id' => $fuel_pump_brand_id,

                          'fuel_type_id' => $fuelTypeId,

                          'status'  => 'Active',

                          'created_at'  =>  date("Y-m-d h:i:sa"),

                      ]);

                  }
                }else{
                  if($fuelpumpbrandbdcnt>0){
                    $this->validator->setError('brand_name', 'The field must contain a unique value.');
                  }
                  if($fuelpumpbrandabbcnt>0){
                    $this->validator->setError('abbreviation', 'The field must contain a unique value.');
                  }
                  $data['error']  = $this->validator;
                  return view( 'FuelPumpBrand/create',$data );
                  return false;
                }
                }
                $session = \Config\Services::session();

    

                $session->setFlashdata('success', 'Fuel Pump Brand Added');

                return $this->response->redirect(site_url('/fuelpumpbrand'));

              }

            }

            return view( 'FuelPumpBrand/create',$data );

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



          $fueltypeModel = new FueltypeModel();

          $data['fueltype_data'] = $fueltypeModel->where(['status'=>'Active'])->orderBy('fuel_name')->findAll();

             $data['fuelpumpbrand_data'] = $this->fuelpumpbrandModel->select('fuel_pump_brand.*,  MAX(fuel_pump_brand_type.fuel_type_id) as fuel_type_id, GROUP_CONCAT(fuel_type.fuel_name) as fuel_type_names, GROUP_CONCAT(fuel_type.id) as fuel_type_ids', false)

                ->join('fuel_pump_brand_type', 'fuel_pump_brand.id = fuel_pump_brand_type.fuel_pump_brand_id', 'left')

                ->join('fuel_type', 'fuel_pump_brand_type.fuel_type_id = fuel_type.id', 'left')

                ->where('fuel_pump_brand.status', 'Active')

                ->where('fuel_pump_brand.id', $id)

                ->groupBy('fuel_pump_brand.id')

                ->first();   

          

          $request = service('request');

          if($this->request->getMethod()=='POST'){

            $id = $this->request->getVar('id');

            $data['fuelpumpbrand_data'] = $this->fuelpumpbrandModel->select('fuel_pump_brand.*,  MAX(fuel_pump_brand_type.fuel_type_id) as fuel_type_id, GROUP_CONCAT(fuel_type.fuel_name) as fuel_type_names, GROUP_CONCAT(fuel_type.id) as fuel_type_ids', false)

                ->join('fuel_pump_brand_type', 'fuel_pump_brand.id = fuel_pump_brand_type.fuel_pump_brand_id', 'left')

                ->join('fuel_type', 'fuel_pump_brand_type.fuel_type_id = fuel_type.id', 'left')

                ->where('fuel_pump_brand.status', 'Active')

                ->where('fuel_pump_brand.id', $id)

                ->groupBy('fuel_pump_brand.id')

                ->first();   

            $error = $this->validate([

              'brand_name'   =>  'required|min_length[2]|max_length[50]|alpha_numeric_space',

              'abbreviation'   =>  'required|min_length[2]|max_length[50]|alpha_numeric_space',
            ]);

            if(!$error)

            {

              $data['error'] 	= $this->validator;

            }else {

                $normalizedStr = strtolower(str_replace(' ', '', $this->request->getVar('brand_name')));
                $normalizedStrr = strtolower(str_replace(' ', '', $this->request->getVar('abbreviation')));
                $fuelpumpbrandbdcnt = $this->fuelpumpbrandModel
                ->where('status','Active')
                ->where('deleted_at',NULL)
                ->where('LOWER(REPLACE(brand_name, " ", ""))',$normalizedStr)
                ->where('id!=',$id)
                ->orderBy('id')->countAllResults();
                $fuelpumpbrandabbcnt = $this->fuelpumpbrandModel
                ->where('status','Active')
                ->where('deleted_at',NULL)
                ->where('LOWER(REPLACE(abbreviation, " ", ""))',$normalizedStrr)
                ->where('id!=',$id)
                ->orderBy('id')->countAllResults();
                $selectedFuelNameId = $this->request->getPost('fuel_types');
                if(empty($selectedFuelNameId)){
                  $this->validator->setError('fuel_types', 'Selection of minimum 1 Fuel Type is Mandatory.');
                  $data['error']  = $this->validator;
                  return view( 'FuelPumpBrand/edit_fuelpumpbrand',$data );
                  return false;
                }else{
                  if($fuelpumpbrandbdcnt==0 && $fuelpumpbrandabbcnt==0){
                     $this->fuelpumpbrandModel->update($id,[

                    'brand_name'  =>  $this->request->getVar('brand_name'),

                    'abbreviation'  =>  $this->request->getVar('abbreviation'),

                    'status'  => 'Active',

                    'updated_at'  =>  date("Y-m-d h:i:sa"),

                  ]);

                  // First delete existing records

                  $this->fuelpumpbrandtypeModel->where('fuel_pump_brand_id', $id)->delete();

                    foreach ($selectedFuelNameId as $fuelTypeId) {

                        $this->fuelpumpbrandtypeModel->save([

                            'fuel_pump_brand_id' => $id,

                            'fuel_type_id' => $fuelTypeId,

                            'status'  => 'Active',

                            'created_at'  =>  date("Y-m-d h:i:sa"),

                        ]);

                    }
                  }else{
                    if($fuelpumpbrandbdcnt>0){
                      $this->validator->setError('brand_name', 'The field must contain a unique value.');
                    }
                    if($fuelpumpbrandabbcnt>0){
                      $this->validator->setError('abbreviation', 'The field must contain a unique value.');
                    }
                    $data['error']  = $this->validator;
                    return view( 'FuelPumpBrand/edit_fuelpumpbrand',$data );
                    return false;
                  }
                }
              $session = \Config\Services::session();

  

              $session->setFlashdata('success', 'Fuel Pump Brand updated');

              return $this->response->redirect(site_url('/fuelpumpbrand'));

            }

          }

          return view('FuelPumpBrand/edit_fuelpumpbrand', $data);

         }

         }



         public function delete($id){

          $access = $this->_access; 

          if($access === 'false'){

            $session = \Config\Services::session();

            $session->setFlashdata('error', 'You are not permitted to access this page');

            return $this->response->redirect(site_url('/dashboard'));

            }else{

            $this->fuelpumpbrandModel->where('id', $id)->delete($id);
            $this->fuelpumpbrandtypeModel->where('fuel_pump_brand_id', $id)->delete($id);

            $session = \Config\Services::session();

            $session->setFlashdata('success', 'Fuel Pump Brand Deleted');

            return $this->response->redirect(site_url('/fuelpumpbrand'));

           }

         }



         

}

?>