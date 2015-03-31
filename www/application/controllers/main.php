<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		// @import head.html 
		$this->load->view('include/header_view');
		// @import navbar.html 
		$this->load->view('include/navbar_view');
		// @import contents.html 

		$this->load->view('main_view');			// @import footer.html  
		
		$this->load->view('include/footer_view');
	}


}

