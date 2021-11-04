<?php
 defined ('BASEPATH') OR exit ('No direct script access allowed');
class Dashboard extends CI_Controller{ //membuat controller Mahasiswa
	function __construct(){
		parent:: __construct();
		$this->load->model('Admin_model');
		$this->load->model('Data_arsip_model');
		$this->load->model('Datadivisi_model');
		//untuk mengakses file model 'Mahasiswa_model'
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$data['user'] = $this->Admin_model->getAll()->result();
		$data['total_data_arsip'] = $this->Data_arsip_model-> count_all_arsip();
		$data['total_data_divisi'] = $this->Datadivisi_model-> count_all_divisi();

		$this->template->views('Admin2/dashboard',$data);
			//untuk mengakses file views 'crud/home_mahasiswa' pada halaman template
	}
}
?>