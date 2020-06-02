<?php 

class M_log extends CI_Model{
	function tampil_data(){
		return $this->db->get('log');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}