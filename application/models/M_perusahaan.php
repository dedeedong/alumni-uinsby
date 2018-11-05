<?php
    class m_perusahaan extends CI_Model{

        function regPerusahaan(){
            $pass=$this->input->post('passperreg');
            $query = $this->db->query('SELECT * FROM rekan_ika');
            $row=$query->num_rows();
            $id="P".date("mdsA".$row++);
            $data = array(
                'ID_REKAN'  => $id,
                'NAMA_REKAN'  => $this->input->post('namaperreg'),
                'ALAMAT_REKAN' => $this->input->post('alamatperreg'),
                'PASSWORD' => md5($pass),
                'BIDANG_USAHA' => $this->input->post('usahaperreg'),
                'KODEPOS' => $this->input->post('posperreg'),
                'NAMA_CP' => $this->input->post('namaconperreg'),
                'EMAIL_CP' => $this->input->post('emailperreg'),
                'NO_TELP' => $this->input->post('noperreg'),
                'LOGIN' => '0',
            );
            $result=$this->db->insert('rekan_ika',$data);
            return $result;
        }

        function simpanLowongan(){
            $nim=$this->session->userdata('id');
            $query = $this->db->query('SELECT * FROM lowongan');
            $id=$query->num_rows();
            // $id="P".date("mdsa".$row++);
            // for ($i=0; $i < 5; $i++) {
            //   // code...
            // $jsonbhs=json_encode($this->input->post('nobahasa_1'))
              $data = array(
                  'ID_LOWONGAN'  => ++$id,
                  'ID_REKAN'  => $nim,
                  'POSISI_LOWONGAN'  => $this->input->post('jp'),
                  'KOTA' => $this->input->post('kota'),
                  'TGL_POSTING' => $this->input->post('tl1'),
                  'TGL_SELESAI' => $this->input->post('tl2'),
                  'IPK_MINIMUM' => $this->input->post('ipk'),
                  'GENDER' => $this->input->post('jenkel'),
                  'BATASAN_USIA' => $this->input->post('bts'),
                  'JAM_KERJA' => $this->input->post('jam-kerja'),
                  'PENGALAMAN_KERJA' => $this->input->post('pengalaman'),
                  'STATUS_PERNIKAHAN' => $this->input->post('status-nikah'),  
                  'KETERANGAN_LOWONGAN' => $this->input->post('keterangan-lowongan'),
                  'BHSSKILL' => $this->input->post('selecthard'),
                  'HARDSKILL' => $this->input->post('selectbahasa'),
                  'JURUSAN' => $this->input->post('selectjurusan'),
                  'SOFTSKILL' => $this->input->post('selectsoft')
              );
            // }

            // var_dump($data);
            // return false;
            $result=$this->db->insert('lowongan',$data);

            return $result;
        }

        function simpandataRekan(){
            // $data = array(
            //     'ID_REKAN' => $this->input->post('id_perusahaan') ,
            //     'NAMA_REKAN' => $this->input->post('nama_perusahaan'),
            //     'ALAMAT' => $this->input->post('addressnow'),
            //     'STATUS_REKAN' => $this->input->post('status-perusahaan'),
            //     'BIDANG_USAHA' => $this->input->post('bidang-usaha'),
            //     'SKALA_REKAN' => $this->input->post('skala-perusahaan'),
            //     'TAHUN_BERDIRI' => $this->input->post('tb'),
            //     'JML_KARYAWAN' => $this->input->post('jk'),
            //     'KOTA_REKAN' => $this->input->post('kota'),
            //     'KODE_POS_REKAN' => $this->input->post('kp_rekan'),
            //     'NOMOR_TELEPON_REKAN' => $this->input->post('tlp_rekan'),
            //     'NOMOR_FAX_REKAN' => $this->input->post('fax_rekan'),
            //     'EMAIL_REKAN' => $this->input->post('email_rekan'),
            //     'WEBSITE_REKAN' => $this->input->post('website_rekan'),
            //     'NEGARA_PABRIK' => $this->input->post('negara-pabrik'),
            //     'KOTA_PABRIK' => $this->input->post('kota-pabrik'),
            //     'ALAMAT_PABRIK' => $this->input->post('alamat-pabrik'),
            //     'NAMA_CP' => $this->input->post('namacp'),
            //     'KODE_POS_CP' => $this->input->post('kpcp'),
            //     'JABATAN_CP' => $this->input->post('jabatancp'),
            //     'EMAIL_CP' => $this->input->post('emailcp'),
            //     'PASSWORD' => $this->input->post('password')
            // );
            // $result = $this->db->insert('rekan_ika',$data);
            // return $result;

             $nim=$this->session->userdata('id');

                $deskripsi=$this->input->post('desc');
                $alamats=$this->input->post('ala');
                $status=$this->input->post('status-perusahaan');
                $bidang=$this->input->post('bidang-usaha');
                $skala=$this->input->post('skala-perusahaan');
                $tahun=$this->input->post('tb');
                $jml_karyawan=$this->input->post('jk');
                $kota_rekan=$this->input->post('kota');
                $kp_rekan=$this->input->post('kp_rekan');
                $tlp_rekan=$this->input->post('tlp_rekan');
                $fax_rekan=$this->input->post('fax_rekan');
                $email_rekan=$this->input->post('email_rekan');
                $web_rekan=$this->input->post('website_rekan');
                $negara_pabrik=$this->input->post('negara-pabrik');
                $kota_pabrik=$this->input->post('kota-pabrik');
                $alamat_pabrik=$this->input->post('alamat-pabrik');
                $namacp=$this->input->post('namacp');
                $kpcp=$this->input->post('kpcp');
                $jabatancp=$this->input->post('jabatancp');
                $emailcp=$this->input->post('emailcp');
                $password=$this->input->post('password');


                $this->db->set('DESKRIPSI', $deskripsi);
                $this->db->set('ALAMAT_REKAN', $alamats);
                $this->db->set('STATUS', $status);
                $this->db->set('BIDANG_USAHA', $bidang);
                $this->db->set('SKALA', $skala);
                $this->db->set('THN_BERDIRI', $tahun);
                $this->db->set('JML_KARYAWAN', $jml_karyawan);
                $this->db->set('KOTA_REKAN', $kota_rekan);
                $this->db->set('KODEPOS', $kp_rekan);
                $this->db->set('NO_TELP', $tlp_rekan);
                $this->db->set('NO_FAX', $fax_rekan);
                $this->db->set('EMAIL', $email_rekan);
                $this->db->set('WEBSITE', $web_rekan);
                $this->db->set('NEGARA_PABRIK', $negara_pabrik);
                $this->db->set('KOTA_PABRIK', $kota_pabrik);
                $this->db->set('ALAMAT_PABRIK', $alamat_pabrik);
                $this->db->set('NAMA_CP', $namacp);
                $this->db->set('KODEPOS_CP', $kpcp);
                $this->db->set('JABATAN_CP', $jabatancp);
                $this->db->set('EMAIL_CP', $emailcp);
                $this->db->set('PASSWORD', $password);

                $this->db->where('ID_REKAN', $nim);
                $param = $this->db->update('rekan_ika');
                //$this->db->affected_rows();
                return $param;
        }

        function getDataRekan(){
            // $query = $this->$db->("riwayat_kerja");
            $nim=$this->session->userdata('id');
            $this->db->select("*");
            $this->db->from("rekan_ika");
            $this->db->where('ID_REKAN', $nim);
            $query = $this->db->get()->row_array();
            return $query;
        }
        function getDataLowongan(){
            // $query = $this->$db->("riwayat_kerja");
            $nim=$this->session->userdata('id');
            $this->db->select("*");
            $this->db->from("lowongan");
            $this->db->where('ID_REKAN', $nim);
            $query = $this->db->get();
            return $query;
        }
        function getDataLamaran(){
            // $query = $this->$db->("riwayat_kerja");
            $nim=$this->session->userdata('id');
            // $this->db->select("lamaran.ID_LAMARAN,lamaran.ID_LOWONGAN,lamaran.NIM,rekan_ika.ID_REKAN,lowongan.ID_REKAN,rekan_ika.NAMA_REKAN, MAX(lamaran.ID_LOWONGAN) as jumlah");
            // $this->db->select("*, MAX(lamaran.ID_LOWONGAN) as jumlah ");
            // $this->db->from("lamaran");
            // $this->db->join('lowongan', 'lamaran.ID_LOWONGAN = lowongan.ID_LOWONGAN');
            // $this->db->join('rekan_ika', 'lowongan.ID_REKAN = rekan_ika.ID_REKAN');
            // $this->db->where('lowongan.ID_LOWONGAN = lamaran.ID_LOWONGAN');
            // $this->db->where('lowongan.ID_REKAN', $nim);
            // $this->db->group_by('lowongan.POSISI_LOWONGAN');
            // $this->db->order_by('jumlah', 'desc');
            $sql=$this->db->query("SELECT *, COUNT(lamaran.ID_LOWONGAN) as jumlah from lamaran INNER JOIN lowongan ON lamaran.ID_LOWONGAN = lowongan.ID_LOWONGAN INNER JOIN rekan_ika on lowongan.ID_REKAN = rekan_ika.ID_REKAN WHERE lowongan.ID_REKAN='$nim' GROUP BY lowongan.POSISI_LOWONGAN ORDER BY jumlah");
            // $this->db->where('lowongan.ID_REKAN', $nim);
            // $query = $this->db->get($sql);
            return $sql;
        }
        function getDataAlumni(){
            // $query = $this->$db->("riwayat_kerja");
            $nim=$this->session->userdata('nim');
            $this->db->select("*");
            $this->db->from("alumni");
            $this->db->where('NIM', $nim);
            $query = $this->db->get()->row_array();
            return $query;
        }

        function getriwayatpkj(){
            $nim=$this->session->userdata('nim');
            $this->db->select("NIM, NAMA_PERUSAHAAN, POSISI, THN_MASUK, THN_KELUAR");
            $this->db->from("riwayat_kerja");
            $this->db->where('NIM', $nim);
            $query = $this->db->get();
            return $query;
        }

        function gethardskill(){
            $this->db->select("HARDSKILL");
            $this->db->from("hardskill");
            $query = $this->db->get();
            return $query;
        }

        function getlanguage(){
            $this->db->select("LANGUAGE");
            $this->db->from("language_skill");
            $query = $this->db->get();
            return $query;
        }

        function getsoftskill($id){
            $this->db->select('*');
            $this->db->from('softskill');
            $this->db->join('memiliki_softskill', 'softskill.ID_SOFTSKILL = memiliki_softskill.ID_SOFTSKILL');
            $this->db->join('alumni', 'alumni.NIM = memiliki_softskill.NIM');
            $this->db->join('lamaran', 'alumni.NIM = lamaran.NIM');
            $this->db->where('lamaran.ID_LAMARAN', $id);
            $query = $this->db->get();
            return $query;
        }

        function getBahasa($id){
            $this->db->select('*');
            $this->db->from('language_skill');
            $this->db->join('memiliki_language', 'language_skill.ID_LANGUAGE = memiliki_language.ID_LANGUAGE');
            $this->db->join('alumni', 'alumni.NIM = memiliki_language.NIM');
            $this->db->join('lamaran', 'alumni.NIM = lamaran.NIM');
            $this->db->where('lamaran.ID_LAMARAN', $id);
            $query = $this->db->get();
            return $query;
        }

        function getHard($id){
            $this->db->select('*');
            $this->db->from('hardskill');
            $this->db->join('memiliki_hardskill', 'hardskill.ID_HARDSKILL = memiliki_hardskill.ID_HARDSKILL');
            $this->db->join('alumni', 'alumni.NIM = memiliki_hardskill.NIM');
            $this->db->join('lamaran', 'alumni.NIM = lamaran.NIM');
            $this->db->where('lamaran.ID_LAMARAN', $id);
            $query = $this->db->get();
            return $query;
        }
        function getPelamar($id){
            $query = $this->db->query("SELECT * FROM lamaran INNER JOIN alumni ON lamaran.NIM = alumni.NIM INNER JOIN lowongan ON lamaran.ID_LOWONGAN = lowongan.ID_LOWONGAN INNER JOIN rekan_ika ON rekan_ika.ID_REKAN = lowongan.ID_REKAN WHERE lamaran.ID_LOWONGAN = '$id'");
            // $query = $this->db->get();
            return $query;
        }
        function getdetailPelamar($id){
            $this->db->select("*");
            $this->db->from("alumni");
            $this->db->join('riwayat_kerja', 'alumni.NIM = riwayat_kerja.NIM');
            $this->db->join('data_melamar', 'alumni.NIM = data_melamar.NIM');
            $this->db->join('lamaran', 'alumni.NIM = lamaran.NIM');
            $this->db->where('lamaran.ID_LAMARAN', $id);
            $query = $this->db->get()->row_array();
            return $query;
        }
        function getriwayatkerja($id){
            $this->db->select("*");
            $this->db->from("alumni");
            $this->db->join('riwayat_kerja', 'alumni.NIM = riwayat_kerja.NIM');
            // $this->db->join('data_melamar', 'alumni.NIM = data_melamar.NIM');
            $this->db->join('lamaran', 'alumni.NIM = lamaran.NIM');
            $this->db->where('lamaran.ID_LAMARAN', $id);
            $query = $this->db->get();
            return $query;
        }
        function proses($id){
            $this->db->set('STATUS_LAMARAN', 'On Proses');
            $this->db->where('ID_LAMARAN', $id);
            $param = $this->db->update('lamaran');
            return $param;
        }

        // function simpanLowongans(){
        //     $nim=$this->session->userdata('id');
        //     // $hard=

        //     $query = $this->db->query('SELECT * FROM lowongan');
        //     $id=$query->num_rows();

        //     $query1 = $this->db->query('SELECT * FROM hardskill');
        //     $id1=$query->num_rows();


        //     for ($i=1; $i <$id1 ; $i++) {
        //         # code...
        //     }
        //     $data1=array(
        //         array(
        //             'HARDSKILL' => $this->input->post(''),
        //         )

        //     );
        //     $data2=array(
        //         'SOFTSKILL' => $this->input->post(''),
        //     );
        //     $data3=array(
        //         'LANGUAGE' => $this->input->post(''),
        //     );
        //     $data4=array(
        //         'JURUSAN' => $this->input->post(''),
        //     );

        //     $var1=json_encode($data1);
        //     $var2=json_encode($data2);
        //     $var3=json_encode($data3);
        //     $var4=json_encode($data4);

        //     $data5 = array(
        //         'ID_LOWONGAN'  => $id++,
        //         'ID_REKAN'  => $nim,
        //         'POSISI_LOWONGAN' => $this->input->post('jp'),
        //         'TGL_POSTING' => $this->input->post('passperreg'),
        //         'TGL_SELESAI' => $this->input->post('passperreg'),
        //         'GENDER' => $this->input->post('jenkel'),
        //         'IPK' => $this->input->post('ipk'),
        //         'BATASAN_USIA' => $this->input->post('bts'),
        //         'PENGALAMAN_KERJA' => $this->input->post('pengalaman'),
        //         'JAM_KERJA' => $this->input->post('jam-kerja'),
        //         'STATUS_PERNIKAHAN' => $this->input->post('status'),
        //         'KETERANGAN_LOWONGAN' => $this->input->post('keterangan-lowongan'),
        //         'HARDSKILL' => $this->input->post('keterangan-lowongan'),
        //         'SOFTSKILL' => $this->input->post('keterangan-lowongan'),
        //         'LANGUAGE' => $this->input->post('keterangan-lowongan'),
        //         'JURUSAN' => $this->input->post('keterangan-lowongan'),
        //     );
        //       $result=$this->db->insert('rekan_ika',$data);
        //     return $result;
        // }



    }
?>
