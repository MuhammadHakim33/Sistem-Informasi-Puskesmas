<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokterlist extends CI_Controller {
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
		$data["title"] = "List Dokter";
		$data["list"] = $this->getListDokter();
		
		$this->load->view('templates/admin_header_view', $data);
		$this->load->view('templates/admin_navigation_view');
		$this->load->view('admin/admin_dokter_view');
		$this->load->view('templates/admin_footer_view');
	}

	// Tambah Dokter
	public function tambah() {
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('telp', 'Telp', 'required');
		$this->form_validation->set_rules('telp', 'Telp', 'required');
		$this->form_validation->set_rules('desk', 'Deskripsi', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');

		if($this->form_validation->run() == FALSE) {
			$data["title"] = "Tambah Dokter";
			$this->load->view('templates/admin_header_view', $data);
			$this->load->view('templates/admin_navigation_view');
			$this->load->view('admin/admin_tambah_dokter_view');
			$this->load->view('templates/admin_footer_view');
		} else {
			$nama =  $this->input->post('nama', true);
			$telp =  $this->input->post('telp', true);
			$deskripsi =  $this->input->post('desk', true);
			$status_aktif =  $this->input->post('status', true);
			$foto = $_FILES['foto']['name'];

			// Upload Foto
			if($foto) {
				$file_name = rand(1, 999);
				$config['file_name']            = $file_name;
				$config['upload_path']          = FCPATH.'/asset/img/';
				$config['allowed_types']        = 'gif|jpg|png';
				$config['overwrite']            = true;
				$config['max_size']             = 1024;
				$config['max_width']            = 1080;
				$config['max_height']           = 1080;
		
				$this->load->library('upload', $config);
		
				if (!$this->upload->do_upload('foto')){
					$data['error'] = $this->upload->display_errors();
					$this->session->set_flashdata('pesanDokterList', $data['error']);
					redirect('dokterlist');
					die();
		
				} else {
					$foto =  $this->upload->data('file_name');
				}
			}
			
			$data = [
				"nama" => $nama,
				"telp" => $telp,
				"deskripsi" => $deskripsi,
				"status_aktif" => $status_aktif,
				"foto" => $foto
			];

			$this->Admin_model->insertData("tbl_dokter", $data);
			$this->session->set_flashdata('pesanDokterList', 'Data Dokter Ditambahkan');
			redirect('dokterlist');
		}
	}

	// Edit Dokter
	public function edit($id = null)
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('telp', 'Telp', 'required');
		$this->form_validation->set_rules('telp', 'Telp', 'required');
		$this->form_validation->set_rules('desk', 'Deskripsi', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');

		if($this->form_validation->run() == FALSE) {
			$data["title"] = "Edit Dokter";
			$data["dokter"] = $this->Admin_model->getData("tbl_dokter", ["id" => $id]);
			$this->load->view('templates/admin_header_view', $data);
			$this->load->view('templates/admin_navigation_view');
			$this->load->view('admin/admin_edit_dokter_view');
			$this->load->view('templates/admin_footer_view');

		} else {
			$id =  $this->input->post('id', true);
			$nama =  $this->input->post('nama', true);
			$telp =  $this->input->post('telp', true);
			$deskripsi =  $this->input->post('desk', true);
			$status_aktif =  $this->input->post('status', true);
			$foto = $_FILES['foto']['name'];

			// Upload Foto
			if($foto) {
				$file_name = rand(1, 999);
				$config['file_name']            = $file_name;
				$config['upload_path']          = FCPATH.'/asset/img/';
				$config['allowed_types']        = 'gif|jpg|png';
				$config['overwrite']            = true;
				$config['max_size']             = 1024;
				$config['max_width']            = 1080;
				$config['max_height']           = 1080;
		
				$this->load->library('upload', $config);
		
				if (!$this->upload->do_upload('foto')){
					$data['error'] = $this->upload->display_errors();
					$this->session->set_flashdata('pesanDokterList', $data['error']);
					redirect('dokterlist');
					die();
		
				} else {
					$foto =  $this->upload->data('file_name');

					$this->Admin_model->updateData("tbl_dokter", $id, ["foto" => $foto]);
				}
			}
			

			$data = [
				"nama" => $nama,
				"telp" => $telp,
				"deskripsi" => $deskripsi,
				"status_aktif" => $status_aktif
			];

			$this->Admin_model->updateData("tbl_dokter", $id, $data);
			$this->session->set_flashdata('pesanDokterList', 'Data Dokter Berhasil Diubah');
			redirect('dokterlist');
		}		
	}

	// List Table Dokter
	public function getListDokter()
	{
		$data = $this->Admin_model->getData("tbl_dokter");
		return $data;
	}

	// Hapus Dokter
	public function hapusDokter($id)
	{
		$this->Admin_model->hapusField('tbl_dokter', $id);
		$this->session->set_flashdata('pesanDokterList', 'Data Dokter Dihapus');
		redirect('dokterlist');
	}

	// Hapus Notif
	public function hapusnotif()
	{
		$this->session->unset_userdata('pesanDokterList');
		redirect('dokterlist');
	}

	
}
