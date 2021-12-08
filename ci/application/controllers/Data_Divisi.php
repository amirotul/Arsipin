<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Data_Divisi extends CI_Controller{ //membuat controller Mahasiswa
	function __construct(){
		parent:: __construct();
		$this->load->model('Datadivisi_model');
		//untuk mengakses file model 'Mahasiswa_model'
		$this->load->library('imageuploader');
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$config['base_url'] = site_url('Data_Divisi');
		$config['total_rows'] = $this->Datadivisi_model->count_all_divisi();
		$data['user'] = $this->Datadivisi_model->getAll()->result();
		$this->template->views('Admin2/data-divisi',$data);
			//untuk mengakses file views 'crud/home_mahasiswa' pada halaman template
	}
	public function tambah_data_divisi() { //function untuk tambah data
		$this->load->model('Roledivisi_model');
		$this->load->model('Divisi_model');
		$data['role'] = $this->Roledivisi_model->getAll()->result();
		$this->template->views('Admin2/form-add-data-divisi', $data);
		//untuk mengakses file views 'crud/tambah_mahasiswa' pada halaman template
	}
	public function input_data_divisi() { //function input untuk memasukkan proses inputan data ke database
		$id_role = $this->input->post('id_role');
		$nama_pengguna = $this->input->post('nama_pengguna');
		$email_pengguna = $this->input->post('email_pengguna');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$foto = $this->imageuploader->checkAndUploadImage($_FILES['foto'], './assets/upload/fotopengguna/');

		$data = array( //array data untuk menampung inputan data
			'id_role' => $id_role,
			'nama_pengguna' => $nama_pengguna,
			'email_pengguna' => $email_pengguna,
			'username' => $username,
			'password' => $password,
			'foto' => $foto
		);
		$this->Datadivisi_model->input_data($data, 'data_pengguna'); 
		//untuk mengakses file model 'Grup_model' dan data tersimpan pada tabel tm_user
		redirect('Data_Divisi');
		//setelah data berhasil tersimpan, halaman web otomatis beralih ke halaman pada function index
	}
	public function edit_data_divisi($id) {
		//$this->load->model('Roledivisi_model');
		//$this->load->model('Divisi_model');
		//$data['role'] = $this->Roledivisi_model->getAll()->result();
		$where = array('id_pengguna' => $id);
		$data['user'] = $this->Datadivisi_model->edit_data($where, 'data_pengguna')->row_array();
		//$data['role'] = $this->Role_model->getAll()->result();   //Copy line iki ng tambah_pengguna
		// echo json_encode($data['user']); die;
		$this->template->views('Admin2/update-data-divisi', $data);
	}
	public function update() {
		$id = $this->input->post('id');
		//$jenis_divisi = $this->input->post('jenis_divisi');
		$nama_pengguna = $this->input->post('nama_pengguna');
		$email_pengguna = $this->input->post('email_pengguna');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$foto = $this->imageuploader->checkAndUploadImage($_FILES['foto'], './assets/upload/fotopengguna/');

		$data = array( //array data untuk menampung inputan data
			//'jenis_divisi' => $jenis_divisi,
			'nama_pengguna' => $nama_pengguna,
			'email_pengguna' => $email_pengguna,
			'username' => $username,
			'password' => $password,
			'foto' => '',
		);
		$fotolama = $this->input->post('fotolama');

		if ($_FILES['foto']['error'] === 4) {
			$data['foto'] = $fotolama;
		} else {
			$data['foto'] = $this->imageuploader->checkAndUploadImage($_FILES['foto'], $this->img_path);
			if (file_exists($this->img_path . $fotolama)) unlink($this->img_path . $fotolama);
		}

		// echo json_encode($data); die;

		$where = array(
			'id_pengguna' => $id
		);
		$this->Datadivisi_model->update_data($where,$data, 'data_pengguna');
		redirect('Data_Divisi');
	}
	public function hapus_data_divisi($id_pengguna) {
		$where = array('id_pengguna' => $id_pengguna);
		$this->Datadivisi_model->hapus_data($where, 'data_pengguna');
		redirect('Data_Divisi');
	}

	public function detail_data_divisi($id) {
		$id_pengguna = $id;
		$data['user'] = $this->Datadivisi_model->detail_data($id_pengguna, 'data_pengguna')->row_array();
		//$data['role'] = $this->Role_model->getAll()->result();   //Copy line iki ng tambah_pengguna
		// echo json_encode($data['user']); die;
		$this->template->views('Admin2/lihat-data-divisi', $data);

		//$this->load->model('Roledivisi_model');
		//$this->load->model('Divisi_model');
		//$data['role'] = $this->Roledivisi_model->getAll()->result();
		//$where = array('id_divisi' => $id);
		//$data['user'] = $this->Datadivisi_model->detail_data($where, 'data_divisi')->row_array();
		//$data['role'] = $this->Role_model->getAll()->result();   //Copy line iki ng tambah_pengguna
		// echo json_encode($data['user']); die;
		//$this->template->views('Admin2/lihat-data-divisi', $data);
	}

}

?>