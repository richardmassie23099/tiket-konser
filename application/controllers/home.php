<?php

class Home extends CI_Controller {
    public function index () 
        {

            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('home');
            $this->load->view('templates/footer');
            // $this->load->view('login');
        }

        public function __construct()
        {
            parent::__construct() ;
            if ($this->session->userdata('is_login') != true) {
                redirect('login') ;
            }
            $this->load->model('m_tiket') ;
        }
    

}

?>
