<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasienlist extends CI_Controller {
	public function index()
	{
		$this->load->model('Admin_model');

		$data["title"] = "List Pasien";
		$data["list"] = $this->getListPasien();
		
		$this->load->view('templates/admin_header_view', $data);
		$this->load->view('templates/admin_navigation_view');
		$this->load->view('admin/admin_pasien_view', $data);
		$this->load->view('templates/admin_footer_view');
	}

	public function getListPasien()
	{
		$data = $this->Admin_model->listTable("tbl_pasien");
		return $data;
	}

	
}
