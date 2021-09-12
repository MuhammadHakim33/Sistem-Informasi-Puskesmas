<?php

class Kontak_model extends CI_Model {

    public function kontak_ambulan()
    {
        $data = $this->db->get('tbl_kontak_ambulan');
        $container = [];
        foreach($data->result_array() as $value){
            $container[] = $value['telp'];
        }
        return $container[0];
    }
    
    public function kontak_admin()
    {
        $data = $this->db->get('tbl_kontak_admin');
        $container = [];
        foreach($data->result_array() as $value){
            $container[] = $value['telp'];
        }
        return $container[0];
    }

}