<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Suppliers extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'code' => [
                'type' => 'int',
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
        $this->forge->addPrimaryKey('id', TRUE);
        $this->forge->createTable('suppliers', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('suppliers');
    }
}
