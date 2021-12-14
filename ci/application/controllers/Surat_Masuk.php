<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Surat_Masuk extends CI_Controller{ //membuat controller Mahasiswa
	function __construct(){
		parent:: __construct();
		$this->load->model('Surat_masuk_model');
		//untuk mengakses file model 'Mahasiswa_model'
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$config['base_url'] = site_url('Surat_Masuk');
		$role= $this->session->userdata('session_grup');

		if ($role == "3") {
			$where = [
				'id_pengguna' => $role
			];
			$data['user'] = $this->Surat_masuk_model->surat_masuk_perid($where);
		} else if ($role == "1") {
			$data['user'] = $this->Surat_masuk_model->getAll()->result();
		} else if ($role == "2") {
			// Nanti buat pimpinan
			$this->load->model('Roledivisi_model');
			$where = [
				'status_divisi !=' => ''
			];
			$data_sm = $this->Surat_masuk_model->surat_masuk_perid($where);
			foreach ($data_sm as $key => $value) {
				$data['user'][$key] = $value;
				$data['user'][$key]->dari_divisi = $this->Roledivisi_model->detail_jenis($data_sm[$key]->divisi_tujuan)['jenis_divisi'];
			}
		} else {
			$where = [
				'divisi_tujuan' => $role
			];
			$data['user'] = $this->Surat_masuk_model->surat_masuk_perid($where);
		}
		// echo json_encode($data['user']); die;
		$config['total_rows'] = $this->Surat_masuk_model->count_all_sm();
		$config['total_rows'] = $this->Surat_masuk_model->tampil_data_perbulan();
		$this->template->views('Admin2/surat-masuk', $data);
			//untuk mengakses file views 'crud/home_mahasiswa' pada halaman template
	}

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
		// echo json_encode($data['user']); die;
		$this->load->model('Roledivisi_model');
		$this->load->model('Divisi_model');
		$data['role'] = $this->Roledivisi_model->getAll()->result();
		$this->template->views('Admin2/form-add-disposisi',$data);
		//untuk mengakses file views 'crud/tambah_Grup' pada halaman template
	}

	//Resepsionis
	public function tambah_data() { //function untuk tambah data
		$this->load->model('Datapengguna_model');
		$this->load->model('Surat_masuk_model');

		$data['idpeng']= $this->session->userdata('session_grup');
		$data['user'] = $this->db->get_where('data_pengguna',['id_role'=>$this->session->userdata('session_id_role')])->row_array();

		$data['role'] = $this->Datapengguna_model->getAll()->result();
		$this->template->views('Admin2/form-add-surat-masuk', $data);
		//untuk mengakses file views 'crud/tambah_Grup' pada halaman template
	}

	public function input_data()
	{
		$this->load->model('Notif_model');
		$data = [
			'no_sm' => $this->input->post('no_sm'),
			'tgl_sm' => $this->input->post('tgl_sm'),
			'tgl_terima_sm' => $this->input->post('tgl_terima_sm'),
			'asal_sm' => $this->input->post('asal_sm'),
			'perihal_sm' => $this->input->post('perihal_sm'),
			'id_pengguna' => $this->input->post('id_pengguna'),
			'status_divisi' => 'pending',
			'status_pimpinan' => 'pending',
			'status_disposisi' => 'belum didisposisi',
			'file_sm' => $_FILES['file_sm']
		];

		$notif = [
			'judul' => 'Surat masuk',
			'pengirim' => $data['asal_sm'],
			'tgl_notif' => $data['tgl_sm'],
			'is_read' => 0,
		];

		if ($data['file_sm']='') {

		}else{
			$config['upload_path']          = './assets/upload/file_sm/';
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
		$this->Notif_model->insert($notif);
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

	// public function edit($id_sm) {
	// 	$where = array('id_sm' => $id_sm);
	// 	$data['user'] = $this->Surat_masuk_model->edit_data($where, 'surat_masuk')->result();
	// 	$this->template->views('Admin2/update-surat-masuk', $data);
	// }

	public function edit($id_sm)
	{
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
		$idFile = $this->Surat_masuk_model->get_id($id_sm)->row();
		// edit_data($where, 'surat_masuk')->result();
		$data = './assets/upload/file_sm/'. $idFile->file_sm;

		// ($where, 'surat_masuk')->result();

		if(is_readable($data)){
			$config['upload_path']          = './assets/upload/file_sm/';
			$config['allowed_types']        = 'gif|jpg|png|pdf';
			$config['file_name']            = $perihal_sm.'-'.time();

			$this->load->library('upload', $config);

			if($this->upload->do_upload('file_sm')) {
        // eidt gambar dan judul, maka unlink gambar lama
				$upload_data = $this->upload->data();
				$name = $upload_data['file_name'];
				$data = [
					'perihal_sm' => $this->input->post('perihal_sm'),
					'file_sm' => $name
				];

				unlink('./assets/upload/file_sm/'.$this->input->post('fileLama',true));
        // update file di database

				$update = $this->Surat_masuk_model->update_file($id_sm, $data);
				if ($update) {
					$this->session->set_flashdata('pesan','Data berhasil di update');
					redirect('Surat_Masuk');
				} else {
					echo "gagal";
				}        
			}
			else{

				$data = [
					'no_sm' => $this->input->post('no_sm'),
					'tgl_sm' => $tgl_sm,
					'tgl_terima_sm' => $tgl_terima_sm,
					'asal_sm' => $asal_sm,
					'perihal_sm' => $perihal_sm,
					'status_disposisi' => 'belum didisposisi',
				];

        // update file di database
				$update = $this->Surat_masuk_model->update_file($id_sm, $data);
				if ($update) {
					$this->session->set_flashdata('pesan','Data berhasil di update');
					redirect('Surat_Masuk');
				} else {
					echo "gagal";
				}        
			}    
		}else{
			echo "gagal";
		}

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

	public function hapus_surat_masuk($id_sm)
	  {
	  	$where = array('id_sm' => $id_sm);
	    // tampung data gambar dari id
	    $idFile = $this->Surat_masuk_model->get_id($id_sm)->row();
	    $data = './assets/upload/file_sm/'. $idFile->file_sm;
	    // hapus file dulu di dalam folder, jika berhasil hapus di databasenya
	    if(is_readable($data) && unlink($data)){
	       // hapus file di database
	      $hapus_surat_masuk = $this->Surat_masuk_model->hapus_filee($id_sm, $where, 'surat_masuk');
	      redirect('Surat_Masuk');
	    }else{
	      echo "gagal hapus";
	    }
	    
	  }

	public function do_accept($type, $id_sm)
	{
		if ($type == 'divisi') {
			$data['status_divisi'] = 'dilaksanakan';
			$data['tgl_dilaksanakan_sm'] = date('Y-m-d');
		} else if ($type == 'pimpinan') {
			$data['status_pimpinan'] = 'disetujui';
			$data['tgl_disetujui_sm'] = date('Y-m-d');
		}
		$this->Surat_masuk_model->update_file($id_sm, $data);
		redirect('Surat_masuk/index');
	}

	public function do_reject($type, $id_sm)
	{
		if ($type == 'divisi') {
			$data['status_divisi'] = 'diabaikan';
		} else if ($type == 'pimpinan') {
			$data['status_pimpinan'] = 'diabaikan';
		}
		$this->Surat_masuk_model->update_file($id_sm, $data);
		redirect('Surat_masuk/index');
	}
}