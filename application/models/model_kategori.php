<?php

class Model_kategori extends CI_Model{
	public function data_kasur(){
		return $this->db->get_where("tb_barang",array('kategori' => 'kasur'));
	}

	public function data_lemari(){
		return $this->db->get_where("tb_barang",array('kategori' => 'lemari'));
	}
	public function data_meja(){
		return $this->db->get_where("tb_barang",array('kategori' => 'meja'));
	}
	public function data_kursi(){
		return $this->db->get_where("tb_barang",array('kategori' => 'kursi'));
	}
}