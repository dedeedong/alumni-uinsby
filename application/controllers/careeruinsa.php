<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

    class Careeruinsa extends CI_Controller {
      function __construct(){
          parent::__construct();
           $this->load->model('');
           $this->load->model('M_alumni');
           $this->load->model('M_lowongan');
           $this->load->model('M_lamaran');
           $this->load->model('M_cv');
           $this->load->model('M_login');
    }

	public function index() {
        $namacek=$this->session->userdata('nama');
        $login = $this->M_login->loginAlumni();
        if ($namacek!=null && $login['NAMA']==$namacek) {
        # code...
            $this->load->view('lowongan/V_header');
            $this->load->view('lowongan/V_home');
        } else {
            redirect(base_url('base/home'));
        }
    }
    public function alumni() {
        $namacek=$this->session->userdata('nama');
        $login = $this->M_login->loginAlumni();
        if ($namacek!=null && $login['NAMA']==$namacek) {
        # code...
            $this->load->view('lowongan/V_header');
            $data["getDataAlumni"] = $this->M_alumni->getDataAlumni();
            $data["getriwayatpkj"] = $this->M_alumni->getriwayatpkj();
            $data["getsoftskill"] = $this->M_alumni->getsoftskill();
            $data["getbahasa"] = $this->M_alumni->getBahasa();
            $data["gethard"] = $this->M_alumni->getHard();
            $data["getdataalumni"] = $this->M_alumni->getDataAlumni();
            $data["getdatariwayat"] = $this->M_cv->getDataRiwayat();
            $this->load->view('lowongan/V_alumni',$data);
        } else {
            redirect(base_url());
        }
    }
    function get_data_alumni() {
      $data["getdataalumni"] = $this->M_alumni->getDataAlumni();
      echo json_encode($data["getdataalumni"]);
      return true;
    }

    public function cv() {
        $namacek=$this->session->userdata('nama');
        $login = $this->M_login->loginAlumni();
        if ($namacek!=null && $login['NAMA']==$namacek) {
        # code...
            $this->load->view('lowongan/V_header');
            $data["getriwayatpkj"] = $this->M_alumni->getriwayatpkj();
            $data["getdataalumni"] = $this->M_alumni->getDataAlumni();
            $data["getdatariwayat"] = $this->M_cv->getDataRiwayat();
            $data["getsoftskill"] = $this->M_alumni->getsoftskill();
            $data["getbahasa"] = $this->M_alumni->getBahasa();
            $data["gethard"] = $this->M_alumni->getHard();
            $this->load->view('lowongan/V_cv',$data);
        } else {
            redirect(base_url());
        }
    }
    public function lowongan() {
        $namacek=$this->session->userdata('nama');
        $login = $this->M_login->loginAlumni();
        if ($namacek!=null && $login['NAMA']==$namacek) {
        # code...
            $this->load->view('lowongan/V_header');
            $data["getsemua"] = $this->M_lowongan->getsemua();
            $data["getkota"] = $this->M_lowongan->getkota();
            $data["getposisi"] = $this->M_lowongan->getposisi();
            $data["getprodi"] = $this->M_lowongan->getprodi();
            $data["getbursa"] = $this->M_lowongan->getBursaKerja();
            $this->load->view('lowongan/V_lowongan',$data);
        } else {
            redirect(base_url());
        }
    }
    public function info() {
        $namacek=$this->session->userdata('nama');
        $login = $this->M_login->loginAlumni();
        if ($namacek!=null && $login['NAMA']==$namacek) {
        # code...
            $this->load->view('lowongan/V_header');
            $data["getlamaran"] = $this->M_lamaran->getlamaran();
            $this->load->view('lowongan/V_info',$data);
        } else {
            redirect(base_url());
        }
    }
    public function detail($id) {
        $namacek=$this->session->userdata('nama');
        $login = $this->M_login->loginAlumni();
        if ($namacek!=null && $login['NAMA']==$namacek) {
        # code...
            $this->load->view('lowongan/V_header');
            $data["getlowo"] = $this->M_lamaran->getDataLowongan($id);
            $data["getsemua"] = $this->M_lowongan->getsemuaid($id);
            $this->load->view('lowongan/V_detail',$data);
        } else {
            redirect(base_url());
        }
    }


    public function riwayatkerja(){
        $namacek=$this->session->userdata('nama');
        $login = $this->M_login->loginAlumni();
        if ($namacek!=null && $login['NAMA']==$namacek) {
        # code...
            $this->load->view('lowongan/V_header');
            $this->load->view('lowongan/V_riwayatkerja');
        } else {
            redirect(base_url());
        }
    }
    public function tambahperusahaan(){
        $namacek=$this->session->userdata('nama');
        $login = $this->M_login->loginAlumni();
        if ($namacek!=null && $login['NAMA']==$namacek) {
        # code...
            $this->load->view('lowongan/V_header');
            $this->load->view('lowongan/V_tambahperusahaan');
        } else {
            redirect(base_url());
        }
    }
    public function tambahhardskill(){
        $namacek=$this->session->userdata('nama');
        $login = $this->M_login->loginAlumni();
        if ($namacek!=null && $login['NAMA']==$namacek) {
        # code...
            $data["gethardskill"] = $this->M_alumni->gethardskill();
            $this->load->view('lowongan/V_header');
            $this->load->view('lowongan/V_hardskill',$data);
        } else {
            redirect(base_url());
        }
    }
    public function softskill(){
        $namacek=$this->session->userdata('nama');
        $login = $this->M_login->loginAlumni();
        if ($namacek!=null && $login['NAMA']==$namacek) {
        # code...
            $this->load->view('lowongan/V_header');
            $this->load->view('lowongan/V_softskill');
        } else {
            redirect(base_url());
        }

    }

    function getSoftJson() {
        $data["getsoftjson"] = $this->M_alumni->getsoftskill()->result_array();
        echo json_encode($data["getsoftjson"]);
        return true;
    }

    function getHardJson() {
    $data["gethardjson"] = $this->M_alumni->gethardskill_json();
    echo json_encode($data["gethardjson"]);
    return true;
    }

    function getBhsJson() {
        $data["getbhsjson"] = $this->M_alumni->getlanguage_json();
        echo json_encode($data["getbhsjson"]);
        return true;
        }

    public function bahasa(){
        $namacek=$this->session->userdata('nama');
        $login = $this->M_login->loginAlumni();
        if ($namacek!=null && $login['NAMA']==$namacek) {
        # code...
            $this->load->view('lowongan/V_header');
            $data["getlanguage"] = $this->M_alumni->getlanguage();
            $this->load->view('lowongan/V_bahasa',$data);
        } else {
            redirect(base_url());
        }
    }

    public function detaillowonganKota($kota){
        $namacek=$this->session->userdata('nama');
        $login = $this->M_login->loginAlumni();
        if ($namacek!=null && $login['NAMA']==$namacek) {
        # code...
            $this->load->view('lowongan/V_header');
            $data["getdetailkota"] = $this->M_lowongan->getdetailkota($kota);
            $this->load->view('lowongan/V_lowongandetilkota',$data);
        } else {
            redirect(base_url());
        }

    }
    public function detaillowonganProdi($prodi){
        $namacek=$this->session->userdata('nama');
        $login = $this->M_login->loginAlumni();
        if ($namacek!=null && $login['NAMA']==$namacek) {
        # code...
            $this->load->view('lowongan/V_header');
            $data["getprodi"] = $this->M_lowongan->getdetailprodi($prodi);
            $this->load->view('lowongan/V_lowongandetilprodi',$data);
        } else {
            redirect(base_url());
        }
    }
    public function detaillowonganPosisi($posisi){
        $namacek=$this->session->userdata('nama');
        $login = $this->M_login->loginAlumni();
        if ($namacek!=null && $login['NAMA']==$namacek) {
        # code...
            $this->load->view('lowongan/V_header');
            $pos=str_replace("%20"," ","$posisi");
            $data["getposisi"] = $this->M_lowongan->getdetailposisi($pos);
            $this->load->view('lowongan/V_lowongandetilposisi',$data);
        } else {
            redirect(base_url());
        }
    }
    // public function detaillbursakerja(){
    //     $this->load->view('lowongan/V_header');
    //     $this->load->view('lowongan/V_detilbursakerja');
    // }
    public function report(){
        // $this->load-library('pdf_report');
        $this->load->library('Pdf');
        $data["getriwayatpkj"] = $this->M_alumni->getriwayatpkj();
        $data["getdataalumni"] = $this->M_alumni->getDataAlumni();
        $data["getdatariwayat"] = $this->M_cv->getDataRiwayat();
        $data["getsoftskill"] = $this->M_alumni->getsoftskill();
        $data["getbahasa"] = $this->M_alumni->getBahasa();
        $data["gethard"] = $this->M_alumni->getHard();
        $this->load->view('lowongan/V_report', $data);

    }
    public function saveDataAlumni(){
        // $this->load->model('M_alumni');
        $data=$this->M_alumni->simpanDataAlumni();
        // echo $data;
        echo json_encode($data);
        redirect("/careeruinsa/alumni");
    }

    public function saveRiwayatKerja(){
        //$this->load->model('M_alumni');
        $data=$this->M_alumni->simpanDataRiwayat();
        echo json_encode($data);
        redirect("/careeruinsa/alumni");
    }


    public function savePromosi(){
        //$this->load->model('M_alumni');
        $data=$this->M_alumni->simpanPromosi();
        echo json_encode($data);
        redirect("/careeruinsa/alumni");
    }

    public function saveSoftSkill(){
       // $this->load->model('M_alumni');
        $data=$this->M_alumni->simpanSoftSkill();
        // echo json_encode($data);
        redirect("/careeruinsa/alumni");
    }
    public function saveBahasa(){
        // $this->load->model('M_alumni');
         $data=$this->M_alumni->simpanBahasa();
         // echo json_encode($data);
         redirect("/careeruinsa/alumni");
    }
    public function saveHardskill(){
        // $this->load->model('M_alumni');
         $data=$this->M_alumni->simpanHardskill();
         // echo json_encode($data);
         redirect("/careeruinsa/alumni");
    }

    // public function saveTambahHardskill(){
    //     // $this->load->model('M_alumni');
    //      $data=$this->M_alumni->simpanTambahHardskill();
    //      // echo json_encode($data);
    //      redirect("/careeruinsa/alumni");
    // }

    public function savePerusahaan(){
        // $this->load->model('M_alumni');
         $data=$this->M_alumni->simpanPerusahaan();
         // echo json_encode($data);
         redirect("/careeruinsa/riwayatkerja");
    }

    public function saveKerjaAkhir(){
        // $this->load->model('M_alumni');
         $data=$this->M_alumni->simpanKerjaAkhir();
         // echo json_encode($data);
         redirect("/careeruinsa/alumni");
    }

    function get_np(){
       // tangkap variabel keyword dari URL
        $keyword = $this->uri->segment(1);
        // cari di database
        $data = $this->db->query("SELECT * FROM list_perusahaan")->result();
        echo json_encode($data);
        return true;
        // var_dump($data);

    }
    public function hapusriwayatpkj($id) {
        $this->M_alumni->hapusriwayat($id);
        // $this->load->view('lowongan/V_header');
        // $this->load->view('lowongan/V_detail');
    }

    public function saveLamaran($id){
        $data = array();
        mkdir('./uploads/' . date("Ymdsa") . $id, 0777, TRUE);
        $config['upload_path'] = './uploads/'. date("Ymdsa") . $id;
        $config['allowed_types'] = 'jpg|png|jpeg|pdf|doc|docx';
        $config['max_size']  = '2048';
        $config['remove_space'] = TRUE;
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config); // Load konfigurasi uploadnya


        for ($i=1; $i <=3; $i++) {
            if(!empty($_FILES['berkas'.$i]['name'])){
            //   $nama[] = $_FILES['berkas'.$i]['encrypt_name'];
            //   $type[] = $_FILES['berkas'.$i]['type'];
                if(!$this->upload->do_upload('berkas'.$i)){
                    $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
                    return $return;
                }else{
                    $nama[] = $this->upload->data('file_name');
                    $dir=$this->upload->data('file_path');
                    $type[] = $this->upload->data('file_type');
                    $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
                }
            }
            //
        }
        $foto = json_encode($nama);
        $typeJson = json_encode($type);
        $kondisi=$this->M_lamaran->simpanLamaran($id,$dir);
        if ($kondisi==1) {
          redirect('/careeruinsa/info');
        } else {
          echo "eror";
        }


        //echo"tr";
        //return $return;

        // $upload = $this->M_lamaran->upload();

            // if($upload['result'] == "success"){ // Jika proses upload sukses
            //     // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database

            //
            //     //  // Redirect kembali ke halaman awal / halaman view data
            // }else{ // Jika proses upload gagal
            //     $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
            // }

    //$this->load->view('gambar/form', $data);
    }
    public function addnewhardskill(){
        $data=$this->M_alumni->addhardskill();
        redirect("/careeruinsa/alumni");
    }
    public function addnewsoftskill(){
        $data=$this->M_alumni->addsoftskill();
        // redirect("/careeruinsa/tambahhardskill");
    }
    public function addnewbhsskill(){
        $data=$this->M_alumni->addbhsskill();
        redirect("/careeruinsa/alumni");
    }
}
?>
