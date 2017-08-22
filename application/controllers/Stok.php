<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stok extends CI_Controller {

 public function __construct() {
			parent::__construct();
			$this->load->model("model_stok");
			$this->data['sql'] = $this->model_stok->getlab();
		}

	public function index() {
		$this->Model_security->getsecurity();
		$this->load->view('view_admin/view_sidebar');
		$this->load->view('view_admin/view_header');
		$this->load->view('view_admin/stok/view_stok',$this->data);
		$this->load->view('view_footer');
	}

	public function add() {
    $this->Model_security->getsecurity();
		$data['ed'] = 'simpan';
		$this->load->view('view_admin/view_sidebar');
		$this->load->view('view_admin/view_header');
		$this->load->view('view_admin/stok/view_stok',$data);
		$this->load->view('view_footer');
	}

  public function simpan() {
    $this->Model_security->getsecurity();
	$id_pinjam    = $this->input->post('id_pinjam');
	$nama_barang  = $this->input->post('nama_barang');
    $stok       = $this->input->post('stok');
	
    $data         = array(
			'id_pinjam'        => $id_pinjam,
      		'nama_barang' 		=> $nama_barang,
            'stok'       => $stok
   			);
		$this->model_stok->simpan($data);
		$this->session->set_flashdata('success_msg','<div class="alert alert-success">Data Sukses Ditambah </div>');
		redirect('stok');
  }

  function update() {
    $this->Model_security->getsecurity();
  $this->Model_security->getsecurity();
	$id_pinjam    = $this->input->post('id_pinjam');
    $nama_barang  = $this->input->post('nama_barang');
	$stok  = $this->input->post('stok');
		$data         = array(
			'id_pinjam'        => $id_pinjam,
      		'nama_barang' 		=> $nama_barang,
      		'stok' 		=> $stok
      			);
  $id = $this->input->post('id_stok');
  $this->model_stok->update($id,$data);
  $this->session->set_flashdata('info_msg','<div class="alert alert-info">Data Sukes Di Ubah</div>');
  redirect('stok');

  }



  public function hapus($id){
    $this->Model_security->getsecurity();
		$this->model_stok->hapus($id);
		$this->session->set_flashdata('delete_msg','<div class="alert alert-warning">Data Sukes Dihapus</div>');
		redirect('stok');
	}

  public function ubah($id)	{
    $this->Model_security->getsecurity();
		$data['ed'] = 'update';
		$data['sql'] = $this->model_stok->ubah($id);
    $this->load->view('view_admin/view_sidebar');
		$this->load->view('view_admin/view_header');
		$this->load->view('view_admin/stok/form_stok',$data);
		$this->load->view('view_footer');

}
}

