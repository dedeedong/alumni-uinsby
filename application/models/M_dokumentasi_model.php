<?php
	class m_dokumentasi_model extends CI_Model{
		function __construct(){
			parent::__construct();
		}

		function Get_all($table){
			$query = $this->db->get($table);
			$data  = $query->result();
			return $data;
		}


	}

?>
