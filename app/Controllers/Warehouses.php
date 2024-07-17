<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CompanyModel;
use App\Models\OfficeModel;
use App\Models\WarehousesModel;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class Warehouses extends BaseController
{
    public $CModel;
    public $OModel;
    public $WModel;
    public $access;
    public $session;
    public $added_by;
    public $added_ip;

    public function __construct()
    {
        $this->session = \Config\Services::session();

        $this->CModel = new CompanyModel();

        $this->OModel = new OfficeModel();

        $this->WModel = new WarehousesModel();

        $user = new UserModel();
        $this->access = $user->setPermission();

        $this->added_by = isset($_SESSION['id']) > 0 ? $_SESSION['id'] : '0';
        $this->added_ip = isset($_SERVER['REMOTE_ADDR']) > 0 ? $_SERVER['REMOTE_ADDR'] : '';
    }

    public function index()
    {
        if ($this->access === 'false') {
            $this->session->setFlashdata('error', 'You are not permitted to access this page');
            return $this->response->redirect(base_url('/dashboard'));
        } else {

            $this->WModel->select('warehouses.*, company.name as company_name, office.name as office_name');
            $this->WModel->join('company', 'company.id = warehouses.company_id');
            $this->WModel->join('office', 'office.id = warehouses.office_id');
            if ($this->request->getPost('company_id') != '') {
                $this->WModel->where('warehouses.company_id', $this->request->getPost('company_id'));
            }
            if ($this->request->getPost('office_id') != '') {
                $this->WModel->where('warehouses.office_id', $this->request->getPost('office_id'));
            }
            if ($this->request->getPost('status') != '') {
                $this->WModel->where('warehouses.status', $this->request->getPost('status'));
            }
            $this->WModel->where('is_deleted', '0')->orderBy('warehouses.id', 'desc');
            $this->view['warehouses'] = $this->WModel->findAll();

            $this->view['companies'] = $this->CModel->select('id,name')->where('status', 'Active')->findAll();
            $this->view['offices'] = $this->OModel->select('id,name')->where('status', '1')->findAll();
            $this->view['post_data'] = $this->request->getPost();

            return view('Warehouses/index', $this->view);
        }
    }

    public function create()
    {
        if ($this->access === 'false') {
            $this->session->setFlashdata('error', 'You are not permitted to access this page');
            return $this->response->redirect(base_url('/dashboard'));
        } else if ($this->request->getPost()) {

            $error = $this->validate([
                'warehouse_name' => [
                    'rules' => 'required|trim|is_unique[warehouses.name]',
                    'errors' => [
                        'required' => 'The warehouse name field is required',
                        'is_unique' => 'Duplicate warehouse name is not allowed',
                    ],
                ]
            ]);

            // var_dump($this->request->getPost());
            // var_dump($error);
            // var_dump($this->validator->getErrors());
            // die;

            if (!$error) {
                $this->view['companies'] = $this->CModel->select('id,name')->where('status', 1)->findAll();
                $this->view['error'] = $this->validator;
                return view('Warehouses/create', $this->view);
            } else {

                $this->WModel->save([
                    'company_id' => $this->request->getVar('company_id'),
                    'office_id' => $this->request->getVar('office_id'),
                    'name' => $this->request->getVar('warehouse_name'),
                    'added_by' => $this->added_by,
                    'added_ip' => $this->added_ip
                ]);
                $this->session->setFlashdata('success', 'Warehouse Successfully Added');

                return $this->response->redirect(base_url('/warehouses'));
            }
        } else {
            $this->view['companies'] = $this->CModel->select('id,name')->where('status', 1)->findAll();
            return view('Warehouses/create', $this->view);
        }
    }

    public function getOffice()
    {
        $rows = $this->OModel->where('company_id', $this->request->getPost('company_id'))->findAll();

        $html = '<option value="">Select Office</option>';
        if (count($rows) > 0) {
            foreach ($rows as $row) {
                $html .= '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
            }
        }

        return $html;
    }

    public function edit($id)
    {
        if ($this->access === 'false') {
            $this->session->setFlashdata('error', 'You are not permitted to access this page');
            return $this->response->redirect(base_url('/dashboard'));
        } else if ($this->request->getPost()) {

            $error = $this->validate([
                'warehouse_name' => [
                    'rules' => 'required|trim',
                    'errors' => [
                        'required' => 'The warehouse name field is required',
                        'is_unique' => 'Duplicate warehouse name is not allowed',
                    ]
                ]
            ]);

            if (!$error) {

                $this->view['companies'] = $this->CModel->select('id,name')->where('status', 1)->findAll();
                $this->view['warehouse_details'] = $this->WModel->where('id', $id)->first();
                $this->view['error'] = $this->validator;

                return view('Warehouses/create', $this->view);
            } else {

                $this->WModel->update($id, [
                    'company_id' => $this->request->getVar('company_id'),
                    'office_id' => $this->request->getVar('office_id'),
                    'name' => $this->request->getVar('warehouse_name'),
                    'status' => $this->request->getVar('status'),
                    'modify_by' => $this->added_by,
                    'modify_date' => date('Y-m-d h:i:s'),
                    'modify_ip' => $this->added_ip
                ]);

                $this->session->setFlashdata('success', 'Product Edited Successfully ');

                return $this->response->redirect(base_url('/warehouses'));
            }
        } else {

            $this->view['companies'] = $this->CModel->select('id,name')->where('status', 'Active')->findAll();
            $this->view['offices'] = $this->OModel->select('id,name')->where('status', 1)->findAll();
            $this->view['warehouse_details'] = $this->WModel->where('id', $id)->first();

            return view('Warehouses/edit', $this->view);
        }
    }

    public function delete($id)
    {
        $this->WModel->update($id, ['is_deleted' => '1']);

        $this->session->setFlashdata('danger', 'Warehouse Deleted Successfully');

        return $this->response->redirect(base_url('/warehouses'));
    }
}
