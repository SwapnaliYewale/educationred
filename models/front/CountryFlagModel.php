<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CountryFlagModel extends CI_Model {

	public function getAllcountryflag()
	{
		
	$query = $this->db->get('countryflag');
	if ($query->num_rows() > 0) {
		return $query->result();
	}
	else
	{
		return false;
	}
}
	


public function getcountryflagById($Id)
	{
	$this->db->where('Id',$Id);
	$query = $this->db->get('countryflag');
	if ($query->num_rows() > 0) {
		return $query->row();
	}
	else{
		return false;
	}
	}

	
	
/*
public function getcountryflagById($Id)
	{
	$this->db->select('*');
	$this->db->from('countryflag');
	
	}*/


}
