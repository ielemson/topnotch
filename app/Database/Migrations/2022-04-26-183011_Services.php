<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Services extends Migration
{
    public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'slug'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'title'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'img'       => [
				'type'       => 'VARCHAR',
				'constraint' => '12',
			],
			'description' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
			],
			
			'created_at' => [
				'type'           => 'datetime'
			],
			'updated_at' => [
				'type'           => 'datetime'
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('services');
	}

	public function down()
	{
		$this->forge->dropTable('services');
	}
}
