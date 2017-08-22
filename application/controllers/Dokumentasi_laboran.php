<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumentasi_laboran extends CI_Controller {


	public function index() {
		// $this->Model_security->getsecurity();
		$this->load->view('view_laboran/view_sidebar_laboran');
		$this->load->view('view_laboran/view_header_laboran');
		$this->load->view('view_laboran/dokumentasi/view_dokumentasi');
		$this->load->view('view_footer');

	}

}
