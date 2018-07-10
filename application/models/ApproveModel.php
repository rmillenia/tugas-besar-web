<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class ApproveModel extends CI_Model
	{
		public function approve()
		{
			$query = $this->db->query("SELECT * FROM `order` where status = 'confirmed'");
			return $query->result();
		}

	}