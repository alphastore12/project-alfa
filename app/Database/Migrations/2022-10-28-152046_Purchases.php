<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Purchases extends Migration
{
    public function up()

    { 
        $this->forge->addField( [
        'id' => [
            'type' => 'int',
            'unsigned' => true,
            'auto_increment' => true
        ],
        'invoiceno' => [
            'type' => 'text',
            'constraint' => 255
        ],
        'invoicedate' => [
            'type' => 'date',
        ],
        'supplierid' => [
            'type' => 'int',
            'constraint' => 255
        ],
        'grandtotal' => [
            'type' => 'int',
            'constraint' => 255
        ],
        'userid' => [
            'type' => 'int',
            'constraint' => 255
        ],
    ]);
    $this->forge->addPrimaryKey('id' , TRUE);
    $this->forge->createTable('purchases' , TRUE);
       

       
    }

    public function down()
    {
        $this->forge->dropTable('purchases');
    }
}
