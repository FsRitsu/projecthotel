<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Booking extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'user_id' => [
                'type'           => 'INT',
            ],
            'room_id' => [
                'type'           => 'INT',
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '40',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '40',
            ],
            'phonenumber' => [
                'type'       => 'varchar',
                'constraint' => '12',
            ],
            'checkin' => [
                'type'       => 'datetime',
            ],
            'checkout' => [
                'type'       => 'datetime',
            ],
        ]);
        $this->forge->addKey('id', true);

        // $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        // $this->forge->addForeignKey('room_id', 'rooms', 'id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('booking');
    }

    public function down()
    {
        $this->forge->dropTable('booking');
    }
}
