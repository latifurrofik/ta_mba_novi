<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function cek_login($params) {
		$res = $this->db->query("SELECT * FROM users WHERE USERNAME = ? AND PASSWORD = ?", $params);
		return $res->num_rows();
	}	
}