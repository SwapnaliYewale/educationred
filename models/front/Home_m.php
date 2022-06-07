<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_m extends CI_Model {

	
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

public function getCountryById($countryId)
	{
	$this->db->where('contry_id',$countryId);
	$query = $this->db->get('country');
	if ($query->num_rows() > 0) {
		return $query->row();
	}
	else{
		return false;
	}
	}
	
}
