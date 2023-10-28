<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => [
                "type" => "INT",
                "constraint" => 6,
                "unsigned" => true,
                "auto_increment" => true
            ],
            "name" => [
                "type" => "VARCHAR",
                "constraint" => 60
            ],
            "address" => [
                "type" => "VARCHAR",
                "constraint" => 60
            ],
            "created_at" => [
                "type" => "TIMESTAMP",
                "nullable" => true,
                "default" => null
            ],
            "updated_at" => [
                "type" => "TIMESTAMP",
                "nullable" => true,
                "default" => null
            ],
            "delete_at" => [
                "type" => "TIMESTAMP",
                "nullable" => true,
                "default" => null
            ]
        ]);
        $this->forge->addKey("id", true);
        $this->forge->createTable("users");
    }

    public function down()
    {
        $this->forge->dropTable("users");
    }
}
