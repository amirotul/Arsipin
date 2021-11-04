<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Data_Arsip extends CI_Controller{ //membuat controller Mahasiswa
	function __construct(){
		parent:: __construct();
		$this->load->model('Data_arsip_model');
		//untuk mengakses file model 'Mahasiswa_model'
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$config['total_rows'] = $this->Data_arsip_model->count_all_arsip();

		$data['user'] = $this->Data_arsip_model->getAll()->result();
		$this->template->views('Admin2/data-arsip',$data);
			//untuk mengakses file views 'crud/home_mahasiswa' pada halaman template
	}
	public function filter(){ //function untuk menampilkan halaman awal yang ditampilkan
		$data = [
			'date_from'=>$this->input->get('mulai_tanggal'),
			'date_to'=>$this->input->get('sampai_tanggal'),
		];
		$data['user'] = $this->Data_arsip_model->getByDate($data['date_from'], $data['date_to'])->result();
		$this->template->views('Admin2/data-arsip',$data);
	}
	
}
?>