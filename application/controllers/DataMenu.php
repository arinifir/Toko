<?php

class DataMenu extends CI_Controller{

    function __construct(){
		parent::__construct();		
		$this->load->model('m_menu');
                $this->load->helper('url');
	}
    public function index(){
        if($this->m_menu->logged_id())
        {
                $data['menu'] = $this->m_menu->tampil_data();
                $data['kategori'] = $this->m_menu->kategori()->result();
                $this->load->view('templates/hearder');
                $this->load->view('admin/dmenu', $data);
                $this->load->view('templates/footer');

        }else{

            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("/login");

        }

    }
    function tambah_aksi(){
        $nama_menu = $this->input->post('nama_menu');
        $harga_menu = $this->input->post('harga_menu');
        $desk_menu = $this->input->post('desk_menu');
        $jenis_menu = $this->input->post('jenis_menu');

        if($jenis_menu=="Makanan"){
            $kategori=1;
        }elseif($jenis_menu=="Minuman"){
            $kategori=2;
        }elseif($jenis_menu=="Lainnya"){
            $kategori=3;
        }

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
            'id_kat' => $kategori
            );
        $this->m_menu->input_data($data,'menu');
        redirect('datamenu');
        
    }
    function update(){
        $id_menu = $this->input->post('id_menu');
        $nama_menu = $this->input->post('nama_menu');
        $harga_menu = $this->input->post('harga_menu');
        $desk_menu = $this->input->post('desk_menu');
        $jenis_menu = $this->input->post('jenis_menu');

        if($jenis_menu=="Makanan"){
            $kategori=1;
        }elseif($jenis_menu=="Minuman"){
            $kategori=2;
        }elseif($jenis_menu=="Lainnya"){
            $kategori=3;
        }

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
            'id_kat' => $kategori
            );

            $where = array(
                'id_menu' => $id_menu
            );

        $this->m_menu->update_data($where,$data,'menu');
        redirect('datamenu');
        
    }
    function hapus($id_menu){
        $params = $this->db->get_where('menu', ['gambar' != 'default.png'])->result_array();
        
        if ($params) {
            $filename = explode(".", $data->gambar)[0];
            return array_map('unlink', glob(FCPATH."assets_admin/products/$filename.*"));
        }

		$where = array('id_menu' => $id_menu);
		$this->m_menu->hapus_data($where,'menu');
		redirect('datamenu');
    }
}