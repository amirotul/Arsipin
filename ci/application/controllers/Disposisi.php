<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Disposisi extends CI_Controller{ //membuat controller Mahasiswa
	function __construct(){
		parent:: __construct();
		$this->load->model('Disposisi_model');
		//untuk mengakses file model 'Mahasiswa_model'
		$this->load->library('fileuploader');
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$config['base_url'] = site_url('Disposisi');
		$config['total_rows'] = $this->Disposisi_model->count_all_dis();
		$data['user'] = $this->Disposisi_model->getAll()->result();
		$this->template->views('Admin2/disposisi',$data);
			//untuk mengakses file views 'crud/home_mahasiswa' pada halaman template
	}

	public function input_dis() { 
		$this->load->model('Notif_model');
		$this->load->model('Roledivisi_model');
		$this->load->model('Surat_masuk_model');
		$data = [
			'batas_waktu_dis' => $this->input->post('batas_waktu_dis'),
			'jenis_divisi' => $this->input->post('jenis_divisi'),
			'isi_dis' => $this->input->post('isi_dis'),
			'catatan_dis' => $this->input->post('catatan_dis'),
			'file_dis' => $this->input->post('file_dis'),
		];
		$data_divisi = $this->Roledivisi_model->detail_jenis($data['jenis_divisi']);

		$notif = [
			'judul' => 'Disposisi',
			'pengirim' => 'Divisi ' . $data_divisi['jenis_divisi'],
			'tgl_notif' => $data['batas_waktu_dis'],
			'is_read' => 0,
		];

		$data_sm = [
			'status_disposisi' => 'didisposisi',
			'divisi_tujuan' => $data['jenis_divisi']
		];

		// if ($data['file_dis']='') {

		// }else{
		// 	$config['upload_path']          = './assets/upload/file_dis/';
		// 	$config['allowed_types']        = 'gif|jpg|png|pdf';
		// 	$config['file_name']            = $data['file_dis'].'-'.time();
		// 	$config['overwrite']            = TRUE;

		// 	$this->load->library('upload', $config);
		// 	if(!$this->upload->do_upload('file_dis')){
		// 		echo "Gagal";
		// 	}else{
		// 		$data['file_dis'] = $this->upload->data('file_name');
		// 	}
		// }
		$this->Disposisi_model->input_data($data, 'disposisi'); 
		$this->Surat_masuk_model->update_file($this->input->post('id_sm'), $data_sm);
		$this->Notif_model->insert($notif);
		//untuk mengakses file model 'Grup_model' dan data tersimpan pada tabel tm_user
		redirect('Disposisi');
		//setelah data berhasil tersimpan, halaman web otomatis beralih ke halaman pada function index
	}

	public function edit($id_disposisi) {
		$where = array('id_disposisi' => $id_disposisi);
		$data['user'] = $this->Disposisi_model->edit_data($where, 'disposisi')->result();
		//$this->load->model('Roledivisi_model');
		//$this->load->model('Divisi_model');
		//$data['role'] = $this->Roledivisi_model->getAll()->result();
		$this->template->views('Admin2/update-disposisi', $data);
	}
	public function update()
  	{
    $id_disposisi = $this->input->post('id_disposisi');
	$batas_waktu_dis = $this->input->post('batas_waktu_dis');
	$jenis_divisi = $this->input->post('jenis_divisi');
	$isi_dis = $this->input->post('isi_dis');
	$catatan_dis = $this->input->post('catatan_dis');
    // tampung data gambar dari id
    $idGambar = $this->Disposisi_model->get_id($id_disposisi)->row();
    $data = './assets/upload/file_sm/'. $idGambar->file_dis;

    if(is_readable($data)){
      $config['upload_path']          = './assets/upload/file_sm/';
      $config['allowed_types']        = 'gif|jpg|png|pdf';
      $config['file_name']            = $isi_dis.'-'.time();

      $this->load->library('upload', $config);

      if($this->upload->do_upload('file_dis')) {
        // eidt gambar dan judul, maka unlink gambar lama
        $upload_data = $this->upload->data();
        $name = $upload_data['file_name'];
        $data = [
          'isi_dis' => $this->input->post('isi_dis'),
          'file_dis' => $name
        ];
        unlink('./assets/upload/file_sm/'.$this->input->post('gambarLama',true));
        // update file di database
        
        $update = $this->Disposisi_model->update_file($id_disposisi,$data);
        if ($update) {
          $this->session->set_flashdata('pesan','Data berhasil di update');
          redirect('Disposisi');
        } else {
          echo "gagal";
        }        
      }else{

        $data = [
          'isi_dis' => $this->input->post('isi_dis'),
			'batas_waktu_dis' => $batas_waktu_dis,
			'catatan_dis' => $catatan_dis,
          
        ];
        
        // update file di database
        $update = $this->Disposisi_model->update_file($id_disposisi,$data);
        if ($update) {
          $this->session->set_flashdata('pesan','Data berhasil di update');
          redirect('Disposisi');
        } else {
          echo "gagal";
        }        
      }    
    }else{
      echo "gagal";
    }
    
  }




	public function updateee() {
		// if ($data['file_dis']='') {

		// }else{
		// 	$config['upload_path']          = './assets/upload/file_dis/';
		// 	$config['allowed_types']        = 'gif|jpg|png|pdf';
		// 	$config['file_name']            = $data['file_dis'].'-'.time();
		// 	$config['overwrite']            = TRUE;

		// 	$this->load->library('upload', $config);
		// 	if(!$this->upload->do_upload('file_dis')){
		// 		echo "Gagal";
		// 	}else{
		// 		$data['file_dis'] = $this->upload->data('file_name');
		// 	}
		// }
		$id_disposisi = $this->input->post('id_disposisi');
		$batas_waktu_dis = $this->input->post('batas_waktu_dis');
		$jenis_divisi = $this->input->post('jenis_divisi');
		$isi_dis = $this->input->post('isi_dis');
		$catatan_dis = $this->input->post('catatan_dis');
		//$file_dis = $this->input->post('file_dis');

		$data = array(
			'id_disposisi' => $id_disposisi,
			'batas_waktu_dis' => $batas_waktu_dis,
			'jenis_divisi' => $jenis_divisi,
			'isi_dis' => $isi_dis,
			'catatan_dis' => $catatan_dis,
			//'file_dis' => $file_dis
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