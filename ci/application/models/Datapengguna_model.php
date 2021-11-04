<?php
/**
 * 
 */
class Datapengguna_model extends CI_Model
{
	
	function getAll(){ //membuat function getAll
		$this->db->select('*'); //memilih semua
		$this->db->from('data_pengguna');// dari tabel tm_user
		$this->db->join('master_user', 'master_user.id_role = data_pengguna.id_role');
		$query = $this->db->get();
		return $query;
		//untuk proses selecy data dari database
	}
	function count_all_pengguna()
    {
        return $this->db->get('data_pengguna')->num_rows();
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
	function detail_data($where,$table) {
		$this->db->select('*'); //memilih semua
		$this->db->from($table);// dari tabel tm_user
		$this->db->where('id_pengguna', $where);// dari tabel tm_user
		$this->db->join('master_user', 'master_user.id_role = data_pengguna.id_role');
		return $this->db->get();
	}
}
?>