<?php

class DataAdmin extends CI_Controller{

    function __construct(){
		parent::__construct();		
		$this->load->model('m_admin');
                $this->load->helper('url');
                $this->load->library('form_validation');
	}
    public function index(){
        $data['admin'] = $this->m_admin->tampil_data()->result();
        $this->load->view('templates/hearder');
        $this->load->view('admin/dadmin', $data);
        $this->load->view('templates/footer');

    }
    function tambah_aksi(){
        
            $nama = $this->input->post('nama');
            $jk = $this->input->post('jk');
            $notelp = $this->input->post('notelp');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
    
            $data = array(
                'nama' => $nama,
                'jk' => $jk,
                'notelp' => $notelp,
                'username' => $username,
                'password' => md5($password)
                );
            $this->m_admin->input_data($data,'admin');
            redirect('dataadmin');
        
		
    }
    function hapus($id){
		$where = array('id' => $id);
		$this->m_admin->hapus_data($where,'admin');
		redirect('dataadmin');
    }
    function update(){
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $jk = $this->input->post('jk');
            $notelp = $this->input->post('notelp');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
    
            $data = array(
                'nama' => $nama,
                'jk' => $jk,
                'notelp' => $notelp,
                'username' => $username,
                'password' => md5($password)
                );
     
        $where = array(
            'id' => $id
        );
     
        $this->m_admin->update_data($where,$data,'admin');
        redirect('dataadmin');
    }
}