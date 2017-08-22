<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_lab_tiga_laboran extends CI_Model {


	public function getlab($where=array())
	{
		if (count($where)>0) {
			$this->db->where($where);
		}
		$sql = $this->db->get('tbl_barang_tiga');
		return $sql->result_array();
	}

	function simpan($data) {
		$this->db->insert('tbl_barang_tiga',$data);

	}

	function hapus($id){
		$this->db->where("kode_barang",$id);
		$this->db->delete('tbl_barang_tiga');

	}

		function ubah($id){
		$this->db->where("kode_barang",$id);
		return $this->db->get('tbl_barang_tiga');
	}

	function update($id,$data){
		$this->db->where('kode_barang',$id);
		$this->db->update('tbl_barang_tiga',$data);

			}
}
