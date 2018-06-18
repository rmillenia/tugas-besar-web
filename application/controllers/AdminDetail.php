<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminDetail extends CI_Controller {

	public function index()
	{
		$session_data=$this->session->userdata('logged_in');
        $data['username']=$session_data['username'];
        $data['level']=$session_data['level'];
        $data['id']=$session_data['id'];

        $this->load->model('user');
        $id = $data['id'];
        $user = $data['username'];
        $data['name'] = $this->user->selectAll($id,$user);

		$this->load->model('InputAdminModel');
        $data["admin_list"] = $this->InputAdminModel->getAdmin();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar'); 
        $this->load->view('admin/profileAdmin', $data);
	}

	public function updatePhoto(){
		{
        $this->load->helper('url','form');
        $this->load->library('form_validation');
        $this->load->model('EventArtistModel');
        

        if ($this->form_validation->run()==FALSE){

        }else{

            $config['upload_path']='./assets/imgEvent/';
            $config['allowed_types']='gif|jpg|png';
            $config['max_size']=1000000000;
            $config['max_width']=10240;
            $config['max_height']=7680;

            $this->load->library('upload', $config);
            if (! $this->upload->do_upload('pic')) {
                $this->EventArtistModel->updateno($id);
                echo "<script>alert('Successfully Updated'); </script>";
                redirect('EventArtist','refresh');
                
            }else{
                
                $this->EventArtistModel->updateArtist($id);
                echo "<script>alert('Successfully Updated'); </script>";
                redirect('EventArtist','refresh');
        	}
    	}
	}

}

/* End of file AdminDetail.php */
/* Location: ./application/controllers/AdminDetail.php */