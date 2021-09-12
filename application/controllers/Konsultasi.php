<?php 

class Konsultasi extends CI_Controller {
    public function index() 
    {
        $this->load->model('Konsultasi_model');
        
        $data['list_dokter'] = $this->Konsultasi_model->get_dokter();
        $data["title"] = "Konsultasi";
		
		$this->load->view('templates/header_view', $data);
        $this->load->view('templates/navigation_view');
		$this->load->view('user/konsultasi_view', $data);
		$this->load->view('templates/footer_view');
    }
}