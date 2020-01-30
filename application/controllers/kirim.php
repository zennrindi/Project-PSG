<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class kirim extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$config=[
		'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'phidazenn@gmail.com',  // Email gmail
            'smtp_pass'   => '',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
		];

		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from('phidazenn@gmail.com', 'Pidha_Zain');
		$this->email->to('ningmell8367@gmail.com');

		$this->email->subject('oyiiiii');
		$this->email->message('oyisam');

		$z = $this->email->send();
		if ($z) {
			echo "berhasil";
		} else {
			echo "gagal";
		}
	}
}
?>