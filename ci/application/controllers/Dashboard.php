<?php
 defined ('BASEPATH') OR exit ('No direct script access allowed');
class Dashboard extends CI_Controller{ //membuat controller Mahasiswa
	function __construct(){
		parent:: __construct();
		$this->load->model('Admin_model');
		$this->load->model('Surat_masuk_model');
		$this->load->model('Surat_keluar_model');
		$this->load->model('Disposisi_model');
		$this->load->model('Data_arsip_model');
		$this->load->model('Datadivisi_model');
		$this->load->model('Datapengguna_model');
		//untuk mengakses file model 'Mahasiswa_model'
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$data['user'] = $this->Admin_model->getAll()->result();
		$data['total_data_sm'] = $this->Surat_masuk_model-> count_all_sm();
		$data['total_data_sk'] = $this->Surat_keluar_model-> count_all_sk();
		$data['total_data_dis'] = $this->Disposisi_model-> count_all_dis();
		$data['total_data_arsip'] = $this->Data_arsip_model-> count_all_arsip();
		$data['total_data_divisi'] = $this->Datadivisi_model-> count_all_divisi();
		$data['total_data_pengguna'] = $this->Datapengguna_model-> count_all_pengguna();
		$data['total_data_perbulan'] = $this->Surat_keluar_model-> tampil_data_perbulan();
		$data['total_data_sm'] = $this->Surat_masuk_model-> tampil_data_perbulan();

		$this->template->views('Admin2/dashboard',$data);
			//untuk mengakses file views 'crud/home_mahasiswa' pada halaman template
	}
}
?>