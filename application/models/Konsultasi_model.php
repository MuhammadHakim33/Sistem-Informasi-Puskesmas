<?php

class Konsultasi_model extends CI_Model {
    public function get_dokter()
    {
        $data = $this->db->get_where('tbl_dokter', ['status_aktif' => 1]);
        return $data->result_array();
    }
}