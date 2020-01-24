<?php 
/**
 * 
 */
class kontrol extends CI_Controller
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
	function awal()
	{
		$this->load->view('muncul');
	}
	function register()
	{
		$data['user'] = $this->oyi->reg()->result();
		$this->load->view('register', $data);
	}
	function login()
	{
		$this->load->view('login');
	}
	function regis()
	{
		$id = $this->input->post('id_user');
		$nm = $this->input->post('username');
		$pwd = mdl($this->input->post('pass'));
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');

		$data_user = array('id_user' =>$id , 'username' =>$nm, 'pass' =>$pwd, 'nama'=>$nama, 'email'=>$email );
		$this->mdl->register($data_user);
		/*$this->kirim($konfir,$email);
		redirect(base_url('kontrol/'));
	}
	public function kirim()
	{
		
	}*/

 } }
 ?>