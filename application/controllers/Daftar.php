<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Daftar_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["title"] = "Daftar Layanan";

		$this->form_validation->set_rules('layanan', 'Layanan', 'required');
		$this->form_validation->set_rules('nik', 'NIK', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('tgl_kunjungan', 'Tanggal Kunjungan', 'required');
		
		if($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header_view', $data);
			$this->load->view('templates/navigation_view');
			$this->load->view('user/daftarlayanan_view');
			$this->load->view('templates/footer_view');;
		} else {
			$data['getPendaftaran'] = $this->Daftar_model->daftar_layanan();
			$data["title"] = "Sukses";
			$this->load->view('templates/header_view', $data);
			$this->load->view('user/daftarsukses_view', $data);
			$this->load->view('templates/footer_view');
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
}
