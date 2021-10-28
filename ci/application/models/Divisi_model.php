<?php
/**
 * 
 */
class Divisi_model extends CI_Model
{
	
	function getAll(){ //membuat function getAll
		$this->db->select('*'); //memilih semua
		$this->db->from('jenis_divisi');// dari tabel tm_user
		$query = $this->db->get();
		return $query;
		//untuk proses selecy data dari database
	}
	function input_data($data, $table) { //membuat function input_data
		$this->db->insert($table,$data);
		//untuk proses insert data ke database
	}
	function edit_jenis_divisi($where,$table) {
		return $this->db->get_where($table, $where);
	}

	function update_jenis_divisi($where,$data,$table) {
		$this->db->where($where);
		$this->db->update($table, $data);
	}
}
?>