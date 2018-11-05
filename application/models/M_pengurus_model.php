<?php
	class m_pengurus_model extends CI_Model{
		function __construct(){
			parent::__construct();
		}

		function Get_all($table){
			$query = $this->db->get($table);
			$data  = $query->result();
			return $data;
		}

  function Get_pembina(){
      $result=$this->db->query("select nama_pengurus,jabatan from pengurus where status_pengurus = 'pembina'");
      return $result;
  }
	function Get_penasihat(){
      $result=$this->db->query("select nama_pengurus,jabatan from pengurus where status_pengurus = 'penasihat'");
      return $result;
  }
	function Get_pengurus(){
      $result=$this->db->query("select nama_pengurus,jabatan from pengurus where status_pengurus = 'pengurus'");
      return $result;
  }
	}

?>
