<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_dua extends CI_Controller {

  public function __construct() {
       parent::__construct();
       $this->load->model("model_print_dua");
       $this->data['sql'] = $this->model_print_dua->getlab();
     }

	public function index() {
		$this->Model_security->getsecurity();
		$this->load->view('view_print',$this->data);
	}
}
