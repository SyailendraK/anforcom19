<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_password_reset_to_peserta extends CI_Migration {

        public function up()
        {
			$this->dbforge->add_column('peserta', [
				'password_reset_token' => [
					'type' => 'VARCHAR',
					'constraint' => '100',
					'null' => TRUE
				],
				'password_reset_expire' => [
					'type' => 'DATETIME',
					'null' => TRUE
				]
			]);
        }

        public function down()
        {
			$this->dbforge->drop_column('peserta', 'password_reset_token');
			$this->dbforge->drop_column('peserta', 'password_reset_expire');
        }
}
