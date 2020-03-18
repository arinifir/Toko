<?php

class Info extends CI_Controller{

    function __construct(){
		parent::__construct();		
		$this->load->model('m_info');
                $this->load->helper('url');
                $this->load->library('form_validation');
	}
    public function index(){
        $data['info_buka'] = $this->m_info->tampil_data()->result();
        $this->load->view('templates/huser');
        $this->load->view('info', $data);
        $this->load->view('templates/fuser');

    }
}