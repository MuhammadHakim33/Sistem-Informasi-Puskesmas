<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminkontak extends CI_Controller {
	public function __construct()
	{
        parent::__construct();
        $this->load->model('Admin_model');
		$this->load->library('session');

		if(empty($this->session->userdata('status'))){
			$this->session->set_flashdata('pesanLogin', 'Silahkan Login Terlebih Dahulu');
			redirect(base_url('adminlogin'));
		}
    }

	public function index()
	{
		$data["title"] = "Kontak";
		$data["kontak_admin"] = $this->getKontakAdmin();
		$data["kontak_ambulan"] = $this->getKontakAmbulan();
		
		$this->load->view('templates/admin_header_view', $data);
		$this->load->view('templates/admin_navigation_view');
		$this->load->view('admin/admin_kontak_view', $data);
		$this->load->view('templates/admin_footer_view');
	}

	public function getKontakAdmin()
	{
		$data = $this->Admin_model->getData("tbl_kontak_admin");
        return $data[0];
	}

	public function getKontakAmbulan()
	{
		$data = $this->Admin_model->getData("tbl_kontak_ambulan");
        return $data[0];
	}

	public function ubahKontakWa()
	{
		$telp =  $this->input->post('telp', true);
		$id = $this->input->post('id');

		$this->Admin_model->updateData("tbl_kontak_admin", $id, ["telp" => $telp]);
		$this->session->set_flashdata('pesanKontakAdmin', 'Whatsapp Berhasil Diubah');
		redirect('adminkontak');
	}

	public function ubahkontakAmbulan()
	{
		$telp =  $this->input->post('telp', true);
		$id = $this->input->post('id');

		$this->Admin_model->updateData("tbl_kontak_ambulan", $id, ["telp" => $telp]);
		$this->session->set_flashdata('pesanKontakAdmin', 'Ambulan Berhasil Diubah');
		redirect('adminkontak');
	}

	public function hapusnotif()
	{
		$this->session->sess_destroy();
		redirect('adminkontak');
	}

	
}
