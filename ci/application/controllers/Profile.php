<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Profile extends CI_Controller{ //membuat controller Mahasiswa
	function __construct(){
		parent:: __construct();
		$this->load->model('Profile_model');
		$this->load->library('imageuploader');
		//untuk mengakses file model 'Mahasiswa_model'
		//$this->load->library('fileuploader');
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$config['base_url'] = site_url('Profile');
		$data['user'] = $this->db->get_where('data_pengguna',['id_role'=>$this->session->userdata('session_id_role')])->row_array();
		$this->template->views('Admin2/profile',$data);
			//untuk mengakses file views 'crud/home_mahasiswa' pada halaman template
	}
	public function edit_profile() {
		$data['user'] = $this->db->get_where('data_pengguna',['id_role'=>$this->session->userdata('session_id_role')])->row_array();

			$this->template->views('Admin2/update-profile',$data);
	}
	public function update() {
		//$id_role = $this->input->post('id_role');
		
		$nama_pengguna = $this->input->post('nama_pengguna');
		$email_pengguna = $this->input->post('email_pengguna');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$foto = $this->imageuploader->checkAndUploadImage($_FILES['foto'], './assets/upload/fotopengguna/');

		$data = array( //array data untuk menampung inputan data
			'nama_pengguna' => $this->input->post('nama_pengguna'),
			'email_pengguna' => $this->input->post('email_pengguna'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'foto' => '',
		);
		$fotolama = $this->input->post('fotolama');

		if ($_FILES['foto']['error'] === 4) {
			$data['foto'] = $fotolama;
		} else {
			$data['foto'] = $this->imageuploader->checkAndUploadImage($_FILES['foto'], $this->img_path);
			if (file_exists($this->img_path . $fotolama)) unlink($this->img_path . $fotolama);
		}

		// echo json_encode($data); die;

		$where = array(
			'email_pengguna' => $email_pengguna
		);
		$this->Profile_model->update_data($where,$data, 'data_pengguna');
		redirect('Profile');
	}
}
?>