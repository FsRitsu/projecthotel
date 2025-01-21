<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Rooms extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'room_name'   => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'capacity'    => [
                'type'       => 'INT',
                'constraint' => 3,
            ],
            'price'       => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'status'      => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'created_at'  => [
                'type' => 'DATETIME',
            ],
            'updated_at'  => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        // Menambahkan primary key
        $this->forge->addKey('id', true);

        // Membuat tabel rooms
        $this->forge->createTable('rooms');
    }

    public function down()
    {
        // Drop tabel rooms jika migration di-rollback
        $this->forge->dropTable('rooms');
    }
}
