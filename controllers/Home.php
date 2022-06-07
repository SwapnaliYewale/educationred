<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('front/home_m', 'h');
        $this->load->model('front/servicemodel', 'sm');
       $this->load->model('front/Scholarshipmodel', 'scol');
        $this->load->model('front/CountryFlagModel', 'cflag');
         $this->load->model('front/Testmodel', 't');

       
    }

	public function indexs()
	{	$data['test_data'] =$this->t->getAlltest();
		 $data['upload_data'] =$this->h->getAllCountry();
		 /* $data['CountryId_data'] =$this->h->getCountryById($countryId);*/
		$data['service_data'] =$this->sm->getAllService();
	$data['scholarship_data'] =$this->scol->getAllscolarship();
	$data['flag_data'] =$this->cflag->getAllcountryflag();
	/*echo "<pre>";
	print_r($data['flag_data']);
	echo die;*/

		$this->load->view('front/layouts/header',$data);
		$this->load->view('front/index');
		$this->load->view('front/layouts/footer');
	}

	public function about()
	{	
		$data['test_data'] =$this->t->getAlltest();
		$data['upload_data'] =$this->h->getAllCountry();
		$data['service_data'] =$this->sm->getAllService();
		$data['scholarship_data'] =$this->scol->getAllscolarship();


		$this->load->view('front/layouts/header',$data);
		$this->load->view('front/about');
		$this->load->view('front/layouts/footer');
	}


	public function contact()
	{	
		$data['test_data'] =$this->t->getAlltest();
		$data['upload_data'] =$this->h->getAllCountry();
		$data['service_data'] =$this->sm->getAllService();
		$data['scholarship_data'] =$this->scol->getAllscolarship();
		$this->load->view('front/layouts/header',$data);
		$this->load->view('front/contact');
		$this->load->view('front/layouts/footer');
	}

public function index()
	{	
		//$this->load->view('front/layouts/header');
		$this->load->view('front/comingsoon');
		//$this->load->view('front/layouts/footer');
	}
}
