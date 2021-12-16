<?php
/**
 * 
 */
class Disposisi_model extends CI_Model
{
	
	function getAll(){ //membuat function getAll
		$this->db->select('*'); //memilih semua
		$this->db->from('disposisi');// dari tabel tm_user
		$this->db->join('jenis_divisi', 'jenis_divisi.id = disposisi.jenis_divisi');
		$query = $this->db->get();
		return $query;
		//untuk proses selecy data dari database
	}

	function count_all_dis($status)
    {
		$this->db->from('surat_masuk');
		$this->db->where('status_disposisi', $status);
		return $this->db->count_all_results();
    }

	function input_data($data, $table) { //membuat function input_data
		$this->db->insert($table,$data);
		//untuk proses insert data ke database
	}

	function edit_data($where,$table) {
		return $this->db->get_where($table, $where);
	}

	function update_data($where,$data,$table) {
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function hapus_data($where, $table) {
		$this->db->where($where);
		$this->db->delete($table);
	}

	function login($user, $pass, $table){
		$this->db->select('*');
		$this->db->from('master_user');
		$this->db->where('username', $user);
		$this->db->where('password', $pass);
		$query = $this->db->get();
		return $query;
	}

	function detail_data($where,$table) {
	$this->db->select('*'); //memilih semua
		$this->db->from('disposisi');// dari tabel tm_user
		$this->db->where('id_disposisi', $where);//
		$this->db->join('jenis_divisi', 'jenis_divisi.id = disposisi.jenis_divisi');
		$query = $this->db->get();
		return $query;
	}

	function getByDate($data_from, $date_to){ //membuat function getAll
		$this->db->select('*'); //memilih semua
		$this->db->from('disposisi');
		$where = "batas_waktu_dis BETWEEN '".$data_from."'AND'".$date_to."'";
		$this->db->where($where);
		$query = $this->db->get();
		return $query;	
	}

	function notif($table, $notif)
	{
		$this->db->insert($table, $notif);
		$this->db->from('tbl_notif');
	}

	function tampil_data_perbulan(){
		$this->db->select('*'); 
		$this->db->from('disposisi'); 
		$this->db->where('month(batas_waktu_dis)=',date('m')); 
		$this->db->where('disposisi.id_pengguna', $this->session->userdata('session_id_role'));
		$query = $this->db->get(); 
		return $query->num_rows();
	}
	
	function tampil_data_pertahun($tahun){
      	$this->db->select('*'); 
      	$this->db->from('disposisi'); 
      	$this->db->where('year(batas_waktu_dis)=',date($tahun)); 
      	$query = $this->db->get(); 
      	return $query->num_rows();
  }

  function tampil_data_pertahun21_perid(){
      	$this->db->select('*'); 
      	$this->db->from('disposisi'); 
      	$this->db->where('year(batas_waktu_dis)=',date('2021')); 
      	$this->db->where('disposisi.id_pengguna', $this->session->userdata('session_id_role'));
      	$query = $this->db->get(); 
      	return $query->num_rows();
  }

  function tampil_data_pertahun22_perid(){
      	$this->db->select('*'); 
      	$this->db->from('disposisi'); 
      	$this->db->where('year(batas_waktu_dis)=',date('2022')); 
      	$this->db->where('disposisi.id_pengguna', $this->session->userdata('session_id_role'));
      	$query = $this->db->get(); 
      	return $query->num_rows();
  }

  function tampil_data_pertahun23_perid(){
      	$this->db->select('*'); 
      	$this->db->from('disposisi'); 
      	$this->db->where('year(batas_waktu_dis)=',date('2023')); 
      	$this->db->where('disposisi.id_pengguna', $this->session->userdata('session_id_role'));
      	$query = $this->db->get(); 
      	return $query->num_rows();
  }

  function tampil_data_pertahun24_perid(){
      	$this->db->select('*'); 
      	$this->db->from('disposisi'); 
      	$this->db->where('year(batas_waktu_dis)=',date('2024')); 
      	$this->db->where('disposisi.id_pengguna', $this->session->userdata('session_id_role'));
      	$query = $this->db->get(); 
      	return $query->num_rows();
  }

  function tampil_data_pertahun25_perid(){
      	$this->db->select('*'); 
      	$this->db->from('disposisi'); 
      	$this->db->where('year(batas_waktu_dis)=',date('2025')); 
      	$this->db->where('disposisi.id_pengguna', $this->session->userdata('session_id_role'));
      	$query = $this->db->get(); 
      	return $query->num_rows();
  }
  public function get_id($id_disposisi)
  {
    $this->db->where('id_disposisi',$id_disposisi);
    return $this->db->get('disposisi');
  }

  public function update_file($id_disposisi,$data)
  {
    $this->db->where('id_disposisi',$id_disposisi);
    return $this->db->update('disposisi',$data);
  }
}
