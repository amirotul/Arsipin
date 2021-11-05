<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Disposisi extends CI_Controller{ //membuat controller Mahasiswa
	function __construct(){
		parent:: __construct();
		$this->load->model('Disposisi_model');
		//untuk mengakses file model 'Mahasiswa_model'
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$config['total_rows'] = $this->Disposisi_model->count_all_dis();
		$data['user'] = $this->Disposisi_model->getAll()->result();
		$this->template->views('Admin2/disposisi',$data);
			//untuk mengakses file views 'crud/home_mahasiswa' pada halaman template
	}

	public function input_dis() { 
		$batas_waktu_dis = $this->input->post('batas_waktu_dis');
		$jenis_divisi = $this->input->post('jenis_divisi');
	 	$isi_dis = $this->input->post('isi_dis');
	 	$catatan_dis = $this->input->post('catatan_dis');

		$data = array( //array data untuk menampung inputan data
			'batas_waktu_dis' => $batas_waktu_dis,
			'jenis_divisi' => $jenis_divisi,
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
		$this->load->model('Roledivisi_model');
		$this->load->model('Divisi_model');
		$data['role'] = $this->Roledivisi_model->getAll()->result();
		$this->template->views('Admin2/update-disposisi', $data);
	}
	public function update() {
		$id_disposisi = $this->input->post('id_disposisi');
		$batas_waktu_dis = $this->input->post('batas_waktu_dis');
		$jenis_divisi = $this->input->post('jenis_divisi');
		$isi_dis = $this->input->post('isi_dis');
		$catatan_dis = $this->input->post('catatan_dis');

		$data = array(
			'id_disposisi' => $id_disposisi,
			'batas_waktu_dis' => $batas_waktu_dis,
			'jenis_divisi' => $jenis_divisi,
			'isi_dis' => $isi_dis,
			'catatan_dis' => $catatan_dis,
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

	//  public function detail_get_disposisi($id_disposisi){
	// 	$where = array('id_disposisi' => $id_disposisi);
	// 	$data['user'] = $this->Disposisi_model->detail_data($where, 'disposisi')->row_array();
	// 	$this->template->views('Admin2/detail-disposisi', $data);
	// }
	public function detail($id) {
		$id_disposisi = $id;
		$data['user'] = $this->Disposisi_model->detail_data($id_disposisi, 'disposisi')->row_array();
		$this->template->views('Admin2/detail-disposisi', $data);
	}

	public function filter(){ //function untuk menampilkan halaman awal yang ditampilkan
		$data = [
			'date_from'=>$this->input->get('mulai_tanggal'),
			'date_to'=>$this->input->get('sampai_tanggal'),
		];
		$data['user'] = $this->Disposisi_model->getByDate($data['date_from'], $data['date_to'])->result();
		$this->template->views('Admin2/disposisi',$data);
	}
}
?>