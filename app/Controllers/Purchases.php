<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PurchasesModel;
class Purchases extends BaseController
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
        $item_model = new PurchasesModel();
        $data['main_view'] = 'purchases/index';
        $data['items'] = $item_model->get_all_data();
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
            // 'id' => "required|alpha_numeric_space",
            'invoiceno' => 'required|alpha_space',
            'invoicedate' => 'required|valid_date',
            'supplierid' => 'required|integer',
            'grandtotal' => 'required|integer',
            'userid' => 'required|integer'
        ])) {
            $data['main_view'] = 'purchases/new';
            $data['errors'] = $this->validator;
            return view('layout', $data);
        }
        
        $item_model = new PurchasesModel();
        $item_model->create_data($this->request);
        $this->session->setFlashdata('success', 'Barang berhasil disimpan');
        return redirect()->to('/purchases');
    }

    public function delete($id){
        $id = $this->request->getVar('id');
        $item_model = new PurchasesModel();
        $item_model->delete($id);
        $this->session->setFlashdata('success', 'Barang berhasil dihapus');
        return redirect()->to('/purchases');
    }

    public function edit($id){
        $item_model = new PurchasesModel();
        $data['main_view'] = 'purchases/edit';
        $data['items'] = $item_model->get_data($id);
        return view('layout', $data);
    }

    public function update($id){
        if (!$this->validate([
            // 'id' => "required|alpha_numeric_space",
            'invoiceno' => 'required|alpha_space',
            'invoicedate' => 'required|valid_date',
            'supplierid' => 'required|integer',
            'grandtotal' => 'required|integer',
            'userid' => 'required|integer'
        ])) {
            $data['main_view'] = 'purchases/edit';
            $data['errors'] = $this->validator;
            return view('layout', $data);
        }

        $item_model = new PurchasesModel();
        $item_model->update_data($id, $this->request);
        $this->session->setFlashdata('success', 'Barang berhasil diperbarui');
        return redirect()->to('/purchases');
    }    
}