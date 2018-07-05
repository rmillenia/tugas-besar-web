<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		
	}
	public function index()
	{	
		$session_data=$this->session->userdata('logged_in');
		$data['username']=$session_data['username'];
		$data['level']=$session_data['level'];
		$data['id']=$session_data['id'];

		$this->load->model('user');
		$this->load->model('HomeAdmin');

		$id = $data['id'];
		$user = $data['username'];
		$data['name'] = $this->user->SelectAll($id,$user);
		$data['countUser'] = $this->HomeAdmin->getCountUser();
		$data['countTicket'] = $this->HomeAdmin->getCountTicket();
		$data['allTicket'] = $this->HomeAdmin->getAllTicket();

		//$this->load->model('user');
		//$id = $data['id'];
		//$user = $data['username'];
		//$data['name'] = $this->user->selectAll($id,$user);

		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/index',$data);
	}

}
