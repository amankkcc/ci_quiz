<?php

/**
 * 
 */
class Signup_model extends CI_Model
{


	function insert_user($userData){
		$result = 	$this->db->insert('users', $userData);

		return $result;
	}// end of function
}// end of class