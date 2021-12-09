<?php
/**
 * 
 */
class Jenis_divisi_model extends CI_Model
{

	function count_all_divisi()
    {
        $this->db->select('*'); //memilih semua
		$this->db->from('jenis_divisi');// dari tabel tm_user
		$this->db->where('jenis_divisi.id_pengguna', $this->session->userdata('session_id_role'));
        $query = $this->db->get(); 
		return $query->num_rows();
    }
}
?>