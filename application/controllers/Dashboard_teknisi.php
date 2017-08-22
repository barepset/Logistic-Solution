<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_teknisi extends CI_Controller {

	public function index() {
		// $this->Model_keamanan->keamanan();
		$this->load->view('view_teknisi/view_sidebar_teknisi');
		$this->load->view('view_teknisi/view_header_teknisi');
		$this->load->view('view_teknisi/view_dashboard');
		$this->load->view('view_footer');
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('Login_teknisi');
	}


}
