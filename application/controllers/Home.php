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

	function submit(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$this->load->model('home_model');

		$user = $this->home_model->verify($email, $password);

		if($user){
			$session_array = array('email' => $user['email'], 'user_type' => $user['user_type']);
			$this->session->set_userdata('mysession', $session_array);
			redirect('dashboard');
		}else{
			$this->load->view('home_view');
		}
		
	}// end of submit

	function logout(){
		$this->session->sess_destroy();
		redirect('home');
	}// end of logout
	
}//end of class
