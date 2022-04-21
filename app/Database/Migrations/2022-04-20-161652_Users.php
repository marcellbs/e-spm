<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        // menambahkan field atau colomn
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'created_by' => [
                'type' => 'int',
                'constraint' => 11,
                'null' => true
            ],
        ]);

        // Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel users
		$this->forge->createTable('users', TRUE);
    }

    public function down()
    {
        // menghapus tabel users
		$this->forge->dropTable('users');
    }
}
