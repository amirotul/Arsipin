<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Notif extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Notif_model');
    }

    function get_unread()
    {
        $data = $this->Notif_model->get_unread();
        echo json_encode($data);
    }

    function delete($id)
    {
        $where = ['id' => $id];
        $data = [];
        if ($this->Notif_model->delete($where)) {
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
        }
        $data['count'] = $this->Notif_model->count();
        echo json_encode($data);
    }
}
