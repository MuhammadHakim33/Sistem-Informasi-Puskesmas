<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminlogin extends CI_Controller {
	public function index()
	{
		$this->load->model('Admin_model');

		$data["title"] = "Login";
		
		$this->load->view('templates/admin_header_view', $data);
		$this->load->view('admin/admin_login_view');
		$this->load->view('templates/admin_footer_view');
	}
	
}
