<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login_teknisi extends CI_Model {

  public function dapatlogin($username,$password) {
        $pwdd   = md5($password);
        $this->db->where('username',$username);
        $this->db->where('password',$pwdd);
        $query = $this->db->get('teknisi');

        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
              $sesii = array('username' => $row->username);
              $this->session->set_userdata($sesii);
              redirect('dashboard_teknisi');
            }
        }
        else {
          $this->session->set_flashdata('delete_msg','<div class="alert alert-danger">Email atau Password Salah </div class="fa fa-info" >');
          redirect('Login_teknisi');
        }
    }

}
