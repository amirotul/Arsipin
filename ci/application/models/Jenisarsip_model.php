<?php
/**
 * 
 */
class Jenisarsip_model extends CI_Model
{
	
	function getAll(){ //membuat function getAll
		$this->db->select('*'); //memilih semua
		$this->db->from('jenis_arsip');// dari tabel tm_user
		
		$query = $this->db->get();
		return $query;
		//untuk proses selecy data dari database
	}
	function count_all_jenis_arsip()
    {
        return $this->db->get('jenis_arsip');
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

	function hapus_barang($id_jenis_arsip){
        $hasil=$this->db->query("DELETE FROM jenis_arsip WHERE id_jenis_arsip='$id_jenis_arsip'");
        return $hasil;
    }

}
?>