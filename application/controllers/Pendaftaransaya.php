<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaransaya extends CI_Controller {
	public function index()
	{
		$data["title"] = "Pendaftaran Saya";
		
		$this->load->view('templates/header_view', $data);
		$this->load->view('templates/navigation_view');
		$this->load->view('user/pendaftaransaya_view');
		$this->load->view('templates/footer_view');
	}
}
