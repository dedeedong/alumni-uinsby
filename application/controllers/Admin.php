<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  function __construct(){
 		parent::__construct();
    $this->load->database('default',TRUE);
    $this->db1 = $this->load->database('postgredb',true);
    $this->db2 = $this->load->database('simpeg0511',TRUE);
    $this->load->model('Beranda');
    $this->load->model('M_login_model');
    $this->load->model('M_login');
 		$this->load->helper(array('form','url','file','download','date'));
 		error_reporting(E_ALL^(E_NOTICE | E_WARNING));
 	}
  public function index(){
    $id=$this->session->userdata('username');
    // $login = $this->M_login->loginAdmin();
    if ($id!=null && $id=='admin') {
    # code...
      redirect(base_url('admin/lamaran'));
      // print_r($id);
    } else if($id==null){
      $this->load->view('admin/login');
    } else {
      redirect(base_url('admin/lap_trace'));
    }
  }
  public function lamaran()
	{
    $id=$this->session->userdata('username');
    // $login = $this->Beranda->get_all_admin();
    if ($id!=null && $id=='admin'){
    # code...
      $data['lamaran'] = $this->Beranda->Get_All_Lamaran();
      // $data1['nama'] = $this->Beranda->get_all_id();
      $this->load->view('admin/header');
      $this->load->view('admin/barsup');
      $this->load->view('admin/lamaran',$data);
      $this->load->view('admin/footer');
    } else {
      redirect(base_url('admin/index'));
    }

    }
  // public function berita(){
  //   $id=$this->session->userdata('username');
  //   $login = $this->M_login->loginAdmin();
  //   if ($id!=null && $login['USERNAME']==$id) {
  //   # code...
  //     $data['berita'] = $this->Beranda->Get_All_Berita();
  //     $this->load->view('admin/header');
  //     $this->load->view('admin/bar');
  //     $this->load->view('admin/berita',$data);
  //     $this->load->view('admin/footer');
  //   } else {
  //     redirect(base_url('admin/index'));
  //   }
  // }

  public function lap_trace(){
    $id=$this->session->userdata('username');
    $kode=$this->session->userdata('kodeunit');
    $kodeparent=$this->session->userdata('kodeunitparent');
    $nim=$this->session->userdata('nim');
    $i=0;
    foreach($nim as $row){
      $nim1[]=$nim[$i][0];
      $i++;
    }
    if ($id!=null && $id=='admin') {
    # code...
      $data['tracer_study'] = $this->Beranda->Get_All_Tracers();
      $this->load->view('admin/header');
      $this->load->view('admin/barsup');
      $this->load->view('admin/tracer',$data);
      $this->load->view('admin/footer');
    } else if($id==null) {
      redirect(base_url('admin/index'));
    }else{
      // print_r($nim1);
      for ($i=0; $i < count($nim1); $i++) { 
        if ($this->Beranda->Get_All_Tracers($nim1[$i]) != null) {
          $hasil[] = $this->Beranda->Get_All_Tracers($nim1[$i]);
        }
      }
      $data['tracer_study'] = $hasil;
      // for ($i=0; $i < count($data['tracer_study'][0]); $i++) { 
      //   echo $data['tracer_study'][0][$i]['nim']."<br>";
      //   echo $data['tracer_study'][0][$i]['tanggal']."<br>";
      // }
      // print_r($data['tracer_study'][0]);

      $this->load->view('admin/header');
      $this->load->view('admin/bar');
      $this->load->view('admin/tracer',$data);
      $this->load->view('admin/footer');
    }
  }

  public function detailtrace_json($nim,$tanggal){
    header('Content-Type: application/json');
    echo json_encode($this->Beranda->Get_All_Trace($nim,$tanggal));
  }

  public function detailtrace($nim,$tanggal){
    $id=$this->session->userdata('username');
    // $login = $this->Beranda->get_all_admin();
    $data['nim'] = $nim;
    $data['tanggal'] = $tanggal;
    $deco=$this->Beranda->dec($nim,$tanggal,1);
    if ($id!=null && $id=='admin') {
    # code...
      $data['tracer_study'] = $this->Beranda->Get_All_Trace();
      $data['data'] = json_decode($deco[0]->jawaban,true);
      
      $this->load->view('admin/header');
      $this->load->view('admin/detailtrace',$data);
      $this->load->view('admin/footer');
    } else if($id==null){
      redirect(base_url('admin/index'));
    }
	else{
      // print_r(json_decode($deco[0]->jawaban,true));
      // foreach($deco[0] as $row){
      //   echo $row['jawaban'];
      // }  
      $data['tracer_study'] = $this->Beranda->Get_All_Trace($nim,$tanggal);
      $data['data'] = json_decode($deco[0]->jawaban,true);
      $data['nim'] = $nim;
      // print_r($data);
      // print_r($this->Beranda->dec($nim,$tanggal,1));
      $this->load->view('admin/header');
      $this->load->view('admin/detailtrace',$data);
      $this->load->view('admin/footer');
    }
    // if($this->session->userdata('nim')){
		// 	$nim=$this->session->userdata('nim');
		//   $deco=$this->Beranda->dec($nim,1);
		// 	if(!empty($deco)){
		// 		$data['data'] = json_decode($deco[0]->jawaban,true);
		// 		// print_r($data);
		// 		$this->load->view('base/header');
		// 		$this->load->view('tracerstudy/sidebar');
		// 		$this->load->view('tracerstudy/pekerjaan',$data);
		// 		$this->load->view('base/footer');
		// 	}else{
		// 		$this->load->view('base/header');
		// 		$this->load->view('tracerstudy/sidebar');
		// 		$this->load->view('tracerstudy/pekerjaan');
		// 		$this->load->view('base/footer');
		// 	}
		// }else{
		// 	//jika tidak login redirect halaman awal
		// }
  }

  public function rekan(){
    $id=$this->session->userdata('username');
    // $login = $this->Beranda->get_all_admin();
    if ($id!=null && $id=='admin') {
    # code...
      $data['rekan'] = $this->Beranda->get_all_rekan();
      $this->load->view('admin/header');
      $this->load->view('admin/barsup');
      $this->load->view('admin/rekan',$data);
      $this->load->view('admin/footer');
    } else {
      $this->load->view('admin/index');
    }
  }
  // public function pengurus(){
  //   $id=$this->session->userdata('username');
  //   $login = $this->M_login->loginAdmin();
  //   if ($id!=null && $login['USERNAME']==$id) {
  //   # code...
  //     $data['pengurus'] = $this->Beranda->get_all_pengurus();
  //     $this->load->view('admin/header');
  //     $this->load->view('admin/bar');
  //     $this->load->view('admin/pengurus',$data);
  //     $this->load->view('admin/footer');
  //   } else {
  //     $this->load->view('admin/index');
  //   }
  // }
  ///////////////////////////////////////////////
  // public function simpan_pengurus(){
  //   $data=array(
  //     'USERNAME'=>$this->input->post('username'),
  //     'PASSWORD'=>$this->input->post('password'),
  //     'NAMA_PENGURUS'=>$this->input->post('nama'),
  //     'STATUS_PENGURUS'=>$this->input->post('status'),
  //     'JABATAN'=>$this->input->post('jabatan')
  //   );
  //   $this->db->insert('pengurus',$data);
  //   redirect('/Admin/pengurus');
  // }
  public function diagram(){
    $id=$this->session->userdata('username');
    // $login = $this->Beranda->get_all_admin();
    if ($id!=null && $id=='admin') {
    # code...
      $data['hasil'] = $this->Beranda->tipe();
      $this->load->view('admin/header');
      $this->load->view('admin/bar');
      $this->load->view('admin/diagram',$data);
      $this->load->view('admin/footer');
    } else {
      redirect(base_url('admin/index'));
    }
  }
  public function save_berita(){
   $data = array();
   $config['upload_path'] = './assets/uploads/';
   $config['allowed_types'] = 'jpg|png|jpeg';
   $config['max_size']  = '2048000';
   $config['remove_space'] = TRUE;
   $this->load->library('upload', $config);
   $now = date('Y-m-d');
   if ( !$this->upload->do_upload('dokumen')){
    $error = array('error' => $this->upload->display_errors());
    return $error;
    //$this->load->view('upload_form', $error);
   }else{
    $data = $this->upload->data('file_name');
    // $query = json_encode($data);
    // print_r($data);
    // $query = $this->db->query("SELECT * from berita where ID_BERITA = '$id'");
    // if ($query->num_rows()==0) {
    //
    // }else{
    //
    // }
    $data1 = array(
      'isi_berita'=>$this->input->post('isi'),
      'judul'=>$this->input->post('judul'),
      'status_berita'=>$this->input->post('publish'),
      'tgl_berita'=>$now,
      'status'=>$this->input->post('status'),
      'GAMBAR'=>$data
    );
    $this->db->insert('berita',$data1);
    redirect('/Admin/berita');
    // if(empty($data1)){
    // }//else{
    //   // $this->db->where('ID_BERITA',$ID_BERITA);
    //   $this->db->update('berita',$data1);
    //   redirect('/Admin/berita'); // Redirect kembali ke halaman awal / halaman view data
    // }
    //$this->load->view('upload_success', $data);
   }
   // if($this->upload->do_upload('dokumen')){
   //   $return = array('GAMBAR' => $this->upload->data());
   // }else{
   //   $return = array('error' => $this->upload->display_errors());
   //   return $return;
   // }

   //$upload = $this->Beranda->upload();
   //$this->Beranda->simpan_berita($upload);
  }
  function logout(){
    $user_data = $this->session->all_userdata();
    $this->session->sess_destroy();
    redirect('Admin/index');
  }
  public function accept($NIM){
    $this->db->set('status_lamaran','Menunggu');
    $this->db->where('NIM', $NIM);
    $query=$this->db->update('lamaran');
    echo $query;
    if ($query==1) {
      redirect("/Admin/");
      // code...
    }else{
      alert("ERROR");
    }
  }

  public function terima_rekan($ID_REKAN){
    $this->db->set('LOGIN','1');
    $this->db->where('ID_REKAN', $ID_REKAN);
    $query=$this->db->update('rekan_ika');
    echo $query;
    if ($query==1) {
      redirect("/Admin/rekan");
      // code...
    }else{
      alert("ERROR");
    }
  }
  public function hapus_rekan($ID_REKAN){

    $this->db->where('ID_REKAN', $ID_REKAN);
    $query = $this->db->delete('rekan_ika');
    if ($query==1) {
      redirect("/Admin/rekan");
      // code...
    }else{
      alert("ERROR");
    }
  }

  public function publish($ID_BERITA){
    $this->db->set('STATUS_BERITA','Publish');
    $this->db->where('ID_BERITA', $ID_BERITA);
    $query=$this->db->update('berita');
    echo $query;
    if ($query==1) {
      redirect("/Admin/berita");
      // code...
    }else{
      alert("ERROR");
    }
  }
  public function notpublish($ID_BERITA){
    $this->db->set('STATUS_BERITA','Not Publish');
    $this->db->where('ID_BERITA', $ID_BERITA);
    $query=$this->db->update('berita');
    echo $query;
    if ($query==1) {
      redirect("/Admin/berita");
      // code...
    }else{
      alert("ERROR");
    }
  }
  public function delete_berita($ID_BERITA){
    $this->db->where('ID_BERITA', $ID_BERITA);
    $query=$this->db->delete('berita');
    echo $query;
    if ($query==1) {
      redirect("/Admin/berita");
      // code...
    }else{
      alert("ERROR");
    }
  }
  // public function refuse(){
  //   $this->db->set('status_lamaran','Ditolak');
  //   $this->db->where('NIM','H76216060');
  //   $this->Beranda->edit('lamaran');
  //   redirect("/admin/lamaran");
  // }
  public function masukadmin(){
    $username = trim($this->input->post('user'));
    $password = trim($this->input->post('pass'));
    $md5pass=md5($password);
    // $par = trim($this->input->post('tampunglogin'));
    $stat['status'] = $this->Beranda->get_all_id($username,$kodeunit,$nim);
    $stat1['status'] = $this->Beranda->get_all_useradmin($username,$md5pass);
    $stat2['status'] = $this->Beranda->get_all_admin($username,$md5pass);
    if(!empty($stat2['status'])){
      foreach($stat2['status'] as $row){
        $username = $row->username;
      }
      $session_user=array(
        'username'=>$username
      );
      $this->session->set_userdata($session_user);
      redirect(base_url("admin/index"));
    }else if(!empty($stat['status'])){
      if(!empty($stat1['status'])){
        $nim = array();
        foreach ($stat['status'] as $row){
          $username = $row['username'];
          $kodeunit = $row['kodeunit'];
          $nim[] = array($row['nim']);
          $kodeunitparent = $row['kodeunitparent'];
        }
        $session_user = array(
        'username'=>$username,
        'kodeunit'=>$kodeunit,
        'nim'=>$nim,
        'kodeunitparent'=>$kodeunitparent
        );
      }
      $this->session->set_userdata($session_user);
      redirect(base_url("admin/index"));
    }
    else {
      $this->session->set_flashdata("login_error", true);
      redirect(base_url("admin/index"));
    }
  }

  public function get_berita($id){
    // $id = $this->input->post('');
    $data['data'] = $this->Beranda->Get_Data_Berita($id);
    echo json_encode($data);
  }

  // public function get_pengurus($id){
  //   // $id = $this->input->post('');
  //   $data['data'] = $this->Beranda->Get_Data_Pengurus($id);
  //   echo json_encode($data);
  // }

}
