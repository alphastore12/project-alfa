<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SaleModel;

class Sales extends BaseController
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

        $sale_model = new SaleModel();
        $data['main_view'] = 'sales/index';
        $data['sales'] = $sale_model->get_all_data();
        return view('layout', $data);
    }

    public function new()
    {
        $data['main_view'] = 'sales/new';
        return view('layout', $data);
    }

    public function create()
    {
        if (!$this->validate([
            'invoice_no' => "required|integer",
            'invoice_date' => 'required|date',
            'customer_id' => 'required|integer',
            'grand_total' => 'required|integer',
            'user_id' => 'required|integer'
        ])) {
            $data['main_view'] = 'sales/new';
            $data['errors'] = $this->validator;
            return view('layout', $data);
        }

        $sale_model = new SaleModel();
        $sale_model->create_data($this->request);
        $this->session->setFlashdata('success', 'Barang berhasil disimpan');
        return redirect()->to('/sales');
    }

    public function delete($id)
    {
        $id = $this->request->getVar('id');
        $sale_model = new SaleModel();
        $sale_model->delete($id);
        $this->session->setFlashdata('success', 'Barang berhasil dihapus');
        return redirect()->to('/sales');
    }

    public function edit($id)
    {
        $sale_model = new SaleModel();
        $data['main_view'] = 'sales/edit';
        $data['sale'] = $sale_model->get_data($id);
        return view('layout', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'invoice_no' => "required|integer",
            'invoice_date' => 'required|date',
            'customer_id' => 'required|integer',
            'grand_total' => 'required|integer',
            'user_id' => 'required|integer'
        ])) {
            $data['main_view'] = 'sales/edit';
            $data['errors'] = $this->validator;
            return view('layout', $data);
        }
        $sale_model = new saleModel();
        $sale_model->update_data($id, $this->request);
        $this->session->setFlashdata('success', 'Barang berhasil diperbarui');
        return redirect()->to('/sales');
    }
}
