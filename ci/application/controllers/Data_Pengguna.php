<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Data_Pengguna extends CI_Controller{ //membuat controller Mahasiswa
	function __construct(){
		parent:: __construct();
		$this->load->model('Pengguna_model');
		//untuk mengakses file model 'Mahasiswa_model'
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$data['user'] = $this->Pengguna_model->getAll()->result();
		$this->template->views('Admin2/pengguna-pengguna',$data);
			//untuk mengakses file views 'crud/home_mahasiswa' pada halaman template
	}
	public function tambah_pengguna() { //function untuk tambah data
		$this->template->views('Admin2/form-add-data-pengguna');
		//untuk mengakses file views 'crud/tambah_mahasiswa' pada halaman template
	}

	public function input_pengguna() { //function input untuk memasukkan proses inputan data ke database
		$pengguna_pengguna = $this->input->post('pengguna_pengguna');

		$data = array( //array data untuk menampung inputan data
			'pengguna_pengguna'=>$pengguna_pengguna

		);
		$this->Pengguna_model->input_data($data, 'pengguna-pengguna'); 
		//untuk mengakses file model 'Mahasiswa_model' dan data tersimpan pada tabel tm_user
		redirect('Data_Pengguna');
		//setelah data berhasil tersimpan, halaman web otomatis beralih ke halaman pada function index
	}
	// public function edit_pengguna() {
	// 	$where = array('pengguna_pengguna'=> $pengguna_pengguna);
	// 	$data['user'] = $this->Pengguna_model->edit_data($where, 'pengguna-pengguna')->result();
	// 	$this->template->views('Admin2/update-data-pengguna', $data);
	// }

	public function update() {
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = $this->input->post('pass');
		$nama = $this->input->post('nama');
		$grup = $this->input->post('grup');

		$data = array(
			'username' => $username,
			'password' => $password,
			'nama' => $nama,
			'grup' => $grup,
		);

		$where = array(
			'id' => $id
		);
		$this->Mahasiswa_model->update_data($where,$data, 'tm_user');
		redirect('Mahasiswa');
	}
}
?>