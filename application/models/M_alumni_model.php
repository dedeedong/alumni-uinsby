<?php
 class m_alumni_model extends CI_Model {
 public function __construct() {
 $this->load->database();
 }

// Menampilkand data berita
function Get_all($table){
	$query = $this->db->get($table);
	$data  = $query->result();
	return $data;
}
function Get_profil($nim){
    $result=$this->db->query("SELECT * from alumni WHERE NIM = '".$nim."'");
    return $result;
}
function tampil_berita($id_berita){
    $result=$this->db->query("SELECT * from berita WHERE ID_BERITA =".$id_berita);

    return $result;
}
}
