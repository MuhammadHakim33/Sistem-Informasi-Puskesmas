<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	public function index()
	{
		$data["title"] = "Beranda";
		
		$this->load->view('templates/header_view', $data);
		$this->load->view('user/beranda_view');
		$this->load->view('templates/footer_view');
	}
}
