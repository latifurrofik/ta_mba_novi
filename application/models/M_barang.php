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

	function get_by_token($token){
		$res = $this->db->query("
			SELECT P.NAMA, P.ALAMAT, P.TANGGAL TANGGALCLAIM, B.NAMA NAMABARANG, B.SERIAL, B.DESKRIPSI DESKRIPSIBARANG, B.TANGGALGARANSI, PG.PRESENTASE, PG.DESKRIPSI
			FROM tbl_pendaftar P
			LEFT JOIN tbl_barang B ON P.BARANGID=B.BARANGID
			LEFT JOIN tbl_progress PG ON P.PROGRESSID=PG.PROGRESSID
			WHERE P.TOKEN = ?",
			array($token)
		);
		return $res;
	}
}