<?php
class m_lamaran extends CI_Model {

    function getlamaran(){
        $nim=$this->session->userdata('nim');
        $this->db->select('rekan_ika.NAMA_REKAN, lowongan.POSISI_LOWONGAN, lamaran.TGL_APPLY, lamaran.STATUS_LAMARAN');
        $this->db->from('lamaran');
        $this->db->where('lamaran.NIM', $nim);
        $this->db->join('lowongan', 'lamaran.ID_LOWONGAN = lowongan.ID_LOWONGAN');
        $this->db->join('rekan_ika', 'rekan_ika.ID_REKAN = lowongan.ID_REKAN');
        $query = $this->db->get();
        return $query;
    }

    function getDataLowongan($id){
        $this->db->select('*');
        $this->db->from('rekan_ika');
        $this->db->join('lowongan', 'rekan_ika.ID_REKAN = lowongan.ID_REKAN');
        $this->db->where('lowongan.ID_LOWONGAN', $id);
        $query = $this->db->get()->row_array();
        return $query;
    }

    function simpanLamaran($id,$dir){
        $nim=$this->session->userdata('nim');
        $fix=str_replace("C:/xampp/htdocs/ikauinsa/uploads/","",$dir);
        $to   = date("Y-m-d");
        $data = array(
           'ID_LOWONGAN' => $id,
           'NIM' => $nim,
           'STATUS_LAMARAN' => 'Menunggu',
           'TGL_APPLY' => $to,
           'DIR_FILE' => $fix

        );
        $this->db->insert('lamaran', $data);
        return $this->db->affected_rows();
    }


    // public function view(){
    //     return $this->db->get('lamaran')->result();
    //   }

      // Fungsi untuk melakukan proses upload file
    // public function upload(){
//         $config['upload_path'] = './uploads/';
//         $config['allowed_types'] = 'jpg|png|jpeg|pdf|doc|docx';
//         $config['max_size']  = '2048';
//         $config['remove_space'] = TRUE;
//
//         $this->load->library('upload', $config); // Load konfigurasi uploadnya
//         for ($i=1; $i <=3; $i++) {
//             if(!empty($_FILES['berkas'.$i]['name'])){
//
//                   $nama[] = $_FILES['berkas'.$i]['name'];
//
//                 if(!$this->upload->do_upload('berkas'.$i)){
//                     $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
//
//
//
//                     return $return;
//                 }else{
//
//                     $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
//                 }
//             }
//             //
//         }
//         return $return;
// print_r ($nama);
        //redirect('/careeruinsa/info');
    // }

}
?>
