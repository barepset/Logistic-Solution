<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjam_laboran extends CI_Controller {

 public function __construct() {
			parent::__construct();
			$this->load->model("model_pinjam_laboran");
			$this->data['sql'] = $this->model_pinjam_laboran->getlab();
		}

	public function index() {
		// $this->Model_security->getsecurity();
		$this->load->view('view_laboran/view_sidebar_laboran');
		$this->load->view('view_laboran/view_header_laboran');
		$this->load->view('view_laboran/pinjam_laboran/view_pinjam_laboran',$this->data);
		$this->load->view('view_footer');

	}

	public function add() {
    $this->Model_security->getsecurity();
		$data['ed'] = 'simpan';
		$this->load->view('view_admin/view_sidebar');
		$this->load->view('view_admin/view_header');
		$this->load->view('view_admin/pinjam_laboran/form_pinjam_laboran',$data);
		$this->load->view('view_footer');
	}

  public function simpan() {
    // $this->Model_security->getsecurity();
	$id_pinjam    = $this->input->post('id_pinjam');
    $kode_barang  = $this->input->post('kode_barang');
	$nama_barang  = $this->input->post('nama_barang');
    $waktu_pinjam = $this->input->post('waktu_pinjam');
    $nama         = $this->input->post('nama');
	$status         = $this->input->post('status');
	
    $data         = array(
   			'id_pinjam'   => $id_pinjam,
      		'kode_barang' => $kode_barang,
      		'nama_barang' => $nama_barang,
            'waktu_pinjam' => $waktu_pinjam,
            'nama'      => $nama,
			'status'      => $status
      			);
		$this->model_pinjam_laboran->simpan($data);
		$this->session->set_flashdata('success_msg','<div class="alert alert-success">Data Sukses Ditambah </div>');
		redirect('pinjam_laboran');
  }

  function update() {
    // $this->Model_security->getsecurity();
    $id_pinjam      = $this->input->post('id_pinjam');
    $kode_barang  	= $this->input->post('kode_barang');
    $nama_barang  	= $this->input->post('nama_barang');
    $waktu_pinjam   = $this->input->post('waktu_pinjam');
    $nama       	= $this->input->post('nama');
	$status         = $this->input->post('status');
	
		$data         = array(
   			'id_pinjam'   => $id_pinjam,
      		'kode_barang' => $kode_barang,
      		'nama_barang' => $nama_barang,
            'waktu_pinjam' 	 => $waktu_pinjam,
            'nama'     		 => $nama,
			'status'      => $status
      			);
  $id = $this->input->post('id_pinjam');
  $this->model_pinjam_laboran->update($id,$data);
  $this->session->set_flashdata('info_msg','<div class="alert alert-info">Data Sukes Di Ubah</div>');
  redirect('pinjam_laboran');

  }

  public function hapus($id){
    $this->Model_security->getsecurity();
		$this->model_pinjama_laboran->hapus($id);
		$this->session->set_flashdata('delete_msg','<div class="alert alert-warning">Data Sukes Dihapus</div>');
		redirect('pinjam_laboran');
	}

  public function ubah($id)	{
    // $this->Model_security->getsecurity();
		$data['ed'] = 'update';
		$data['sql'] = $this->model_pinjam_laboran->ubah($id);
    $this->load->view('view_laboran/view_sidebar_laboran');
		$this->load->view('view_laboran/view_header_laboran');
		$this->load->view('view_laboran/pinjam_laboran/form_pinjam_laboran',$data);
		$this->load->view('view_footer');
	}

}
