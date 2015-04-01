<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		// @import footer_view.php 
		$this->load->view('/include/header_view');

		// @import navbar_view.php 
		$this->load->view('/include/navbar_view');

		// @import main_view.php 
		$this->load->view('/main_view');

		// @import footer_view.php 
		$this->load->view('/include/footer_view');
	}


}

