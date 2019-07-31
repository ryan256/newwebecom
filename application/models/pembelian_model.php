<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pembelian_model extends CI_Model {
	
	function addcart($data){
		$this->db->insert('pembelian',$data);
	}
	
	function showdata(){
		//$query = $this->db->order_by('pname','DESC')->get('pembelian'); 
		//return $query->result();
		
		return $this->db->get('pembelian');
	}
		
		/*$data = $this->db->get($table);
		return $data->result_array();
		
		/*$this->db->select('*');
		$this->db->from('pembelian');
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	*/
	function buying($data){
		
		$this->db->insert('rekening',$data);
		
		
		
	}
	
	
	
	
	}
	
	
	
	
	/*function login_us($account, $password){
		$password	= hash("MD5", $password);
		$sql	= "SELECT * FROM register
					WHERE
						account = '$account'
					AND
						password = '$password'";
		$query 	= $this->db->query($sql);
		$result	= $query->row();
		return $result;
		
		
	}*/

