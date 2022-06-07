
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServiceController extends CI_Controller {

	
	function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('admin/servicemodel', 's');

    }


    public function viewservice() {
        $data['upload_data'] =$this->s->getAllService();
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/viewservice', $data);
        $this->load->view('admin/layouts/footer');
    }

     public function addservice() {
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/addservice');
        $this->load->view('admin/layouts/footer');
    }

     public function submit() {
        $config['upload_path'] = './assets/admin/uploads/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('bannerimg')) 
        {
            echo "<script type='text/javascript'>";
            echo "alert('File not uploaded successfully...');window.location='add-faculty';";
            echo " < /script>";       
        } else {
            
            $BannerImage = $this->upload->data();
            $bannerimage = $BannerImage['file_name'];
            array('upload_data' => $this->upload->data());
        }
        unset($config);
        $config['upload_path'] = './assets/admin/uploadimage/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $this->upload->initialize($config);
        $this->load->library('upload', $config);
        if (!$this->upload-> do_upload('img')) {
            echo "<script type='text/javascript'>";
            echo "alert('File not uploaded successfully...');window.location='add-faculty';";
            echo " < /script>";       
        } else {
            $Image = $this->upload-> data();
            $image = $Image['file_name'];
            array('upload_data' =>$this->upload->data());
        }
       
        $field = array(
            'service_name' => $this->input->post('servicename'),
            'subtitle' => $this->input->post('subtitle'),
            'description' =>$this->input->post('sdescription'),
            'banner_img' => $bannerimage,
            'image' => $image,
            'created_at' => date('Y-m-d H:i:s')
        );
        $result = $this->s->submit($field);
        if ($result) {
            $this->session->set_flashdata('success_msg', 'Record Added Successfully');
        } else {
            $this->session->set_flashdata('error_msg', 'Failed to add record');
        }
        redirect(base_url('list-service'));
    }


     public function editservice($Id) {
        $data['upload_data'] = $this->s->getServiceById($Id);
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/editservice', $data);
        $this->load->view('admin/layouts/footer');
    }

    public function update() {
        $config['upload_path'] = './assets/admin/uploads/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('bannerimg')) {
            echo "<script type='text/javascript'>";
            echo "alert('File not uploaded successfully...');window.location='add-faculty';";
            echo " < /script>";
        } else {
           
            $BannerImage = $this->upload->data();
            $bannerimage = $BannerImage['file_name'];
            array('upload_data' => $this->upload->data());
        }
        unset($config);
        $config['upload_path'] = './assets/admin/uploadimage/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $this->upload->initialize($config);
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('img')) {
            echo "<script type='text/javascript'>";
            echo "alert('File not uploaded successfully...');window.location='add-faculty';";
            echo " < /script>";       
        } else {
            $Image = $this->upload->data();
            $image = $Image['file_name'];
            array('upload_data' => $this->upload->data()); 
        }
      if(!empty($bannerimage) or !empty($image))
        {
            if(!empty($bannerimage))
            {
        $field = array(
            'service_name' => $this->input->post('servicename'),
            'subtitle' => $this->input->post('subtitle'),
            'description' =>$this->input->post('sdescription'),
            'banner_img' => $bannerimage,
            /*'image' => $image,*/
            'created_at'=>date('Y-m-d H:i:s')
        );
    }
    else{
         $field = array(
            'service_name' => $this->input->post('servicename'),
            'subtitle' => $this->input->post('subtitle'),
            'description' =>$this->input->post('sdescription'),
            /*'banner_img' => $bannerimage,*/
            'image' => $image,
            'created_at'=>date('Y-m-d H:i:s')
        );
    }
    }
    else
    {
        $field = array(
            'service_name' => $this->input->post('servicename'),
            'subtitle' => $this->input->post('subtitle'),
            'description' =>$this->input->post('sdescription'),
           /* 'banner_img' => $bannerimage,
            'image' => $image,*/
            'created_at'=>date('Y-m-d H:i:s')
        );
    }
        $result = $this->s->update($field);
        if ($result) {
            $this->session->set_flashdata('success_msg', 'Record Updated Successfully');
        } else {
            $this->session->set_flashdata('error_msg', 'Failed to update record');
        }
        redirect(base_url('list-service'));
    }


    public
    function delete($Id) {
        $result = $this->s->delete($Id);
        if ($result) {
            $this->session->set_flashdata('success_msg', 'Record Deleted Successfully');
        } else {
            $this->session->set_flashdata('error_msg', 'Failed to delete record');
        }
        redirect(base_url('list-service'));
    }
}
