<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_security extends CI_Model {

public function getsecurity() {
    $email = $this->session->userdata('email');
    if (empty($email)) {
          $this->session->sess_destroy();
          redirect('');
        }
    }

}
