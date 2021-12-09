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
		$this->load->model('Jenis_divisi_model');

		// $this->load->helper('date');
		//untuk mengakses file model 'Mahasiswa_model'
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$config['base_url'] = site_url('Dashboard');

		$data['user'] = $this->Admin_model->getAll()->result();
		$data['data_tahun'] = $this->Surat_masuk_model-> tampil_tahun();

		//line chart
		$data['data_sm_pertahun_21'] = $this->Surat_masuk_model-> tampil_data_pertahun21();
		$data['data_sm_pertahun_22'] = $this->Surat_masuk_model-> tampil_data_pertahun22();
		$data['data_sm_pertahun_23'] = $this->Surat_masuk_model-> tampil_data_pertahun23();
		$data['data_sm_pertahun_24'] = $this->Surat_masuk_model-> tampil_data_pertahun24();
		$data['data_sm_pertahun_25'] = $this->Surat_masuk_model-> tampil_data_pertahun25();

		$data['data_sk_pertahun_21'] = $this->Surat_keluar_model-> tampil_data_pertahun21();
		$data['data_sk_pertahun_22'] = $this->Surat_keluar_model-> tampil_data_pertahun22();
		$data['data_sk_pertahun_23'] = $this->Surat_keluar_model-> tampil_data_pertahun23();
		$data['data_sk_pertahun_24'] = $this->Surat_keluar_model-> tampil_data_pertahun24();
		$data['data_sk_pertahun_25'] = $this->Surat_keluar_model-> tampil_data_pertahun25();

		$data['data_dis_pertahun_21'] = $this->Disposisi_model-> tampil_data_pertahun21();
		$data['data_dis_pertahun_22'] = $this->Disposisi_model-> tampil_data_pertahun22();
		$data['data_dis_pertahun_23'] = $this->Disposisi_model-> tampil_data_pertahun23();
		$data['data_dis_pertahun_24'] = $this->Disposisi_model-> tampil_data_pertahun24();
		$data['data_dis_pertahun_25'] = $this->Disposisi_model-> tampil_data_pertahun25();

		//card
		$data['total_belum_didisposisi'] = $this->Surat_masuk_model-> belum_didisposisi();
		$data['total_data_sk'] = $this->Surat_keluar_model-> count_all_sk();
		$data['total_data_dis'] = $this->Disposisi_model-> count_all_dis();
		$data['total_data_arsip'] = $this->Data_arsip_model-> count_all_arsip();
		$data['total_data_divisi'] = $this->Jenis_divisi_model-> count_all_divisi();
		$data['total_data_pengguna'] = $this->Datapengguna_model-> count_all_pengguna();

		
		$data['total_data_sk_perbulan'] = $this->Surat_keluar_model-> tampil_data_perbulan();
		$data['total_data_sm_perbulan'] = $this->Surat_masuk_model-> tampil_data_perbulan();
		$data['total_data_dis_perbulan'] = $this->Disposisi_model-> tampil_data_perbulan();
		
		// $this->load->helper('date'); 
  //       $dates = '%Y'; 
  //       $data ['dates'] = $dates;

		$this->template->views('Admin2/dashboard',$data);
			//untuk mengakses file views 'crud/home_mahasiswa' pada halaman template
	}

}
?>