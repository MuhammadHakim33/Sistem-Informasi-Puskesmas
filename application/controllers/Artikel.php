<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {
	public function index()
	{
		$data["title"] = "Artikel";
		
		$this->load->view('templates/header_view', $data);
		$this->load->view('templates/navigation_view');
		$this->load->view('user/artikel_view');
		$this->load->view('templates/footer_view');
	}
}
