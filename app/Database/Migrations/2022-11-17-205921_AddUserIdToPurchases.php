<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUserIdToPurchases extends Migration
{
    public function up()
    {
        $this->forge->addColumn('purchases', [
            'user_id' => [
                'type' => 'int'
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('purchases', 'user_id');
    }
}
