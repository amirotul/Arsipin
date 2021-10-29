<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Data_Pengguna extends CI_Controller{ //membuat controller Mahasiswa
	function __construct(){
		parent:: __construct();
		$this->load->model('Datapengguna_model');
		//untuk mengakses file model 'Mahasiswa_model'
		$this->load->library('imageuploader');
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$data['user'] = $this->Datapengguna_model->getAll()->result();
		$this->template->views('Admin2/pengguna-pengguna',$data);
			//untuk mengakses file views 'crud/home_mahasiswa' pada halaman template
	}
	public function tambah_pengguna() { //function untuk tambah data
		$this->load->model('Pengguna_model');
		$master_user= $this->Pengguna_model->getAll()->result();
		$this->template->views('Admin2/form-add-data-pengguna',$master_user);
		//untuk mengakses file views 'crud/tambah_mahasiswa' pada halaman template
	}

	public function input_pengguna() { //function input untuk memasukkan proses inputan data ke database
		$nama_pengguna = $this->input->post('nama');
		$email_pengguna = $this->input->post('email');
		$nama_role = $this->input->post('role');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$foto = $this->imageuploader->checkAndUploadImage($_FILES['foto'], 'assets/upload/fotopengguna/');


		$data = array( //array data untuk menampung inputan data
			'nama_pengguna' => $nama_pengguna,
			'email_pengguna' => $email_pengguna,
			'nama_role' => $nama_role,
			'username' => $username,
			'password' => $password,
			'foto' => $foto
		);
		$this->Datapengguna_model->input_data($data, 'data_pengguna'); 
		//untuk mengakses file model 'Grup_model' dan data tersimpan pada tabel tm_user
		redirect('Data_Pengguna');
		//setelah data berhasil tersimpan, halaman web otomatis beralih ke halaman pada function index
	}
}
?>