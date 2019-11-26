<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function index(){

		//if(isset($this->session->userdata['mysession'])){
		$data = array('view', 'dashboard-view');
			$this->load->view('page-view', $data);
		//}else{
		//	$this->load->view('home_view');
		//}
		
	}

}// end of dashboard class