<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('zend');
        $this->zend->load('zend/barcode');
        
         if ($this->session->userdata('logged_in')) {
            $session_data=$this->session->userdata('logged_in');
            $data['username']=$session_data['username'];
            $data['level']=$session_data['level'];
            $data['id']=$session_data['id'];
        }else{
            echo "<script>alert('You Must Login First'); </script>";
            redirect('Login','refresh');
        }
    }

	public function home($idPrice)
	{
		$session_data=$this->session->userdata('count');
        $data['numberTicket'] = $session_data['qty'] ;  

        $session_data=$this->session->userdata('logged_in');
        $data['username']=$session_data['username'];
        $data['level']=$session_data['level'];
        $data['id']=$session_data['id'];

        $this->load->model('user');
        $id = $data['id'];
        $data['name'] = $this->user->selectAll($id);

        $this->load->model('SearchModel');
        $this->load->model('EventScheduleModel');
        $data["artist_list"] = $this->EventScheduleModel->getArtistOption();
        $data["cat_list"]    = $this->EventScheduleModel->getCatOption();
        $data['detail']      = $this->SearchModel->detailTickets($idPrice);
        $data['search']      = $this->SearchModel->detailAll($id);

        $this->load->view('user/headerAllEvent', $data);
        $this->load->view('user/payment', $data);
        $this->load->view('user/footer'); 
		
	}

    public function input(){ 
        $session_data=$this->session->userdata('logged_in');
        $data['username']=$session_data['username'];
        $data['level']=$session_data['level'];
        $data['id']=$session_data['id'];
        $session_data=$this->session->userdata('count'); 
        $data['numberTicket'] = $session_data['qty'] ;
        $qty = $data['numberTicket']; 
        

        $this->load->model('Order');
        $this->Order->inputOrder($qty);

        
        $query = $this->db->query("SELECT codeTicket FROM order_detail ORDER BY idDetail desc limit $qty;");
          foreach ($query->result() as $key) {
            $code = $key->codeTicket;
            $this->barcode($code);
           } 

        $this->session->unset_userdata('count');
        echo "<script>alert('Data Sedang diproses tunggu beberapa saat'); </script>";
        redirect('Payment/confirmation','refresh');

    }

    public function barcode($code){

        $file = Zend_Barcode::draw('code128', 'image', array('text'=>$code),array());
        $store_image = imagejpeg($file,"assets/imgEvent/barcode/{$code}.jpg");
         return $code.'.jpg';
    }

    public function confirmation(){

         $session_data=$this->session->userdata('logged_in');
        $data['username']=$session_data['username'];
        $data['level']=$session_data['level'];
        $data['id']=$session_data['id'];

        $this->load->model('user');
        $id = $data['id'];
        $data['name'] = $this->user->selectAll($id);


        $this->load->view('user/headerAllEvent', $data);
        $this->load->view('user/confirmation');
        $this->load->view('user/footer'); 

    }
}

    

/* End of file Payment.php */
/* Location: ./application/views/admin/Payment.php */