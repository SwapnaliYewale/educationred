
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ScolarshipController extends CI_Controller {

	
	function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        $this->load->database();
        $this->load->model('admin/scolarshipmodel', 'scol');

    }


    public function viewscholarship() {
        $data['upload_data'] =$this->scol->getAllscolarship();
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/viewscholarship', $data);
        $this->load->view('admin/layouts/footer');
    }

     public function addscholarship() {
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/addscholarship');
        $this->load->view('admin/layouts/footer');
    }

     public function submit() {
        $config['upload_path'] = './assets/admin/uploads/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('scholimg')) 
        {
            echo "<script type='text/javascript'>";
            echo "alert('File not uploaded successfully...');window.location='add-faculty';";
            echo " < /script>";       
        } else {
            
            $ScholarImage = $this->upload->data();
            $scholarimage = $ScholarImage['file_name'];
            array('upload_data' => $this->upload->data());
        }
         unset($config);
        $config['upload_path'] = './assets/admin/scolarshipimg/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $this->upload->initialize($config);
        $this->load->library('upload', $config);
        if (!$this->upload-> do_upload('scholbannerimg')) {
            echo "<script type='text/javascript'>";
            echo "alert('File not uploaded successfully...');window.location='add-faculty';";
            echo " < /script>";       
        } else {
            $BannerImage = $this->upload->data();
            $bannerimage = $BannerImage['file_name'];
            array('upload_data' => $this->upload->data());
        }

        $field = array(
            'scolarship_name' => $this->input->post('scholname'),
            'scolar_description' =>$this->input->post('scholdescription'),
            'scolarship_image' => $scholarimage,
            'scolarshipbanner' => $bannerimage,
            'created_at'=>date('Y-m-d H:i:s')
        );
        $result = $this->scol->submit($field);
        if ($result) {
            $this->session->set_flashdata('success_msg', 'Record Added Successfully');
        } else {
            $this->session->set_flashdata('error_msg', 'Failed to add record');
        }
        redirect(base_url('list-scholarship'));
    }


     public function editscholarship($Id) {
        $data['upload_data'] = $this->scol->getscolarshipById($Id);
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/editscholarship', $data);
        $this->load->view('admin/layouts/footer');
    }

    public function update() {
        $config['upload_path'] = './assets/admin/uploads/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('scholimg')) {
            echo "<script type='text/javascript'>";
            echo "alert('File not uploaded successfully...');window.location='add-faculty';";
            echo " < /script>";
        } else {
           
            $ScholarImage = $this->upload->data();
            $scholarimage = $ScholarImage['file_name'];
            array('upload_data' => $this->upload->data());
        }
         unset($config);
        $config['upload_path'] = './assets/admin/uploadimage/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $this->upload->initialize($config);
        $this->load->library('upload', $config);
        if (!$this->upload-> do_upload('scholbannerimg')) {
            echo "<script type='text/javascript'>";
            echo "alert('File not uploaded successfully...');window.location='add-faculty';";
            echo " < /script>";       
        } else {
            $BannerImage = $this->upload->data();
            $bannerimage = $BannerImage['file_name'];
            array('upload_data' => $this->upload->data());
        }
      
        $field = array(
            'scolarship_name' => $this->input->post('scholname'),
            'scolar_description' =>$this->input->post('scholdescription'),
            'scolarship_image' => $scholarimage,
            'scolarshipbanner' => $bannerimage,
            'created_at'=>date('Y-m-d H:i:s')
        );
        $result = $this->scol->update($field);
        if ($result) {
            $this->session->set_flashdata('success_msg', 'Record Updated Successfully');
        } else {
            $this->session->set_flashdata('error_msg', 'Failed to update record');
        }
        redirect(base_url('list-scholarship'));
    }


    public
    function delete($Id) {
        $result = $this->scol->delete($Id);
        if ($result) {
            $this->session->set_flashdata('success_msg', 'Record Deleted Successfully');
        } else {
            $this->session->set_flashdata('error_msg', 'Failed to delete record');
        }
        redirect(base_url('list-scholarship'));
    }
}
