<?php

class Admin_model extends CI_Model {
    public function dashboardSummary($table, $where = null)
    {
        $data = $this->db->get_where($table, $where);
        return $data->num_rows();
    }

    public function getData($table, $where = null)
    {
        $data = $this->db->get_where($table, $where);
        return $data->result_array();
    }

    public function getDataJoin($tableFrom, $tableJoin, $on, $where = null, $keyword = null, $search = false)
    {
        if ($search) {
            $this->db->like('nama_pasien', $keyword);
            $this->db->or_like('nik_pasien', $keyword);
            $this->db->or_like('kode_booking', $keyword);
        }

        $this->db->select('*');
        $this->db->from($tableFrom);
        $this->db->join($tableJoin, $on);
        $this->db->where($where); 
        $query = $this->db->get();

        return $query->result_array();
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