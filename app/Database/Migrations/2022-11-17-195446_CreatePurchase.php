<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePurchase extends Migration
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
                'type' => 'varchar',
                'constraint' => 255
            ],
            'invoice_date' => [
                'type' => 'datetime'
            ],
            'supplier_id' => [
                'type' => 'int',
            ],
            'grand_total' => [
                'type' => 'int'
            ],
        ]);
        $this->forge->addPrimaryKey('id', TRUE);
        $this->forge->createTable('purchases', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('purchases');
    }
}
