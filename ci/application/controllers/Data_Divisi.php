<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Data_Divisi extends CI_Controller{ //membuat controller Mahasiswa
	function __construct(){
		parent:: __construct();
		$this->load->model('Datadivisi_model');
		//untuk mengakses file model 'Mahasiswa_model'
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$data['user'] = $this->Datadivisi_model->getAll()->result();
		$this->template->views('Admin2/data-divisi',$data);
			//untuk mengakses file views 'crud/home_mahasiswa' pada halaman template
	}
	public function tambah_data_divisi() { //function untuk tambah data
		$this->template->views('Admin2/form-add-data-divisi');
		//untuk mengakses file views 'crud/tambah_mahasiswa' pada halaman template
	}
	public function input_data_divisi() { //function input untuk memasukkan proses inputan data ke database
		$jenis_divisi = $this->input->post('jenis_divisi');
		$nama_divisi = $this->input->post('nama_divisi');
		$email_divisi = $this->input->post('email_divisi');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$foto = $this->input->post('foto');

		$data = array( //array data untuk menampung inputan data
			'jenis_divisi' => $jenis_divisi,
			'nama_divisi' => $nama_divisi,
			'email_divisi' => $email_divisi,
			'username' => $username,
			'password' => $password,
			'foto' => $foto
		);
		$this->Datadivisi_model->input_data($data, 'data_divisi'); 
		//untuk mengakses file model 'Grup_model' dan data tersimpan pada tabel tm_user
		redirect('Data_Divisi');
		//setelah data berhasil tersimpan, halaman web otomatis beralih ke halaman pada function index
	}
}
?>