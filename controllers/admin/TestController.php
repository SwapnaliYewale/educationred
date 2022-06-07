<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestController extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('admin/TestModel', 't');

    }


    public function viewtest() {
        $data['upload_data'] =$this->t->getAlltest();
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/test/viewtest', $data);
        $this->load->view('admin/layouts/footer');
    }

     public function addtest() {
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/test/addtest');
        $this->load->view('admin/layouts/footer');
    }

     public function submit() {
       $field = array(

        'test_name' =>$this->input->post('tname'),
        'fullformtest_name' =>$this->input->post('ftname'),
        'description' =>$this->input->post('sdescription'),
        'question' =>$this->input->post('question'),
        'updated_at' =>date('Y-m-d H:i:s')
        );
         $result = $this->t->submit( $field);
        if ($result) {
        $this->session->set_flashdata('success_msg','Record Added Successfully');
        }
        else
        {
            $this->session->set_flashdata('error_msg','Failed to add record');
        }
        redirect(base_url('list-test'));
    }


     public function edittest($Id) {
        $data['upload_data'] = $this->t->gettestById($Id);
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/test/edittest', $data);
        $this->load->view('admin/layouts/footer');
    }

    public function update() {
        $field = array(

        'test_name' =>$this->input->post('tname'),
        'fullformtest_name' =>$this->input->post('ftname'),
        'description' =>$this->input->post('sdescription'),
        'question' =>$this->input->post('question'),
        'updated_at' =>date('Y-m-d H:i:s')
        );
         $result = $this->t->update( $field);
        if ($result) {
        $this->session->set_flashdata('success_msg','Record Added Successfully');
        }
        else
        {
            $this->session->set_flashdata('error_msg','Failed to add record');
        }
        redirect(base_url('list-test'));
    }


    public
    function delete($Id) {
        $result = $this->t->delete($Id);
        if ($result) {
            $this->session->set_flashdata('success_msg', 'Record Deleted Successfully');
        } else {
            $this->session->set_flashdata('error_msg', 'Failed to delete record');
        }
        redirect(base_url('list-test'));
    }
}
