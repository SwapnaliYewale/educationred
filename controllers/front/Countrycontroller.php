<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Countrycontroller extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('front/home_m', 'h');
        $this->load->model('front/servicemodel', 'sm');
        $this->load->model('front/universitymodel', 'um');
         $this->load->model('front/Scholarshipmodel', 'scol');
         $this->load->model('front/testmodel', 't');
    }
	
	public function usad($countryId)
	{	
/* $countryId =$this->uri->segment(3); */
		
 $data['test_data'] =$this->t->getAlltest();
		 $data['upload_data'] =$this->h->getAllCountry();
		 $data['CountryId_data'] =$this->h->getCountryById($countryId);
		  $data['UniversityCountryId_data'] =$this->um->getUniversityByCountryId($countryId);
		 $data['service_data'] =$this->sm->getAllService();
		 $data['scholarship_data'] =$this->scol->getAllscolarship();
		$this->load->view('front/layouts/header',$data);
		$this->load->view('front/country/usad');
		$this->load->view('front/layouts/footer');
	}
}
