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

 		$lg=$this->mdl->c_login($data);
 		if ($lg->num_rows(0)) 
 		{
 			foreach ($lg->result_array() as $data ) 
 			{
 				$this->session->set_userdata($data);
 				if (md5($password)==$data['password']) 
 				{
 					if ($data['level']=='1') 
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
 					}
 				}else{
 					echo "password error";
 				}
 			}
 		} else {
 			echo "username error";
 		}
 	}
 } ?>