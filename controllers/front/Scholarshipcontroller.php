
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scholarshipcontroller extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('front/home_m', 'h');
        $this->load->model('front/servicemodel', 'sm');
        $this->load->model('front/Scholarshipmodel', 'scol');
        $this->load->model('front/testmodel', 't');

    }

	public function scholarship($scholarshipId)
	{	
		$data['test_data'] =$this->t->getAlltest();
		$data['upload_data'] =$this->h->getAllCountry();
		$data['service_data'] =$this->sm->getAllService();
		$data['scholarship_data'] =$this->scol->getAllscolarship();
		$data['scholarshipId_data'] =$this->scol->getscolarshipById($scholarshipId);
		$this->load->view('front/layouts/header',$data);
		$this->load->view('front/Scholarship/scholarship');
		$this->load->view('front/layouts/footer');
	}

	
}
