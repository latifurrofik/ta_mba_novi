<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('M_login');
	}
	
	function cek_login(){
		$params = array(
			'USERNAME' => $this->input->post('USERNAME'),
			'PASSWORD' => md5($this->input->post('PASSWORD'))
		);
		$res = $this->M_login->cek_login($params);

		
	}
}