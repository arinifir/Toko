<?php

class DataInfo extends CI_Controller{

    function __construct(){
		parent::__construct();		
		$this->load->model('m_info');
                $this->load->helper('url');
                $this->load->library('form_validation');
	}
    public function index(){
        $data['info_buka'] = $this->m_info->tampil_data()->result();
        $this->load->view('templates/hearder');
        $this->load->view('admin/dinfo', $data);
        $this->load->view('templates/footer');

    }
    function tambah_aksi(){
        
        $hari = $this->input->post('hari');
        $jam_buka = $this->input->post('jam_buka');
        $jam_tutup = $this->input->post('jam_tutup');
        $jadwal = $this->input->post('jadwal');

        $data = array(
            'hari' => $hari,
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'jadwal' => $jadwal
            );
        $this->m_info->input_data($data,'info_buka');
        redirect('datainfo');    
    }
    function update(){
        $id = $this->input->post('id');
        $hari = $this->input->post('hari');
        $jam_buka = $this->input->post('jam_buka');
        $jam_tutup = $this->input->post('jam_tutup');
        $jadwal = $this->input->post('jadwal');

        $data = array(
            'hari' => $hari,
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup
            );
 
        $where = array(
            'id' => $id
        );
    
        $this->m_info->update_data($where,$data,'info_buka');
        redirect('datainfo');
    }
    function hapus($id){
		$where = array('id' => $id);
		$this->m_info->hapus_data($where,'info_buka');
		redirect('datainfo');
    }
    function ubahjadwal($id){
        $jadwalc = $this->input->post("Closed");
        $jadwalo = $this->input->post("Open");

        if($data = array('jadwal' => 'Open')){
            $data = array(
                'jadwal' => $jadwalc
                );

                $where = array('id' => $id);
                $this->m_info->update_data($where,$data,'info_buka');
                redirect('datainfo');
        }else{
            $data = array(
                'jadwal' => 'Open'
                );
                $where = array('id' => $id);
                $this->m_info->update_data($where,$data,'info_buka');
                redirect('datainfo');
        }
    }
}