<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		// @import footer_view.php 
		$this->load->view('/include/header_view');

		// @import navbar_view.php 
		$this->load->view('/include/navbar_view');

		// @import about_view.php 
		$this->load->view('/about_view');

		// @import footer_view.php 
		$this->load->view('/include/footer_view');
	}

}

