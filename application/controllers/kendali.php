<?php 
/**
  * 
  */
 class kendali extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('oyi');
 	}
 	function index()
 	{
 		$this->load->view('login');
 	}
 	function login()
 	{
 		$username = $this->input->post('username');
 		$password = $this->input->post('pwd');
 		$data = array('username' =>$username ,'pwd'=>$password );

 		$lg=$this->oyi->c_login($data);
 		if ($lg->num_rows(0)) 
 		{
 			foreach ($lg->result_array() as $key ) 
 			{
 				$this->session->set_userdata($key);
 				if (md5($password)==$key['password']) 
 				{	redirect(base_url('user/usern'));
 					/*if ($data['level']=='1') 
 					{
 						echo "Admin";
 					}
 					elseif ($data['level']=='2') 
 					{
 						echo "seller";
 					}
 					elseif ($data['level']=='3') 
 					{
 						echo "customer";
 					}
 					else
 					{
 						redirect(base_url('control/user'));
 					}*/
 				}else{
 					redirect(base_url('kendali/'));
 				}
 			}
 		} else {
 			echo "username error";
 		}
 	}
 } ?>