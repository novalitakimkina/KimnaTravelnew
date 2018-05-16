<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mymodel extends CI_Model {
	public function Getuser($where=""){
		$data = $this->db->query(' select * from user '.$where);
		return $data->result_array();
	}
	function data($number,$offset){
		return $query = $this->db->get('user',$number,$offset)->result_array();		
	}
 
	function jumlah_data(){
		return $this->db->get('user')->num_rows();
	}
	public function InsertData($tabelName,$data){
		$res = $this->db->insert($tabelName,$data);
		return $res;
	}

	public function UpdateData($tabelName,$data,$where){
		$res = $this->db->update($tabelName,$data,$where);
		return $res;
	}

	public function DeleteData($tabelName,$data){
		$res = $this->db->delete($tabelName,$data);
		return $res;
	}
}
