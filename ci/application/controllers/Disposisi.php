<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Disposisi extends CI_Controller{ //membuat controller Mahasiswa
	function __construct(){
		parent:: __construct();
		$this->load->model('Disposisi_model');
		//untuk mengakses file model 'Mahasiswa_model'
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$data['user'] = $this->Disposisi_model->getAll()->result();
		$this->template->views('Admin2/disposisi',$data);
			//untuk mengakses file views 'crud/home_mahasiswa' pada halaman template
	}

	public function input_dis() { 
		$batas_waktu_dis = $this->input->post('batas_waktu_dis');
		$tujuan_divisi = $this->input->post('tujuan_divisi');
	 	$isi_dis = $this->input->post('isi_dis');
	 	$catatan_dis = $this->input->post('catatan_dis');

		$data = array( //array data untuk menampung inputan data
			'batas_waktu_dis' => $batas_waktu_dis,
			'tujuan_divisi' => $tujuan_divisi,
	 		'isi_dis' => $isi_dis,
	 		'catatan_dis' => $catatan_dis
		);
		$this->Disposisi_model->input_data($data, 'disposisi'); 
		//untuk mengakses file model 'Grup_model' dan data tersimpan pada tabel tm_user
		redirect('Disposisi');
		//setelah data berhasil tersimpan, halaman web otomatis beralih ke halaman pada function index
	}

	public function edit($id_disposisi) {
		$where = array('id_disposisi' => $id_disposisi);
		$data['user'] = $this->Disposisi_model->edit_data($where, 'disposisi')->result();
		$this->template->views('Admin2/update-disposisi', $data);
	}
	public function update() {
		$id_sm = $this->input->post('id_sm');
		$no_sm = $this->input->post('no_sm');
		$tgl_sm = $this->input->post('tgl_sm');
		$tgl_terima_sm = $this->input->post('tgl_terima_sm');
		$asal_sm = $this->input->post('asal_sm');
		$perihal_sm = $this->input->post('perihal_sm');

		$data = array(
			'id_disposisi' => $id_disposisi,
			'tgl_sm' => $tgl_sm,
			'tgl_terima_sm' => $tgl_terima_sm,
			'asal_sm' => $asal_sm,
			'perihal_sm' => $perihal_sm,
		);

		$where = array(
			'id_disposisi' => $id_disposisi
		);
		$this->Disposisi_model->update_data($where,$data, 'disposisi');
		redirect('Disposisi');
	}

	public function hapus($id_disposisi) {
		$where = array('id_disposisi' => $id_disposisi);
		$this->Disposisi_model->hapus_data($where, 'disposisi');
		redirect('Disposisi');
	}
}
?>