<?php
class Mgardu extends CI_Model{

	function show_gardu(){
		$this->db->select('data_gardu.id_gardu,nama_gardu,nama_jenis_gardu,nama_gi_gardu,alamat_gardu,temp_gardu,name_trafo');
		$this->db->from('data_gardu');
		$this->db->join('jenis_gardu_list','data_gardu.jenis_gardu=jenis_gardu_list.id_jenis_gardu');
		$this->db->join('gi_gardu_list','data_gardu.gi_gardu=gi_gardu_list.id_gi_gardu');
		$this->db->join('name_trafo_list','name_trafo_list.id_name=data_gardu.id_trafo');
		return $this->db->get()->result();
	}

	function get_jenis_gardu(){
		$this->db->select('*');
		$this->db->from('jenis_gardu_list');
		return $this->db->get()->result();	
	}
	
	function get_gi_gardu(){
		$this->db->select('*');
		$this->db->from('gi_gardu_list');
		return $this->db->get()->result();	
	}

	function get_user($username,$password){
		$this->db->select('username,password');
		$this->db->from('user');
		$this->db->where(array('username'=>$username,'password'=>$password));
		return $this->db->get();
	}

	function get_trafo_list(){
		$this->db->select('*');
		$this->db->from('name_trafo_list');
		return $this->db->get()->result();
	}
	function insert_data_gardu($data){
		$this->db->insert('data_gardu',$data);
	}
	
	function delete_gardu($id){
		$this->db->delete('data_gardu',array('id_gardu'=>$id));
	}
	function get_gardu($id){
		$this->db->select('data_gardu.id_gardu,nama_gardu,nama_jenis_gardu,jenis_gardu,nama_gi_gardu,gi_gardu,alamat_gardu,temp_gardu,name_trafo,id_name');
		$this->db->from('data_gardu');
		$this->db->join('jenis_gardu_list','data_gardu.jenis_gardu=jenis_gardu_list.id_jenis_gardu');
		$this->db->join('gi_gardu_list','data_gardu.gi_gardu=gi_gardu_list.id_gi_gardu');
		$this->db->join('name_trafo_list','name_trafo_list.id_name=data_gardu.id_trafo');
		$this->db->where(array('id_gardu'=>$id));
		return $this->db->get();
	}
	function update_gardu($data_gardu,$id){
		$this->db->where('id_gardu',$id);
		return $this->db->update('data_gardu',$data_gardu);
	}
}


?>