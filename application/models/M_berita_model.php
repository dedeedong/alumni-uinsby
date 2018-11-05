<?php
     class m_berita_model extends CI_Model {
     
	 public function __construct() {
		 $this->load->database();
		 $this->DB2 = $this->load->database('uinsby', TRUE);
     }

    // Menampilkand data berita
   
/*   function Get_all($table){
      $query = $this->db->get($table);
      $data  = $query->result();
      return $data;
    }
    function Get_berita(){
        $result=$this->db->query("SELECT id_berita,isi_berita,judul,tgl_berita,status,gambar from berita WHERE status_berita ='publish' ORDER BY tgl_berita desc");
        return $result;

      // $sql = "SELECT ID,JUDUL,GAMBAR,DATE,CONTENT FROM `post_news` WHERE `STATUS` = 1 AND `date` <= NOW() and ID_BAHASA = 1 order by DATE DESC LIMIT 3;";
			// $result = $this->DB2->query($sql);
			// $data = $result->result_array();
			// return $data;
    }*/

    function tampil_berita($id_berita){
        $result=$this->DB2->query("SELECT ID,JUDUL,GAMBAR,DATE,CONTENT FROM `post_news` WHERE ID = ".$id_berita);
        return $result;
    }

    function get_berita_more($page)
    {
        if ($page == 0) {
          $offset = 0;
        }
        else {

          $offset = $page * 3;
        }
        $limit  = 3;
        $query  = "SELECT ID,JUDUL,GAMBAR,DATE,CONTENT FROM `post_news` WHERE `STATUS` = 1 AND `date` <= NOW() and ID_BAHASA = 1 order by DATE DESC LIMIT $offset, $limit;";
        $result = $this->DB2->query($query)->result();
        return $result;
    }




    }
