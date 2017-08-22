<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumentasi_teknisi extends CI_Controller {


	public function index() {
		// $this->Model_security->getsecurity();
		$this->load->view('view_teknisi/view_sidebar_teknisi');
		$this->load->view('view_teknisi/view_header_teknisi');
		$this->load->view('view_teknisi/dokumentasi/view_dokumentasi');
		$this->load->view('view_footer');

	}

}
