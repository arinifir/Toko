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

        $uploadgambar = $_FILES['gambar']['name'];

        if ($uploadgambar) {
            # code...
            $config['allowed_types'] = 'jpg|jpeg|png|gif|jfif';
            $config['max_size'] = '5000';
            $config['upload_path'] = './assets_admin/products/';

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')) {
                # code...
                $img = $this->upload->data('file_name');
                $this->db->set('gambar', $img);
            } else {
                echo $this->upload->displays_errors();
            }
        }

        $data = array(
            'nama_menu' => $nama_menu,
            'harga_menu' => $harga_menu,
            'desk_menu' => $desk_menu,
            'jenis_menu' => $jenis_menu
            );
        $this->m_menu->input_data($data,'menu');
        redirect('datamenu');
        
    }
}