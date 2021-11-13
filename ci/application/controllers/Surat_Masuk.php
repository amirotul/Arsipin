
<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Surat_Masuk extends CI_Controller{ //membuat controller Mahasiswa
	function __construct(){
		parent:: __construct();
		$this->load->model('Surat_masuk_model');
		//untuk mengakses file model 'Mahasiswa_model'
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$config['total_rows'] = $this->Surat_masuk_model->count_all_sm();
		$config['total_rows'] = $this->Surat_masuk_model->tampil_data_perbulan();
		
		$data['user'] = $this->Surat_masuk_model->getAll()->result(); 
		$this->template->views('Admin2/surat-masuk',$data);
			//untuk mengakses file views 'crud/home_mahasiswa' pada halaman template
	}

	// public function tambah_disposisi($id_sm) { //function untuk tambah data
	// 	$this->load->model('Roledivisi_model');
	// 	$this->load->model('Divisi_model');
	// 	$data['user'] = $this->Roledivisi_model->getAll()->result();
	// 	$this->template->views('Admin2/form-add-disposisi', $data);
	// }

	public function tambah_data_divisi() { //function untuk tambah data
		$this->load->model('Roledivisi_model');
		$this->load->model('Divisi_model');
		$data['role'] = $this->Roledivisi_model->getAll()->result();
		$this->template->views('Admin2/form-add-data-divisi', $data);
		//untuk mengakses file views 'crud/tambah_mahasiswa' pada halaman template
	}

	public function tambah_disposisi($id_sm) { //function untuk tambah data
		$where = array('id_sm' => $id_sm);
		$data['user'] = $this->Surat_masuk_model->edit_data($where, 'surat_masuk')->result();
		$this->load->model('Roledivisi_model');
		$this->load->model('Divisi_model');
		$data['role'] = $this->Roledivisi_model->getAll()->result();
		$this->template->views('Admin2/form-add-disposisi',$data);
		//untuk mengakses file views 'crud/tambah_Grup' pada halaman template
	}

	//Resepsionis
	public function tambah_data() { //function untuk tambah data
		$this->template->views('Admin2/form-add-surat-masuk');
		//untuk mengakses file views 'crud/tambah_Grup' pada halaman template
	}
	// public function input_data() { //function input untuk memasukkan proses inputan data ke database
	// 	$no_sm = $this->input->post('no_sm');
	// 	$tgl_sm = $this->input->post('tgl_sm');
	// 	$tgl_terima_sm = $this->input->post('tgl_terima_sm');
	// 	$asal_sm = $this->input->post('asal_sm');
	// 	$perihal_sm = $this->input->post('perihal_sm');

	// 	$data = array( //array data untuk menampung inputan data
	// 		'no_sm' => $no_sm,
	// 		'tgl_sm' => $tgl_sm,
	// 		'tgl_terima_sm' => $tgl_terima_sm,
	// 		'asal_sm' => $asal_sm,
	// 		'perihal_sm' => $perihal_sm,
	// 		'file_sm' => $_FILES['file_sm']
	// 	);
	// 	$this->Surat_masuk_model->input_data($data, 'surat_masuk'); 
	// 	//untuk mengakses file model 'Grup_model' dan data tersimpan pada tabel tm_user
	// 	redirect('Surat_Masuk');
	// 	//setelah data berhasil tersimpan, halaman web otomatis beralih ke halaman pada function index
	// }

	public function input_data()
	{
		$data = [
			'no_sm' => $this->input->post('no_sm'),
			'tgl_sm' => $this->input->post('tgl_sm'),
			'tgl_terima_sm' => $this->input->post('tgl_terima_sm'),
			'asal_sm' => $this->input->post('asal_sm'),
			'perihal_sm' => $this->input->post('perihal_sm'),
			'file_sm' => $_FILES['file_sm']
		];
		if ($data['file_sm']='') {

		}else{
			$config['upload_path']          = './assets/upload/file/';
			$config['allowed_types']        = 'gif|jpg|png|pdf';
			$config['file_name']            = $data['perihal_sm'].'-'.time();
			$config['overwrite']            = TRUE;

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('file_sm')){
				echo "Gagal";
			}else{
				$data['file_sm'] = $this->upload->data('file_name');
			}
		}

		$this->Surat_masuk_model->input_data($data,'surat_masuk');
		redirect('Surat_Masuk');
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

	public function detail($id_sm) {
		$where = array('id_sm' => $id_sm);
		$data['user'] = $this->Surat_masuk_model->detail_data($where, 'surat_masuk')->row_array();
		$this->template->views('Admin2/detail-surat-masuk', $data);
	}

	public function detail_get_sm($id_sm) {
		$where = array('id_sm' => $id_sm);
		$data['user'] = $this->Surat_masuk_model->detail_data($where, 'surat_masuk')->row_array();
		$this->template->views('Admin2/detail-disposisi', $data);
	}

	public function filter(){ //function untuk menampilkan halaman awal yang ditampilkan
		$data = [
			'date_from'=>$this->input->get('mulai_tanggal'),
			'date_to'=>$this->input->get('sampai_tanggal'),
		];
		$data['user'] = $this->Surat_masuk_model->getByDate($data['date_from'], $data['date_to'])->result();
		$this->template->views('Admin2/surat-masuk',$data);
	}
}
?>