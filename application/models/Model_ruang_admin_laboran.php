<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_ruang_admin_laboran extends CI_Model {


	public function getlab($where=array())
	{
		if (count($where)>0) {
			$this->db->where($where);
		}
		$sql = $this->db->get('tbl_barang_admin');
		return $sql->result_array();
	}

	function simpan($data) {
		$this->db->insert('tbl_barang_admin',$data);

	}

	function hapus($id){
		$this->db->where("kode_barang",$id);
		$this->db->delete('tbl_barang_admin');

	}

		function ubah($id){
		$this->db->where("kode_barang",$id);
		return $this->db->get('tbl_barang_admin');
	}

	function update($id,$data){
		$this->db->where('kode_barang',$id);
		$this->db->update('tbl_barang_admin',$data);

			}
}
