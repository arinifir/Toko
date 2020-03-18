<?php

class HomeAdmin extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('m_admin');
    }
    public function index(){
        if($this->m_admin->logged_id())
        {
            $data['ad'] = $this->m_admin->jmlAdmin()->result();
            $data['mn'] = $this->m_admin->jmlMenu()->result();
            $this->load->view('templates/hearder');
            $this->load->view("admin/home", $data);
            $this->load->view('templates/footer');     

        }else{

            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("/login");

        }
        
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/menu');
    }
}