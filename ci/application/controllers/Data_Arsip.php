<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Data_Arsip extends CI_Controller{ //membuat controller Mahasiswa
	function __construct(){
		parent:: __construct();
		$this->load->model('Data_arsip_model');
		$this->load->model('Jenis_arsip_model');
		//untuk mengakses file model 'Mahasiswa_model'
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$this->load->model('Rolejenisarsip_model');
		$this->load->model('Jenisarsip_model');
		$data['role'] = $this->Rolejenisarsip_model->getAll()->result();
		$data['id_jenis'] = $this->input->get('id_jenis');
		foreach($data ['role'] as $key => $value){
			$data['role'][$key]->count = $this->Rolejenisarsip_model->count_by_jenis($value->id_jenis_arsip);
		}

		$config['total_rows'] = $this->Data_arsip_model->count_all_arsip();

		$data ['total_arsip'] = $this->Jenis_arsip_model->count_all_jenis_arsip();
		//$data ['total_perarsip'] = $this->Data_arsip_model->jumlah_data_perarsip();

		$data['terbaru'] = $this->Data_arsip_model->data_terbaru()->result();
		$data['user'] = $this->Data_arsip_model->getAll()->result();
		$this->template->views('Admin2/data-arsip',$data);
			//untuk mengakses file views 'crud/home_mahasiswa' pada halaman template
	}
	public function filter(){ //function untuk menampilkan halaman awal yang ditampilkan
		$data = [
			'date_from'=>$this->input->get('mulai_tanggal'),
			'date_to'=>$this->input->get('sampai_tanggal'),
		];
		$data['user'] = $this->Data_arsip_model->getByDate($data['date_from'], $data['date_to'])->result();
		$this->template->views('Admin2/lihat_arsip',$data);
	}
	public function filter_tanggal($id_jenis){ //function untuk menampilkan halaman awal yang ditampilkan
		$data = [
			'date_from'=>$this->input->get('mulai_tanggal'),
			'date_to'=>$this->input->get('sampai_tanggal'),
		];
		$data['user'] = $this->Data_arsip_model->getByDateArsip($data['date_from'], $data['date_to'], $id_jenis['id_jenis'])->result();
		$this->template->views('Admin2/data_perarsip',$data);
	}
	public function lihat_semua_arsip(){ //function untuk menampilkan halaman awal yang ditampilkan
		
		$data['user'] = $this->Data_arsip_model->lihat_semua_arsip()->result();
		$this->template->views('Admin2/lihat_arsip',$data);
	}
	public function data_per_arsip($id_jenis) { //function untuk tambah data
		$this->load->model('Rolejenisarsip_model');
		$this->load->model('Jenisarsip_model');
		if (isset($_GET['mulai_tanggal']) && isset($_GET['sampai_tanggal'])) {
			$data = [
				'date_from'=>$this->input->get('mulai_tanggal'),
				'date_to'=>$this->input->get('sampai_tanggal'),
				'id_jenis' => $this->input->get('id_jenis')
			];

			$data['user'] = $this->Data_arsip_model->getByDateAndJenis($id_jenis, $data['date_from'], $data['date_to'])->result();
		} else {
			$data['id_jenis'] = $id_jenis;
			//$data['title'] = $this->input->get('id_jenis');
			//$data['title'] = $this->Rolejenisarsip_model->getAll($id_jenis)->result();
			//$params['title'] = 'Order #'. $data->jenis_arsip;
			$data['user'] = $this->Data_arsip_model->lihat_arsip_jenis($id_jenis)->result();
		}
		//$user['user'] = $data;
		$this->template->views('Admin2/data_perarsip', $data);
		//untuk mengakses file views 'crud/tambah_Grup' pada halaman template
	}
	public function tambah_data_arsip(){
		$this->load->model('Rolejenisarsip_model');
		$this->load->model('Jenisarsip_model');
		$data['role'] = $this->Rolejenisarsip_model->getAll()->result();
		$data['id_jenis'] = $this->input->get('id_jenis');

		$data['user'] = $this->db->get_where('data_pengguna',['id_role'=>$this->session->userdata('session_id_role')])->row_array();

		$this->template->views('Admin2/form-add-data-arsipp', $data);
	}
	public function input($id_jenis)
	{
		$data = [
			'id_pengguna' => $this->input->post('id_pengguna'),
			'nama_arsip' => $this->input->post('nama_arsip'),
			'id_jenis' => $this->input->post('id_jenis'),
			'tgl_upload' => $this->input->post('tgl_upload'),
			'file_arsip' => $_FILES['file_arsip']
		];
		if ($data['file_arsip']='') {

		}else{
			$config['upload_path']          = './assets/upload/file_arsip/';
			$config['allowed_types']        = 'gif|jpg|png|pdf';
			$config['file_name']            = $data['nama_arsip'].'-'.time();
			$config['overwrite']            = TRUE;

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('file_arsip')){
				echo "Gagal";
			}else{
				$data['file_arsip'] = $this->upload->data('file_name');
			}
		}

		$this->Data_arsip_model->input_data($data,'data_arsip');

		redirect('Data_Arsip/data_per_arsip/' . $id_jenis);
	}
	public function edit_data_arsip($id_arsip){
		$where = array('id_arsip' => $id_arsip);
		$data['user'] = $this->Data_arsip_model->edit_data($where, 'data_arsip')->result();
		$data['id_jenis'] = $this->input->get('id_jenis');
		$this->template->views('Admin2/update-data-arsip', $data);
	}
	public function update($id_jenis) {
		$id_arsip = $this->input->post('id_arsip');
		$nama_arsip = $this->input->post('nama_arsip');
		$tgl_upload = $this->input->post('tgl_upload');

		$data = array(
			'nama_arsip' => $nama_arsip,
			'tgl_upload' => $tgl_upload,
			
		);

		$where = array(
			'id_arsip' => $id_arsip
		);
		$this->Data_arsip_model->update_data($where,$data, 'data_arsip');
		redirect('Data_Arsip/data_per_arsip/' . $id_jenis);
	}

	public function hapus_data_arsip($id_arsip) {
		$where = array('id_arsip' => $id_arsip);
		$this->Data_arsip_model->hapus_data($where, 'data_arsip');
		redirect('Data_Arsip/data_per_arsip/'. $this->input->get('id_jenis'));
	}

	public function detail_data($id_arsip){
		$where = array('id_arsip' => $id_arsip);
		$data['user'] = $this->Data_arsip_model->detail_data($where, 'data_arsip')->result();
		$data['id_jenis'] = $this->input->get('id_jenis');
		$this->template->views('Admin2/detail-data-arsip', $data);
	}

}
?>