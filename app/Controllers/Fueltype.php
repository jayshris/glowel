<?php

namespace App\Controllers;

use App\Models\FueltypeModel;

use App\Models\UserModel;

use App\Models\ModulesModel;





class Fueltype extends BaseController {

      public $_access;



      public function __construct()

      {

          $u = new UserModel();

          $access = $u->setPermission();

          $this->_access = $access; 

      }



        public function index()

        { 

          $fueltypeModel = new FueltypeModel();



          $data['fueltype_data'] = $fueltypeModel->where(['status'=>'Active'])->orderBy('id', 'DESC')->paginate(10);

          $data['pagination_link'] = $fueltypeModel->pager;



          $data['page_data'] = [

            'page_title' => view( 'partials/page-title', [ 'title' => 'Fuel Type','li_1' => '123','li_2' => 'deals' ] )

            ];

          return view('FuelType/index',$data); 

        }



        public function create()

        { 

          helper(['form', 'url']);

          $data ['page_data']= [

            'page_title' => view( 'partials/page-title', [ 'title' => 'Add Fuel Type','li_2' => 'profile' ] )

            ];



            $fueltypeModel = new FueltypeModel();

            

		        $data['fueltype_data'] = $fueltypeModel->where(['status'=>'Active'])->orderBy('id')->findAll();

        



            $request = service('request');

            if($this->request->getMethod()=='POST'){

              $error = $this->validate([

                'fuel_name'   =>  'required|min_length[3]|max_length[50]|alpha_numeric_space',

              ]);

              if(!$error)

              {

                $data['error'] 	= $this->validator;

              }else {

                $fueltypeModel = new FueltypeModel();

                $fueltypeModel->save([

                  'fuel_name'	=>	$this->request->getVar('fuel_name'),

                  'status'  => 'Active',

                  'created_at'  =>  date("Y-m-d h:i:sa"),



                ]);

                

                $session = \Config\Services::session();

    

                $session->setFlashdata('success', 'Fuel Type Added');

                return $this->response->redirect(site_url('/fueltype'));

              }

    

              

            }

            return view( 'FuelType/create',$data ); 

        }



         public function edit($id=null)

         { 



          $fueltypeModel = new FueltypeModel();

          if($id!=''){

            $data['fueltype_data'] = $fueltypeModel->where('id', $id)->first();

          }

          $request = service('request');

          if($this->request->getMethod()=='POST'){

            $id = $this->request->getVar('id');

            $data['fueltype_data'] = $fueltypeModel->where('id', $id)->first();

            $error = $this->validate([

              'fuel_name'   =>  'required|min_length[3]|max_length[50]|alpha_numeric_space',

            ]);

            if(!$error)

            {

              $data['error'] 	= $this->validator;

              

            }else {

              

              $fueltypeModel = new FueltypeModel();

              $fueltypeModel->update($id,[

                'fuel_name'  =>  $this->request->getVar('fuel_name'),

                'status'  => 'Active',

                'updated_at'  =>  date("Y-m-d h:i:sa"),

              ]);

              $session = \Config\Services::session();

  

              $session->setFlashdata('success', 'Fuel Type updated');

              return $this->response->redirect(site_url('/fueltype'));

            }

  

            

          }

          return view('FuelType/edit_fueltype', $data); 

         }



         public function delete($id){ 
            $fueltypeModel = new FueltypeModel();

            $fueltypeModel->where('id', $id)->delete($id);

            $session = \Config\Services::session();

            $session->setFlashdata('success', 'Fuel Type Deleted');

            return $this->response->redirect(site_url('/fueltype')); 

         }



         

}

?>