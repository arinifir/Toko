<?php 
 
class M_menu extends CI_Model{
	//untuk menampilkan seluruh data pasa tabel user
	function tampil_data(){
		return $this->db->from('menu')->join('kategori', 'kategori.id_kat=menu.id_kat')->get()->result();
	}
	function kategori(){
		return $this->db->get('kategori');
	}
	function menu1(){
		return $this->db->from('menu')
						->join('kategori', 'kategori.id_kat=menu.id_kat')
						->where('menu.id_kat=1')
						->get()->result();
	}
	function menu2(){
		return $this->db->from('menu')
						->join('kategori', 'kategori.id_kat=menu.id_kat')
						->where('menu.id_kat=2')
						->get()->result();
	}
	function menu3(){
		return $this->db->from('menu')
						->join('kategori', 'kategori.id_kat=menu.id_kat')
						->where('menu.id_kat=3')
						->get()->result();
	}
	
	//aksi menambahkan data
    function input_data($data,$table){
		$this->db->insert($table,$data);
    }
 
	//untuk menghapus data
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
    }
	
	//untuk menampilkan data berdasarkan id
    function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	//mengubah data
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function get_data_barang_bykode($jenis_menu){
        $hsl=$this->db->query("SELECT * FROM menu WHERE jenis_menu='$jenis_menu'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'jenis_menu' => $data->jenis_menu,
                    'nama_menu' => $data->nama_menu,
                    'harga_menu' => $data->harga_menu,
                    'gambar' => $data->gambar,
                    );
            }
        }
        return $hasil;
	}
	function logged_id()
    {
        return $this->session->userdata('id');
    }
}