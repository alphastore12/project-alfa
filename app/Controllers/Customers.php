<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CustomersModel;
class Customers extends BaseController
{

    protected $session;

    function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        if (!$this->session->get('username')) {
            $this->session->setFlashdata('danger', 'Anda harus login terlebih dahulu');
            return redirect()->to('/');
        }
        $item_model = new CustomersModel();
        $data['main_view'] = 'customers/index';
        $data['items'] = $item_model->get_all_data();
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
            'status_id' => 'required|integer'
            
        ])) {
            $data['main_view'] = 'customers/new';
            $data['errors'] = $this->validator;
            return view('layout', $data);
        }
        
        $item_model = new CustomersModel();
        $item_model->create_data($this->request);
        $this->session->setFlashdata('success', 'Barang berhasil disimpan');
        return redirect()->to('/customers');
    }

    public function delete($id){
        $id = $this->request->getVar('id');
        $item_model = new CustomersModel();
        $item_model->delete($id);
        $this->session->setFlashdata('success', 'Barang berhasil dihapus');
        return redirect()->to('/customers');
    }

    public function edit($id){
        $item_model = new CustomersModel();
        $data['main_view'] = 'customers/edit';
        $data['items'] = $item_model->get_data($id);
        return view('layout', $data);
    }

    public function update($id){
        if (!$this->validate([
            'code' => "required|integer",
            'name' => "required|alpha_numeric_space",
            'status_id' => "required|integer",
        ])) {
            $item_model = new CustomersModel();
            $data['main_view'] = 'customers/edit';
            $data['errors'] = $this->validator;
            $data['items'] = $item_model->get_data($id);
            return view('layout', $data);
        }

        $item_model = new CustomersModel();
        $item_model->update_data($id, $this->request);
        $this->session->setFlashdata('success', 'Barang berhasil diperbarui');
        return redirect()->to('/customers');
    }    
}