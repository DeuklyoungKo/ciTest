<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_apply extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
									  'id' => array(
										  'type' => 'INT',
										  'constraint' => 5,
										  'unsigned' => TRUE,
										  'auto_increment' => TRUE
									  ),
									  'email' => array(
										  'type' => 'VARCHAR',
										  'constraint' => '255',
										  'unique' => TRUE,
									  ),
									  'name' => array(
										  'type' => 'VARCHAR',
										  'constraint' => '255',
										  'null' => TRUE,
									  ),
									  'framework' => array(
										  'type' => 'TEXT',
									  ),
									  'created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP',
									  'updated_at' => array(
										  'type' => 'TEXT',
										  'null' => TRUE,
									  ),
								  ));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->add_key('email', TRUE);
		$this->dbforge->create_table('apply');
	}

	public function down()
	{
		$this->dbforge->drop_table('apply');
	}
}
