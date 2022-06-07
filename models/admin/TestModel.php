<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestModel extends CI_Model {

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
	
public function submit($field)
	{

		
$this->db->insert('test',$field);
	if ($this->db->affected_rows() > 0) {
		return true ;
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

	public function update($field)
	{
		
		$Id = 	$this->input->post('test_id');

	
		$this->db->where('test_id',$Id);
		$this->db->update('test',$field);
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
		$this->db->where('test_id',$Id);
		$this->db->delete('test');
		if ($this->db->affected_rows() > 0) {
		return true ;
	}
	else
	{
		return false;
	}
	}


}
