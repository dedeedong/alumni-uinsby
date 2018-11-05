<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Base extends CI_Controller {
    function __construct(){
      parent::__construct();
      $this->load->library('session');
      $this->load->model('m_login_model');
      $this->load->model('m_perusahaan');
      $this->load->model('m_lowongan_model');
      $this->load->model('m_berita_model');
      $this->load->model('m_pengurus_model');
      $this->load->model('m_alumni_model');
      $this->load->model('m_dokumentasi_model');
      $this->load->model('m_login');
      $this->load->helper(array('form','url','file','download'));
      error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
      $this->DB3 = $this->load->database('postgredb', TRUE);
    }


    
    public function index()
  	{
		
		
		
      $namacek=$this->session->userdata('nama');
      $login = $this->m_login->loginAlumni();
      $idperu=$this->session->userdata('id');
      $login2 = $this->m_login->loginRekan();
      if ($namacek!=null && $login['NAMA']==$namacek) {
        redirect(base_url("base/home"));
      } else if ($idperu!=null && $login2['ID_REKAN']==$idperu) {
        //$data['berita']   = $this->m_berita_model->Get_berita();
        $this->load->view('ikauinsa/V_header_login_perusahaan');
        $this->load->view('ikauinsa/V_home_login_perusahaan',$data);
      } else {
        $data['lowongan'] = $this->m_lowongan_model->Get_Kerjaan();
      //  //$data['berita']   = $this->m_berita_model->Get_berita();
        $this->load->view('ikauinsa/V_header');
        $this->load->view('ikauinsa/V_home',$data);
      }
	  
	  
	  
	  
      // $josn = file_get_contents(base_url()."base/getContent");
      // $json_data["alumni"] = json_decode($josn);
	  
      $this->load->view('ikauinsa/V_footer',$json_data);

      // if (!file_exists("assets/json/alumni.json")) {
       // $this->get_json();
      // }
      
      // $this->DB2->select ('*');
 
      // $this->DB2->from ('post_news');
      
      // $query = $this->DB2->get();
      
      // $result = $query->result();
      // var_dump($result);
  	}

    public function home()
  	{
      $namacek=$this->session->userdata('nama');
      $login = $this->m_login->loginAlumni();
      $idperu=$this->session->userdata('id');
      $login2 = $this->m_login->loginRekan();
      $data['lowongan'] = $this->m_lowongan_model->Get_Kerjaan();
      //$data['berita']   = $this->m_berita_model->Get_berita();

      if ($namacek!=null && $login['NAMA']==$namacek) {
        # code...
        $this->load->view('ikauinsa/V_header_login');
        $this->load->view('ikauinsa/V_home_login',$data);
        // redirect(base_url("base/home"));
      } else if ($idperu!=null && $login2['ID_REKAN']==$idperu) {
        # code...
        $this->load->view('ikauinsa/V_header_login_perusahaan');
        $this->load->view('ikauinsa/V_home_login_perusahaan',$data);
      } else {
        # code...
        redirect(base_url());
      }
      $this->load->view('ikauinsa/V_footer');
  	}

    public function isi_berita($id_berita){
      $data['isi_berita'] = $this->m_berita_model->tampil_berita($id_berita);
      $namacek=$this->session->userdata('nama');
      $login = $this->m_login->loginAlumni();
      $idperu=$this->session->userdata('id');
      $login2 = $this->m_login->loginRekan();
      if ($namacek!=null && $login['NAMA']==$namacek) {
        $this->load->view('ikauinsa/V_header_login_content',$data);
      } elseif ($idperu!=null && $login2['ID_REKAN']==$idperu) {
        $this->load->view('ikauinsa/V_header_login_content_perusahaan');
      } else {
        $this->load->view('ikauinsa/V_header_content');
      }
      $this->load->view('ikauinsa/V_isi_berita',$data);
      $this->load->view('ikauinsa/V_footer');
    }

    public function about() {
      $namacek=$this->session->userdata('nama');
      $login = $this->m_login->loginAlumni();
      $idperu=$this->session->userdata('id');
      $login2 = $this->m_login->loginRekan();
      if ($namacek!=null && $login['NAMA']==$namacek) {
        $this->load->view('ikauinsa/V_header_login_content',$data);
      } elseif ($idperu!=null && $login2['ID_REKAN']==$idperu) {
        $this->load->view('ikauinsa/V_header_login_content_perusahaan');
      }else{
        $this->load->view('ikauinsa/V_header_content');
      }
      $this->load->view('ikauinsa/V_isi_tentang');
      $this->load->view('ikauinsa/V_footer');
    }
    public function manager() {
      $data['pembina'] = $this->m_pengurus_model->Get_pembina();
      $data['penasihat'] = $this->m_pengurus_model->Get_penasihat();
      $data['pengurus'] = $this->m_pengurus_model->Get_pengurus();
      $namacek=$this->session->userdata('nama');
      $login = $this->m_login->loginAlumni();
      $idperu=$this->session->userdata('id');
      $login2 = $this->m_login->loginRekan();
      if ($namacek!=null && $login['NAMA']==$namacek) {
        $this->load->view('ikauinsa/V_header_login_content',$data);
      }elseif ($idperu!=null && $login2['ID_REKAN']==$idperu) {
        $this->load->view('ikauinsa/V_header_login_content_perusahaan');
      }else{
        $this->load->view('ikauinsa/V_header_content');
      }
      $this->load->view('ikauinsa/V_isi_pengurus',$data);
      $this->load->view('ikauinsa/V_footer');
    }
    public function become() {
      $namacek=$this->session->userdata('nama');
      $login = $this->m_login->loginAlumni();
      $idperu=$this->session->userdata('id');
      $login2 = $this->m_login->loginRekan();
      if ($namacek!=null && $login['NAMA']==$namacek) {
        $this->load->view('ikauinsa/V_header_login_content',$data);
      }elseif ($idperu!=null && $login2['ID_REKAN']==$idperu) {
        $this->load->view('ikauinsa/V_header_login_content_perusahaan');
      }else{
        $this->load->view('ikauinsa/V_header_content');
      }
      $this->load->view('ikauinsa/V_isi_panduan');
      $this->load->view('ikauinsa/V_footer');
    }
    public function docs() {
      $data['dokumentasi']   = $this->m_dokumentasi_model->Get_all('dokumentasi');
      $namacek=$this->session->userdata('nama');
      $login = $this->m_login->loginAlumni();
      $idperu=$this->session->userdata('id');
      $login2 = $this->m_login->loginRekan();
      if ($namacek!=null && $login['NAMA']==$namacek) {
        $this->load->view('ikauinsa/V_header_login_content',$data);
      } elseif ($idperu!=null && $login2['ID_REKAN']==$idperu) {
        $this->load->view('ikauinsa/V_header_login_content_perusahaan');
      }else{
        $this->load->view('ikauinsa/V_header_content');
      }
      $this->load->view('ikauinsa/V_isi_dokumentasi',$data);
      $this->load->view('ikauinsa/V_footer');
    }
    public function profile($nim) {
      $data['profile'] = $this->m_alumni_model->Get_profil($nim);
      $data['nimid'] = $nim;
      $namacek=$this->session->userdata('nama');
      $login = $this->m_login->loginAlumni();
      $idperu=$this->session->userdata('id');
      $login2 = $this->m_login->loginRekan();
      if ($namacek!=null && $login['NAMA']==$namacek) {
        $this->load->view('ikauinsa/V_header_login_content',$data);
      } elseif ($idperu!=null && $login2['ID_REKAN']==$idperu) {
        $this->load->view('ikauinsa/V_header_login_content_perusahaan');
      }else{
        $this->load->view('ikauinsa/V_header_content');
      }
      $this->load->view('ikauinsa/V_profile',$data);
      $this->load->view('ikauinsa/V_footer');
    }

    function get_alumni() {
      // tangkap variabel keyword dari URL
  		$keyword = $this->uri->segment(1);

  		// cari di database
      $data = $this->db->query("select * from alumni")->result();
      echo json_encode($data);
      return true;
      // $arr = array();
      // var_dump($data);

  		echo json_encode($arr);
    }

    public function masukrekan(){

      //scan nama dan user
      $id = trim($this->input->post('kdper'));
      $password = trim($this->input->post('passper'));
      $par = trim($this->input->post('tampunglogin'));
      $md5pass = md5($password);

      //masukan array data
      // $json_string = base_url + 'assets/json/alumni.json';
      // $jsondata = file_get_contents($json_string);
      // $obj = json_decode($jsondata, true);
      // print_r($obj['Result']);

      $stat['status'] = $this->m_login_model->cek_login_rekan($id,$md5pass);
      if(!empty($stat['status'])){
        foreach ($stat['status'] as $row){
            $nim = $row->NIM;
            $nama = $row->NAMA_REKAN;
          }
      // $cek = $this->login_model->cek_login($username,$password)->num_rows()
        $session_user = array(
          'id'=>$id,
          'nama'=>$nama
        );

        $this->session->set_userdata($session_user);
        redirect(base_url("perusahaan/index"));

        // echo ("<script language='javascript'>alert('anda berhasil login')</script>");
      }

      else {
        $this->session->set_flashdata("login_error", true);
        redirect(base_url('?par='.$par."#login"));
          //echo ("<script language='javascript'>alert('Invalid username or password');document.location='..'</script>");
      }

    }

    function logout(){
      $this->session->sess_destroy();
      redirect(base_url());
    }

    function get_json() {
        $myfile = fopen("assets/json/alumni.json","w") or die("Unable To Open FIle");
        ob_start();
        echo file_get_contents("http://intranet.uinsby.ac.id/datalulus.php");
        $contents = trim(ob_get_contents());
        ob_end_clean();
        fwrite($myfile,$contents);
        fclose($myfile);
    }

    public function getContent() {
      $query = "select a.nim,a.nama,a.kodeunit,a.sex,a.tmplahir,a.tgllahir,a.periodelulus, b.namaunit, 
      (select namaunit from gate.ms_unit where kodeunit = (select kodeunitparent from gate.ms_unit where kodeunit = a.kodeunit)) as fakultas
      from akademik.ms_mahasiswa a,gate.ms_unit b 
      where a.statusmhs = 'L' and a.kodeunit = b.kodeunit";
      $result = json_encode($this->DB3->query($query)->result());

      echo $result;
    }

     public function masuk() {


        // print_r ($result);

        $file = file_get_contents(base_url()."/base/getContent");
        // print_r ($file);

        // $myfile = fopen($file,"r") or die("Unable To Open FIle");
        // $datanya = json_decode($file);
        // $readJson = fread($myfile, filesize($file));
        // print_r($datanya);

        $nama = trim($this->input->post('namaselect'));
        $nim = trim($this->input->post('nim'));
        $tgl = trim($this->input->post('datelogin'));

        $arr = json_decode($file, true);

        $banyak = count($arr);
        for ($i=0; $i < $banyak; $i++) {
          if ($arr[$i]['nim'] == $nim) {
            $nimS = $arr[$i]['nim'];
            $namaS = $arr[$i]['nama'];
            $sexS = $arr[$i]['sex'];
            $lahirS = $arr[$i]['tmplahir'];
            $tanggal = $arr[$i]['tgllahir'];
            $lulusS = $arr[$i]['periodelulus'];
            $prodiS = $arr[$i]['namaunit'];
            $fakS = $arr[$i]['fakultas'];
            break;
          }
        }

        $session_user = array(
          'nim'=>$nimS,
          'nama'=>$namaS,
          'sex'=>$sexS,
          'tmplahir'=>$lahirS,
          'tgllahir'=>$tanggal,
          'periodelulus'=>$lulusS,
          'prodi'=>$prodiS,
          'fakultas'=>$fakS
        );

        $insert = array(
          'NIM'=>$nimS,
          'NAMA'=>$namaS,
          'TANGGAL_LAHIR'=>$tanggal
        );
        if ($tgl == $tanggal && $nim!=null && $tgl!=null) {
          $query = $this->db->query("SELECT * from alumni where NIM = '$nim'");
          if ($query->num_rows()==0) {
            $this->db->insert('alumni',$insert);
          }
          $this->session->set_userdata($session_user);
          redirect(base_url("base/home"));
        } else {
            $this->session->set_flashdata("login_error", true);
            redirect(base_url('#login'));
        }
        // fclose($myfile);
     }

     public function saveperreg(){
      $data=$this->m_perusahaan->regPerusahaan();
      redirect(base_url());
     }

     function get_loadmore() {
         $page   =  $_GET['page'];
         $data = $this->m_berita_model->get_berita_more($page);
         foreach($data as $hasil){
            $potong = $hasil->CONTENT;
            $pos = strpos($potong, "</p>");
            $kata = substr($potong,$pos+4,7000);
            // $pos1 = strpos($kata, "</p>");
            // $kata1 = substr($kata,$pos1+4,7000);

            echo "<br />";
           echo '
           <div class="row event_item">
             <div class="col">
               <div class="row d-flex flex-row align-items-end align-items-center">

                 <div class="col-lg-2 order-lg-1 order-2">
                   <div class="event_date d-flex flex-column align-items-center justify-content-center">
                     <div class="event_date_sql hidden">'.$hasil->DATE.'</div>
                     <div class="event_day"></div>
                     <div class="event_month"></div>
                   </div>
                 </div>

                 <div class="col-lg-6 order-lg-2 order-3">
                   <div class="event_content">
                   <div class="event_name"><a class="trans_200" href="'.base_url().'base/isi_berita/'.$hasil->ID.'">'.$hasil->JUDUL.'</a></div>
                   <div class="event_isi">'.$kata.'</div>

                   </div>

                 </div>

                 <div class="col-lg-4 order-lg-3 order-1">
                   <div class="event_image">
                    <img src="http://beta.uinsby.ac.id/assets/uploads/gambar/1/'.$hasil->GAMBAR.'"/>
                   </div>

                 </div>

               </div>

             </div>
           </div>
           ';
         }
         exit;
     }
  }
?>
