<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Universitymodel extends CI_Model {



	public function getUniversityById($universityId)
	{
		$this->db->where('university_id',$universityId);
	$query = $this->db->get('university');
	if ($query->num_rows() > 0) {
		return $query->row();
	}
	else
	{
		return false;
		}
}
	
public function submit( $field)
	{

$this->db->insert('university',$field);
	if ($this->db->affected_rows() > 0) {
		return true ;
	}
	else
	{
		return false;
	}
}

	public function update($field)
	{
		$Id = 	$this->input->post('university_id');

	
		$this->db->where('university_id',$Id);
		$this->db->update('university',$field);
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
		$this->db->where('university_id',$Id);
		$this->db->delete('university');
		if ($this->db->affected_rows() > 0) {
		return true ;
	}
	else
	{
		return false;
	}

	}

	
public function myjoin(){
	$this->db->select('*');
	$this->db->from('country');
	$this->db->join('university','country.contry_id = university.contry_id');
	$query = $this->db->get();
	/*echo $this->db->last_query();die();*/
	$result = $query->result();
	return $result;
}

}
