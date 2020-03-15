<?php

class DataMenu extends CI_Controller{

    function __construct(){
		parent::__construct();		
		$this->load->model('m_menu');
                $this->load->helper('url');
	}
    public function index(){
        //$data['admin'] = $this->m_admin->tampil_data()->result();
        $this->load->view('templates/hearder');
        $this->load->view('admin/dmenu');
        $this->load->view('templates/footer');

    }
}