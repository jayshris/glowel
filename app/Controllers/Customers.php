<?php
// Pankaj
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CustomersModel;
use App\Models\PartyModel;
use App\Models\PartytypeModel;
use App\Models\StateModel;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class Customers extends BaseController
{
    public $access;
    public $session;
    public $added_by;
    public $added_ip;

    public $PTModel;
    public $PModel;
    public $CModel;
    public $SModel;

    public function __construct()
    {
        $this->session = \Config\Services::session();

        $this->PTModel = new PartytypeModel();
        $this->PModel = new PartyModel();
        $this->CModel = new CustomersModel();
        $this->SModel = new StateModel();

        $user = new UserModel();
        $this->access = $user->setPermission();

        $this->added_by = isset($_SESSION['id']) ? $_SESSION['id'] : '0';
        $this->added_ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
    }

    public function index()
    {
        if ($this->access === 'false') {
            $this->session->setFlashdata('error', 'You are not permitted to access this page');
            return $this->response->redirect(base_url('dashboard'));
        } else {

            $data['party_types'] = $this->PTModel->where('status', 'Active')->findAll();
            $data['parties'] = $this->PModel->where('approved', '1')->findAll();

            if ($this->request->getPost('party_type_id') > 0) {
                $this->CModel->where('party_type_id', $this->request->getPost('party_type_id'));
            }
            if ($this->request->getPost('party_id') > 0) {
                $this->CModel->where('party_id', $this->request->getPost('party_id'));
            }
            if ($this->request->getPost('status') != '') {
                $this->CModel->where('customer.status', $this->request->getPost('status'));
            }
            $data['customers'] = $this->CModel->select('customer.*, party.party_name')
                ->join('party', 'party.id = customer.party_id')
                ->findAll();

            return view('Customers/index', $data);
        }
    }

    public function create()
    {
        $data['party_types'] = $this->PTModel->where('status', 'Active')->findAll();
        $data['parties'] = $this->PModel->where('approved', '1')->findAll();
        $data['state'] = $this->SModel->where(['isStatus' => '1'])->orderBy('state_name', 'ASC')->findAll();

        if ($this->access === 'false') {
            $this->session->setFlashdata('error', 'You are not permitted to access this page');
            return $this->response->redirect(base_url('/dashboard'));
        } else {
            if ($this->request->getPost()) {

                // print_r($this->request->getPost());
                // die;

                $this->CModel->save([
                    'party_type_id' => implode(',', $this->request->getPost('party_type')),
                    'party_id' => $this->request->getPost('party_id'),
                    'address' => $this->request->getPost('address'),
                    'city' => $this->request->getPost('city'),
                    'state_id' => $this->request->getPost('state_id'),
                    'postcode' => $this->request->getPost('pin'),
                    'phone' => $this->request->getPost('phone'),
                    'added_by' => $this->added_by,
                    'added_ip' => $this->added_ip
                ]);
                $this->session->setFlashdata('success', 'Customer Successfully Added');

                return $this->response->redirect(base_url('customers'));
            }
            return view('Customers/action', $data);
        }
    }

    public function edit($id)
    {
        $data['party_types'] = $this->PTModel->where('status', 'Active')->findAll();
        $data['parties'] = $this->PModel->where('approved', '1')->findAll();
        $data['state'] = $this->SModel->where(['isStatus' => '1'])->orderBy('state_name', 'ASC')->findAll();

        $data['customer_detail'] = $this->CModel->where('id', $id)->first();

        if ($this->access === 'false') {
            $this->session->setFlashdata('error', 'You are not permitted to access this page');
            return $this->response->redirect(base_url('/dashboard'));
        } else {
            if ($this->request->getPost()) {

                $this->CModel->update($id, [
                    'party_type_id' => implode(',', $this->request->getPost('party_type')),
                    'party_id' => $this->request->getPost('party_id'),
                    'address' => $this->request->getPost('address'),
                    'city' => $this->request->getPost('city'),
                    'state_id' => $this->request->getPost('state_id'),
                    'postcode' => $this->request->getPost('pin'),
                    'phone' => $this->request->getPost('phone'),
                    'status' => $this->request->getPost('status'),
                    'modify_date' => date('Y-m-d h:i:s'),
                    'modify_ip' => $this->added_ip,
                    'modify_by' => $this->added_by,
                ]);
                $this->session->setFlashdata('success', 'Customer Successfully Modified');

                return $this->response->redirect(base_url('customers'));
            }
            return view('Customers/action', $data);
        }
    }

    public function getPartyDetail()
    {
        $party = $this->PModel->where('id', $this->request->getPost('party_id'))->first();

        echo json_encode($party);
    }
}
