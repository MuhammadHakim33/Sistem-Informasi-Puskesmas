<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		$data["title"] = "Admin";
		
		$this->load->view('templates/admin_header_view', $data);
		$this->load->view('admin/admin_dashboard_view');
		$this->load->view('templates/admin_footer_view');
	}

	
}
