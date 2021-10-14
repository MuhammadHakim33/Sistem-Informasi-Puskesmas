<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->library('session');

		if(empty($this->session->userdata('status'))){
			$this->session->set_flashdata('pesan', 'Silahkan Login Terlebih Dahulu');
			redirect(base_url('adminlogin'));
		}
	}

	public function index()
	{
		$data["title"] = "Admin";
		$data["pendaftaranToday"] = $this->getPendaftaranToday();
		$data["pasienBaru"] = $this->getPasienBaru();
		$data["totalPasien"] = $this->getTotalPasien();
		$data["list"] = $this->getListPendaftaran();
		
		$this->load->view('templates/admin_header_view', $data);
		$this->load->view('templates/admin_navigation_view');
		$this->load->view('admin/admin_dashboard_view', $data);
		$this->load->view('templates/admin_footer_view');
	}
	

	public function getPendaftaranToday()
	{
		// get tanggal hari ini
		$dateToday = date("Y-m-d");
		// Where
		$where["tgl_booking"] = $dateToday;
		
		$data = $this->Admin_model->dashboardSummary("tbl_pendaftaran", $where);
		return $data;
	}

	public function getPasienBaru()
	{
		// get tanggal hari ini
		$dateToday = date("Y-m-d");
		// Where
		$where["tgl_daftar"] = $dateToday;
		
		$data = $this->Admin_model->dashboardSummary("tbl_pasien", $where);
		return $data;
	}

	public function getTotalPasien()
	{
		$data = $this->Admin_model->dashboardSummary("tbl_pasien");
		return $data;
	}

	public function getListPendaftaran()
	{
		$today = date("Y-m-d");

		$data = $this->Admin_model->getData("tbl_pendaftaran", ["tgl_booking >=" => $today]);
		return $data;
	}
	
}
