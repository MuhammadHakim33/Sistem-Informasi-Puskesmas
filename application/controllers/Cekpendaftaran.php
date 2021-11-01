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
			$data["title"] = "Sukses";

			$where = [
				'nik_pasien' => $this->input->post('nik', true),
				'tgl_kunjungan' => $this->input->post('tgl_kunjungan', true)
			];
			$data['getPendaftaran'] = $this->Daftar_model->getDataJoin("tbl_pendaftaran", "tbl_layanan", "tbl_layanan.id = tbl_pendaftaran.id_layanan", $where);
			
			$this->load->view('templates/header_view', $data);

			if(count($data['getPendaftaran']) == 0 ) {
				$this->load->view('user/pendaftaran_tidakditemukan_view', $data);
			} else {
				$this->load->view('user/daftarsukses_view', $data);
			}
			$this->load->view('templates/footer_view');
		}

		
	}
}
