<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjam_teknisi extends CI_Controller {

 public function __construct() {
			parent::__construct();
			$this->load->model("model_pinjam_teknisi");
			$this->data['sql'] = $this->model_pinjam_teknisi->getlab();
		}

	public function index() {
		// $this->Model_security->getsecurity();
		$this->load->view('view_teknisi/view_sidebar_teknisi');
		$this->load->view('view_teknisi/view_header_teknisi');
		$this->load->view('view_teknisi/pinjam_teknisi/view_pinjam_teknisi',$this->data);
		$this->load->view('view_footer');

	}

	public function add() {
    $this->Model_security->getsecurity();
		$data['ed'] = 'simpan';
		$this->load->view('view_admin/view_sidebar');
		$this->load->view('view_admin/view_header');
		$this->load->view('view_admin/pinjam_teknisi/form_pinjam_teknisi',$data);
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
		$this->model_pinjam_teknisi->simpan($data);
		$this->session->set_flashdata('success_msg','<div class="alert alert-success">Data Sukses Ditambah </div>');
		redirect('pinjam_teknisi');
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
  $this->model_pinjam_teknisi->update($id,$data);
  $this->session->set_flashdata('info_msg','<div class="alert alert-info">Data Sukes Di Ubah</div>');
  redirect('pinjam_teknisi');

  }

  public function hapus($id){
    $this->Model_security->getsecurity();
		$this->model_pinjama_teknisi->hapus($id);
		$this->session->set_flashdata('delete_msg','<div class="alert alert-warning">Data Sukes Dihapus</div>');
		redirect('pinjam_teknisi');
	}

  public function ubah($id)	{
    // $this->Model_security->getsecurity();
		$data['ed'] = 'update';
		$data['sql'] = $this->model_pinjam_teknisi->ubah($id);
    $this->load->view('view_teknisi/view_sidebar_teknisi');
		$this->load->view('view_teknisi/view_header_teknisi');
		$this->load->view('view_teknisi/pinjam_teknisi/form_pinjam_teknisi',$data);
		$this->load->view('view_footer');
	}

}
