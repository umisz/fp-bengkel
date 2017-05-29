<?php 

class M_admin extends CI_Model{	

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function tampil_pelanggan() {
		return $this->db->get('pelanggan');
	}

	function tampil_servis() {
		return $this->db->get('barang');
	}

	function edit_data($where, $table) {
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table) {
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}	
}