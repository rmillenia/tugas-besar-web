<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function login($username,$password)
    {
        $this->db->select('idUser,username,password,level');
        $this->db->from('user');
        $this->db->where('username', $username);
        $this->db->where('password', MD5($password));
        $query = $this->db->get();
        if($query->num_rows()==1){
            return $query->result();
        }else{
            return false;
        }                        
    }

    public function insertUser(){
        $password = $this->input->post('password');
        $pass = md5($password);
        $level = 'user';
        $pic = 'default.png';

            $object = array(
                'name' => $this->input->post('name'),
                'address' => $this->input->post('add'),
                'phoneNumber' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => $pass,
                'level'    => $level,
                'pictureUser'  => $pic

            );

            $this->db->insert('user', $object);
    }

    public function selectAll($id,$username){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $username);
        $this->db->where('idUser', $id);
        $query = $this->db->get();
        if($query->num_rows()==1){
            return $query->result();
        }else{
            return false;
        }                        
    }




}

/* End of file .php */

?>