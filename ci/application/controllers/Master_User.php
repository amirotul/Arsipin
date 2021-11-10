<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');
class Master_User extends CI_Controller{ //membuat controller Mahasiswa
	function __construct(){
		parent:: __construct();
		$this->load->model('Master_model');
		//untuk mengakses file model 'Mahasiswa_model'
	}

	public function index(){ //function untuk menampilkan halaman awal yang ditampilkan
		$data['user'] = $this->Master_model->getAll()->result();
		$this->template->views('Admin2/master-user',$data);
			//untuk mengakses file views 'crud/home_mahasiswa' pada halaman template
		}
		public function tambah_master_user() { //function untuk tambah data
			$this->template->views('Admin2/form-add-data-master-user');
			//untuk mengakses file views 'crud/tambah_mahasiswa' pada halaman template
		}
		public function input_master() { //function input untuk memasukkan proses inputan data ke database
			$master_user = $this->input->post('nama_role');
	
			$data = array( //array data untuk menampung inputan data
				'nama_role' => $master_user
			);
			$this->Master_model->input_data($data, 'master_user'); 
			//untuk mengakses file model 'Grup_model' dan data tersimpan pada tabel tm_user
			redirect('Master_User');
			//setelah data berhasil tersimpan, halaman web otomatis beralih ke halaman pada function index
		}
		public function hapus_master($id) {
			$where = array('id_role' => $id);
			$this->Master_model->hapus_data($where, 'master_user');
			redirect('Master_User');
		}
	
	}
	?>
	
	