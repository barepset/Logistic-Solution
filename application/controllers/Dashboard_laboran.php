<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_laboran extends CI_Controller {

	public function index() {
		// $this->Model_keamanan->keamanan();
		$this->load->view('view_laboran/view_sidebar_laboran');
		$this->load->view('view_laboran/view_header_laboran');
		$this->load->view('view_laboran/view_dashboard');
		$this->load->view('view_footer');
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('Login_laboran');
	}


}
