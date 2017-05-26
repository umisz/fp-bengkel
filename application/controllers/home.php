<?php 

class Home extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');

	}

	function index() {
		$this->load->view('utama');
	}

	function about(){
		$this->load->view('tentangkami');
	}

	function jenis_servis() {
		$this->load->view('jenis_servis');
	}
}
?>