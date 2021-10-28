<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Jenis_Divisi extends CI_Controller{ //membuat controller Mahasiswa
	function __construct(){
		parent:: __construct();
		$this->load->model('Divisi_model');
		//untuk mengakses file model 'Mahasiswa_model'
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$data['user'] = $this->Divisi_model->getAll()->result();
		$this->template->views('Admin2/jenis-divisi',$data);
			//untuk mengakses file views 'crud/home_mahasiswa' pada halaman template
	}
	public function tambah_jenis_divisi() { //function untuk tambah data
		$this->template->views('Admin2/form-add-jenis-divisi');
		//untuk mengakses file views 'crud/tambah_mahasiswa' pada halaman template
	}
	public function input_jenis_divisi() { //function input untuk memasukkan proses inputan data ke database
		$jenis_divisi = $this->input->post('jenis_divisi');

		$data = array( //array data untuk menampung inputan data
			'jenis_divisi' => $jenis_divisi
		);
		$this->Divisi_model->input_data($data, 'jenis_divisi'); 
		//untuk mengakses file model 'Grup_model' dan data tersimpan pada tabel tm_user
		redirect('Jenis_Divisi');
		//setelah data berhasil tersimpan, halaman web otomatis beralih ke halaman pada function index
	}
	public function edit_jenis_divisi() {
		$where = array('jenis_divisi' => $jenis_divisi);
		$data['user'] = $this->Divisi_model->edit_data($where, 'jenis_divisi')->result();
		$this->template->views('Admin2/update-divisi', $data);
	}

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

