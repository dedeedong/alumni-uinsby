<?php
class m_lowongan extends CI_Model {

    function getsemua(){
        $this->db->select('*');
        $this->db->from('rekan_ika');
        $this->db->join('lowongan', 'rekan_ika.ID_REKAN = lowongan.ID_REKAN');
        $query = $this->db->get();
        return $query;
    }

    function getsemuaid($id){
        $this->db->select('*');
        $this->db->from('rekan_ika');
        $this->db->join('lowongan', 'rekan_ika.ID_REKAN = lowongan.ID_REKAN');
        $this->db->where('lowongan.ID_LOWONGAN',$id);
        $query = $this->db->get()->row_array();
        return $query;
    }

    function getkota(){
        $this->db->select('ID_LOWONGAN, KOTA, COUNT(KOTA) as jumlah');
        $this->db->from('lowongan');
        $this->db->group_by('KOTA');
        $this->db->order_by('jumlah', 'desc');
        $query = $this->db->get();
        return $query;
    }

    function getdetailkota($kota){
        // $result=$this->db->query("SELECT * from lowongan WHERE KOTA = '".$kota."'");
        $this->db->select('*');
        $this->db->from('rekan_ika');
        $this->db->join('lowongan', 'rekan_ika.ID_REKAN = lowongan.ID_REKAN');
        $this->db->where('KOTA',$kota);
        $query = $this->db->get();
        return $query->result();
    }

    function getposisi(){
        $this->db->select('ID_LOWONGAN, POSISI_LOWONGAN, COUNT(POSISI_LOWONGAN) as jumlah');
        $this->db->from('lowongan');
        $this->db->group_by('POSISI_LOWONGAN');
        $this->db->order_by('jumlah', 'desc');
        $query = $this->db->get();
        return $query;
    }

    function getdetailposisi($posisi){
        $this->db->select('*');
        $this->db->from('rekan_ika');
        $this->db->join('lowongan', 'rekan_ika.ID_REKAN = lowongan.ID_REKAN');
        $this->db->where('POSISI_LOWONGAN',$posisi);
        $query = $this->db->get();
        return $query->result();
    }

    function getprodi(){
        $this->db->select('ID_LOWONGAN, JURUSAN, COUNT(JURUSAN) as jumlah');
        $this->db->from('lowongan');
        $this->db->group_by('JURUSAN');
        $this->db->order_by('jumlah', 'desc');
        $query = $this->db->get();
        return $query;
    }

    function getdetailprodi($prodi){
        $this->db->select('*');
        $this->db->from('rekan_ika');
        $this->db->join('lowongan', 'rekan_ika.ID_REKAN = lowongan.ID_REKAN');
        $this->db->where('JURUSAN',$prodi);
        $query = $this->db->get();
        return $query->result();
    }

    function getBursaKerja(){
        $this->db->select("*");
        $this->db->from('rekan_ika');
        $this->db->join('lowongan', 'rekan_ika.ID_REKAN = lowongan.ID_REKAN');
        $this->db->where('lowongan.BURSA_KERJA=1');
        $query = $this->db->get();
        return $query;
    }


}
?>
