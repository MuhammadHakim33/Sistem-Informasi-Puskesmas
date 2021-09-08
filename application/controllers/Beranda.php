<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	public function index()
	{
		$this->load->model('Api_model');
		
		$data["title"] = "Beranda";
		$data['api_covid'] = $this->covidApi();
		$data['api_berita'] = $this->beritaApi();
		
		$this->load->view('templates/header_view', $data);
		$this->load->view('templates/navigation_view');
		$this->load->view('user/beranda_view', $data);
		$this->load->view('templates/footer_view');
	}

	public function covidApi()
	{
		$data = $this->Api_model->data_covid();
		return $data;
	}

	public function beritaApi()
	{
		$posts = $this->Api_model->data_berita();
		$data = $posts["data"]["posts"];
		$result = [];
		for($i = 0; $i < 5; $i++) {
			$result[] = $data[$i];
		};

		return $result;
	}

}
