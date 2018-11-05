<?php
class m_cv extends CI_Model {

    function getDataRiwayat(){
        $nim=$this->session->userdata('nim');
        $this->db->select('*');
        $this->db->from('data_melamar');
        $this->db->where('NIM', $nim);
        $query = $this->db->get()->row_array();
        return $query;
    }

    public function get_product(){

    }
    
}
?>
