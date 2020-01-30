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
		$this->load->view('awal');
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
	public function kirim_email($link,$penerima)
	{ //AmeliaMalik8367
		$config = [
		'mailtype'  => 'html',
        'charset'   => 'utf-8',
        'protocol'  => 'smtp',
        'smtp_host' => 'smtp.gmail.com',
        'smtp_user' => 'phidazenn@gmail.com',  // Email gmail
        'smtp_pass'   => 'zain1303',  // Password gmail
        'smtp_crypto' => 'ssl',
        'smtp_port'   => 465,
        'crlf'    => "\r\n",
        'newline' => "\r\n"];

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('phidazenn@email.com', 'Pidha Zain');
        $this->email->to($penerima);
        
        $this->email->subject('Silahkan Coba Login');
        // $this->email->message("COBA COBA,, <br><br> Klik <strong><a href='
		// $http = (isset($_SERVER['HTTPS'])) ? https:// : http://;'
		// $url = str_replace("index.php", "", $_SERVER['SCRIPT_NAME']);
		// $config['base_url'] = $http . $_SERVER['SERVER_NAME'] . $url;
		// </a></strong> untuk melakukan Login Antrian Online");
		$this->email->message($link);

        $tes = $this->email->send();
        if ($tes) {
        	echo "berhasil";
        }else{
        	echo "gagal";
        }
        redirect(base_url('awal/'));
        // return $this->email->send();
	}
	function regis()
	{
		$id = $this->input->post('id_user');
		$nm = $this->input->post('username');
		$pwd = md5($this->input->post('pass'));
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');

		$data_user = array('id_user' =>$id , 'username' =>$nm, 'pass' =>$pwd, 'nama'=>$nama, 'email'=>$email );
		$this->oyi->register($data_user);

		$cek_data = array(
			'id_user' => $id,
			'username' => $nm,
			'pass' =>$pwd,
			'nama' => $nama,
			'email' => $email, );
		redirect(base_url('kendali/'));
		/*$this->kirim($konfir,$email);
		redirect(base_url('kontrol/'));
	}
	public function kirim()
	{
		
	}*/

 } }
 ?>			