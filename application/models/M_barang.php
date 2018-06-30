<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function get() {
		$res = $this->db->query(
			"SELECT * FROM tbl_barang"
		);

		return $res;
	}

	function get_tipe(){
		$res = $this->db->query(
			"SELECT * FROM tbl_tipe_barang"
		);

		return $res;
	}
}