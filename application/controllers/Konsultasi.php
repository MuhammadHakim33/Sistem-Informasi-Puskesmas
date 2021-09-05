<?php 

class Konsultasi extends CI_Controller {
    public function index() 
    {
        $data["title"] = "Konsultasi";
		
		$this->load->view('templates/header_view', $data);
		$this->load->view('user/konsultasi_view');
		$this->load->view('templates/footer_view');
    }
}