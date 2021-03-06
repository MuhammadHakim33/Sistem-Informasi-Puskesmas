<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Daftar_model');
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	public function index()
	{
		$data["title"] = "Daftar Layanan";
		$data["list_layanan"] = $this->Daftar_model->getData('tbl_layanan', ["status_aktif" => 1]);

		$this->form_validation->set_rules('layanan', 'Layanan', 'required');
		$this->form_validation->set_rules('nik', 'NIK', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('tgl_kunjungan', 'Tanggal Kunjungan', 'required');
		
		if($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header_view', $data);
			$this->load->view('templates/navigation_view');
			$this->load->view('user/daftarlayanan_view', $data);
			$this->load->view('templates/footer_view');
		} else {
			// Cek Nik
			$nik =  $this->input->post('nik', true);
			$cekNik = $this->Daftar_model->getRows("tbl_pasien", ["nik" => $nik]);

			if($cekNik == 0) {
				$this->session->set_flashdata('pesanDaftar', 'Nik Belum Terdaftar');
				redirect('Daftar');
			} else {
				$kode_booking = $this->Daftar_model->daftar_layanan();
				$data['getPendaftaran'] = $this->Daftar_model->getDataJoin("tbl_pendaftaran", "tbl_layanan", "tbl_layanan.id = tbl_pendaftaran.id_layanan", ["tbl_pendaftaran.kode_booking >=" => $kode_booking]);
				$data["title"] = "Sukses";
				$this->load->view('templates/header_view', $data);
				$this->load->view('user/daftarsukses_view', $data);
				$this->load->view('templates/footer_view');
			}
		}
	}

	public function pasien_baru()
	{
		$data["title"] = "Daftar Pasien Baru";

		$this->form_validation->set_rules('nik', 'NIK', 'required|numeric|max_length[16]|is_unique[tbl_pasien.nik]', ['is_unique' => 'NIK Telah Terdaftar']);
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('telp', 'Nomor Handphone', 'required|numeric|max_length[13]');
		$this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('provinsi', 'Provinsi', 'required');
		$this->form_validation->set_rules('kota_kab', 'Kota/Kabupaten', 'required');
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');
		$this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required');
		
		if($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header_view', $data);
			$this->load->view('templates/navigation_view');
			$this->load->view('user/daftarpasienbaru_view');
			$this->load->view('templates/footer_view');
		} else {
			$this->Daftar_model->tambah_pasien();
			$data["title"] = "Sukses";
			$this->load->view('templates/header_view', $data);
			$this->load->view('user/daftarpasienbarusukses_view');
			$this->load->view('templates/footer_view');
		}
	}

	public function hapusnotif()
	{
		$this->session->unset_userdata('pesanDaftar');
		redirect('Daftar');
	}
}
