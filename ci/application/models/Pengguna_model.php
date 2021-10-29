<?php
class Pengguna_model extends CI_Model
{
	
	function getAll(){ //membuat function getAll
		$this->db->select('*'); //memilih semua
		$this->db->from('master_user');// dari tabel tm_user
		$query = $this->db->get();
		return $query;
		//untuk proses selecy data dari database
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
}
?>