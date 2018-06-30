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

	function get(){
		$res = $this->db->query("
			SELECT P.PENDAFTARID, P.NAMA, P.EMAIL, P.NOTELP, P.ALAMAT, P.TANGGAL, B.NAMA BARANG, TB.TIPE, P.TOKEN, P.VERIFIKASI
			FROM tbl_pendaftar P
			LEFT JOIN tbl_barang B ON P.BARANGID=B.BARANGID
			LEFT JOIN m_tipe_barang TB ON P.TIPEID=TB.TIPEID
		");

		return $res;
	}

	function get_notif(){
		$res = $this->db->query("SELECT TOKEN FROM tbl_pendaftar ORDER BY PENDAFTARID DESC LIMIT 1");
		return $res;
	}
}