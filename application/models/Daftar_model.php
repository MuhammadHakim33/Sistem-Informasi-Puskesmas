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

    public function daftar_layanan() 
    {   
        // Create Kode Booking
        date_default_timezone_set('Asia/Jakarta');
        $s = date('s');
        $H = date('H');
        $d = date('d');
        $m = date('m');
        $unik = rand(1, 99);

        // Variable
        $kode_boking = $m . $d . $H . $s . $unik;
        $layanan =  $this->input->post('layanan', true);
        $nik =  $this->input->post('nik', true);
        $nama =  $this->input->post('nama', true);
        $tgl_kunjungan =  $this->input->post('tgl_kunjungan', true);
        $no_antri = $this->createAntrian($layanan, $tgl_kunjungan);

        $data = [
            'nik_pasien' => $nik,
            'nama_pasien' => $nama,
            'id_layanan' => $layanan,
            'no_antri' => $no_antri,
            'kode_booking' => $kode_boking,
            'tgl_kunjungan' => $tgl_kunjungan
        ];

        $this->db->insert('tbl_pendaftaran', $data);

        // Get Pendaftaran
        return $kode_boking;
    }

    public function createAntrian($layanan, $tgl_kunjungan) 
    {
        $query = $this->db->get_where('tbl_pendaftaran', array('id_layanan' => $layanan, 'tgl_kunjungan' => $tgl_kunjungan));
        $result = $query->result_array();
        count($result) == 0 ? $i = 0 : $i = end($result)["no_antri"];
        return $no_antri = $i + 1;
    }

    public function getDataJoin($tableFrom, $tableJoin, $on, $where = null)
    {
        $this->db->select('*');
        $this->db->from($tableFrom);
        $this->db->join($tableJoin, $on);
        $this->db->where($where); 
        $query = $this->db->get();

        return $query->result_array();
    }

    public function getData($table, $where = null)
    {
        $data = $this->db->get_where($table, $where);
        return $data->result_array();
    }
}