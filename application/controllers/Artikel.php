<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {
	public function index()
	{
		$this->load->model('Api_model');

		$data["title"] = "Artikel";
		$data['api_berita'] = $this->beritaApi();
		
		$this->load->view('templates/header_view', $data);
		$this->load->view('templates/navigation_view');
		$this->load->view('user/artikel_view', $data);
		$this->load->view('templates/footer_view');
	}

	public function beritaApi()
	{
		$posts = $this->Api_model->data_berita();
		$data = $posts["data"]["posts"];
		$result = [];
		for($i = 0; $i < 20; $i++) {
			$result[] = $data[$i];
		};

		return $result;
	}
}
