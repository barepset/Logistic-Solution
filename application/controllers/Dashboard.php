<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index() {
		$this->Model_security->getsecurity();
		$this->load->view('view_admin/view_sidebar');
		$this->load->view('view_admin/view_header');
		$this->load->view('view_admin/view_dashboard');
		$this->load->view('view_footer');
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('');
	}


}
