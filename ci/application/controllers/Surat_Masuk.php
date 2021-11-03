<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Surat_Masuk extends CI_Controller{ //membuat controller Mahasiswa
	function __construct(){
		parent:: __construct();
		$this->load->model('Surat_masuk_model');
		//untuk mengakses file model 'Mahasiswa_model'
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$data['user'] = $this->Surat_masuk_model->getAll()->result();
		$this->template->views('Admin2/surat-masuk',$data);
			//untuk mengakses file views 'crud/home_mahasiswa' pada halaman template
	}

	public function tambah_disposisi($id_sm) { //function untuk tambah data
		$where = array('id_sm' => $id_sm);
		$data['user'] = $this->Surat_masuk_model->edit_data($where, 'surat_masuk')->result();
		$this->template->views('Admin2/form-add-disposisi', $data);
	}

	 public function get_sm() {
	 	$id_sm = $this->input->post('id_sm');
	 	$no_sm = $this->input->post('no_sm');
	 	$tgl_sm = $this->input->post('tgl_sm');
	 	$asal_sm = $this->input->post('asal_sm');
	 	
	 	$data = array(
	 		'no_sm' => $no_sm,
	 		'tgl_sm' => $tgl_sm,
	 		'asal_sm' => $asal_sm,
	 	);

	 	$where = array(
	 		'id_sm' => $id_sm
	 	);
	 	$this->Surat_masuk_model->update_data($where,$data, 'surat_masuk');
	 	redirect('Disposisi');
	 }

	 public function edit($id_sm) {
	 	$where = array('id_sm' => $id_sm);
	 	$data['user'] = $this->Surat_masuk_model->edit_data($where, 'surat_masuk')->result();
	 	$this->template->views('Admin2/update-surat-masuk', $data);
	 }
	 public function update() {
	 	$id_sm = $this->input->post('id_sm');
	 	$no_sm = $this->input->post('no_sm');
	 	$tgl_sm = $this->input->post('tgl_sm');
	 	$tgl_terima_sm = $this->input->post('tgl_terima_sm');
	 	$asal_sm = $this->input->post('asal_sm');
	 	$perihal_sm = $this->input->post('perihal_sm');

	 	$data = array(
	 		'no_sm' => $no_sm,
	 		'tgl_sm' => $tgl_sm,
	 		'tgl_terima_sm' => $tgl_terima_sm,
	 		'asal_sm' => $asal_sm,
	 		'perihal_sm' => $perihal_sm,
	 	);

	 	$where = array(
	 		'id_sm' => $id_sm
	 	);
	 	$this->Surat_masuk_model->update_data($where,$data, 'surat_masuk');
	 	redirect('Surat_Masuk');
	 }

	 public function hapus($id_sm) {
	 	$where = array('id_sm' => $id_sm);
	 	$this->Surat_masuk_model->hapus_data($where, 'surat_masuk');
	 	redirect('Surat_Masuk');
	 }
	}
?>