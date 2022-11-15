<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PurchaseModel;

class Purchases extends BaseController
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

        $purchase_model = new PurchaseModel();
        $data['main_view'] = 'purchases/index';
        $data['purchases'] = $purchase_model->get_all_data();
        return view('layout', $data);
    }

    public function new()
    {
        $data['main_view'] = 'purchases/new';
        return view('layout', $data);
    }

    public function create()
    {
        if (!$this->validate([
            'invoice_no' => "required|integer",
            'invoice_date' => 'required|date',
            'supplier_id' => 'required|integer',
            'grand_total' => 'required|integer',
            'user_id' => 'required|integer'
        ])) {
            $data['main_view'] = 'purchases/new';
            $data['errors'] = $this->validator;
            return view('layout', $data);
        }

        $purchase_model = new PurchaseModel();
        $purchase_model->create_data($this->request);
        $this->session->setFlashdata('success', 'Barang berhasil disimpan');
        return redirect()->to('/purchases');
    }

    public function delete($id)
    {
        $id = $this->request->getVar('id');
        $purchase_model = new PurchaseModel();
        $purchase_model->delete($id);
        $this->session->setFlashdata('success', 'Barang berhasil dihapus');
        return redirect()->to('/purchases');
    }

    public function edit($id)
    {
        $purchase_model = new PurchaseModel();
        $data['main_view'] = 'purchases/edit';
        $data['purchase'] = $purchase_model->get_data($id);
        return view('layout', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'invoice_no' => "required|integer",
            'invoice_date' => 'required|date',
            'supplier_id' => 'required|integer',
            'grand_total' => 'required|integer',
            'user_id' => 'required|integer'
        ])) {
            $data['main_view'] = 'purchases/edit';
            $data['errors'] = $this->validator;
            return view('layout', $data);
        }
        $purchase_model = new PurchaseModel();
        $purchase_model->update_data($id, $this->request);
        $this->session->setFlashdata('success', 'Barang berhasil diperbarui');
        return redirect()->to('/purchases');
    }
}
