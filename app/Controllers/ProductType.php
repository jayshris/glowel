<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductTypeModel;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class ProductType extends BaseController
{
    public $PTModel;
    public $access;
    public $session;
    public $added_by;
    public $added_ip;

    public function __construct()
    {
        $this->session = \Config\Services::session();

        $this->PTModel = new ProductTypeModel();

        $user = new UserModel();
        $this->access = $user->setPermission();

        $this->added_by = isset($_SESSION['id']) ? $_SESSION['id'] : '0';
        $this->added_ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
    }

    public function index()
    {
        if ($this->access === 'false') {
            $this->session->setFlashdata('error', 'You are not permitted to access this page');
            return $this->response->redirect(site_url('/dashboard'));
        } else {
            $data['product_types'] = $this->PTModel->orderBy('id', 'desc')->findAll();

            return view('ProductTypes/index', $data);
        }
    }

    public function create()
    {
        if ($this->access === 'false') {
            $this->session->setFlashdata('error', 'You are not permitted to access this page');
            return $this->response->redirect(site_url('/dashboard'));
        } else if ($this->request->getPost()) {

            $error = $this->validate([
                'type_name' => [
                    'rules' => 'required|trim|is_unique[product_types.type_name]',
                    'errors' => [
                        'required' => 'The type name field is required',
                        'is_unique' => 'Duplicate type name is not allowed',
                    ],
                ]
            ]);

            if (!$error) {
                echo view('ProductTypes/create', [
                    'error'   => $this->validator
                ]);
            } else {
                $this->PTModel->save([
                    'type_name' => $this->request->getVar('type_name'),
                    'added_by' => $this->added_by,
                    'added_ip' => $this->added_ip,
                ]);
                $this->session->setFlashdata('success', 'Product Type Successfully Added');

                return $this->response->redirect(site_url('/product-types'));
            }
        } else {
            return view('ProductTypes/create');
        }
    }

    public function edit($id)
    {
        if ($this->access === 'false') {
            $this->session->setFlashdata('error', 'You are not permitted to access this page');
            return $this->response->redirect(site_url('/dashboard'));
        } else if ($this->request->getPost()) {

            $error = $this->validate([
                'type_name' => [
                    'rules' => 'required|trim',
                    'errors' => [
                        'required' => 'The type name field is required',
                        'is_unique' => 'Duplicate type name is not allowed',
                    ],
                ]
            ]);

            if (!$error) {
                echo view('ProductTypes/create', [
                    'error'   => $this->validator
                ]);
            } else {
                $this->PTModel->update($id, [
                    'type_name' => $this->request->getVar('type_name'),
                    'status' => $this->request->getVar('status'),
                    'modified_by' => $this->added_by,
                    'modified_date' => date('Y-m-d h:i:s'),
                ]);

                // print_r($error);
                // print_r($this->validator->getErrors());
                // die;

                $this->session->setFlashdata('success', 'Product Type Edited Successfully ');

                return $this->response->redirect(site_url('/product-types'));
            }
        } else {
            $data['type_detail'] = $this->PTModel->where('id', $id)->first();

            return view('ProductTypes/create', $data);
        }
    }

    public function delete($id)
    {
        // print_r($id);
        // die;


        $this->PTModel->delete($id);

        $this->session->setFlashdata('danger', 'Product Type Deleted Successfully ');

        return $this->response->redirect(site_url('/product-types'));
    }
}
