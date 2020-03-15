<?php

class DataMenu extends CI_Controller{

    function __construct(){
		parent::__construct();		
		$this->load->model('m_menu');
                $this->load->helper('url');
	}
    public function index(){
        $data['menu'] = $this->m_menu->tampil_data()->result();
        $this->load->view('templates/hearder');
        $this->load->view('admin/dmenu', $data);
        $this->load->view('templates/footer');

    }
    function tambah_aksi(){
        $nama_menu = $this->input->post('nama_menu');
        $harga_menu = $this->input->post('harga_menu');
        $desk_menu = $this->input->post('desk_menu');
        $jenis_menu = $this->input->post('jenis_menu');

        $data = array(
            'nama_menu' => $nama_menu,
            'harga_menu' => $harga_menu,
            'desk_menu' => $desk_menu,
            'jenis_menu' => $jenis_menu,
            );
        $this->m_menu->input_data($data,'menu');
        redirect('datamenu');
        
    }
}