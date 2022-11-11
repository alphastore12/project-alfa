<?php

namespace App\Models;

use CodeIgniter\Model;

class PurchaseModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'purchases';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['invoice_no', 'invoice_date', 'supplier_id', 'grand_total', 'user_id'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function get_all_data()
    {
        return $this->get()->getResult();
    }

    public function get_data($id)
    {
        return $this->find($id);
    }

    public function create_data($params)
    {
        $data = [
            'invoice_no' => $params->getVar('invoice_no'),
            'invoice_date' => $params->getvar('invoice_date'),
            'supplier_id' => $params->getVar('supplier_id'),
            'grand_total' => $params->getVar('grand_total'),
            'user_id' => $params->getVar('user_id')
        ];
        return $this->save($data);
    }

    public function update_data($id, $params)
    {
        $data = [
            'invoice_no' => $params->getVar('invoice_no'),
            'invoice_date' => $params->getvar('invoice_date'),
            'supplier_id' => $params->getVar('supplier_id'),
            'grand_total' => $params->getVar('grand_total'),
            'user_id' => $params->getVar('user_id')
        ];
        return $this->update($id, $data);
    }
}
