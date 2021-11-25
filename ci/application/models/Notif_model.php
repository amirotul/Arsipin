<?php

class Notif_model extends CI_Model
{
    private $table = 'tbl_notif';
    function insert($notif)
    {
        $this->db->insert($this->table, $notif);
    }
    function get_unread()
    {
        $notif = $this->db->get_where($this->table, ['is_read' => 0])->result_array();
        return $notif;
        // $notif_count = count($notif);
    }
    function delete($where)
    {
        return $this->db->delete($this->table, $where);
    }
    function count() {
        return $this->db->count_all_results($this->table);
    }
}
