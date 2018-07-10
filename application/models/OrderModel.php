<?php defined('BASEPATH') or exit('No direct script access allowed');

class OrderModel extends CI_Model{
		public function order(){
			$query = $this->db->query("SELECT * FROM `order` where status = 'pending'");
			return $query->result();
		}

		public function updateStatus($idOrder){
			$data = array('status' => 'Confirmed', );
			$this->db->where('idOrder', $idOrder);
			$this->db->update('order', $data);

		}

}