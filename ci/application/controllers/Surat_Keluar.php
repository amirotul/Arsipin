<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Surat_Keluar extends CI_Controller{ //membuat controller Mahasiswa
	function __construct(){
		parent:: __construct();
		$this->load->model('Admin_model');
		//untuk mengakses file model 'Mahasiswa_model'
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$data['user'] = $this->Admin_model->getAll()->result();
		$this->template->views('Admin2/dashboard',$data);
			//untuk mengakses file views 'crud/home_mahasiswa' pada halaman template
	}
	public function surat_keluar() { 
		$this->template->views('Admin2/surat-keluar');
		//untuk mengakses file views 'crud/tambah_mahasiswa' pada halaman template
	}
}
?>