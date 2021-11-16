
<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Profile extends CI_Controller{ //membuat controller Mahasiswa
	function __construct(){
		parent:: __construct();
		$this->load->model('Profile_model');
		//untuk mengakses file model 'Mahasiswa_model'
		//$this->load->library('fileuploader');
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$data['user'] = $this->Profile_model->getAll()->result();
		$this->template->views('Admin2/profile',$data);
			//untuk mengakses file views 'crud/home_mahasiswa' pada halaman template
	}
}
?>