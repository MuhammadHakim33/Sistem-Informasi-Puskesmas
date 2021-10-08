<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokterlist extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
		$this->load->library('session');
    }

	public function index()
	{
		$data["title"] = "List Dokter";
		$data["list"] = $this->getListDokter();
		
		$this->load->view('templates/admin_header_view', $data);
		$this->load->view('templates/admin_navigation_view');
		$this->load->view('admin/admin_Dokter_view');
		$this->load->view('templates/admin_footer_view');
	}

	public function getListDokter()
	{
		$data = $this->Admin_model->listTable("tbl_dokter");
		return $data;
	}

	public function hapusDokter($id)
	{
		$this->Admin_model->hapusField('tbl_dokter', $id);
		$this->session->set_flashdata('pesan', 'Dihapus', 10);
		redirect('dokterlist');
	}

	public function hapusnotif()
	{
		$this->session->sess_destroy();
		redirect('dokterlist');
	}

	
}
