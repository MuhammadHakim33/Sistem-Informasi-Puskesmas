<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->helper('form');

		if(empty($this->session->userdata('status'))){
			$this->session->set_flashdata('pesanLogin', 'Silahkan Login Terlebih Dahulu');
			redirect(base_url('adminlogin'));
		}
    }

	public function index()
	{
		$data["title"] = "List Layanan";
		$data["list"] = $this->getListLayanan();
		
		$this->load->view('templates/admin_header_view', $data);
		$this->load->view('templates/admin_navigation_view');
		$this->load->view('admin/admin_layanan_view');
		$this->load->view('templates/admin_footer_view');
	}

	// Tambah
	public function tambah() {
		$this->form_validation->set_rules('layanan', 'Nama Layanan', 'required');
		$this->form_validation->set_rules('desk', 'Deskripsi', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');

		if($this->form_validation->run() == FALSE) {
			$data["title"] = "Tambah Dokter";
			$this->load->view('templates/admin_header_view', $data);
			$this->load->view('templates/admin_navigation_view');
			$this->load->view('admin/admin_tambah_layanan_view');
			$this->load->view('templates/admin_footer_view');
		} else {
			$layanan =  $this->input->post('layanan', true);
			$desk =  $this->input->post('desk', true);
			$status_aktif =  $this->input->post('status', true);

			
			$data = [
				"nama_layanan" => $layanan,
				"keterangan" => $desk,
				"status_aktif" => $status_aktif
			];

			$this->Admin_model->insertData("tbl_layanan", $data);
			$this->session->set_flashdata('pesanLayanan', 'Layanan Ditambahkan');
			redirect('layanan');
		}
	}

	// Edit
	public function edit($id = null)
	{
		$this->form_validation->set_rules('layanan', 'Nama Layanan', 'required');
		$this->form_validation->set_rules('desk', 'Deskripsi', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');


		if($this->form_validation->run() == FALSE) {
			$data["title"] = "Edit Layanan";
			$data["layanan"] = $this->Admin_model->getData("tbl_layanan", ["id" => $id]);
			$this->load->view('templates/admin_header_view', $data);
			$this->load->view('templates/admin_navigation_view');
			$this->load->view('admin/admin_edit_layanan_view', $data);
			$this->load->view('templates/admin_footer_view');

		} else {
			$id =  $this->input->post('id', true);
			$layanan =  $this->input->post('layanan', true);
			$desk =  $this->input->post('desk', true);
			$status_aktif =  $this->input->post('status', true);

			$data = [
				"nama_layanan" => $layanan,
				"keterangan" => $desk,
				"status_aktif" => $status_aktif
			];

			$this->Admin_model->updateData("tbl_layanan", $id, $data);
			$this->session->set_flashdata('pesanLayanan', 'Data Layanan Berhasil Diubah');
			redirect('layanan');
		}		
	}

	// List Table Dokter
	public function getListLayanan()
	{
		$data = $this->Admin_model->getData("tbl_layanan");
		return $data;
	}

	// Hapus Dokter
	public function hapusLayanan($id)
	{
		$this->Admin_model->hapusField('tbl_layanan', $id);
		$this->session->set_flashdata('pesanLayanan', 'Data Layanan Dihapus');
		redirect('layanan');
	}

	// Hapus Notif
	public function hapusnotif()
	{
		$this->session->unset_userdata('pesanLayanan');
		redirect('layanan');
	}

	
}
