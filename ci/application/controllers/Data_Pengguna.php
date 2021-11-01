<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Data_Pengguna extends CI_Controller{ //membuat controller Mahasiswa
	private $img_path = 'assets/upload/fotopengguna/';
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
		$this->load->model('Role_model');
		$this->load->model('Pengguna_model');
		$data['role'] = $this->Role_model->getAll()->result();
		$this->template->views('Admin2/form-add-data-pengguna', $data);
		//untuk mengakses file views 'crud/tambah_mahasiswa' pada halaman template
	}

	public function input_pengguna() { //function input untuk memasukkan proses inputan data ke database
		$nama_pengguna = $this->input->post('nama');
		$email_pengguna = $this->input->post('email');
		$id_role = $this->input->post('id_role');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$foto = $this->imageuploader->checkAndUploadImage($_FILES['foto'], $this->img_path);


		$data = array( //array data untuk menampung inputan data
			'nama_pengguna' => $nama_pengguna,
			'email_pengguna' => $email_pengguna,
			'id_role' => $id_role,
			'username' => $username,
			'password' => $password,
			'foto' => $foto
		);
		$this->Datapengguna_model->input_data($data, 'data_pengguna'); 
		//untuk mengakses file model 'Grup_model' dan data tersimpan pada tabel tm_user
		redirect('Data_Pengguna');
		//setelah data berhasil tersimpan, halaman web otomatis beralih ke halaman pada function index
	}
	public function edit_pengguna($id) {
		$this->load->model('Role_model');  //Copy line iki ng tambah_pengguna
		$where = array('id_pengguna' => $id);
		$data['user'] = $this->Datapengguna_model->edit_data($where, 'data_pengguna')->row_array();
		$data['role'] = $this->Role_model->getAll()->result();   //Copy line iki ng tambah_pengguna
		// echo json_encode($data['user']); die;
		$this->template->views('Admin2/update-data-pengguna', $data);
	}
	public function update() {
		$id = $this->input->post('id');
		$data = array( //array data untuk menampung inputan data
			'nama_pengguna' => $this->input->post('nama_pengguna'),
			'email_pengguna' => $this->input->post('email_pengguna'),
			'id_role' => $this->input->post('id_role'),
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
			'id_pengguna' => $id
		);
		$this->Datapengguna_model->update_data($where,$data, 'data_pengguna');
		redirect('Data_Pengguna');
	}
	public function hapus_pengguna($id) {
		$where = array('id_pengguna' => $id);
		$this->Datapengguna_model->hapus_data($where, 'data_pengguna');
		redirect('Data_Pengguna');
	}
}
