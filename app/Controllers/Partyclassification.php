<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;
use App\Models\PartyClassificationModel;

class Partyclassification extends BaseController
{
    public $_access;

    public function __construct()
    {
        $u = new UserModel();
        $access = $u->setPermission();
        $this->_access = $access; 
    }

    public function index()
    {
        $access = $this->_access; 
        if($access === 'false'){
            $session = \Config\Services::session();
            $session->setFlashdata('error', 'You are not permitted to access this page');
            return $this->response->redirect(site_url('/dashboard'));
        }else{
            $partyclassModel = new PartyClassificationModel();
            $data['partyclass_data'] = $partyclassModel->orderBy('id', 'DESC')->paginate(10);
            $data['pagination_link'] = $partyclassModel->pager;
            $data['page_data'] = [
                'page_title' => view( 'partials/page-title', [ 'title' => 'Party','li_1' => '123','li_2' => 'deals'])
            ];
            return view('Partyclassification/index',$data);
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
                'page_title' => view( 'partials/page-title', [ 'title' => 'Add Vehicle Certificate','li_2' => 'profile' ] )
                ];
                $request = service('request');
                if($this->request->getMethod()=='POST'){
                  $error = $this->validate([
                    'name'	                    =>  'required|trim|regex_match[/^[a-z\d\-_\s]+$/i]|is_unique[partyclassification.name]',
                  ]);

                  if(!$error){
                    $data['error'] 	= $this->validator;
                  }else {
                    $partyclassModel = new PartyClassificationModel();
                    $partyclassModel->save([
                      'name'	    =>	$this->request->getVar('name'),
                      'created_at'  =>  date("Y-m-d h:i:sa"),
                    ]);
                    $session = \Config\Services::session();
                    $session->setFlashdata('success', 'Party classification added');
                    return $this->response->redirect(site_url('/partyclassification'));
                  }
                }
                return view('Partyclassification/create',$data);
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
            $pcModel = new PartyClassificationModel();
            $data['pc_data'] = $pcModel->where('id', $id)->first();
            
            $request = service('request');
            if($this->request->getMethod()=='POST'){
              $id = $this->request->getVar('id');
              $error = $this->validate([
                'name'	=>	'required',
              ]);
              if(!$error) {
                $data['error'] 	= $this->validator;
              }else {
                $pcModel = new PartyClassificationModel();
                $pcModel->update($id,[
                    'name'	        =>	$this->request->getVar('name'),
                    'updated_at'    =>  date("Y-m-d h:i:sa"),
                ]);
                $session = \Config\Services::session();
                $session->setFlashdata('success', 'Party classification Updated');
                return $this->response->redirect(site_url('/partyclassification'));
              }
            }
          }

        return view('Partyclassification/edit', $data);

    }

    public function delete($id){
        $access = $this->_access; 
        if($access === 'false'){
            $session = \Config\Services::session();
            $session->setFlashdata('error', 'You are not permitted to access this page');
            return $this->response->redirect(site_url('/dashboard'));
        }else{
            $pcModel = new PartyClassificationModel();
            $pcModel->where('id', $id)->delete($id);
            $session = \Config\Services::session();
            $session->setFlashdata('success', 'Party classification Deleted');
            return $this->response->redirect(site_url('/partyclassification'));
        }
    }
}
