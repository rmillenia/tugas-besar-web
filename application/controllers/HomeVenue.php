<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class HomeVenue extends CI_Controller {

    public function venueEvent()
    {
        $session_data=$this->session->userdata('logged_in');
        $data['username']=$session_data['username'];
        $data['level']=$session_data['level'];
        $data['id']=$session_data['id'];

        $this->load->model('user');
        $id = $data['id'];
        $user = $data['username'];
        $data['name'] = $this->user->selectAll($id,$user);

        $this->load->view('admin/header' ,$data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/venueEvent');
    }

    public function getAllVenueGrid()
    {
        $this->load->model('EventVenueModel');
        
        $result = $this->EventVenueModel->getAllVenue(); 
        header("Content-Type: application/json");
        echo json_encode($result);
    }

    public function addVenueGrid(){
        
        $this->load->model('EventVenueModel');

        
            $this->EventVenueModel->saveVenue();
            
    }

    public function deleteVenueGrid()
    {
        $this->load->model('EventVenueModel');
        $id = $this->input->post('idVenue'); 
        $this->EventVenueModel->deleteVenue($id);
    }

    public function updateVenueGrid()
    {
        $this->load->model('EventVenueModel');
        $id = $this->input->post('idVenue'); 
        $this->EventVenueModel->updateVenue($id);
    }

}

/* End of file Home.php */

?>