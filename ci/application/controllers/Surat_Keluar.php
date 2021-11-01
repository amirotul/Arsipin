<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Surat_Keluar extends CI_Controller{ //membuat controller Mahasiswa
	function __construct(){
		parent:: __construct();
		$this->load->model('Surat_keluar_model');
		//untuk mengakses file model 'Mahasiswa_model'
		$this->load->library('fileuploader', '$config');
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$data['user'] = $this->Surat_keluar_model->getAll()->result();
		$this->template->views('Admin2/surat-keluar',$data);
			//untuk mengakses file views 'crud/home_mahasiswa' pada halaman template
	}
	public function tambah_surat_keluar() { //function untuk tambah data
		$this->template->views('Admin2/form-add-surat-keluar');
		//untuk mengakses file views 'crud/tambah_mahasiswa' pada halaman template
	}
	public function input_surat_keluar() { //function input untuk memasukkan proses inputan data ke database
		

		$no_sk = $this->input->post('no_sk');
		$tgl_sk = $this->input->post('tgl_sk');
		$tujuan_sk = $this->input->post('tujuan_sk');
		$perihal_sk = $this->input->post('perihal_sk');
		$file_sk = $this->fileuploader->checkAndUploadImage($_FILES['file_sk'], '../assets/upload/fotopengguna/');

		$data = array( //array data untuk menampung inputan data
			'no_sk' => $no_sk,
			'tgl_sk' => $tgl_sk,
			'tujuan_sk' => $tujuan_sk,
			'perihal_sk' => $perihal_sk,
			'file_sk' => $file_sk
		);
		$this->Surat_keluar_model->input_data($data, 'surat_keluar'); 
		//untuk mengakses file model 'Grup_model' dan data tersimpan pada tabel tm_user
		redirect('Surat_Keluar');
		//setelah data berhasil tersimpan, halaman web otomatis beralih ke halaman pada function index
	}
	public function edit_surat_keluar($id_sk) {
		$where = array('id_divisi' => $id_divisi);
		$data['user'] = $this->Datadivisi_model->edit_data($where, 'data_divisi')->result();
		$this->template->views('Admin2/update-data-divisi', $data);
	}
	public function update() {
		$id_divisi = $this->input->post('id_divisi');
		$jenis_divisi = $this->input->post('jenis_divisi');
		$nama_divisi = $this->input->post('nama_divisi');
		$email_divisi = $this->input->post('email_divisi');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		//$foto = $this->imageuploader->checkAndUploadImage($_FILES['foto'], 'assets/upload/fotopengguna/');
		
		$data = array(
			'jenis_divisi' => $jenis_divisi,
			'nama_divisi' => $nama_divisi,
			'email_divisi' => $email_divisi,
			'username' => $username,
			'password' => $password,
		);

		$where = array(
			'id_divisi' => $id_divisi
		);
		$this->Datadivisi_model->update_data($where,$data, 'surat_keluar');
		redirect('Data_Divisi');
	}
	public function hapus_surat_keluar($id_sk) {
		$where = array('id_sk' => $id_sk);
		$this->Surat_keluar_model->hapus_data($where, 'surat_keluar');
		redirect('Surat_Keluar');
	}

	public function detail_surat_keluar($id_divisi) {
		$where = array('id_divisi' => $id_divisi);
		$data['user'] = $this->Datadivisi_model->detail_data($where, 'data_divisi')->result();
		$this->template->views('Admin2/lihat-data-divisi', $data);
	}

}
?>