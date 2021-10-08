<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasienlist extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
		$this->load->library('session');
    }

	public function index()
	{
		$data["title"] = "List Pasien";
		$data["list"] = $this->getListPasien();
		
		$this->load->view('templates/admin_header_view', $data);
		$this->load->view('templates/admin_navigation_view');
		$this->load->view('admin/admin_pasien_view', $data);
		$this->load->view('templates/admin_footer_view');
	}

	public function getListPasien()
	{
		$data = $this->Admin_model->listTable("tbl_pasien");
		return $data;
	}

	public function hapusPasien($id)
	{
		$this->Admin_model->hapusField('tbl_pasien', $id);
		$this->session->set_flashdata('pesan', 'Dihapus');
		redirect('pasienlist');
	}

	
}
