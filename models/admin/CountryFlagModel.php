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
	
public function submit($field)
	{

		
$this->db->insert('countryflag',$field);
	if ($this->db->affected_rows() > 0) {
		return true ;
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

	public function update($field)
	{
		
		$Id = 	$this->input->post('Id');

	
		$this->db->where('Id',$Id);
		$this->db->update('countryflag',$field);
	if ($this->db->affected_rows() > 0) {
		return true ;
	}
	else
	{
		return false;
	}
	}

	public function delete($Id)
	{
		$this->db->where('Id',$Id);
		$this->db->delete('countryflag');
		if ($this->db->affected_rows() > 0) {
		return true ;
	}
	else
	{
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
