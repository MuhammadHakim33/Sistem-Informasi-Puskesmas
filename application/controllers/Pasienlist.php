<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasienlist extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
		$this->load->library('session');

		if(empty($this->session->userdata('status'))){
			$this->session->set_flashdata('pesan', 'Silahkan Login Terlebih Dahulu');
			redirect(base_url('adminlogin'));
		}
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

	public function edit($id)
	{
		$data["title"] = "Edit Pasien";

		$data["pasien"] = $this->Admin_model->getData("tbl_pasien", ["id" => $id]);

		$this->load->view('templates/admin_header_view', $data);
		$this->load->view('templates/admin_navigation_view');
		$this->load->view('admin/admin_edit_pasien_view', $data);
		$this->load->view('templates/admin_footer_view');
	}
	
	public function editPasien()
	{
		$id =  $this->input->post('id', true);
		$nik =  $this->input->post('nik', true);
		$nama =  $this->input->post('nama', true);
		$tgl_lahir =  $this->input->post('tgl_lahir', true);
		$gender =  $this->input->post('gender', true);
		$telp =  $this->input->post('telp', true);
		$alamat =  $this->input->post('alamat', true);
		$provinsi =  $this->input->post('provinsi', true);
		$kota_kab =  $this->input->post('kota_kab', true);
		$kecamatan =  $this->input->post('kecamatan', true);
		$kelurahan =  $this->input->post('kelurahan', true);

		$data = [
			"nik" => $nik,
			"nama" => $nama,
			"tgl_lahir" => $tgl_lahir,
			"gender" => $gender,
			"telp" => $telp,
			"alamat" => $alamat,
			"provinsi" => $provinsi,
			"kota_kab" => $kota_kab,
			"kecamatan" => $kecamatan,
			"kelurahan" => $kelurahan
		];

		$this->Admin_model->updateData("tbl_pasien", $id, $data);
		$this->session->set_flashdata('pesan', 'Data Pasien Berhasil Diubah');
		redirect('pasienlist');
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

	public function hapusnotif()
	{
		$this->session->sess_destroy();
		redirect('pasienlist');
	}

	
}
