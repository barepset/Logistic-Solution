<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumentasi extends CI_Controller {


	public function index() {
		$this->Model_security->getsecurity();
		$this->load->view('view_admin/view_sidebar');
		$this->load->view('view_admin/view_header');
		$this->load->view('dokumentasi/view_dokumentasi');
		$this->load->view('view_footer');

	}

}
