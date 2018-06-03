<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class HomeVenue extends CI_Controller {

    public function index()
    {
       $this->load->view('');
    }

    public function venueEvent()
    {
        $this->load->view('admin/header');
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