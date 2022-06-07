<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Countrycontroller extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('admin/countrymodel', 'c');

    }


    public function viewcountry() {
        $data['upload_data'] =$this->c->getAllCountry();
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/viewcountry', $data);
        $this->load->view('admin/layouts/footer');
    }

     public function addcountry() {
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/addcountry');
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
            $Image = $this->upload-> data();
            $image = $Image['file_name'];
            array('upload_data' =>$this->upload->data());
        }
        unset($config);
        $config['upload_path'] = './assets/admin/uploadimage/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $this->upload->initialize($config);
        $this->load->library('upload', $config);
        if (!$this->upload-> do_upload('userfile1')) {
            echo "<script type='text/javascript'>";
            echo "alert('File not uploaded successfully...');window.location='add-faculty';";
            echo " < /script>";       
        } else {
            $BannerImage = $this->upload->data();
            $bannerimage = $BannerImage['file_name'];
            array('upload_data' => $this->upload->data());
        }
        unset($config);
        $config['upload_path'] = './assets/admin/uploadflag/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $this->upload->initialize($config);
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('userfile2')) {
            echo "<script type='text/javascript'>";
            echo "alert('File not uploaded successfully...');window.location='add-faculty';";
            echo " < /script>";       
        } else {
            $FlagImage = $this->upload->data();
            $flagimage = $FlagImage['file_name'];
            array('upload_data' => $this->upload->data());
        }
         if(!empty($image) or !empty($bannerimage) or !empty($flagimage))
        {
            if(!empty($image))
        {
        $field = array(
            'contry_name'=>$this->input->post('cname'),
            'title'=>$this->input->post('title'),
            'description'=>$this->input->post('sdescription'),
            'whystudy' => $this->input->post('whythisbtn'),
            'universitybtn' => $this->input->post('universitybtn'),       
            'image'=> $image,
            'created_at'=>date('Y-m-d H:i:s')
        );
    }
    else if(!empty($bannerimage))
    {
            $field = array(
            'contry_name'=>$this->input->post('cname'),
            'title'=>$this->input->post('title'),
            'description'=>$this->input->post('sdescription'),
            'whystudy' => $this->input->post('whythisbtn'),
            'universitybtn' => $this->input->post('universitybtn'),
            'banner_image'=>$bannerimage,
            'created_at'=>date('Y-m-d H:i:s')
        );
    }
    else{
            $field = array(
            'contry_name'=>$this->input->post('cname'),
            'title'=>$this->input->post('title'),
            'description'=>$this->input->post('sdescription'),
            'whystudy' => $this->input->post('whythisbtn'),
            'universitybtn' => $this->input->post('universitybtn'),
            'flag_image'=>$flagimage,
            'created_at'=>date('Y-m-d H:i:s')
        );
    }
    }
    else{
         
        $field = array(
            'contry_name'=>$this->input->post('cname'),
            'title'=>$this->input->post('title'),
            'description'=>$this->input->post('sdescription'),
            'whystudy' => $this->input->post('whythisbtn'),
            'universitybtn' => $this->input->post('universitybtn'),
            'created_at'=>date('Y-m-d H:i:s')
        );
    }
        $result = $this->c->submit($field);
        if ($result) {
            $this->session->set_flashdata('success_msg', 'Record Added Successfully');
        } else {
            $this->session->set_flashdata('error_msg', 'Failed to add record');
        }
        redirect(base_url('list-country'));
    }


     public function editcountry($Id) {
        $data['upload_data'] = $this->c->getCountryById($Id);
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/editcountry', $data);
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
            $Image = $this->upload->data();
            $image = $Image['file_name'];
            array('upload_data' => $this->upload->data());
        }

        unset($config);
        $config['upload_path'] = './assets/admin/uploadimage/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $this->upload->initialize($config);
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('userfile1')) {
            echo "<script type='text/javascript'>";
            echo "alert('File not uploaded successfully...');window.location='add-faculty';";
            echo " < /script>";       
        } else {
            $BannerImage = $this->upload->data();
            $bannerimage = $BannerImage['file_name'];
            array('upload_data' => $this->upload->data());
        }
        
        unset($config);
        $config['upload_path'] = './assets/admin/uploadflag/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $this->upload->initialize($config);
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('userfile2')) {
            echo "<script type='text/javascript'>";
            echo "alert('File not uploaded successfully...');window.location='add-faculty';";
            echo " < /script>";       
        } else {
            $FlagImage = $this->upload->data();
            $flagimage = $FlagImage['file_name'];
            array('upload_data' => $this->upload->data());
        }
         if(!empty($image) or !empty($bannerimage) or !empty($flagimage))
        {
            if(!empty($image))
        {
        $field = array(
            'contry_name'=>$this->input->post('cname'),
            'title'=>$this->input->post('title'),
            'description'=>$this->input->post('sdescription'),
            'whystudy' => $this->input->post('whythisbtn'),
            'universitybtn' => $this->input->post('universitybtn'),       
            'image'=> $image,
            'created_at'=>date('Y-m-d H:i:s')
        );
    }
    else if(!empty($bannerimage))
    {
            $field = array(
            'contry_name'=>$this->input->post('cname'),
            'title'=>$this->input->post('title'),
            'description'=>$this->input->post('sdescription'),
            'whystudy' => $this->input->post('whythisbtn'),
            'universitybtn' => $this->input->post('universitybtn'),
            'banner_image'=>$bannerimage,
            'created_at'=>date('Y-m-d H:i:s')
        );
    }
    else{
            $field = array(
            'contry_name'=>$this->input->post('cname'),
            'title'=>$this->input->post('title'),
            'description'=>$this->input->post('sdescription'),
            'whystudy' => $this->input->post('whythisbtn'),
            'universitybtn' => $this->input->post('universitybtn'),
            'flag_image'=>$flagimage,
            'created_at'=>date('Y-m-d H:i:s')
        );
    }
    }
    else{
         
        $field = array(
            'contry_name'=>$this->input->post('cname'),
            'title'=>$this->input->post('title'),
            'description'=>$this->input->post('sdescription'),
            'whystudy' => $this->input->post('whythisbtn'),
            'universitybtn' => $this->input->post('universitybtn'),
            'created_at'=>date('Y-m-d H:i:s')
        );
    }
        $result = $this->c->update($field);
        if ($result) {
            $this->session->set_flashdata('success_msg', 'Record Updated Successfully');
        } else {
            $this->session->set_flashdata('error_msg', 'Failed to update record');
        }
        redirect(base_url('list-country'));
    }


    public function delete($Id) {
        $result = $this->c->delete($Id);
        if ($result) {
            $this->session->set_flashdata('success_msg', 'Record Deleted Successfully');
        } else {
            $this->session->set_flashdata('error_msg', 'Failed to delete record');
        }
        redirect(base_url('list-country'));
    }
}
