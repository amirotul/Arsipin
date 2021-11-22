<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
	}

	public function index() {
		$this->load->view('Admin2/pages-login');
	}

	public function cek_log() {
		$username = $this->input->post('txt_user');
		$password = $this->input->post('txt_pass');
		$cek = $this->Admin_model->login($username, $password,'data_pengguna')->result();
		if($cek != FALSE) {
			foreach ($cek as $row) {
				$user = $row->username;
				$grup = $row->id_role;
				$foto = $row->foto;
				$nama_pengguna = $row->nama_pengguna;
				$email_pengguna = $row->email_pengguna;
				$password = $row->password;
			}
			$this->session->set_userdata('session_user', $user);
			$this->session->set_userdata('session_grup', $grup);
			$this->session->set_userdata('session_foto', $foto);
			$this->session->set_userdata('session_nama_pengguna', $nama_pengguna);
			$this->session->set_userdata('session_email_pengguna', $email_pengguna);
			$this->session->set_userdata('session_password', $password);
			redirect('Dashboard');
		} else {
			$this->load->view('Admin2/pages-login');
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect('Login');
	}
}
?>