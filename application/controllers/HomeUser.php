<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class HomeUser extends CI_Controller {

	public function lihat(){
		$this->load->model('mcountdown');
                $this->session->unset_userdata('count');
 		$data['timer'] = $this->mcountdown->select_time();
 		$data['name'] = $this->mcountdown->select_name();
 		$data['count'] = $this->mcountdown->count_time();
 		$data['sche'] = $this->mcountdown->getAllSche();
 		$data['ticket'] = $this->mcountdown->getTicket();

 		$this->load->model('EventScheduleModel');
                $data["artist_list"] = $this->EventScheduleModel->getArtistOption();
                $data["cat_list"] = $this->EventScheduleModel->getCatOption();
                $id = $this->input->post('id');
                $data["schedule"] = $this->EventScheduleModel->getSchedule($id);


	        if($this->session->userdata('logged_in')){
	        $session_data=$this->session->userdata('logged_in');
                $data['username']=$session_data['username'];
                $data['level']=$session_data['level'];
                $data['id']=$session_data['id'];

                $this->load->model('Notif');
                $id = $data['id'];
                $data['notif'] = $this->Notif->notifikasiUser($id);

                $this->load->view('user/header',$data);
                $this->load->view('user/home' , $data);
                $this->load->view('user/footer',$data);

		}else{
		$this->load->view('user/header',$data);
                $this->load->view('user/home' , $data);
                $this->load->view('user/footer',$data);
		}
	}

	public function allEvent(){
                $session_data=$this->session->userdata('logged_in');
                $data['username']=$session_data['username'];
                $data['level']=$session_data['level'];
                $data['id']=$session_data['id'];
                $this->load->model('SearchModel');
                $this->load->model('EventScheduleModel');
                $data["artist_list"] = $this->EventScheduleModel->getArtistOption();
                $data["cat_list"] = $this->EventScheduleModel->getCatOption();
                $data['search']=$this->SearchModel->allEvents();
                $data['detail'] = 'All Event';
                $this->load->view('user/headerAllEvent',$data);
		$this->load->view('user/allEvent',$data);
		$this->load->view('user/footer');
	}

       public function update($idOrder){
                $this->load->model('Notif');
                $session_data=$this->session->userdata('logged_in');
                 $data['id']=$session_data['id'];
                $this->Notif->updatenotifUser($idOrder);
                redirect('Order/orderUserTable','refresh');
        }
 }