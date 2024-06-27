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
            $data['partytype_data'] = $partyModel->where(['status'=>'Active'])->orderBy('id', 'DESC')->paginate(50);
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
                    'name' =>  'required|trim|regex_match[/^[a-z\d\-_\s]+$/i]|is_unique[party_type.name]',
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
                'name'	=>	'required|trim|regex_match[/^[a-z\d\-_\s]+$/i]|is_unique[party_type.name]',
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

    public function statusupdate($id=null){
      $access = $this->_access; 
        if($access === 'false'){
                $session = \Config\Services::session();
                $session->setFlashdata('error', 'You are not permitted to access this page');
                return $this->response->redirect(site_url('/dashboard'));
        }else{  
                $partytypeModel = new PartytypeModel();
                $model= $partytypeModel->where('id', $id)->first();
                if($model['status'] == 'Active'){
                  $status = 'Inactive';
                }elseif($model['status'] == 'Inactive'){
                  $status = 'Active';
                }
                $partytypeModel->update($id,[
                  'status'	=>	$status,
                  'updated_at'  =>  date("Y-m-d h:i:sa"),
                ]);
                $session = \Config\Services::session();
                $session->setFlashdata('success', 'Party type status changed');
                return $this->response->redirect(site_url('/partytype')); 
        } 
    }

    public function searchByStatus(){
      if($this->request->getMethod()=='POST'){
        $status = $this->request->getVar('status');
        $partyModel = new PartytypeModel();
        $data['partyModel'] = $partyModel->where('status', $status)->orderBy('id', 'DESC')->findAll();
        
            $data['page_data'] = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Party Type','li_1' => '123','li_2' => 'deals' ] )
            ];
            return view('Partytype/search',$data);
      }
    }
}
