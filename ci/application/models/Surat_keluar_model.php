<?php
/**
 * 
 */
class Surat_keluar_model extends CI_Model
{
	
	function getAll(){ //membuat function getAll
		$this->db->select('*'); //memilih semua
		$this->db->from('surat_keluar');// dari tabel tm_user
		$query = $this->db->get();
		return $query->result();
		//untuk proses selecy data dari database
	}

    function count_all_sk()
    {
        return $this->db->get('surat_keluar')->num_rows();
    }

	function count_sk_by_status($status)
	{
		$this->db->where('oleh_pimpinan', $status);
		$this->db->from('surat_keluar');
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

	public function hapus_file($id_sk, $where, $table)
  {
    $this->db->where('id_sk',$id_sk);
    $this->db->where($where);
    return $this->db->delete($table);
  }

	function detail_data($where,$table) {
		return $this->db->get_where($table, $where);
	}
	function getByDate($data_from, $date_to){ //membuat function getAll
		$this->db->select('*'); //memilih semua
		$this->db->from('surat_keluar');
		$where = "tgl_sk BETWEEN '".$data_from."'AND'".$date_to."'";
		$this->db->where($where);
		$query = $this->db->get();
		return $query;
		
	}
	function tampil_data_perbulan(){
		$this->db->where('month(tgl_sk)=',date('m')); 
		return $this->db->count_all_results('surat_keluar');
  } 

  function surat_keluar_perid ($where){
		$this->db->where($where);
		return $this->db->get('surat_keluar')->result();
	}

  function tampil_data_pertahun($tahun){
      	$this->db->select('*'); 
      	$this->db->from('surat_keluar'); 
      	$this->db->where('year(tgl_sk)=',date($tahun)); 
      	$query = $this->db->get(); 
      	return $query->num_rows();
  }

  function tampil_data_pertahun21_perid(){
      	$this->db->select('*'); 
      	$this->db->from('surat_keluar'); 
      	$this->db->where('year(tgl_sk)=',date('2021')); 
      	$this->db->where('surat_keluar.id_pengguna', $this->session->userdata('session_id_role'));
      	$query = $this->db->get(); 
      	return $query->num_rows();
  }

  function tampil_data_pertahun22_perid(){
      	$this->db->select('*'); 
      	$this->db->from('surat_keluar'); 
      	$this->db->where('year(tgl_sk)=',date('2022')); 
      	$this->db->where('surat_keluar.id_pengguna', $this->session->userdata('session_id_role'));
      	$query = $this->db->get(); 
      	return $query->num_rows();
  }

  function tampil_data_pertahun23_perid(){
      	$this->db->select('*'); 
      	$this->db->from('surat_keluar'); 
      	$this->db->where('year(tgl_sk)=',date('2023')); 
      	$this->db->where('surat_keluar.id_pengguna', $this->session->userdata('session_id_role'));
      	$query = $this->db->get(); 
      	return $query->num_rows();
  }

  function tampil_data_pertahun24_perid(){
      	$this->db->select('*'); 
      	$this->db->from('surat_keluar'); 
      	$this->db->where('year(tgl_sk)=',date('2024')); 
      	$this->db->where('surat_keluar.id_pengguna', $this->session->userdata('session_id_role'));
      	$query = $this->db->get(); 
      	return $query->num_rows();
  }

  function tampil_data_pertahun25_perid(){
      	$this->db->select('*'); 
      	$this->db->from('surat_keluar'); 
      	$this->db->where('year(tgl_sk)=',date('2025')); 
      	$this->db->where('surat_keluar.id_pengguna', $this->session->userdata('session_id_role'));
      	$query = $this->db->get(); 
      	return $query->num_rows();
  }

  public function get_id($id_sk)
  {
    $this->db->where('id_sk',$id_sk);
    return $this->db->get('surat_keluar');
  }

  public function update_file($id_sk,$data)
  {
    $this->db->where('id_sk',$id_sk);
    return $this->db->update('surat_keluar',$data);
  }

}
?>