<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{	
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/index');
	}

}
