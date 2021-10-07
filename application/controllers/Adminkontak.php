<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminkontak extends CI_Controller {
	public function index()
	{
		$this->load->model('Admin_model');

		$data["title"] = "Kontak";
		$data["kontak_admin"] = $this->getKontakAdmin();
		$data["kontak_ambulan"] = $this->getKontakAmbulan();
		
		$this->load->view('templates/admin_header_view', $data);
		$this->load->view('templates/admin_navigation_view');
		$this->load->view('admin/admin_kontak_view', $data);
		$this->load->view('templates/admin_footer_view');
	}

	public function getKontakAdmin()
	{
		$data = $this->Admin_model->listTable("tbl_kontak_admin");
        return $data[0];
	}

	public function getKontakAmbulan()
	{
		$data = $this->Admin_model->listTable("tbl_kontak_ambulan");
        return $data[0];
	}

	
}
