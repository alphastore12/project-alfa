<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CustomerModel;

class Customers extends BaseController
{

    protected $session;

    function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        if (!$this->session->get('iduser')) {
            $this->session->setFlashdata('danger', 'Anda harus login terlebih dahulu');
            return redirect()->to('/');
        }

        $customer_model = new CustomerModel();
        $data['main_view'] = 'customers/index';
        $data['customers'] = $customer_model->get_all_data();
        return view('layout', $data);
    }

    public function new()
    {
        $data['main_view'] = 'customers/new';
        return view('layout', $data);
    }

    public function create()
    {
        if (!$this->validate([
            'code' => "required|integer",
            'name' => 'required|alpha_numeric_space',
            'status_id' => 'required|alpha_numeric_space',
        ])) {
            $data['main_view'] = 'customers/new';
            $data['errors'] = $this->validator;
            return view('layout', $data);
        }

        $customer_model = new CustomerModel();
        $customer_model->create_data($this->request);
        $this->session->setFlashdata('success', 'Data berhasil disimpan');
        return redirect()->to('/customers');
    }

    public function delete($id)
    {
        $id = $this->request->getVar('id');
        $customer_model = new CustomerModel();
        $customer_model->delete($id);
        $this->session->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to('/customers');
    }

    public function edit($id)
    {
        $customer_model = new CustomerModel();
        $data['main_view'] = 'customers/edit';
        $data['customer'] = $customer_model->get_data($id);
        return view('layout', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'code' => "required|integer",
            'name' => 'required|alpha_numeric_space',
            'status_id' => 'required|alpha_numeric_space',
        ])) {
            $data['main_view'] = 'customers/edit';
            $data['errors'] = $this->validator;
            return view('layout', $data);
        }
        $customer_model = new CustomerModel();
        $customer_model->update_data($id, $this->request);
        $this->session->setFlashdata('success', 'Data berhasil diperbarui');
        return redirect()->to('/customers');
    }
}
