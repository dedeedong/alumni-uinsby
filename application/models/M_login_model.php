<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
	/**
     * @author Fian Hidayah
	 * Model untuk table
	 */
class m_login_model extends CI_Model {

	/**
	 * @author Fian Hidayah
	 * Constructor class
	 */
	function __construct() {
		// Call the Model constructor
		parent::__construct();
		$this->db = $this->load->database('default', TRUE);
		//set waktu yang digunakan ke zona jakarta
		//$this->db_simpeg->query("SET time_zone='Asia/Jakarta'");
	}
	function cek_login_user($id,$password){
		$sql = "select * from alumni where NAMA = '$id' and TANGGAL_LAHIR = '$password'";
		$query = $this->db->query($sql);
		return $query->result();
		// return $this->db_evin->get_where($table,$username);
	}
	function cek_login_rekan($id,$password){
		$sql = "select * from rekan_ika where ID_REKAN = '$id' and PASSWORD = '$password'";
		$query = $this->db->query($sql);
		return $query->result();
		// return $this->db_evin->get_where($table,$username);
	}
	function cek_login_admin($username,$password){
		$sql = "select * from pengurus where USERNAME = '$username' and PASSWORD = '$password'";
		$query = $this->db->query($sql);
		return $query->result();
		// return $this->db_evin->get_where($table,$username);
	}

}
?>
