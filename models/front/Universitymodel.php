<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Universitymodel extends CI_Model {

	public function getUniversityByCountryId($countryId)
	{

		$this->db->select('*');
		$this->db->from('university');
		$this->db->where('contry_id',$countryId);
		$query = $this->db->get();
		/*echo $this->db->last_query();die();*/
		$result = $query->result();
		return $result;

	}
	


}
