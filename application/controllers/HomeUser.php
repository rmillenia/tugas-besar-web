<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class HomeUser extends CI_Controller {

	public function lihat(){
    	$this->load->model('mcountdown');
 		$result['timer'] = $this->mcountdown->select_time();
 		$result['name'] = $this->mcountdown->select_name();
 		$result['count'] = $this->mcountdown->count_time();
 		$result['sche'] = $this->mcountdown->getAllSche();
 		$this->load->view('user/header' , $result);
        $this->load->view('user/home' , $result);
        $this->load->view('user/footer' , $result);
		}
 }