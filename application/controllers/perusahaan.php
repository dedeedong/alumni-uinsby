<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Perusahaan extends CI_Controller {
        function __construct(){
            parent::__construct();
             $this->load->model('M_perusahaan');
             $this->load->model('M_alumni');
             $this->load->model('M_login');
        }
        public function index(){
            $idperu=$this->session->userdata('id');
            $login2 = $this->M_login->loginRekan();
            if ($idperu!=null && $login2['ID_REKAN']==$idperu) {
            # code...
                $this->load->view('perusahaan/V_header');
                $this->load->view('perusahaan/V_index');
                $this->load->view('perusahaan/V_footer');
            } else {
                redirect(base_url());
            }
        }

        public function daftarpelamar($id){
            $this->load->view('perusahaan/V_header');
            $data["getpelamar"] = $this->M_perusahaan->getPelamar($id);
            $this->load->view('perusahaan/V_daftarpelamar',$data);
            $this->load->view('perusahaan/V_footer');
        }

        public function daftarperusahaan(){
            $idperu=$this->session->userdata('id');
            $login2 = $this->M_login->loginRekan();
            if ($idperu!=null && $login2['ID_REKAN']==$idperu) {
            # code...
                $this->load->view('perusahaan/V_header');
                $data["getdatarekan"] = $this->M_perusahaan->getDataRekan();
                $this->load->view('perusahaan/V_dataperusahaan',$data);
                $this->load->view('perusahaan/V_footer');
            } else {
                redirect(base_url());
            }
            // $data["simpandataPerusahaan"] = $this->M_perusahaan->simpandataPerusahaan();

        }
        public function daftarlowongan(){
            $idperu=$this->session->userdata('id');
            $login2 = $this->M_login->loginRekan();
            if ($idperu!=null && $login2['ID_REKAN']==$idperu) {
            # code...
                $this->load->view('perusahaan/V_header');
                $data["getdatalowong"] = $this->M_perusahaan->getDataLowongan();
                $this->load->view('perusahaan/V_daftarlowongan',$data);
                $this->load->view('perusahaan/V_footer');
            } else {
                redirect(base_url());
            }
        }
        public function daftarlamaran(){
            $idperu=$this->session->userdata('id');
            $login2 = $this->M_login->loginRekan();
            if ($idperu!=null && $login2['ID_REKAN']==$idperu) {
            # code...
                $this->load->view('perusahaan/V_header');
                $data["getdatalamar"] = $this->M_perusahaan->getDataLamaran();
                $this->load->view('perusahaan/V_lamaran',$data);
                $this->load->view('perusahaan/V_footer');
            } else {
                redirect(base_url());
            }
        }
        public function inputlowongan(){
            $idperu=$this->session->userdata('id');
            $login2 = $this->M_login->loginRekan();
            if ($idperu!=null && $login2['ID_REKAN']==$idperu) {
                $this->load->view('perusahaan/V_header');
                $data["gethardskill"] = $this->M_alumni->gethardskill();
                $data["getlanguage"] = $this->M_alumni->getlanguage();
                $this->load->view('perusahaan/V_inputlowongan',$data);
                $this->load->view('perusahaan/V_footer');
            } else {
                redirect(base_url('base/home'));
            }
        }
        public function detailperusahaan(){
            $idperu=$this->session->userdata('id');
            $login2 = $this->M_login->loginRekan();
            if ($idperu!=null && $login2['ID_REKAN']==$idperu) {
            # code...
                $this->load->view('perusahaan/V_header');
                $this->load->view('perusahaan/V_infoperusahaan');
                $this->load->view('perusahaan/V_footer');
            } else {
                redirect(base_url());
            }
        }

        public function detailpelamar($id){
            $idperu=$this->session->userdata('id');
            $login2 = $this->M_login->loginRekan();
            if ($idperu!=null && $login2['ID_REKAN']==$idperu) {
            # code...
                $this->load->view('perusahaan/V_header');
                $data["getdetailpelamar"] = $this->M_perusahaan->getdetailPelamar($id);
                $data["gethard"] = $this->M_perusahaan->getHard($id);
                $data["getsoft"] = $this->M_perusahaan->getsoftskill($id);
                $data["getbhs"] = $this->M_perusahaan->getBahasa($id);
                $data["getriwayatkj"] = $this->M_perusahaan->getriwayatkerja($id);
                $this->load->view('perusahaan/V_detailpelamar',$data);
                $this->load->view('perusahaan/V_footer');
            } else {
                redirect(base_url());
            }
        }
        public function update($id){
            $data=$this->M_perusahaan->proses($id);
            redirect("/perusahaan/daftarlamaran");
        }
        public function saveDataRekan(){
            // $this->load->model('M_alumni');
             $data=$this->M_perusahaan->simpandataRekan();
             // echo json_encode($data);
             redirect("/perusahaan/daftarperusahaan");
        }

        public function savelowongan(){
            // $this->load->model('M_alumni');
             $data=$this->M_perusahaan->simpanLowongan();
             echo json_encode($data);
             redirect("/perusahaan/daftarlowongan");
        }

        // public function savelowongan(){
        //     // $this->load->model('M_alumni');
        //      $data=$this->M_perusahaan->simpanLowongan();
        //      // echo json_encode($data);
        //      redirect("/perusahaan/daftarlowongan");
        // }

        function get_data_rekan() {
            $data["getdatarekan"] = $this->M_perusahaan->getDataRekan();
            echo json_encode($data["getdatarekan"]);
            return true;
          }

        function get_bahasa_id() {
          $data["getlanguage"] = $this->M_alumni->getlanguage_json();
          echo json_encode($data["getlanguage"]);
          return true;
        }
        function get_hard_skill() {
          $data["gethardskill"] = $this->M_alumni->gethardskill_json();
          echo json_encode($data["gethardskill"]);
          return true;
        }

        public function download($dir)
        {
            $this->load->helper('download');
            $this->load->library('zip');
            $path = './uploads/'.$dir;
            $this->zip->read_dir($path);
            $this->zip->download('berkas_lamaran.zip');
        }

    }
?>
