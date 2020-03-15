<?php

class HomeAdmin extends CI_Controller{

    public function index(){
        $this->load->view('templates/hearder');
        $this->load->view("admin/home");
        $this->load->view('templates/footer');
        
    }
}