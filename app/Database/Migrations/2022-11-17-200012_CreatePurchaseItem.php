<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePurchaseItem extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'purchase_id' => [
                'type' => 'int',
            ],
            'item_id' => [
                'type' => 'int'
            ],
            'quantity' => [
                'type' => 'int',
            ],
            'price' => [
                'type' => 'int'
            ],
            'subtotal' => [
                'type' => 'int'
            ],
        ]);
        $this->forge->addPrimaryKey('id', TRUE);
        $this->forge->createTable('purchase_items', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('purchase_items');
    }
}
