<?php

class Admin_model extends CI_Model {
    public function dashboardSummary($table, $where = null)
    {
        $data = $this->db->get_where($table, $where);
        return $data->num_rows();
    }

    public function listTable($table)
    {
        $data = $this->db->get($table);
        return $data->result_array();
    }

    public function getData($table, $where = null)
    {
        $data = $this->db->get_where($table, $where);
        return $data->result_array();
    }

    public function hapusField($table, $id)
    {
        $this->db->where('id', $id);
        $this->db->delete($table);
    }

    public function updateData($table, $id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update($table, $data);
    }
}