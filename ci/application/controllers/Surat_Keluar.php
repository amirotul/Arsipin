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
		$config['base_url'] = site_url('Surat_Keluar');
		$config['total_rows'] = $this->Surat_keluar_model->count_all_sk();
		$config['total_rows'] = $this->Surat_keluar_model->tampil_data_perbulan();

		// $data['user'] = $this->Surat_keluar_model->getAll()->result();
		$data['user'] = $this->Surat_keluar_model->surat_masuk_perid();
		$this->template->views('Admin2/surat-keluar',$data);
			//untuk mengakses file views 'crud/home_mahasiswa' pada halaman template
	}
	public function tambah_surat_keluar() { //function untuk tambah data
		$this->load->model('Datapengguna_model');
		$this->load->model('Surat_keluar_model');

		$data['user'] = $this->db->get_where('data_pengguna',['id_role'=>$this->session->userdata('session_id_role')])->row_array();

		$data['role'] = $this->Datapengguna_model->getAll()->result();
		$this->template->views('Admin2/form-add-surat-keluar', $data);
		//untuk mengakses file views 'crud/tambah_mahasiswa' pada halaman template
	}

	public function input_surat_keluar()
	{
		$data = [
			'no_sk' => $this->input->post('no_sk'),
			'tgl_sk' => $this->input->post('tgl_sk'),
			'tujuan_sk' => $this->input->post('tujuan_sk'),
			'perihal_sk' => $this->input->post('perihal_sk'),
			'id_pengguna' => $this->input->post('id_pengguna'),
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
	public function edit_data($id)
  	{
    $data['user'] = $this->Surat_keluar_model->get_id($id_sk)->row();
    $this->template->views('Admin2/update-surat-keluar', $data);
  	}

	public function edit_aksi()
  	{
    $id_sk = $this->input->post('id_sk');
    $no_sk = $this->input->post('no_sk');
	$tgl_sk = $this->input->post('tgl_sk');
	$tujuan_sk = $this->input->post('tujuan_sk');
	$perihal_sk = $this->input->post('perihal_sk');
    // tampung data gambar dari id
    $idGambar = $this->Surat_keluar_model->get_id($id_sk)->row();
    $data = './assets/upload/file_sk/'. $idGambar->file_sk;

    if(is_readable($data)){
      $config['upload_path']          = './assets/upload/file_sk/';
      $config['allowed_types']        = 'gif|jpg|png|pdf';
      $config['file_name']            = $no_sk.'-'.time();

      $this->load->library('upload', $config);

      if($this->upload->do_upload('file_sk')) {
        // eidt gambar dan judul, maka unlink gambar lama
        $upload_data = $this->upload->data();
        $name = $upload_data['file_name'];
        $data = [
          'no_sk' => $this->input->post('no_sk'),
          'file_sk' => $name
        ];
        unlink('./assets/upload/file_sk/'.$this->input->post('gambarLama',true));
        // update file di database
        
        $update = $this->Surat_keluar_model->update_file($id_sk,$data);
        if ($update) {
          $this->session->set_flashdata('pesan','Data berhasil di update');
          redirect('Surat_Keluar');
        } else {
          echo "gagal";
        }        
      }else{

        $data = [
          'no_sk' => $this->input->post('no_sk'),
          'tgl_sk' => $tgl_sk,
		  'tujuan_sk' => $tujuan_sk,
		  'perihal_sk' => $perihal_sk,
          
        ];
        
        // update file di database
        $update = $this->Surat_keluar_model->update_file($id_sk,$data);
        if ($update) {
          $this->session->set_flashdata('pesan','Data berhasil di update');
          redirect('Surat_Keluar');
        } else {
          echo "gagal";
        }        
      }    
    }else{
      echo "gagal";
    }
    
  }
	public function hapus_surat_keluar($id_sk)
	  {
	  	$where = array('id_sk' => $id_sk);
	    // tampung data gambar dari id
	    $idFile = $this->Surat_keluar_model->get_id($id_sk)->row();
	    $data = './assets/upload/file_sk/'. $idFile->file_sk;
	    // hapus file dulu di dalam folder, jika berhasil hapus di databasenya
	    if(is_readable($data) && unlink($data)){
	       // hapus file di database
	      $hapus_surat_keluar = $this->Surat_keluar_model->hapus_file($id_sk, $where, 'surat_keluar');
	      redirect('Surat_Keluar');
	    }else{
	      echo "gagal hapus";
	    }
	    
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