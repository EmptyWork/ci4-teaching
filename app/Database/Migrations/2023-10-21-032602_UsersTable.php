<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\RawSql;
use CodeIgniter\Database\Migration;

class UsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 6,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 60
            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'dibuat' => [
                'type' => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP')
            ],
            'diubah' => [
                'type' => 'TIMESTAMP',
                'default' => 'null',
                'nullable' => true
            ]
        ]);
        $this->forge->addKey('id');
        $this->forge->createTable('pengguna');
    }

    public function down()
    {
        $this->forge->dropTable('pengguna');
    }
}
