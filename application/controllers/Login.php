<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {
		$this->load->view('view_admin/view_login');
	}

  public function getlogin() {
      $email    = $this->input->post('email');
      $password = $this->input->post('password');
      $this->load->model('model_login');
      $this->model_login->getlogin($email,$password);
  }

}
