<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Countrymodel extends CI_Model {

	public function getAllCountry()
	{
		
	$query = $this->db->get('country');
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

		
$this->db->insert('country',$field);
	if ($this->db->affected_rows() > 0) {
		return true ;
	}
	else
	{
		return false;
	}
}

public function getCountryById($Id)
	{
	$this->db->where('contry_id',$Id);
	$query = $this->db->get('country');
	if ($query->num_rows() > 0) {
		return $query->row();
	}
	else{
		return false;
	}
	}

	public function update($field)
	{
		
		$Id = 	$this->input->post('contry_id');

	
		$this->db->where('contry_id',$Id);
		$this->db->update('country',$field);
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
		$this->db->where('contry_id',$Id);
		$this->db->delete('country');
		if ($this->db->affected_rows() > 0) {
		return true ;
	}
	else
	{
		return false;
	}
	}
/*
public function getCountryById($Id)
	{
	$this->db->select('*');
	$this->db->from('country');
	
	}*/


}
