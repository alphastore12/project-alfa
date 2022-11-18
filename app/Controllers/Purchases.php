<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PurchaseModel;
use App\Models\PurchaseItemModel;

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
        $data['purchases'] = $purchase_model->get_all_data();
        $data['main_view'] = 'purchases/index';
        return view('layout', $data);
    }

    public function new()
    {
        $data['main_view'] = 'purchases/new';
        return view('layout', $data);
    }

    public function create()
    {
        $purchase_model = new PurchaseModel();
        $purchase_model->create_data($this->request);
        $this->session->setFlashdata('success', 'purchase berhasil disimpan');
        return redirect()->to('/purchases' . '/' . $purchase_model->getInsertID());
    }

    public function delete($id)
    {
        $id = $this->request->getVar('id');
        $purchase_model = new PurchaseModel();
        $purchase_model->delete($id);
        $this->session->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to('/purchases');
    }

    public function show($id)
    {
        $purchase_model = new PurchaseModel();
        $purchase_item_model = new PurchaseItemModel();
        $data['purchase'] = $purchase_model->get_data($id);
        $data['purchase_items'] = $purchase_item_model->get_data_by_purchase($id);
        $data['main_view'] = 'purchases/show';
        return view('layout', $data);
    }
}
