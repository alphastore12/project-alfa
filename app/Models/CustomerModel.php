<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'customers';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['code', 'name', 'status_id', 'image_name'];

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
        $uploaded_file = $params->getFile('image_upload');
        $image_name = $uploaded_file->getRandomName();
        $uploaded_file->move('assets/images', $image_name);

        $data = [
            'code' => $params->getVar('code'),
            'name' => $params->getvar('name'),
            'status_id' => $params->getVar('status_id'),
            'image_name' => $image_name
        ];
        return $this->save($data);
    }

    public function update_data($id, $params)
    {
        $data = [
            'code' => $params->getVar('code'),
            'name' => $params->getvar('name'),
            'status_id' => $params->getVar('status_id')
        ];
        return $this->update($id, $data);
    }
}
