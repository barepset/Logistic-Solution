<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_teknisi extends CI_Controller {

	public function index() {
		$this->load->view('view_teknisi/view_login_teknisi');
	}

  public function dapatlogin() {
      $username    = $this->input->post('username');
      $password = $this->input->post('password');
      $this->load->model('model_login_teknisi');
      $this->model_login_teknisi->dapatlogin($username,$password);
  }

}
