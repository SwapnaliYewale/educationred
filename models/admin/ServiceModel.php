<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicemodel extends CI_Model {

	public function getAllService()
	{
		
	$query = $this->db->get('service');
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

		
$this->db->insert('service',$field);
	if ($this->db->affected_rows() > 0) {
		return true ;
	}
	else
	{
		return false;
	}
}

public function getServiceById($Id)
	{
	$this->db->where('service_id',$Id);
	$query = $this->db->get('service');
	if ($query->num_rows() > 0) {
		return $query->row();
	}
	else{
		return false;
	}
	}

	public function update($field)
	{
		
		$Id = 	$this->input->post('service_id');

	
		$this->db->where('service_id',$Id);
		$this->db->update('service',$field);
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
		$this->db->where('service_id',$Id);
		$this->db->delete('service');
		if ($this->db->affected_rows() > 0) {
		return true ;
	}
	else
	{
		return false;
	}
	}


}
