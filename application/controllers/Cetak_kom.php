<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_kom extends CI_Controller {

  public function __construct() {
       parent::__construct();
       $this->load->model("model_print_kom");
       $this->data['sql'] = $this->model_print_kom->getlab();
     }

	public function index() {
		$this->Model_security->getsecurity();
		$this->load->view('view_print',$this->data);
	}
}
