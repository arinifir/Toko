<?php

class DataInfo extends CI_Controller{

    function __construct(){
		parent::__construct();		
		$this->load->model('m_info');
                $this->load->helper('url');
                $this->load->library('form_validation');
	}
    public function index(){
        if($this->m_info->logged_id())
        {
                $data['info_buka'] = $this->m_info->tampil_data()->result();
                $this->load->view('templates/hearder');
                $this->load->view('admin/dinfo', $data);
                $this->load->view('templates/footer');

        }else{

                //jika session belum terdaftar, maka redirect ke halaman login
                redirect("/login");

    }

    }
    function tambah_aksi(){
        $hari = $this->input->post('hari');
        $jam_buka = $this->input->post('jam_buka');
        $jam_tutup = $this->input->post('jam_tutup');
        $status = $this->input->post('status');
        $sql = $this->db->query("SELECT hari FROM info_buka WHERE hari='$hari'");
        $cek = $sql->num_rows();
        if($cek > 0){
            redirect('datainfo'); 
        }else{
            $data = array(
                'hari' => $hari,
                'jam_buka' => $jam_buka,
                'jam_tutup' => $jam_tutup,
                'status' => $status
                );
            $this->m_info->input_data($data,'info_buka');
            redirect('datainfo'); 
        }
        

   
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
            'jam_tutup' => $jam_tutup,
            'status' => $status
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
    function buka($id){

            $data = array(
                'status' => 'Open'
                );

        $where = array('id' => $id);
        $this->m_info->update_data($where,$data,'info_buka');
        redirect('datainfo');
    }
    function tutup($id){

        $data = array(
            'status' => 'Closed'
            );

    $where = array('id' => $id);
    $this->m_info->update_data($where,$data,'info_buka');
    redirect('datainfo');
}
}