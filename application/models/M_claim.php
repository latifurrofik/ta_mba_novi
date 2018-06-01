<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_claim extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function claim_garansi($params) {
		$res = $this->db->query("
			INSERT INTO tbl_pendaftar(
				NAMA,
				EMAIL,
				NOTELP,
				ALAMAT,
				TANGGAL,
				BARANGID,
				TIPEID,
				TOKEN
				) VALUES (?,?,?,?,DATE(NOW()),?,?,?)
		", $params);

		return $res;
	}
}