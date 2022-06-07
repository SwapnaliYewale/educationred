<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scolarshipmodel extends CI_Model {

	public function getAllscolarship()
	{
		
	$query = $this->db->get('scolarship');
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

		
$this->db->insert('scolarship',$field);
	if ($this->db->affected_rows() > 0) {
		return true ;
	}
	else
	{
		return false;
	}
}

public function getscolarshipById($Id)
	{
	$this->db->where('scolarship_id',$Id);
	$query = $this->db->get('scolarship');
	if ($query->num_rows() > 0) {
		return $query->row();
	}
	else{
		return false;
	}
	}

	public function update($field)
	{
		
		$Id = 	$this->input->post('scolarship_id');

	
		$this->db->where('scolarship_id',$Id);
		$this->db->update('scolarship',$field);
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
		$this->db->where('scolarship_id',$Id);
		$this->db->delete('scolarship');
		if ($this->db->affected_rows() > 0) {
		return true ;
	}
	else
	{
		return false;
	}
	}


}
