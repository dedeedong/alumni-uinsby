 <?php
  class beranda extends CI_Model{
    function __construct(){
      parent::__construct();
      $this->db1 = $this->load->database('postgredb',true);
      $this->load->database('default',TRUE);
      $this->db2 = $this->load->database('simpeg0511',TRUE);
    }
    
    function Get_all($table){
      $query = $this->db->get($table);
      $data = $query->result();
      return $data;
    }
    function get_all_nim($table){
      $query = $this->db->query('SELECT NIM FROM alumni');
      return $query->result();
    }
    // function Get_All_Rekan(){
    //   $query = $this->db->query('SELECT * from rekan_ika');
    //   $data = $query->result();
    //   return $data;
    // }
    function get_all_rekan(){
      $query = $this->db->query('SELECT * FROM rekan_ika');
      return $query->result();
    }
    // function get_all_pengurus(){
    //   $query = $this->db->query('SELECT * FROM pengurus');
    //   return $query->result();
    // }
    function get_all_useradmin($username,$md5pass){
      $query = $this->db2->query("SELECT username,password FROM simpeg_0511.tbsimpeguser where username = '$username' and password = '$md5pass'");
      return $query->result_array();
    }

    function get_all_admin($username,$md5pass){
      $query = $this->db->query("SELECT username,password FROM alumni.pengurus WHERE username='$username' and password = '$md5pass'");
      return $query->result_array();
    }

    function get_all_id($username,$kodeunit,$nim){
      $query = $this->db1->query("select a.nim, b.kodeunit, b.kodeunitparent, c.username from gate.ms_unit b join akademik.ms_mahasiswa a on 
      a.kodeunit = b.kodeunit join gate.sc_user c on c.username=b.ketua where c.username='$username' and a.statusmhs='L'");
      return $query->result_array();
    }

    function get_all_kodeunitmhs($kode){
      $query = $this->db1->query("select a.nim, b.kodeunit, c.username from gate.ms_unit b join akademik.ms_mahasiswa a on 
      a.kodeunit = b.kodeunit join gate.sc_user c on c.username=b.ketua where b.kodeunit='$kode'");
      return $query->result();
    }

    function Get_All_Lamaran(){
      $this->db->select('lamaran.STATUS_LAMARAN,lamaran.NIM,alumni.NAMA,lowongan.POSISI_LOWONGAN,rekan_ika.NAMA_REKAN');
      $this->db->from('lamaran');
      $this->db->join('alumni','lamaran.NIM=alumni.NIM');
      $this->db->join('lowongan','lamaran.ID_LOWONGAN=lowongan.ID_LOWONGAN');
      $this->db->join('rekan_ika','rekan_ika.ID_REKAN=lowongan.ID_REKAN');
      $query = $this->db->get();
      $result = $query->result();
      return $result;
    }

    function Get_Data_Berita($id){
      $this->db->select('*');
      $this->db->where('ID_BERITA',$id);
      $this->db->from('berita');
      $query = $this->db->get();
      $result = $query->result();
      return $result;
    }
    function Get_Data_Pengurus($id){
      $this->db->select('*');
      $this->db->where('ID_PENGURUS',$id);
      $this->db->from('pengurus');
      $query = $this->db->get();
      $result = $query->result();
      return $result;
    }

    function Get_All_Berita(){
      $this->db->select('*');
      $this->db->from('berita');
      $query = $this->db->get();
      $result = $query->result();
      return $result;
    }
    function Get_All_Trace($nim="",$tanggal=""){
      // $this->db->select("*");
      // $this->db->from("tracer_study");
      // $this->db->where("NIM = '$nim'");
      // $this->db->where("tanggal = '$tanggal'");
      // $this->db->order_by("ID_SOAL","ASC");
      $query = $this->db->query("SELECT * FROM tracer_study where NIM='$nim' and tanggal='$tanggal'");
      $result = $query->result_array();
      //print_r($result);
      return $result;
    }
    
    function Get_All_Tracers($kodeparent = ''){
      if ($kodeparent == '') {
        $query = $this->db->query("SELECT distinct nim,tanggal FROM tracer_study");
      }else {
        $query = $this->db->query("SELECT distinct nim,tanggal FROM tracer_study where nim = '$kodeparent'");
      }
      
      $result = $query->result_array();
      return $result;
    }
    
    // function get_kodeunit($kodeunit1){
    //   $query = $this->db1->query("SELECT kodeunit FROM simpeg_0511.integrasi_unit WHERE kode='".$kodeunit."'");
    //   return $query->reuslt();
    // }

    // function get_kodeunitpost($kodeunit1){
    //   $query = $this->db2->query("select kodeunit from gate.ms_unit where kodeunit='$kodeunit1'");
    // }

    function tipe(){
      $query = $this->db->query('SELECT STATUS, count(ID_BERITA) as JUMLAH FROM berita GROUP BY STATUS');
      return $query->result();
      // $json = [];
      // while($row)
    }

    function cektgl($nim){
      $query = $this->db->query("SELECT tanggal from tracer_study where NIM='$nim' and tanggal=CURDATE()");
      return $query->result_array();
    }

    function dec($nim,$tanggal,$id_soal){
      $query = $this->db->query("SELECT jawaban FROM tracer_study where NIM = '".$nim."' AND ID_SOAL = ".$id_soal." AND tanggal='$tanggal' order by TANGGAL DESC");
      return $query->result();
    }

    function dec1($nim,$id_soal){
      $query = $this->db->query("SELECT jawaban FROM tracer_study where NIM = '".$nim."' AND ID_SOAL = ".$id_soal." order by TANGGAL DESC");
      return $query->result();
    }
    // public function upload(){
    //   // $config['upload_path'] = './uploads/';
    //   $config['allowed_types'] = 'jpg|png|jpeg';
    //   $config['max_size']  = '2048000';
    //   $config['remove_space'] = TRUE;
    //   $this->load->library('upload', $config);
    //
    //   if($this->upload->do_upload('dokumen')){
    //     $return = array('GAMBAR' => $this->upload->data());
    //   }else{
    //     $return = array('error' => $this->upload->display_errors());
    //     return $return;
    //   }
    // }
    public function simpan_berita($upload){
      $now = date('Y-m-d');
      // $imgdata = file_get_contents($imgdata['full_path']);
      $data = array(
        'isi_berita'=>$this->input->post('isi'),
        'judul'=>$this->input->post('judul'),
        'status_berita'=>$this->input->post('publish'),
        'tgl_berita'=>$now,
        'status'=>$this->input->post('status'),
        'gambar'=>$upload
      );
      $this->db->insert('berita',$data);
    //redirect("/admin/berita");
    }
    function simpan($table,$data){
      $this->db->insert($table,$data);
      $param = $this->db->affected_rows();
      return $param;
    }
    function hapus1($nim){
      $this->db->delete('tracer_study',array('ID_SOAL'=>'1','NIM'=>$nim));
      // $query=$this->db->query("DELETE FROM tracer_study WHERE NIM='".$nim."' AND ID_SOAL = '".$id_soal."");
      $result=$this->db->affected_rows();
      return $result;
    }
    function hapus2($nim){
      $this->db->delete('tracer_study',array('ID_SOAL'=>'2','NIM'=>$nim));
      // $query=$this->db->query("DELETE FROM tracer_study WHERE NIM='".$nim."' AND ID_SOAL = '".$id_soal."");
      $result=$this->db->affected_rows();
      return $result;
    }
    function hapus3($nim){
      $this->db->delete('tracer_study',array('ID_SOAL'=>'3','NIM'=>$nim));
      // $query=$this->db->query("DELETE FROM tracer_study WHERE NIM='".$nim."' AND ID_SOAL = '".$id_soal."");
      $result=$this->db->affected_rows();
      return $result;
    }
    function hapus4($nim){
      $this->db->delete('tracer_study',array('ID_SOAL'=>'4','NIM'=>$nim));
      // $query=$this->db->query("DELETE FROM tracer_study WHERE NIM='".$nim."' AND ID_SOAL = '".$id_soal."");
      $result=$this->db->affected_rows();
      return $result;
    }
    function delete($table,$data){
      $this->db->delete($table);
      $param = $this->db->affected_rows();
      return $param;
    }
    function update_batch($table,$data){
      $this->db->update_batch($table,$data);
      $param = $this->db->affected_rows();
      return $param;
    }
    function update($table,$data){
      $this->db->update($table,$data);
      $param = $this->db->affected_rows();
      return $param;
    }
    function edit($table){
      $this->db->update($table);
      $param = $this->db->affected_rows();
      return $param;
    }
    function simpan_batch($table,$data){
      $this->db->insert_batch($table,$data);
      $param = $this->db->affected_rows();
      return $param;
    }

  //   public function view(){
  //   return $this->db->get('gambar')->result();
  //   }
  //
  // // Fungsi untuk melakukan proses upload file
  // public function upload(){
  //   $config['upload_path'] = './images/';
  //   $config['allowed_types'] = 'jpg|png|jpeg';
  //   $config['max_size']  = '2048';
  //   $config['remove_space'] = TRUE;
  //
  //   $this->load->library('upload', $config); // Load konfigurasi uploadnya
  //   if($this->upload->do_upload('gambar')){ // Lakukan upload dan Cek jika proses upload berhasil
  //     // Jika berhasil :
  //     $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
  //     return $return;
  //   }else{
  //     // Jika gagal :
  //     $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
  //     return $return;
  //   }
  // }
  //
  // // Fungsi untuk menyimpan data ke database
  // public function save($upload){
  //   $data = array(
  //     'deskripsi'=>$this->input->post('input_deskripsi'),
  //     'nama_file' => $upload['file']['file_name'],
  //     'ukuran_file' => $upload['file']['file_size'],
  //     'tipe_file' => $upload['file']['file_type']
  //   );
  //
  //   $this->db->insert('gambar', $data);
  //   // function diagram(){
  //   //   $query = $this->db->query('SELECT NAMA_PERUSAHAAN AS hasil FROM riwayat_kerja group by hasil');
  //   //
  //   // }
  // }
  }
?>
