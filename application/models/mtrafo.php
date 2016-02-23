<?php
class Mtrafo extends CI_Model{

	function show_trafo(){
		$this->db->select('name_trafo,sn_trafo,kapasitas_trafo,hvnominal_trafo,lvnominal_trafo,temp_oil_trafo,born_trafo,type_trafo');
		$this->db->from('data_trafo');
		return $this->db->get()->result();
	}
}


?>