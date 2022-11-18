<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SupplierModel;

class Suppliers extends BaseController
{
    protected $session;

    function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        if (!$this->session->get('user_id')) {

            $this->session->setFlashdata('danger', 'Anda harus login terlebih dahulu');
            return redirect()->to('/');
        }

        $supplier_model = new SupplierModel();
        $search = $this->request->getVar('search') ?? '';
        $data['suppliers'] = $supplier_model->search_data($search);
        $data['pager'] = $supplier_model->pager;
        $data['order_number'] = order_page_number($this->request->getVar('page_suppliers'), 5);
        if ($this->request->isAJAX()) {
            return view('suppliers/_suppliers', $data);
        } else {
            $data['main_view'] = 'suppliers/index';
            return view('layout', $data);
        }
    }

    public function new()
    {
        $data['main_view'] = 'suppliers/new';
        return view('layout', $data);
    }

    public function create()
    {
        if (!$this->validate([
            'name' => "required|alpha_numeric_space",
            'status_id' => 'required|integer'
        ])) {
            $data['main_view'] = 'suppliers/new';
            $data['errors'] = $this->validator;
            return view('layout', $data);
        }

        $supplier_model = new supplierModel();
        $supplier_model->create_data($this->request);
        $this->session->setFlashdata('success', 'supplier berhasil disimpan');
        return redirect()->to('/suppliers');
    }

    public function delete($id)
    {
        if ($this->request->isAJAX()) {
            $id = $this->request->getVar('id');
            $supplier_model = new supplierModel();
            if ($supplier_model->delete($id)) {
                $data = [
                    'status' => 200,
                    'message' => 'supplier berhasil dihapus',
                    'id' => $id
                ];
            } else {
                $data = [
                    'status' => 500,
                    'message' => 'supplier gagal dihapus karena tidak dsupplierukan. Coba refresh kembali.',
                    'id' => $id
                ];
            }
        } else {
            $data = [
                'status' => 500,
                'message' => 'Anda tidak diizinkan untuk menghapus data',
                'id' => null
            ];
        }
        echo json_encode($data);
    }

    public function edit($id)
    {
        $supplier_model = new SupplierModel();
        $data['main_view'] = 'suppliers/edit';
        $data['supplier'] = $supplier_model->get_data($id);
        return view('layout', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'name' => "required|alpha_numeric_space",
            'status_id' => 'required|integer'
        ])) {
            $supplier_model = new SupplierModel();
            $data['main_view'] = 'suppliers/edit';
            $data['errors'] = $this->validator;
            $data['supplier'] = $supplier_model->get_data($id);
            return view('layout', $data);
        }

        $supplier_model = new SupplierModel();
        $supplier_model->update_data($id, $this->request);
        $this->session->setFlashdata('success', 'supplier berhasil diperbarui');
        return redirect()->to('/suppliers');
    }

    public function show($id)
    {
        $supplier_model = new SupplierModel();
        $data['supplier'] = $supplier_model->get_data($id);
        return view('suppliers/show', $data);
    }
}
