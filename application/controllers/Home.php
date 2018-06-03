<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
       $this->load->view('');
    }

    public function catEvent()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/catEvent');
    }

    public function getAllCatGrid()
    {
        $this->load->model('EventCategoryModel');
        $result = $this->EventCategoryModel->getAllCat(); 
        header("Content-Type: application/json");
        echo json_encode($result);
    }

    public function addCatGrid(){
        
        $this->load->model('EventCategoryModel');

        
            $this->EventCategoryModel->saveCat();
            
    }

    public function deleteCatGrid()
    {
        $this->load->model('EventCategoryModel');
        $id = $this->input->post('idCat'); 
        $this->EventCategoryModel->deleteCat($id);
    }

    public function updateCatGrid()
    {
        $this->load->model('EventCategoryModel');
        $id = $this->input->post('idCat'); 
        $this->EventCategoryModel->updateCat($id);
    }

}

/* End of file Home.php */

?>