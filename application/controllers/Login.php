<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Login extends CI_Controller {
    
        public function index()
        {
            $this->load->view('login');
        }

        public function logout()
        {
            $this->load->library('session');
            $this->session->unset_userdata('logged_in');
            $this->session->sess_destroy();
            redirect('Login','refresh');
        }

        public function cekDb($password)
        {
            # code...
            $this->load->model('User');
            $username = $this->input->post('username'); 
            $result = $this->User->login($username,$password);
            if($result){
                $session_array = array();
                foreach ($result as $key) {
                    $session_array = array(
                        'id'=>$key->idUser,
                        'username'=>$key->username,
                        'level'=>$key->level
                    );
                    $this->session->set_userdata('logged_in',$session_array);
                }
                return true;
            }else{
                $this->form_validation->set_message('cekDb',"login failed");
                return false;
            }
        }

        public function cekLogin()
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('username', 'Username', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_cekDb');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('login');
            } else {
                $session_data = $this->session->userdata('logged_in');
                $data['username'] = $session_data['username'];
                $data['level'] = $session_data['level'];
                if ($data['level']=='user') {
                    redirect('HomeUser','refresh');
                }else{
                redirect('Welcome','refresh');
                }
            }
        }

        public function registrasi()
        {
            $this->load->view('registrasiView');
        }

        public function create()
        {
        $this->load->library('form_validation');
        $this->load->model('User');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('level', 'Level', 'trim|required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('registrasiView');
        } else {
                $this->User->insertUser();
                echo '<script>alert("Successfully Registered")</script>';
                redirect('Login','refresh');
            }

    }
}