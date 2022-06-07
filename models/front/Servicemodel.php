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
	

	public function getServiceById($serviceId)
	{
	$this->db->where('service_id',$serviceId);
	$query = $this->db->get('service');
	/*echo $this->db->last_query();
	die;
	echo "hii";
	die;*/
	if ($query->num_rows() > 0) {
		return $query->row();
	}
	else{
		return false;
	}
	}
}
