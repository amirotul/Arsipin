<?php

/**
 * 
 */
class Surat_masuk_model extends CI_Model
{

	function getAll()
	{ //membuat function getAll
		$this->db->select('*'); //memilih semua
		$this->db->from('surat_masuk'); // dari tabel tm_user
		// $this->db->join('data_pengguna', 'surat_masuk.id_pengguna = data_pengguna.id_user');
		// $this->db->where('surat_masuk.id_pengguna');
		$query = $this->db->get();
		return $query;
		//untuk proses selecy data dari database
	}


	function belum_didisposisi()
	{
		$this->db->select('*'); //memilih semua
		$this->db->from('surat_masuk');// dari tabel tm_user
		// $this->db->where('id_sm');
		$this->db->join('disposisi', 'disposisi.id_disposisi = surat_masuk.id_sm');
		$this->db->distinct('id_sm');
		$query = $this->db->get(); 
		return $query->num_rows();
	}

	function count_all_sm()
    {
        return $this->db->get('surat_masuk')->num_rows();
    }

	function input_data($data, $table)
	{ //membuat function input_data
		$this->db->insert($table, $data);
		//untuk proses insert data ke database
	}

	public function get_id($id_sm)
	{
		$this->db->where('id_sm',$id_sm);
		return $this->db->get('surat_masuk');
	}

	public function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	// function update_data($where, $data, $table)
	// {
	// 	$this->db->where($where);
	// 	$this->db->update($table, $data);
	// }

	public function update_file($id_sm, $data)
	{
		$this->db->where('id_sm',$id_sm);
		return $this->db->update('surat_masuk', $data);
	}

	function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function hapus_file($id_sm)
	{
		$this->db->where('id_sm',$id_sm);
		return $this->db->delete('surat_masuk');
	}

	function login($user, $pass, $table)
	{
		$this->db->select('*');
		$this->db->from('master_user');
		$this->db->where('username', $user);
		$this->db->where('password', $pass);
		$query = $this->db->get();
		return $query;
	}
	function detail_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	function getByDate($data_from, $date_to)
	{ //membuat function getAll
		$this->db->select('*'); //memilih semua
		$this->db->from('surat_masuk');
		$where = "tgl_sm BETWEEN '" . $data_from . "'AND'" . $date_to . "'";
		$this->db->where($where);
		$query = $this->db->get();
		return $query;
	}

	function notif($table, $notif)
	{
		$this->db->insert($table, $notif);
		$this->db->from('tbl_notif');
	}

	function getLastId()
	{
		$this->db->select_max('id_sm');
		return $this->db->get('surat_masuk');
	}

	function tampil_data_perbulan(){
		$this->db->select('*'); 
		$this->db->from('surat_masuk'); 
		$this->db->where('month(tgl_sm)=',date('m')); 
		$this->db->where('surat_masuk.id_pengguna', $this->session->userdata('session_id_role'));
		$query = $this->db->get(); 
		return $query->num_rows();
	} 

	function surat_masuk_perid ($where){
		$this->db->where($where);
		return $this->db->get('surat_masuk')->result();
	}

	// function tampil_data_pertahun(){
	// 	$this->db->select('*'); 
	// 	$this->db->from('surat_masuk'); 
	// 	$this->db->where('year(tgl_sm)=',date(' Y')); 
	// 	$query = $this->db->get(); 
	// 	return $query->num_rows();
	// } 

	function tampil_data_pertahun21_perid(){
		$this->db->select('*'); 
		$this->db->from('surat_masuk'); 
		$this->db->where('year(tgl_sm)=',date('2021')); 
		$this->db->where('surat_masuk.id_pengguna', $this->session->userdata('session_id_role'));
		$query = $this->db->get(); 
		return $query->num_rows();
	}

	function tampil_data_pertahun22_perid(){
		$this->db->select('*'); 
		$this->db->from('surat_masuk'); 
		$this->db->where('year(tgl_sm)=',date('2022')); 
		$this->db->where('surat_masuk.id_pengguna', $this->session->userdata('session_id_role'));
		$query = $this->db->get(); 
		return $query->num_rows();
	}

	function tampil_data_pertahun23_perid(){
		$this->db->select('*'); 
		$this->db->from('surat_masuk'); 
		$this->db->where('year(tgl_sm)=',date('2023')); 
		$this->db->where('surat_masuk.id_pengguna', $this->session->userdata('session_id_role'));
		$query = $this->db->get(); 
		return $query->num_rows();
	}

	function tampil_data_pertahun24_perid(){
		$this->db->select('*'); 
		$this->db->from('surat_masuk'); 
		$this->db->where('year(tgl_sm)=',date('2024')); 
		$this->db->where('surat_masuk.id_pengguna', $this->session->userdata('session_id_role'));
		$query = $this->db->get(); 
		return $query->num_rows();
	}

	function tampil_data_pertahun25_perid(){
		$this->db->select('*'); 
		$this->db->from('surat_masuk'); 
		$this->db->where('year(tgl_sm)=',date('2025')); 
		$this->db->where('surat_masuk.id_pengguna', $this->session->userdata('session_id_role'));
		$query = $this->db->get(); 
		return $query->num_rows();
	}

	function tampil_tahun(){
		$this->db->select('YEAR(tgl_sm)');
		$this->db->from("surat_masuk");
		$this->db->order_by('YEAR(tgl_sm)');
		$this->db->where('id_sm');
		// $this->db->distinct();
		$query = $this->db->get(); 
		return $query->num_rows();
	} 

	public function hapus_filee($id_sm, $where, $table)
	{
		$this->db->where('id_sm',$id_sm);
		$this->db->where($where);
		return $this->db->delete($table);
	}
	
}
