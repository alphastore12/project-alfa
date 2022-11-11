<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Purchases extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'invoice_no' => [
                'type' => 'int',
            ],
            'invoice_date' => [
                'type' => 'date',
            ],
            'supplier_id' => [
                'type' => 'int',
            ],
            'grand_total' => [
                'type' => 'decimal',
            ],
            'user_id' => [
                'type' => 'int'
            ]
        ]);
        $this->forge->addPrimaryKey('id', TRUE);
        $this->forge->createTable('purchases', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('purchases');
    }
}
