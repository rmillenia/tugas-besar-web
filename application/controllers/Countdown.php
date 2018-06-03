<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Countdown extends CI_Controller {

	public function index()
	{
		$this->load->view('v_countdown');
	}

 	public function lihat_countdown(){
 		$this->load->model('mcountdown');
 		$result['timer'] = $this->mcountdown->select_time();
 		$this->load->view('v_timer', $result);
 	}

}

/* End of file Countdown.php */
/* Location: ./application/controllers/Countdown.php */