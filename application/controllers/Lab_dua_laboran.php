<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lab_dua_laboran extends CI_Controller {

 public function __construct() {
			parent::__construct();
			$this->load->model("model_lab_dua_laboran");
			$this->data['sql'] = $this->model_lab_dua_laboran->getlab();
		}

	public function index() {
		// $this->Model_security->getsecurity();
		$this->load->view('view_laboran/view_sidebar_laboran');
		$this->load->view('view_laboran/view_header_laboran');
		$this->load->view('view_laboran/lab_dua/view_lab_dua',$this->data);
		$this->load->view('view_footer');

	}

	public function add() {
    $this->Model_security->getsecurity();
		$data['ed'] = 'simpan';
		$this->load->view('view_admin/view_sidebar');
		$this->load->view('view_admin/view_header');
		$this->load->view('view_admin/lab_dua/form_lab_dua',$data);
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
		$this->model_lab_dua_laboran->simpan($data);
		$this->session->set_flashdata('success_msg','<div class="alert alert-success">Data Sukses Ditambah </div>');
		redirect('lab_dua_laboran');
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
  $this->model_lab_dua_laboran->update($id,$data);
  $this->session->set_flashdata('info_msg','<div class="alert alert-info">Data Sukes Di Ubah</div>');
  redirect('lab_dua_laboran');

  }

  public function hapus($id){
    $this->Model_security->getsecurity();
		$this->model_lab_dua->hapus($id);
		$this->session->set_flashdata('delete_msg','<div class="alert alert-warning">Data Sukes Dihapus</div>');
		redirect('lab_dua');
	}

  public function ubah($id)	{
    // $this->Model_security->getsecurity();
		$data['ed'] = 'update';
		$data['sql'] = $this->model_lab_dua_laboran->ubah($id);
    $this->load->view('view_laboran/view_sidebar_laboran');
		$this->load->view('view_laboran/view_header_laboran');
		$this->load->view('view_laboran/lab_dua/form_lab_dua',$data);
		$this->load->view('view_footer');
	}

}
