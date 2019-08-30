<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function index()
	{
		$data = array('msg' => null);
		$this->load->view('signup_view', $data);
	}// end of index function


	function submit(){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$mobile = $_POST['mobile'];
		$gender = $_POST['gender'];
		$dob = $_POST['dob'];



		$userData = array(
						"name" =>$name,
						"email" => $email,
						"password" => $password,
						"mobile" => $mobile,
						"gender" => $gender,
						"dob" 	 => $dob
		 			);

		$this->load->model('signup_model');

		$result = $this->signup_model->insert_user($userData);

		if($result){
			$msg = "Data Inserted Succesfuly";
		}else{
			$msg = "Data is not inserted";
		}

		$data = array('msg' => $msg);
		$this->load->view('signup_view', $data);

	}// end of submit function
	
}//end of class
