<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Surat_Keluar extends CI_Controller{ //membuat controller Mahasiswa
	function __construct(){
		parent:: __construct();
		$this->load->model('Surat_keluar_model');
		//untuk mengakses file model 'Mahasiswa_model'
		$this->load->library('fileuploader');
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$config['total_rows'] = $this->Surat_keluar_model->count_all_sk();
		$config['total_rows'] = $this->Surat_keluar_model->tampil_data_perbulan();

		$data['user'] = $this->Surat_keluar_model->getAll()->result();
		$this->template->views('Admin2/surat-keluar',$data);
			//untuk mengakses file views 'crud/home_mahasiswa' pada halaman template
	}
	public function tambah_surat_keluar() { //function untuk tambah data
		$this->template->views('Admin2/form-add-surat-keluar');
		//untuk mengakses file views 'crud/tambah_mahasiswa' pada halaman template
	}

	// public function input_surat_keluar() { //function input untuk memasukkan proses inputan data ke database
		

	// 	$no_sk = $this->input->post('no_sk');
	// 	$tgl_sk = $this->input->post('tgl_sk');
	// 	$tujuan_sk = $this->input->post('tujuan_sk');
	// 	$perihal_sk = $this->input->post('perihal_sk');
	// 	$file = $this->fileuploader->checkAndUploadImage($_FILES['file'], '../assets/upload/fotodivisi/');

	// 	$data = array( //array data untuk menampung inputan data
	// 		'no_sk' => $no_sk,
	// 		'tgl_sk' => $tgl_sk,
	// 		'tujuan_sk' => $tujuan_sk,
	// 		'perihal_sk' => $perihal_sk,
	// 		'file' => $file
	// 	);
	// 	$this->Surat_keluar_model->input_data($data, 'surat_keluar'); 
	// 	//untuk mengakses file model 'Grup_model' dan data tersimpan pada tabel tm_user
	// 	redirect('Surat_Keluar');
	// 	//setelah data berhasil tersimpan, halaman web otomatis beralih ke halaman pada function index
	// }

	public function input_surat_keluar()
	{
		$data = [
			'no_sk' => $this->input->post('no_sk'),
			'tgl_sk' => $this->input->post('tgl_sk'),
			'tujuan_sk' => $this->input->post('tujuan_sk'),
			'perihal_sk' => $this->input->post('perihal_sk'),
			'file_sk' => $_FILES['file_sk']
		];
		if ($data['file_sk']='') {

		}else{
			$config['upload_path']          = './assets/upload/file_sk/';
			$config['allowed_types']        = 'gif|jpg|png|pdf';
			$config['file_name']            = $data['perihal_sk'].'-'.time();
			$config['overwrite']            = TRUE;

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('file_sk')){
				echo "Gagal";
			}else{
				$data['file_sk'] = $this->upload->data('file_name');
			}
		}

		$this->Surat_keluar_model->input_data($data,'surat_keluar');
		redirect('Surat_Keluar');
	}

	public function edit_surat_keluar($id_sk) {
		$where = array('id_sk' => $id_sk);
		$data['user'] = $this->Surat_keluar_model->edit_data($where, 'surat_keluar')->result();
		$this->template->views('Admin2/update-surat-keluar', $data);
	}
	public function update() {
		$id_sk = $this->input->post('id_sk');
		$no_sk = $this->input->post('no_sk');
		$tgl_sk = $this->input->post('tgl_sk');
		$tujuan_sk = $this->input->post('tujuan_sk');
		$perihal_sk = $this->input->post('perihal_sk');
		//$file_sk = $this->fileuploader->checkAndUploadImage($_FILES['file_sk'], '../assets/upload/fotopengguna/');
		
		$data = array( //array data untuk menampung inputan data
			'no_sk' => $no_sk,
			'tgl_sk' => $tgl_sk,
			'tujuan_sk' => $tujuan_sk,
			'perihal_sk' => $perihal_sk,
			//'file_sk' => $file_sk
		);

		$where = array(
			'id_sk' => $id_sk
		);
		$this->Surat_keluar_model->update_data($where,$data, 'surat_keluar');
		redirect('Surat_Keluar');
	}
	public function hapus_surat_keluar($id_sk) {
		$where = array('id_sk' => $id_sk);
		$this->Surat_keluar_model->hapus_data($where, 'surat_keluar');
		redirect('Surat_Keluar');
	}

	public function detail_surat_keluar($id_sk) {
		$where = array('id_sk' => $id_sk);
		$data['user'] = $this->Surat_keluar_model->detail_data($where, 'surat_keluar')->result();
		$this->template->views('Admin2/detail-surat-keluar', $data);
	}
	public function filter(){ 
		$data = [
			'date_from'=>$this->input->get('mulai_tanggal'),
			'date_to'=>$this->input->get('sampai_tanggal'),
		];
		$data['user'] = $this->Surat_keluar_model->getByDate($data['date_from'], $data['date_to'])->result();
		$this->template->views('Admin2/surat-keluar',$data);
	}

}
?>