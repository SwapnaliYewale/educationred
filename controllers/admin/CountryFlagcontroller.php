<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CountryFlagcontroller extends CI_Controller {

	function __construct() {
        parent::__construct();
         date_default_timezone_set('Asia/Kolkata');
        $this->load->database();
        $this->load->model('admin/countryflagmodel', 'cflag');

    }


    public function viewcountryflag() {
        $data['upload_data'] =$this->cflag->getAllCountryflag();
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/viewcountryflag', $data);
        $this->load->view('admin/layouts/footer');
    }

     public function addcountryflag() {
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/addcountryflag');
        $this->load->view('admin/layouts/footer');
    }

     public function submit() {
        $config['upload_path'] = './assets/admin/uploads/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('userfile')) 
        {
            echo "<script type='text/javascript'>";
            echo "alert('File not uploaded successfully...');window.location='add-faculty';";
            echo " < /script>";       
        } else {
            $FrontFlag = $this->upload-> data();
            $frontflag = $FrontFlag['file_name'];
            array('upload_data' =>$this->upload->data());
        }
    if(!empty($frontflag))
        {
        $field = array(
            'Country_name' => $this->input->post('cname'),
            'studyin' => $this->input->post('studyinc'),
            'frontflag' => $frontflag,
            'created_at' => date('Y-m-d H:i:s')
        );
   }
   else{
     $field = array(
            'Country_name' => $this->input->post('cname'),
            'studyin' => $this->input->post('studyinc'),
            'created_at' => date('Y-m-d H:i:s')
        );
   }
        $result = $this->cflag->submit($field);
        if ($result) {
            $this->session->set_flashdata('success_msg', 'Record Added Successfully');
        } else {
            $this->session->set_flashdata('error_msg', 'Failed to add record');
        }
        redirect(base_url('list-country-flag'));
    }


     public function editcountryflag($Id) {
        $data['upload_data'] = $this->cflag->getcountryflagById($Id);
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/editcountryflag', $data);
        $this->load->view('admin/layouts/footer');
    }

    public function update() {
        $config['upload_path'] = './assets/admin/uploads/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('userfile')) {
            echo "<script type='text/javascript'>";
            echo "alert('File not uploaded successfully...');window.location='add-faculty';";
            echo " < /script>";
        } else {
            $FrontFlag = $this->upload-> data();
            $frontflag = $FrontFlag['file_name'];
            array('upload_data' => $this->upload->data());
        }
         if(!empty($frontflag))
        {
        $field = array(
          
            'Country_name' => $this->input->post('cname'),
            'studyin' => $this->input->post('studyinc'),
            'frontflag' => $frontflag,
            'created_at' => date('Y-m-d H:i:s')
        );
    }
    else
    {
       $field = array(
           'Country_name' => $this->input->post('cname'),
            'studyin' => $this->input->post('studyinc'),
            'created_at' => date('Y-m-d H:i:s')
        ); 
    }
        $result = $this->cflag->update($field);
        if ($result) {
            $this->session->set_flashdata('success_msg', 'Record Updated Successfully');
        } else {
            $this->session->set_flashdata('error_msg', 'Failed to update record');
        }
        redirect(base_url('list-country-flag'));
    }


    public
    function delete($Id) {
        $result = $this->cflag->delete($Id);
        if ($result) {
            $this->session->set_flashdata('success_msg', 'Record Deleted Successfully');
        } else {
            $this->session->set_flashdata('error_msg', 'Failed to delete record');
        }
        redirect(base_url('list-country-flag'));
    }
}
