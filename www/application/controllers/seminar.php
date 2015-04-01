<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Seminar extends CI_Controller {

	// start constructing before loading index() (==start constructing at first)
	// you can use basic functions without helpers of codeigniter
	// if you want to use other functions, use the helpers
	public function __construct(){
		parent::__construct();

		// load a helper for 'redirect(~)'
		$this->load->helper('url');

		// load a model('board_model')
		$this->load->model('board_model');

	}

	public function index()
	{
		// redirect to ~/seminar/sub/presentation
		redirect('/seminar/sub/presentation', 'location');
	}

	public function sub($menu)
	{
		// @import header_view.php 
		$this->load->view('include/header_view');

		// @import navbar_view.php 
		$this->load->view('include/navbar_view');

		// @import a selected page depending on '$menu' ('~/seminar/sub/$menu')
		switch($menu)
		{
			case 'presentation':
			$this->load->view('seminar/presentation_view');
			break;

			case 'framework':
			$this->load->view('seminar/framework_view');
			break;

			case 'board':
			$this->board();
			break;

			case 'web':
			$this->load->view('seminar/web_view');
			break;

			case 'source':
			$this->load->view('seminar/source_view');
			break;

			default:
			$this->load->view('seminar/presentation_view');
			break;
		}

		// @import footer_view.php 
		$this->load->view('include/footer_view');


	}

	public function board()
	{
		// initialize new variables to store POST data
		$uploader = $this->input->post('uploader');
		$contents = $this->input->post('contents');

		// if there is post data
		if( $uploader!='' && $contents!='' ){

			// initialize a new variable to store data
			$data = array(
      			'uploader' =>$uploader,
      			'contents'=> $contents,
      			'uptime' => date('Y-m-d H:i:s')
    		);

			// run 'add_board'(a function of board_model)
			$this->board_model->add_board($data);

			// redirect '~/sub/board'
			redirect('./sub/board', 'refresh');
		}else{

			// run 'read_all'(a function of board_model)
			// store a result in a new variable
			$result = $this->board_model->read_all();

			// initialize the new variable to store the result
			// * if you want to pass multiple datas,
			//		you have to create an array
			$data = array('result'=>$result);

			// @import board_view.php with passing the data
			$this->load->view('/seminar/board_view', $data);
			
		}

	}

}

