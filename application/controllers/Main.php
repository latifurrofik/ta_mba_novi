<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('M_barang');
	}
	
	function index(){
		$data  = array(
			'barang' => $this->get_barang()
		);
		$this->template->display('main/public', $data);
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
}