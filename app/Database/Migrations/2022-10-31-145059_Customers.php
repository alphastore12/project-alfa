<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Customers extends Migration
{
    public function up()
    {
        $this->forge->addField( [
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'code' => [
                'type' => 'int',
                'constraint' => 255
            ],
            'name' => [
                'type' => 'varchar',
                'constraint' => 255
            ],
            'status_id' => [
                'type' => 'varchar',
                'constraint' => 255
            ],
        ]);
        $this->forge->addPrimaryKey('id' , TRUE);
        $this->forge->createTable('customers' , TRUE);

    }

    public function down()
    {
        $this->forge->dropTable('customers');
    }
}
