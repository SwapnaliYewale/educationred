<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scholarshipmodel extends CI_Model {

	
	

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
	



	public function getscolarshipById($scholarshipId)
	{
	$this->db->where('scolarship_id',$scholarshipId);
	$query = $this->db->get('scolarship');
	if ($query->num_rows() > 0) {
		return $query->row();
	}
	else{
		return false;
	}
	}
}
/*echo $this->db->last_query();
	die;
	echo "hii";
	die;*/