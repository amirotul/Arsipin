<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Grafik extends CI_Controller{ //membuat controller Mahasiswa
	function __construct(){
		parent:: __construct();
		$this->load->model('Grafik_model');
		//untuk mengakses file model 'Mahasiswa_model'
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		}
		$this->template->views('Admin2/dashboard',$data);
	}
?>