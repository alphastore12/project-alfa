<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PurchaseItemModel;

class PurchaseItems extends BaseController
{
    protected $session;

    function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function create()
    {
        if (!$this->session->get('user_id')) {
            $this->session->setFlashdata('danger', 'Anda harus login terlebih dahulu');
            return redirect()->to('/');
        }

        $purchase_item_model = new PurchaseItemModel();
        $purchase_item_model->create_data($this->request);
        $this->session->setFlashdata('success', 'purchase item berhasil disimpan');
        return redirect()->to("/purchases" . "/" . $this->request->getVar('purchase_id'));
    }
}
