<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('/include/header_view');
		$this->load->view('/include/navbar_view');
		$this->load->view('/about_view');
		$this->load->view('/include/footer_view');
	}

}

