<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_print_pinjam_teknisi extends CI_Model {


	public function getlab($where=array())
	{
		if (count($where)>0) {
			$this->db->where($where);
		}
		$sql = $this->db->get('tbl_pinjam');
		return $sql->result_array();
	}

	function simpan($data) {
		$this->db->insert('tbl_pinjam',$data);

	}

	function hapus($id){
		$this->db->where("id_pinjam",$id);
		$this->db->delete('tbl_pinjam');

	}

		function ubah($id){
		$this->db->where("id_pinjam",$id);
		return $this->db->get('tbl_pinjam');
	}

	function update($id,$data){
		$this->db->where('id_pinjam',$id);
		$this->db->update('tbl_pinjam',$data);

			}
}