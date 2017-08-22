<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_laboran extends CI_Controller {

	public function index() {
		$this->load->view('view_laboran/view_login_laboran');
	}

  public function dapatlogin() {
      $username    = $this->input->post('username');
      $password = $this->input->post('password');
      $this->load->model('Model_login_laboran');
      $this->Model_login_laboran->dapatlogin($username,$password);
  }

}
