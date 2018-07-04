<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->model('m_claim');
		$this->load->model('m_barang');
	}
	
	function claim_garansi (){
		$query=$this->db->query('SELECT max(TOKEN) as max_id FROM tbl_pendaftar'); 
		$row = $query->row_array();
		$token = $row['max_id'];
		$token++; 
		$token = trim(sprintf("%06s\n",   $token));

		$params = array(
			'NAMA' => $this->input->post('NAMA'),
			'EMAIL' => $this->input->post('EMAIL'),
			'NOTELP' => $this->input->post('NOTELP'),
			'ALAMAT' => $this->input->post('ALAMAT'),
			'BARANGID' => $this->input->post('MERKID'),
			'TIPEID' => $this->input->post('TIPEID'),
			'TOKEN' => $token
		);

		$res = $this->m_claim->claim_garansi($params);

		if ($res) {
			$data  = array(
				'barang' => $this->m_barang->get()->result_array()
			);
			// $this->template->display('main/public', $data);
			redirect();
		} else {
			
		}
	}

	function cari_token(){
		$token = $this->input->post('TOKEN');
		$res = $this->m_barang->get_by_token($token)->result_array();

		
		if ($res != array()) {
			$data = array(
				"claim" => $res
			);
			$this->template->display('main/tracking', $data);
		} else {
			redirect();
		}		

	}

	function get_notif(){
		$res = $this->m_claim->get_notif()->result_array();
		$token = (string)$res[0]["TOKEN"];
		echo json_encode($token);
	}
}