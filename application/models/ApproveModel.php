<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class ApproveModel extends CI_Model
	{
		public function approve()
		{
			$query = $this->db->query("SELECT * FROM `order_detail` as d inner join `order` as o on d.order_code = o.idOrder where status = 'confirmed'");
			return $query->result();
		}

	}