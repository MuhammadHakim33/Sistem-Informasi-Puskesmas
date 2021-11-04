<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminlogin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Admin_model');
		$this->load->library('session');
	}
	
	public function index()
	{
		if($this->session->userdata('status')){
			redirect(base_url('admin'));
		}

		// Form Validasi
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() == FALSE) {
			$data["title"] = "Login";
			$this->load->view('templates/admin_header_view', $data);
			$this->load->view('admin/admin_login_view');
			$this->load->view('templates/admin_footer_view');

		} else {
			// Akun Validasi
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			$where = [
				'username' => $username,
				'password' => $password
			];

			$cek = $this->db->get_where("tbl_admin", $where)->num_rows();

			if($cek > 0){

				$data_session = ['status' => "login"];
	
				$this->session->set_userdata($data_session);
				redirect("admin");
	
			} else {
				$this->session->set_flashdata('pesanLogin', 'Username / Password Salah');
				redirect('adminlogin');
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('adminlogin');
	}
	
}
