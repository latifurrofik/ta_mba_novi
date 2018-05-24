<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {
	
	function __construct() {
		parent::__construct();
	}
	
	function index(){
		$this->template->display('main/pendaftaran');
	}
}