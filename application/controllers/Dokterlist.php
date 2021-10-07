<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokterlist extends CI_Controller {
	public function index()
	{
		$this->load->model('Admin_model');

		$data["title"] = "List Dokter";
		$data["list"] = $this->getListDokter();
		
		$this->load->view('templates/admin_header_view', $data);
		$this->load->view('admin/admin_Dokter_view');
		$this->load->view('templates/admin_footer_view');
	}

	public function getListDokter()
	{
		$data = $this->Admin_model->listTable("tbl_dokter");
		return $data;
	}

	
}
