<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_excel_kom_dua extends CI_Controller {

  public function __construct() {
       parent::__construct();
       $this->load->model("model_excel_kom_dua");
       $this->data['sql'] = $this->model_excel_kom_dua->getlab();
     }

	public function index() {
		$this->Model_security->getsecurity();
		$this->load->view('view_excel',$this->data);
	}
}
