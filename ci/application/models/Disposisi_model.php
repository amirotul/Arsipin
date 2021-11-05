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

	function count_all_dis()
    {
        return $this->db->get('disposisi')->num_rows();
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
}
?>