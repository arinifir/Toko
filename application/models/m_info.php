<?php 
 
class M_info extends CI_Model{
	//untuk menampilkan seluruh data pasa tabel admin
	function tampil_data(){
		return $this->db->get('info_buka');
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
 
	//mengubah data
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function logged_id()
    {
        return $this->session->userdata('id');
    }
}