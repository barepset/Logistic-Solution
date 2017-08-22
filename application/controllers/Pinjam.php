<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjam extends CI_Controller {

 public function __construct() {
			parent::__construct();
			$this->load->model("model_pinjam");
			$this->data['sql'] = $this->model_pinjam->getlab();
		}

	public function index() {
		$this->Model_security->getsecurity();
		$this->load->view('view_admin/view_sidebar');
		$this->load->view('view_admin/view_header');
		$this->load->view('view_admin/pinjam/view_pinjam',$this->data);
		$this->load->view('view_footer');

	}

	public function add() {
    $this->Model_security->getsecurity();
		$data['ed'] = 'simpan';
		$this->load->view('view_admin/view_sidebar');
		$this->load->view('view_admin/view_header');
		$this->load->view('view_admin/pinjam/form_pinjam',$data);
		$this->load->view('view_footer');
	}

  public function simpan() {
    $this->Model_security->getsecurity();
	$id_pinjam    = $this->input->post('id_pinjam');
    $kode_barang  = $this->input->post('kode_barang');
	$nama_barang  = $this->input->post('nama_barang');
    #$waktu_pinjam = $this->input->post('waktu_pinjam');
    $nama       = $this->input->post('nama');
	$stok       = $this->input->post('stok');
	$jumlah_pinjam       = $this->input->post('jumlah_pinjam');
	#$sisa       = $this->input->post('sisa');
	$status       = $this->input->post('status');
	
    $data         = array(
			'id_pinjam'        => $id_pinjam,
      		'kode_barang' 		=> $kode_barang,
      		'nama_barang' 		=> $nama_barang,
            #'waktu_pinjam'      => $waktu_pinjam,
            'nama'       => $nama,
			'stok'       => $stok,
			'jumlah_pinjam'       => $jumlah_pinjam,
			#'sisa'       => $sisa,
			'status'       => $status
   			);
		$this->model_pinjam->simpan($data);
		$this->session->set_flashdata('success_msg','<div class="alert alert-success">Data Sukses Ditambah </div>');
		redirect('pinjam');
  }

  function update() {
    $this->Model_security->getsecurity();
  $this->Model_security->getsecurity();
	$id_pinjam    = $this->input->post('id_pinjam');
    $kode_barang  = $this->input->post('kode_barang');
	$nama_barang  = $this->input->post('nama_barang');
    #$waktu_pinjam = $this->input->post('waktu_pinjam');
    $nama       = $this->input->post('nama');
	$stok       = $this->input->post('stok');
	$waktu_pinjam       = $this->input->post('waktu_pinjam');
	#$sisa       = $this->input->post('sisa');
	$status       = $this->input->post('status');
		$data         = array(
			'id_pinjam'        => $id_pinjam,
      		'kode_barang' 		=> $kode_barang,
      		'nama_barang' 		=> $nama_barang,
            
			#'waktu_pinjam'      => $waktu_pinjam,
            'nama'       => $nama,
			'stok'       => $stok,
			'jumlah_pinjam'       => $jumlah_pinjam,
			#'sisa'       => $sisa,
			'status'       => $status
      			);
  $id = $this->input->post('id_pinjam');
  $this->model_pinjam->update($id,$data);
  $this->session->set_flashdata('info_msg','<div class="alert alert-info">Data Sukes Di Ubah</div>');
  redirect('pinjam');

  }



  public function hapus($id){
    $this->Model_security->getsecurity();
		$this->model_pinjam->hapus($id);
		$this->session->set_flashdata('delete_msg','<div class="alert alert-warning">Data Sukes Dihapus</div>');
		redirect('pinjam');
	}

  public function ubah($id)	{
    $this->Model_security->getsecurity();
		$data['ed'] = 'update';
		$data['sql'] = $this->model_pinjam->ubah($id);
    $this->load->view('view_admin/view_sidebar');
		$this->load->view('view_admin/view_header');
		$this->load->view('view_admin/pinjam/form_pinjam',$data);
		$this->load->view('view_footer');

}
}

