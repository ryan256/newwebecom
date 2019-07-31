<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registerlogin_model extends CI_Model {
	
	function register_save($data){
		$this->db->insert('register',$data);
	}
	
	
	function login_us($account, $password){
		$password	= hash("MD5", $password);
		$sql	= "SELECT * FROM register
					WHERE
						account = '$account'
					AND
						password = '$password'";
		$query 	= $this->db->query($sql);
		$result	= $query->row();
		return $result;
		
		
	}

}