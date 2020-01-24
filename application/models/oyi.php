<?php 
/**
  * 
  */
 class oyi extends CI_Model
 {
 	
 	function reg()
 	{
 		return $this->db->get('user');
 	}
 	function register($d_user)
 	{
 		$this->db->insert('user',$d_user);		
 	}
 	function c_login($data)
 	{
 		$this->db->where($data);
 		return $this->db->get('user');
 	}
 } ?>