<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Universitycontroller extends CI_Controller {

	function __construct() {
parent::__construct();

$this->load->database();
$this->load->model('admin/universitymodel','u');
$this->load->model('admin/countrymodel','c');
}

public function viewuniversity()
	{
		$data['upload_data'] = $this->u->myjoin();
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/viewuniversity',$data);
		$this->load->view('admin/layouts/footer');
	}

	public function adduniversity()
	{  
       $data['upload_data'] = $this->c->getAllCountry();
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/adduniversity',$data);
		$this->load->view('admin/layouts/footer');

	}

public function submit()
	{ 
 $field = array(
'contry_id' =>$this->input->post('cid'),
'university_name' =>$this->input->post('uname'),
'university_url' =>$this->input->post('urls'),
'created_at' =>date('Y-m-d H:i:s')
);
 $result = $this->u->submit( $field);
if ($result) {
$this->session->set_flashdata('success_msg','Record Added Successfully');
}
else
{
    $this->session->set_flashdata('error_msg','Failed to add record');
}
redirect(base_url('list-university'));
}


public function edituniversity($countId,$universityId){
    $universityId = $this->uri->segment(3);
    $countId = $this->uri->segment(2);
    $data['country_data'] = $this->c->getCountryById($countId); 
    $data['country_all'] = $this->c->getAllCountry($countId);
    $data['university_all'] = $this->u->getUniversityById($universityId);
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/edituniversity',$data);
        $this->load->view('admin/layouts/footer');
}
public function update()
    {
        $field = array(
        'contry_id' =>$this->input->post('cid'),
        'university_name' =>$this->input->post('uname'),
        'university_url' =>$this->input->post('urls'),
        'created_at' =>date('Y-m-d H:i:s')
        );

               $result =  $this->u->update( $field);
                 if ($result) {
            $this->session->set_flashdata('success_msg','Record Updated Successfully');
        }
        else
        {
            $this->session->set_flashdata('error_msg','Failed to update record');
        }
        redirect(base_url('list-university'));

}

public function delete($Id){
        $result = $this->u->delete($Id);
            if ($result) {
            $this->session->set_flashdata('success_msg','Record Deleted Successfully');
        }
        else
        {
            $this->session->set_flashdata('error_msg','Failed to delete record');
        }
        redirect(base_url('list-university')); 
}
}



