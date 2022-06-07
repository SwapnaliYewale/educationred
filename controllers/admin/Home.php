<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{	
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/index');
		$this->load->view('admin/layouts/footer');
	}

	public function datatable()
	{	

		$this->load->view('admin/layouts/header');
		$this->load->view('admin/datatable');
		$this->load->view('admin/layouts/footer');
	}

	public function editors()
	{	

		$this->load->view('admin/layouts/header');
		$this->load->view('admin/editors');
		$this->load->view('admin/layouts/footer');
	}
}
