<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('home_view');
	}// end of index function

	function forget(){
		$this->load->view('forget_view');
	}
	
}//end of class
