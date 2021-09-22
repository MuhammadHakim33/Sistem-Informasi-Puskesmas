<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cekpendaftaran extends CI_Controller {
	public function index()
	{
		$this->load->model('Daftar_model');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nik', 'NIK', 'required');
		$this->form_validation->set_rules('tgl_kunjungan', 'Tanggal Kunjungan', 'required');

		if($this->form_validation->run() == FALSE) {
			$data["title"] = "Cek Pendaftaran";
			$this->load->view('templates/header_view', $data);
			$this->load->view('templates/navigation_view');
			$this->load->view('user/cekpendaftaran_view');
			$this->load->view('templates/footer_view');
		} else {
			$data['getPendaftaran'] = $this->Daftar_model->cekPendaftaran();
			$data["title"] = "Sukses";
			$this->load->view('templates/header_view', $data);
			$this->load->view('user/daftarsukses_view', $data);
			$this->load->view('templates/footer_view');
		}

		
	}
}
