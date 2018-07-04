<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('M_barang');
		$this->load->model('M_claim');
	}
	
	function index(){
		if ($this->session->userdata("ISLOGIN") == true) {
			$data  = array(
				'pendaftar' => $this->get_pendaftar()
			);
			$this->template->display('main/admin', $data);
		} else {
			$data  = array(
				'barang' => $this->get_barang()
			);
			$this->template->display('main/public', $data);
		}
	}

	function pendaftaran(){
		$data  = array(
			'barang' => $this->get_barang()
		);
		$this->template->display('main/pendaftaran', $data);
	}

	function get_barang(){
		$res = $this->M_barang->get();
		return $res->result_array();
	}
	
	function get_pendaftar(){
		$res = $this->M_claim->get();
		return $res->result_array();
	}

	function verifikasi(){
		$pendaftarid = $this->input->get('id');
		$res = $this->M_claim->verifikasi($pendaftarid);
		if($res){
			redirect();
		}
	}

	function progress(){
		$pendaftarid = $this->input->get('pendaftarid');
		$progressid = $this->input->get('progressid');

		$res = $this->M_claim->progress($pendaftarid, $progressid);
		if($res){
			redirect();
		}
	}

	function logout(){
		session_destroy();
		redirect();
	}
}