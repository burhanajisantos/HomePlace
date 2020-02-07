<?php

class Model_user extends CI_model{

	public function tampil_data(){
		return $this->db->get('tb_user');
	}
}