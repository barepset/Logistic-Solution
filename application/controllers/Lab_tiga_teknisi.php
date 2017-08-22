<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lab_tiga_teknisi extends CI_Controller {

 public function __construct() {
			parent::__construct();
			$this->load->model("model_lab_tiga_teknisi");
			$this->data['sql'] = $this->model_lab_tiga_teknisi->getlab();
		}

	public function index() {
		// $this->Model_security->getsecurity();
		$this->load->view('view_teknisi/view_sidebar_teknisi');
		$this->load->view('view_teknisi/view_header_teknisi');
		$this->load->view('view_teknisi/lab_tiga/view_lab_tiga',$this->data);
		$this->load->view('view_footer');

	}

	public function add() {
    // $this->Model_security->getsecurity();
		$data['ed'] = 'simpan';
		$this->load->view('view_teknisi/view_sidebar_teknisi');
		$this->load->view('view_teknisi/view_header_teknisi');
		$this->load->view('view_teknisi/lab_tiga/form_lab_tiga',$data);
		$this->load->view('view_footer');
	}

  public function simpan() {
    // $this->Model_security->getsecurity();
    $kode_barang  = $this->input->post('kode_barang');
		$nama_barang  = $this->input->post('nama_barang');

		$merk         = $this->input->post('merk');
    $seri         = $this->input->post('seri');
    $jumlah       = $this->input->post('jumlah');
    $tahun        = $this->input->post('tahun');
    $asal_barang  = $this->input->post('asal_barang');
    $keadaan      = $this->input->post('keadaan');
    $data         = array(
      			'kode_barang' => $kode_barang,
      			'nama_barang' => $nama_barang,

      			'merk'        => $merk,
            'seri'        => $seri,
            'jumlah'      => $jumlah,
            'tahun'       => $tahun,
            'asal_barang' => $asal_barang,
            'keadaan'     => $keadaan
      			);
		$this->model_lab_tiga_teknisi->simpan($data);
		$this->session->set_flashdata('success_msg','<div class="alert alert-success">Data Sukses Ditambah </div>');
		redirect('lab_tiga_teknisi');
  }

  function update() {
    // $this->Model_security->getsecurity();
    $kode_barang  = $this->input->post('kode_barang');
    $nama_barang  = $this->input->post('nama_barang');

    $merk         = $this->input->post('merk');
    $seri         = $this->input->post('seri');
    $jumlah       = $this->input->post('jumlah');
    $tahun        = $this->input->post('tahun');
    $asal_barang  = $this->input->post('asal_barang');
    $keadaan      = $this->input->post('keadaan');
		$data         = array(
      'kode_barang' => $kode_barang,
      'nama_barang' => $nama_barang,

      'merk'        => $merk,
      'seri'        => $seri,
      'jumlah'      => $jumlah,
      'tahun'       => $tahun,
      'asal_barang' => $asal_barang,
      'keadaan'     => $keadaan
      			);
  $id = $this->input->post('kode_barang');
  $this->model_lab_tiga_teknisi->update($id,$data);
  $this->session->set_flashdata('info_msg','<div class="alert alert-info">Data Sukes Di Ubah</div>');
  redirect('lab_tiga_teknisi');

  }

  public function hapus($id){
    // $this->Model_security->getsecurity();
		$this->model_lab_tiga->hapus($id);
		$this->session->set_flashdata('delete_msg','<div class="alert alert-warning">Data Sukes Dihapus</div>');
		redirect('lab_tiga_laboran');
	}

  public function ubah($id)	{
    // $this->Model_security->getsecurity();
		$data['ed'] = 'update';
		$data['sql'] = $this->model_lab_tiga_teknisi->ubah($id);
    $this->load->view('view_teknisi/view_sidebar_teknisi');
		$this->load->view('view_teknisi/view_header_teknisi');
		$this->load->view('view_teknisi/lab_tiga/form_lab_tiga',$data);
		$this->load->view('view_footer');
	}

}
