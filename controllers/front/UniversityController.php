<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UniversityController extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->database();
       $this->load->model('front/universitymodel','fu');
    }

	
}
