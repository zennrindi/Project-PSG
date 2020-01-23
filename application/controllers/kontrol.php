<?php 
/**
 * 
 */
class kontrol extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index($value='')
	{
		$this->load->view('awal');
	}
}
 ?>