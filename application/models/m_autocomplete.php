<?php 
class M_autocomplete extends CI_Model{ 
    function lookup($keyword){ 
        $this->db->select('*')->from('pelanggan'); 
        $this->db->like('nama_pelanggan',$keyword,'after');
        $query = $this->db->get();     
        return $query->result(); 
    } 
}