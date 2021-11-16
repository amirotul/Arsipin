<?php
/**
 * 
 */
class Data_arsip_model extends CI_Model
{
	
	function getAll(){ //membuat function getAll
		$this->db->select('*'); //memilih semua
		$this->db->from('data_arsip');// dari tabel tm_user
		$this->db->join('jenis_arsip', 'jenis_arsip.id_jenis_arsip = data_arsip.jenis_arsip');
		$query = $this->db->get();
		return $query;
		//untuk proses selecy data dari database
	}
	function count_all_arsip()
    {
        return $this->db->get('data_arsip')->num_rows();
    }
    function lihat_semua_arsip(){
    	$this->db->select('*');
    	$this->db->from('data_arsip');
    	$query = $this->db->get();
    	return $query;
    }
	function getByDate($data_from, $date_to){ //membuat function getAll
		$this->db->select('*'); //memilih semua
		$this->db->from('data_arsip');
		$where = "tgl_upload BETWEEN '".$data_from."'AND'".$date_to."'";
		$this->db->where($where);
		$query = $this->db->get();
		return $query;
		
	}
	public function data_terbaru()
    {
    	$this->db->select('*'); //memilih semua
		$this->db->from('data_arsip');
        $this->db->order_by('id_arsip','DESC');
		$this->db->limit(3);
		$query = $this->db->get();
		return $query;
    }
	
}
?>