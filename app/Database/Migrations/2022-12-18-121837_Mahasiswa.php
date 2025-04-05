<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mahasiswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'uname' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
                'unique' => true
            ],
            'pass' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'emailmhs' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
                'unique' => true
            ],
            'token' => [
                'type' => 'VARCHAR',
                'constraint' => 25
            ],
            'last_login timestamp default now()'
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('mahasiswa', TRUE);
    }

    public function down()
    {
        //
        $this->forge->dropTable('mahasiswa');
    }
}
