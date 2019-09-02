<?php

/**
 * 
 */
class Home_model extends CI_Model
{

	function verify($email, $password){

		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$q = $this->db->get('users');

		if($q->num_rows()>0){
			return $q->result_array();
		}else{
			return false;
		}

	}// end of verify
}