<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Board_model extends CI_Model {

  // start constructing at first ( == before loading index() )
  // you can use basic functions without helpers of codeigniter
  // if you want to use other functions, use the helpers
  public function __construct(){
  parent::__construct();

    // to connect the database
    $this->load->database();

  }

  // insert a new data into 'board' (a table of database)
  public function add_board($data) {

    // initialize a new variable to store the result
    $newdata = array(
      'uploader' =>$data['uploader'],
      'contents'=> $data['contents'],
      'uptime' => date('Y-m-d H:i:s')
    );

    // insert the data into 'board'
    $this->db->insert('board',$newdata);
  }

  // read all data from 'board' (a table of database)
  public function read_all() {

    // get all data from 'board'
    $query = $this->db->get("board"); 

    // if the number of data is greather than 0 
    // == there is a data at leat one
    if($query->num_rows()>0) {

      // return an array of the data
      return $query->result_array();   

    }
    
  }


}
?>