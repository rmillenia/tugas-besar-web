<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeAdmin extends CI_Model{
	public function getCountUser(){
		$query = $this->db->query("SELECT COUNT(idUser) as id from user where level ='user'");
		return $query->result();
	}

	public function getCountTicket(){
		$query = $this->db->query("SELECT remainTicket from eventprice");
		return $query->result();
	}

	public function getAllTicket(){
		$query = $this->db->query("SELECT * from eventschedule inner join eventname on eventschedule.event_id = eventname.id inner join eventcategory on eventschedule.cat_id = eventcategory.idCat inner join eventvenue on eventschedule.venue_id = eventvenue on eventschedule.venue_id = eventvenue.idVanue inner join artist on eventschedule.artist_id = artist.idArtist where MONTH(eventschedule.date) = month(now)) and CONCAT(date, ' ', startTime) as now() limit 5");
		if($query->num_rows()>0){
				return $query->result();
		}else{
			return "empty";
			exit;
		}

	}

}