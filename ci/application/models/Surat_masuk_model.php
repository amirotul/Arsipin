<?php
/**
 * 
 */
class Surat_masuk_model extends CI_Model
{
	
	function getAll(){ //membuat function getAll
		$this->db->select('*'); //memilih semua
		$this->db->from('surat_masuk');// dari tabel tm_user
		$query = $this->db->get();
		return $query;
		//untuk proses selecy data dari database
	}

	function count_all_sm()
    {
        return $this->db->get('surat_masuk')->num_rows();
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
		return $this->db->get_where($table, $where);
	}

	function getByDate($data_from, $date_to){ //membuat function getAll
		$this->db->select('*'); //memilih semua
		$this->db->from('surat_masuk');
		$where = "tgl_sm BETWEEN '".$data_from."'AND'".$date_to."'";
		$this->db->where($where);
		$query = $this->db->get();
		return $query;
		
	}
	function tampil_data_perbulan(){
      	$this->db->select('*'); 
      	$this->db->from('surat_masuk'); 
      	$this->db->where('month(tgl_sm)=',date('m')); 
      	$query = $this->db->get(); 
      	return $query->num_rows();
  } 
}
?>