<?php

class Menu extends CI_Controller{

    function __construct(){
		parent::__construct();		
		$this->load->model('m_menu');
                $this->load->helper('url');
	}
    public function index(){
        $data['menu'] = $this->m_menu->tampil_data();
        $data['menu1'] = $this->m_menu->menu1();
        $data['menu2'] = $this->m_menu->menu2();
        $data['menu3'] = $this->m_menu->menu3();
        $this->load->view('templates/huser');
        $this->load->view('menu', $data);
        $this->load->view('templates/fuser');

    }
    function get_barang(){
        $jenis_menu=$this->input->post('jenis_menu');
        $data=$this->m_menu->get_data_barang_bykode($jenis_menu);
        echo json_encode($data);
    }
}
?>