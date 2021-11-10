<?php
/**
 * 
 */
class Jenis_arsip_model extends CI_Model
{
	
	function getAll(){ //membuat function getAll
		$this->db->select('*'); //memilih semua
		$this->db->from('jenis_arsip');// dari tabel tm_user
		$this->db->join('data_pengguna', 'data_pengguna.id_pengguna = jenis_arsip.id_pengguna');
		$query = $this->db->get();
		return $query;
		//untuk proses selecy data dari database
	}

	function jenis_arsip_user()
	{
		$this->db->where('jenis_arsip.id_pengguna', $this->session->userdata('id_pengguna'));
		return $this->db->get('jenis_arsip')->result();
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
}
?>