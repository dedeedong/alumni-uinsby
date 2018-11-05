<?php
	class m_lowongan_model extends CI_Model{
		function __construct(){
			parent::__construct();
		}

		function Get_all($table){
			$query = $this->db->get($table);
			$data  = $query->result();
			return $data;
		}

  function Get_Kerjaan(){
      $result=$this->db->query("SELECT id_lowongan,nama_rekan,posisi_lowongan,kota,tgl_posting,tgl_selesai FROM lowongan INNER JOIN rekan_ika ON lowongan.id_rekan=rekan_ika.id_rekan where tgl_selesai >= now()");
      return $result;
  }
	}

?>
