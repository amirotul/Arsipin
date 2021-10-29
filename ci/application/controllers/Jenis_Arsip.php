<?php
 defined ('BASEPATH') OR exit ('No direct script access allowed');
class Jenis_Arsip extends CI_Controller{ //membuat controller Mahasiswa
	function __construct(){
		parent:: __construct();
		$this->load->model('Jenis_arsip_model');
		//untuk mengakses file model 'Mahasiswa_model'
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$data['user'] = $this->Jenis_arsip_model->getAll()->result();
		$this->template->views('Admin2/jenis-arsip',$data);
			//untuk mengakses file views 'crud/home_mahasiswa' pada halaman template
	}

	public function tambah() { //function untuk tambah data
		$this->template->views('Admin2/form-add-jenis-arsip');
		//untuk mengakses file views 'crud/tambah_Grup' pada halaman template
	}

	public function input() { //function input untuk memasukkan proses inputan data ke database
		$jenis_arsip = $this->input->post('jenis_arsip');

		$data = array( //array data untuk menampung inputan data
			'jenis_arsip' => $jenis_arsip
		);
		$this->Jenis_arsip_model->input_data($data, 'jenis_arsip'); 
		//untuk mengakses file model 'Grup_model' dan data tersimpan pada tabel tm_user
		redirect('Jenis_Arsip');
		//setelah data berhasil tersimpan, halaman web otomatis beralih ke halaman pada function index
	}

	public function edit($id_jenis_arsip) {
		$where = array('id_jenis_arsip' => $id_jenis_arsip);
		$data['user'] = $this->Jenis_arsip_model->edit_data($where, 'jenis_arsip')->result();
		$this->template->views('Admin2/update-jenis-arsip', $data);
	}
	public function update() {
		$id_jenis_arsip = $this->input->post('id_jenis_arsip');
		$jenis_arsip = $this->input->post('jenis_arsip');
		
		$data = array(
			'jenis_arsip' => $jenis_arsip
		);

		$where = array(
			'id_jenis_arsip' => $id_jenis_arsip
		);
		$this->Jenis_arsip_model->update_data($where,$data, 'jenis_arsip');
		redirect('Jenis_Arsip');
	}

	public function hapus($id_jenis_arsip) {
		$where = array('id_jenis_arsip' => $id_jenis_arsip);
		$this->Jenis_arsip_model->hapus_data($where, 'jenis_arsip');
		redirect('Jenis_Arsip');
	}
}
?>