<?php

class Admin_model extends CI_Model {
    public function dashboardSummary($table, $where = null)
    {
        $data = $this->db->get_where($table, $where);
        return $data->num_rows();
    }

    public function listTable()
    {
        $data = $this->db->get('tbl_pendaftaran');
        return $data->result_array();
    }
}