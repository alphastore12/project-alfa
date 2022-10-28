<?php

namespace App\Models;

use CodeIgniter\Model;

class PurchasesModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'purchases';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id','invoiceno','invoicedate','supplierid','grandtotal','userid'];

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

    public function get_all_data(){
        return $this->get()->getResult();
}

public function get_data($id){
    return $this->find($id);
}

public function create_data($params){
    $data =[
    'id' => $params->getVar('id'),
    'invoiceno' => $params->getVar('invoiceno'),
    'invoicedate' => $params->getVar('invoicedate'),
    'supplierid' => $params->getVar('supplierid'),
    'grandtotal' => $params->getVar('grandtotal'),
    'userid' => $params->getVar('userid')
    ];
return $this->save($data);
}

public function update_data($id, $params){
$data = [
    'id' => $params->getVar('id'),
    'invoiceno' => $params->getVar('invoiceno'),
    'invoicedate' => $params->getVar('invoicedate'),
    'supplierid' => $params->getVar('supplierid'),
    'grandtotal' => $params->getVar('grandtotal'),
    'userid' => $params->getVar('userid')
];
return $this->update($id, $data);
}
}
