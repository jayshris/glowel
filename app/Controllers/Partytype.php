<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;
use App\Models\PartytypeModel;

class Partytype extends BaseController
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
            $partyModel = new PartytypeModel();
            $data['partytype_data'] = $partyModel->orderBy('id', 'DESC')->paginate(50);
            $data['pagination_link'] = $partyModel->pager;
            $data['page_data'] = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Party Type','li_1' => '123','li_2' => 'deals' ] )
            ];
            return view('Partytype/index',$data);
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
                'page_title' => view( 'partials/page-title', [ 'title' => 'Add Driver','li_2' => 'profile' ] )
                ];
                $request = service('request');
                if($this->request->getMethod()=='POST'){
                  $error = $this->validate([
                    'name'	                    =>  'required|regex_match[/^[a-z\d\-_\s]+$/i]|is_unique[party_type.name]',
                  ]);

                  if(!$error){
                    $data['error'] 	= $this->validator;
                  }else {
                    $partyModel = new PartytypeModel();
                    $partyModel->save([
                      'name'	=>	$this->request->getVar('name'),
                      // 'code'	=>	rand(),
                      'status'  =>  'Active',
                      'created_at'  =>  date("Y-m-d h:i:sa"),
                    ]);
                    $session = \Config\Services::session();
                    $session->setFlashdata('success', 'Party type added');
                    return $this->response->redirect(site_url('/partytype'));
                  }
                }
                return view( 'Partytype/create',$data );
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
            $partyModel = new PartytypeModel();
            $data['partytype_data'] = $partyModel->where('id', $id)->first();
            
            $request = service('request');
            if($this->request->getMethod()=='POST'){
              $id = $this->request->getVar('id');
              $error = $this->validate([
                'name'	=>	'required',
              ]);
              if(!$error)
              {
                $data['error'] 	= $this->validator;
              }else {
                $partyModel = new PartytypeModel();
                $partyModel->update($id,[
                    'name'	=>	$this->request->getVar('name'),
                    'updated_at'  =>  date("Y-m-d h:i:sa"),
                ]);
                $session = \Config\Services::session();
                $session->setFlashdata('success', 'Party type updated');
                return $this->response->redirect(site_url('/partytype'));
              }
            }
          }

        return view('Partytype/edit', $data);

    }

    public function delete($id){
        $access = $this->_access; 
        if($access === 'false'){
        $session = \Config\Services::session();
        $session->setFlashdata('error', 'You are not permitted to access this page');
        return $this->response->redirect(site_url('/dashboard'));
        }else{
            $partyModel = new PartytypeModel();
            $partyModel->where('id', $id)->delete($id);
            $session = \Config\Services::session();
            $session->setFlashdata('success', 'Party type Deleted');
            return $this->response->redirect(site_url('/partytype'));
        }
    }
}
