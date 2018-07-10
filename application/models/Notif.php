<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notif extends CI_Model {


    public function notifikasi()
    {

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('statusNotif', 0);
        $this->db->where('level', 'user');
        $result = $this->db->get();
        return $result->result();

    }

    function updatenotif($idUser){
    	
    	$data = array(
            'statusNotif'          => 1);
        $this->db->where('idUser', $idUser);
        $this->db->update('user',$data);

    }

    function count(){

    	$query = $this->db->query("SELECT COUNT(idUser) as id from user where level ='user' and statusNotif = 0");
		return $query->result();

    }
	

}

/* End of file Notif.php */
/* Location: ./application/models/Notif.php */