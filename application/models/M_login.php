<?php 
    class m_login extends CI_Model{
        function __construct(){
            parent::__construct();
            $this->db1 = $this->load->database('postgredb',true);
            $this->load->database('default',TRUE);
        }
        public function loginAlumni()
        {   
            $nim=$this->session->userdata('nim');
            $tgl_lahir=$this->session->userdata('tgllahir');
            
            $this->db->select('*');
            $this->db->from('alumni');
            $this->db->where("NIM='".$nim."'");
            $this->db->where("TANGGAL_LAHIR='".$tgl_lahir."'");
            $query = $this->db->get()->row_array();
            return $query;
        }

        public function loginRekan()
        {
            $id=$this->session->userdata('id');
            // $pass=$this->session->userdata('pass');
            
            $this->db->select('*');
            $this->db->from('rekan_ika');
            $this->db->where('ID_REKAN', $id);
            $this->db->where('LOGIN','1');
            // $this->db->where('PASSWORD', $pass);
            $query = $this->db->get()->row_array();
            return $query;
        }

        public function loginAdmin()
        {
            $id=$this->session->userdata('username');
            $this->db->select('USERNAME');
            $this->db->from('pengurus');
            $this->db->where('USERNAME', $id);
            $query = $this->db->get()->row_array();
            return $query;
        }
        // public function loginAdmin2()
        // {
        //     $id=$this->session->userdata('username');
        //     $this->db1->select('ketua,sekretaris');
        //     $this->db1->from('gate.ms_unit');
        //     $this->db1->where('kodeunit', $id);
        //     $query = $this->db1->get()->row_array();
        //     return $query;
        // }
    }
?>