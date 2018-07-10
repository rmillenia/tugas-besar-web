<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

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

		$this->load->model('Notif');
		$data['notif'] = $this->Notif->notifikasi();
		$data['countNotif'] = $this->Notif->count();

		$this->load->model('OrderModel');
		$data["OrderView"] = $this->OrderModel->order();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar'); 
		$this->load->view('admin/orderView', $data);
	}

	public function update($idOrder){
		$this->load->model('OrderModel');
		$this->OrderModel->updateStatus($idOrder);
		redirect('Order','refresh');


	}

	public function orderUserTable(){
		if ($this->session->userdata('logged_in')) {
            $session_data=$this->session->userdata('logged_in');
            $data['username']=$session_data['username'];
            $data['level']=$session_data['level'];
            $data['id']=$session_data['id'];
            
            $this->load->model('user');
			$id = $data['id'];
			$user = $data['username'];
			$data['name'] = $this->user->selectAll($id,$user);

			$this->load->model('OrderModel');
			$data["ticket"] = $this->OrderModel->getOrderUser($id);
			$this->load->view('user/headerAllEvent',$data);
			$this->load->view('user/ticketHistory',$data); 
			$this->load->view('user/footer', $data);
        }else{
            echo "<script>alert('You Must Login First'); </script>";
            redirect('Login','refresh');
        }

	}

	public function createPdf($idOrder){
		$session_data=$this->session->userdata('logged_in');
		$this->load->model('OrderModel');
		$data['id']=$session_data['id'];
		$id = $data['id'];

		$data["list"] = $this->OrderModel->getTicket($id,$idOrder);
		$this->load->library('pdf');
        $this->pdf->load_view('report/ticket',$data);
	}
}

/* End of file EventName.php */
/* Location: ./application/controllers/EventName.php */