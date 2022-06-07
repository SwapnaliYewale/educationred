<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testmodel extends CI_Model {

	public function getAlltest()
	{
		
	$query = $this->db->get('test');
	if ($query->num_rows() > 0) {
		return $query->result();
	}
	else
	{
		return false;
	}
}
	


public function gettestById($Id)
	{
	$this->db->where('test_id',$Id);
	$query = $this->db->get('test');
	if ($query->num_rows() > 0) {
		return $query->row();
	}
	else{
		return false;
	}
	}

	

}
