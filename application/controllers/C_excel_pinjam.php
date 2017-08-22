<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_excel_pinjam extends CI_Controller {

  public function __construct() {
       parent::__construct();
       $this->load->model("model_excel_pinjam");
       $this->data['sql'] = $this->model_excel_pinjam->getlab();
     }

	public function index() {
		$this->Model_security->getsecurity();
		$this->load->view('view_excel2',$this->data);
	}
}
