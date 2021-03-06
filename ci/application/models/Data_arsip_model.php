<?php
/**
 * 
 */
class Data_arsip_model extends CI_Model
{
	
	function getAll(){ //membuat function getAll
		$this->db->select('*'); //memilih semua
		$this->db->from('data_arsip');// dari tabel tm_user
		$this->db->join('jenis_arsip', 'jenis_arsip.id_jenis_arsip = data_arsip.id_jenis');
		$query = $this->db->get();
		return $query;
		//untuk proses selecy data dari database
	}
	function count_all_arsip()
	{
		$this->db->where('data_arsip.id_pengguna', $this->session->userdata('session_id_role'));
		return $this->db->get('data_arsip')->num_rows();
	}

	function lihat_semua_arsip(){
		$this->db->select('*');
		$this->db->from('data_arsip');
		$this->db->where('data_arsip.id_pengguna', $this->session->userdata('session_id_role'));
		$this->db->join('jenis_arsip', 'jenis_arsip.id_jenis_arsip = data_arsip.id_jenis');
		$query = $this->db->get();
		return $query;
	}
	function lihat_arsip_jenis($id_jenis){
		$this->db->select('*');
		$this->db->from('data_arsip');
		$this->db->where('id_jenis',$id_jenis);
		$query = $this->db->get();
		return $query;
	}

	function getByDate($data_from, $date_to){ //membuat function getAll
		$this->db->select('*'); //memilih semua
		$this->db->from('data_arsip');
		$where = "tgl_upload BETWEEN '".$data_from."'AND'".$date_to."'";
		$this->db->where('data_arsip.id_pengguna', $this->session->userdata('session_id_role'));
		$this->db->join('jenis_arsip', 'jenis_arsip.id_jenis_arsip = data_arsip.id_jenis');
		$this->db->where($where);
		$query = $this->db->get();
		return $query;
		
	}

	function getByDateAndJenis($id_jenis, $date_from, $date_to){ //function buat filter by date and id jenis
		$this->db->select('*'); //memilih semua
		$this->db->from('data_arsip');
		$where = "id_jenis = '" . $id_jenis . "' AND tgl_upload BETWEEN '".$date_from."'AND'".$date_to."'";
		$this->db->where('data_arsip.id_pengguna', $this->session->userdata('session_id_role'));
		$this->db->where($where);

		$query = $this->db->get();
		return $query;
		
	}
	public function data_terbaru()
	{
    	$this->db->select('*'); //memilih semua
    	$this->db->from('data_arsip');
    	$this->db->where('data_arsip.id_pengguna', $this->session->userdata('session_id_role'));
    	$this->db->join('jenis_arsip', 'jenis_arsip.id_jenis_arsip = data_arsip.id_jenis');
    	$this->db->order_by('id_arsip','DESC');
    	$this->db->limit(3);
    	$query = $this->db->get();
    	return $query;
    }
    
    function input_data($data, $table) { //membuat function input_data
    	$this->db->insert($table,$data);
		//untuk proses insert data ke database
    }

    function edit_data($where,$table) {
    	$this->db->join('jenis_arsip', 'jenis_arsip.id_jenis_arsip = data_arsip.id_jenis');
    	return $this->db->get_where($table, $where);
    }

    public function get_id($id_arsip)
    {
    	$this->db->where('id_arsip',$id_arsip);
    	return $this->db->get('data_arsip');
    }

    public function update_file($id_arsip, $data)
    {
    	$this->db->where('id_arsip',$id_arsip);
    	return $this->db->update('data_arsip', $data);
    }

    function hapus_data($where, $table, $id_arsip) {
    	$this->db->where('id_arsip',$id_arsip);
    	$this->db->where($where);
    	$this->db->delete($table);
    }

	// function detail_data($where,$table) {
	// 	return $this->db->get_where($table, $where);

	// }

    function detail_data($where,$table) {
    	$this->db->join('jenis_arsip', 'jenis_arsip.id_jenis_arsip = data_arsip.id_jenis');
    	return $this->db->get_where($table, $where);
    }
    
    function jumlah_data_perarsip()
    {
    	$this->db->select('id_jenis, COUNT(id_arsip)');
    	$this->db->group_by('id_jenis'); 
    	$this->db->order_by('id_jenis'); 
    	$this->db->get('data_arsip')->num_rows;
    }
    function data_arsip_perid (){

    	$this->db->where('data_arsip.id_pengguna', $this->session->userdata('session_id_role'));
    	return $this->db->get('data_arsip')->result();
    }

    public function hapus_file($id_arsip, $where, $table)
  {
    $this->db->where('id_arsip',$id_arsip);
    $this->db->where($where);
    return $this->db->delete($table);
  }
}
?>