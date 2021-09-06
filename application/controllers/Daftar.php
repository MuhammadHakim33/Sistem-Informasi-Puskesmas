<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
	public function index()
	{
		$data["title"] = "Daftar Layanan";
		
		$this->load->view('templates/header_view', $data);
		$this->load->view('user/daftarlayanan_view');
		$this->load->view('templates/footer_view');
	}

	public function pasien_baru()
	{
		$data["title"] = "Daftar Pasien Baru";
		
		$this->load->view('templates/header_view', $data);
		$this->load->view('user/daftarpasienbaru_view');
		$this->load->view('templates/footer_view');
	}
}
