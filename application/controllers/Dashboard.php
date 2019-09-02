<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function index(){

		if(isset($this->session->userdata['mysession'])){
			$this->load->view('dashboard_view');
		}else{
			$this->load->view('home_view');
		}
		
	}

}// end of dashboard class