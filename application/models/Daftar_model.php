<?php

class Daftar_model extends CI_Model {
    public function tambah_pasien()
    {
        // No Pasien
        $no_pasien =  rand(100000, 999999);

        $data = [
            "nik" => $this->input->post('nik', true),
            "no_pasien" => $no_pasien,
            "nama" => $this->input->post('nama', true),
            "telp" => $this->input->post('telp', true),
            "gender" => $this->input->post('gender', true),
            "tgl_lahir" => $this->input->post('tgl_lahir', true),
            "alamat" => $this->input->post('alamat', true),
            "provinsi" => $this->input->post('provinsi', true),
            "kota_kab" => $this->input->post('kota_kab', true),
            "kecamatan" => $this->input->post('kecamatan', true),
            "kelurahan" => $this->input->post('kelurahan', true),
        ];

        $this->db->insert('tbl_pasien', $data);
        
    }
}