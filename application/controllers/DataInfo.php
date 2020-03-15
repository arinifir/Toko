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
        $status = $this->input->post('status');

        $data = array(
            'hari' => $hari,
            'jam_buka' => $jam_buka,
            'jam_tutup' => $jam_tutup,
            'status' => $status
            );
        $this->m_info->input_data($data,'info_buka');
        redirect('datainfo');    
    }
    function update(){
        $id = $this->input->post('id');
        $hari = $this->input->post('hari');
        $jam_buka = $this->input->post('jam_buka');
        $jam_tutup = $this->input->post('jam_tutup');
        $status = $this->input->post('status');

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
    function ubahstatus($id){
        $params = $this->db->get_where('info_buka', ['status' => 'Open'])->result_array();

        if($params){
            $data = array(
                'status' => 'Closed'
                );

        }else{
            $data = array(
                'status' => 'Open'
                );

        }
        $where = array('id' => $id);
        $this->m_info->update_data($where,$data,'info_buka');
        redirect('datainfo');
    }
}