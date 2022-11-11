<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddImageCustomer extends Migration
{
    public function up()
    {
        $this->forge->addColumn('customers', [
            'image_name' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ]
        ]);
    }
    public function down()
    {
        $this->forge->dropColumn('customers', 'image_name');
    }
}
