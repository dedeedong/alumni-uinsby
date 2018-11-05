<?php
class m_alumni extends CI_Model{

    function simpanDataAlumni(){

        $nim=$this->session->userdata('nim');
        $nama=$this->session->userdata('nama');
        $prodi=$this->session->userdata('prodi');
        $fakultas=$this->session->userdata('fakultas');
        $lulus=$this->session->userdata('periodelulus');
        $jk=$this->session->userdata('sex');
        $tempat_lahir=$this->session->userdata('tmplahir');
        $tgl_lahir=$this->session->userdata('tgllahir');
        $kota=$this->input->post('ks');
        $alamat=$this->input->post('as');
        $kodepos=$this->input->post('kp');
        $kota_asal=$this->input->post('ka');
        $alamat_asal=$this->input->post('aa');
        $agama=$this->input->post('agama');
        $status=$this->input->post('status');
        $no_tlp=$this->input->post('tlp');
        $no_hp=$this->input->post('hp');
        $email=$this->input->post('email');
        $tersedia=$this->input->post('sedia');

        $query = $this->db->query("SELECT * from alumni where NIM = '$nim'");

        if ($query->num_rows()==0) {
          $data = array(
              'NIM'  => $nim,
              'NAMA'  => $nama,
              'PRODI'  => $prodi,
              'FAKULTAS'  => $fakultas,
              'LULUS'  => $lulus,
              'GENDER'  => $jk,
              'TEMPAT_LAHIR'  => $tempat_lahir,
              'TANGGAL_LAHIR'  => $tgl_lahir,
              'KOTA'  => $kota,
              'KODEPOS'  => $kodepos,
              'ALAMAT' => $alamat,
              'KOTA_ASAL'  => $kota_asal,
              'ALAMAT_ASAL'  => $alamat_asal,
              'AGAMA'  => $agama,
              'STATUS'  => $status,
              'NO_TLP'  => $no_tlp,
              'NO_HP'  => $no_hp,
              'EMAIL' => $email,
              'KETERSEDIAAN'  => $tersedia,
          );
          $result=$this->db->insert('alumni',$data);
          return $result;
        }else {
          $this->db->set('TEMPAT_LAHIR', $tempat_lahir);
          $this->db->set('TANGGAL_LAHIR', $tgl_lahir);
          $this->db->set('ALAMAT', $alamat);
          $this->db->set('KODEPOS', $kodepos);
          $this->db->set('KOTA', $kota);
          $this->db->set('ALAMAT_ASAL', $alamat_asal);
          $this->db->set('KOTA_ASAL', $kota_asal);
          $this->db->set('AGAMA', $agama);
          $this->db->set('NO_HP', $no_hp);
          $this->db->set('NO_TLP', $no_tlp);
          $this->db->set('EMAIL', $email);
          $this->db->set('STATUS', $status);
          $this->db->set('KETERSEDIAAN', $tersedia);

          $this->db->where('NIM', $nim);
          $param = $this->db->update('alumni');
          return $param;
        }

    }

    function simpanSoftSkill(){

        $nim=$this->session->userdata('nim');

        $query = $this->db->query("SELECT * from memiliki_softskill where 'NIM' = '$nim'");
        $data = $query->result();
        if (empty($data)) {
            $array = array(
                array(
                    'NIM'=>$nim,
                    'ID_SOFTSKILL'=>$this->input->post('jujur')
                ),array(
                    'NIM'=>$nim,
                    'ID_SOFTSKILL'=>$this->input->post('komunikatif')
                ),array(
                    'NIM'=>$nim,
                    'ID_SOFTSKILL'=>$this->input->post('kreatif')
                ),array(
                    'NIM'=>$nim,
                    'ID_SOFTSKILL'=>$this->input->post('mandiri')
                ),array(
                    'NIM'=>$nim,
                    'ID_SOFTSKILL'=>$this->input->post('belajar')
                ),array(
                    'NIM'=>$nim,
                    'ID_SOFTSKILL'=>$this->input->post('rapi')
                ),array(
                    'NIM'=>$nim,
                    'ID_SOFTSKILL'=>$this->input->post('self-motivated')
                ),array(
                    'NIM'=>$nim,
                    'ID_SOFTSKILL'=>$this->input->post('kharismatik')
                ),array(
                    'NIM'=>$nim,
                    'ID_SOFTSKILL'=>$this->input->post('suka-tantangan')
                ),array(
                    'NIM'=>$nim,
                    'ID_SOFTSKILL'=>$this->input->post('teliti')
                ),array(
                    'NIM'=>$nim,
                    'ID_SOFTSKILL'=>$this->input->post('tanggungjawab')
                ),array(
                    'NIM'=>$nim,
                    'ID_SOFTSKILL'=>$this->input->post('target')
                ),array(
                    'NIM'=>$nim,
                    'ID_SOFTSKILL'=>$this->input->post('teamwork')
                ),array(
                    'NIM'=>$nim,
                    'ID_SOFTSKILL'=>$this->input->post('tegas')
                ),array(
                    'NIM'=>$nim,
                    'ID_SOFTSKILL'=>$this->input->post('terampil')
                ),array(
                    'NIM'=>$nim,
                    'ID_SOFTSKILL'=>$this->input->post('ulet')
                ),array(
                    'NIM'=>$nim,
                    'ID_SOFTSKILL'=>$this->input->post('wawasan')
                )
            );
            $new_array = array_filter($array, function($obj){
                if (isset($obj["ID_SOFTSKILL"])) {
                    // $this->db->insert('memiliki_softskill',$obj);
                    return true;
                } else {
                    $this->db->where('NIM', $this->session->userdata('nim'));
                    $this->db->delete('memiliki_softskill');
                    return false;
                }
            });
            if(empty($new_array)){
                redirect("/careeruinsa/alumni");
            } else {
                $this->db->insert_batch('memiliki_softskill',$new_array);
            }


        } else {
            $array = array(
                array(
                    'NIM'=>$nim,
                    'ID_SOFTSKILL'=>$this->input->post('jujur')
                ),array(
                    'NIM'=>$nim,
                    'ID_SOFTSKILL'=>$this->input->post('komunikatif')
                ),array(
                    'NIM'=>$nim,
                    'ID_SOFTSKILL'=>$this->input->post('kreatif')
                ),array(
                    'NIM'=>$nim,
                    'ID_SOFTSKILL'=>$this->input->post('mandiri')
                ),array(
                    'NIM'=>$nim,
                    'ID_SOFTSKILL'=>$this->input->post('belajar')
                ),array(
                    'NIM'=>$nim,
                    'ID_SOFTSKILL'=>$this->input->post('rapi')
                ),array(
                    'NIM'=>$nim,
                    'ID_SOFTSKILL'=>$this->input->post('self-motivated')
                ),array(
                    'NIM'=>$nim,
                    'ID_SOFTSKILL'=>$this->input->post('kharismatik')
                ),array(
                    'NIM'=>$nim,
                    'ID_SOFTSKILL'=>$this->input->post('suka-tantangan')
                ),array(
                    'NIM'=>$nim,
                    'ID_SOFTSKILL'=>$this->input->post('teliti')
                ),array(
                    'NIM'=>$nim,
                    'ID_SOFTSKILL'=>$this->input->post('tanggungjawab')
                ),array(
                    'NIM'=>$nim,
                    'ID_SOFTSKILL'=>$this->input->post('target')
                ),array(
                    'NIM'=>$nim,
                    'ID_SOFTSKILL'=>$this->input->post('teamwork')
                ),array(
                    'NIM'=>$nim,
                    'ID_SOFTSKILL'=>$this->input->post('tegas')
                ),array(
                    'NIM'=>$nim,
                    'ID_SOFTSKILL'=>$this->input->post('terampil')
                ),array(
                    'NIM'=>$nim,
                    'ID_SOFTSKILL'=>$this->input->post('ulet')
                ),array(
                    'NIM'=>$nim,
                    'ID_SOFTSKILL'=>$this->input->post('wawasan')
                )
            );


            $this->db->where('NIM', $nim);
            $this->db->where('ID_SOFTSKILL IS NULL');

            $param = $this->db->update_batch('memiliki_softskill',$array);
        }

    }

    function simpanDataRiwayat(){

        $nim=$this->session->userdata('nim');
        $posisi=$this->input->post('posisi');
        $jp=$this->input->post('jp');
        $gt=$this->input->post('gt');
        $gyd=$this->input->post('gyd');

        $query = $this->db->query("SELECT * from data_melamar where NIM = '$nim'");
        $maxid = 0;
        $row = $this->db->query("SELECT MAX(ID_DATALAMAR) as maxid from data_melamar")->row();
        if ($row) {
            $maxid = $row->maxid;
        }

        if ($query->num_rows()==0) {
            $data = array(
                'ID_DATALAMAR' => ++$maxid,
                'NIM' => $nim,
                'POSISI_TERAKHIR' => $posisi,
                'JENIS_PERUSAHAAN' => $jp,
                'GAJI_AKHIR' => $gt,
                'GAJI_HARAP' => $gyd,
            );
            $result=$this->db->insert('data_melamar',$data);
            return $result;
        } else {

            $this->db->set('POSISI_TERAKHIR', $posisi);
            $this->db->set('JENIS_PERUSAHAAN', $jp);
            $this->db->set('GAJI_AKHIR', $gt);
            $this->db->set('GAJI_HARAP', $gyd);

            $this->db->where('NIM', $nim);
            $param = $this->db->update('data_melamar');
            //$this->db->affected_rows();
            return $param;
        }
    }

    function simpanPromosi(){

        $nim=$this->session->userdata('nim');
        $promosi=$this->input->post('promosi');
        $pendidikan=$this->input->post('pendidikan');

        $query = $this->db->query("SELECT * from data_melamar where NIM = '$nim'");
        $maxid = 0;
        $row = $this->db->query("SELECT MAX(ID_DATALAMAR) as maxid from data_melamar")->row();
        if ($row) {
            $maxid = $row->maxid;
        }

        if ($query->num_rows()==0) {
          $data = array(
              'ID_DATALAMAR' => ++$maxid,
              'NIM' => $nim,
              'PROMOSI' => $promosi,
              'PENDIDIKAN_NONFORMAL' => $pendidikan,
          );
          $result=$this->db->insert('data_melamar',$data);
          return $result;
        }else {
            $this->db->set('PROMOSI', $promosi);
            $this->db->set('PENDIDIKAN_NONFORMAL', $pendidikan);

            $this->db->where('NIM', $nim);
            $param = $this->db->update('data_melamar');
            //$this->db->affected_rows();
            return $param;
        }
    }

    function simpanBahasa(){
        $nim=$this->session->userdata('nim');

        $this->db->select("*");
        $this->db->from("memiliki_language");
        $this->db->where('NIM', $nim);
        $datacek = $this->db->get();
        $num = $this->db->count_all_results('language_skill');

        if (empty($datacek->result())){
            for ($i=1; $i <= $num; $i++) {
                $tingkat=$this->input->post((string)$i);
                $data = array(
                    'NIM'=>$nim,
                    'ID_LANGUAGE'=>$i,
                    'TINGKAT'=>$tingkat
                );
                $this->db->insert('memiliki_language',$data);
            }
        } else {
            for ($i=1; $i <= $num; $i++) {
                $tingkat=$this->input->post((string)$i);
                $this->db->set('TINGKAT', $tingkat);
                $this->db->where('NIM', $nim);
                $this->db->where('ID_LANGUAGE', $i);
                $this->db->update('memiliki_language');
                // return $param;
            }
        }
    }

    function simpanHardskill(){
        $nim=$this->session->userdata('nim');

        $this->db->select("*");
        $this->db->from("memiliki_hardskill");
        $this->db->where('NIM', $nim);
        $datacek = $this->db->get();
        $num = $this->db->count_all_results('hardskill');

        if (empty($datacek->result())){
            for ($i=1; $i <= $num; $i++) {
                $tingkat=$this->input->post((string)$i);
                $data = array(
                    'NIM'=>$nim,
                    'ID_HARDSKILL'=>$i,
                    'TINGKAT'=>$tingkat
                );
                $this->db->insert('memiliki_hardskill',$data);
            }
        } else {
            for ($i=1; $i <= $num; $i++) {
                $tingkat=$this->input->post((string)$i);
                $this->db->set('TINGKAT', $tingkat);
                $this->db->where('NIM', $nim);
                $this->db->where('ID_HARDSKILL', $i);
                $this->db->update('memiliki_hardskill');
                // return $param;
            }
        }
    }

    function simpanPerusahaan(){

        $data = array(
            'STATUS'  => $this->input->post('sp'),
            'NAMA'  => $this->input->post('np'),
            'ALAMAT' => $this->input->post('alamat'),
            'EMAIL' => $this->input->post('email'),
            'BIDANG' => $this->input->post('bu'),
            'SKALA' => $this->input->post('skala'),
            'KOTA' => $this->input->post('kota'),
            'KODEPOS' => $this->input->post('kp'),
            'NO_TLP' => $this->input->post('nt'),
            'NO_FAX' => $this->input->post('nf')
        );
        $result=$this->db->insert('list_perusahaan',$data);
        return $result;
    }

    function simpanKerjaAkhir(){
        $nim=$this->session->userdata('nim');
        $row = $this->db->query("SELECT MAX(ID_RIWAYAT) as maxid from riwayat_kerja")->row();
        if ($row) {
            $maxid = $row->maxid;
        }
        $data = array(
            'ID_RIWAYAT'  => ++$maxid,
            'NAMA_PERUSAHAAN'  => $this->input->post('np'),
            'POSISI' => $this->input->post('posisi'),
            'NIM' => $nim,
            'THN_MASUK' => $this->input->post('tm'),
            'THN_KELUAR' => $this->input->post('tk')
        );
        $result=$this->db->insert('riwayat_kerja',$data);
        return $result;
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
        $this->db->select("ID_RIWAYAT, NIM, NAMA_PERUSAHAAN, POSISI, THN_MASUK, THN_KELUAR");
        $this->db->from("riwayat_kerja");
        $this->db->where('NIM', $nim);
        $query = $this->db->get();
        return $query;
    }

    function gethardskill_json(){
        $nim=$this->session->userdata('nim');
        $this->db->select("*");
        $this->db->from("hardskill");
        // $this->db->where("NIM",$nim);
        $query = $this->db->get()->result_array();
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

    function getlanguage_json(){
        $this->db->select("*");
        $this->db->from("language_skill");
        $query = $this->db->get()->result_array();
        return $query;
    }

    function getsoftskill(){
        $nim=$this->session->userdata('nim');
        $this->db->select('*');
        $this->db->from('softskill');
        $this->db->join('memiliki_softskill', 'softskill.ID_SOFTSKILL = memiliki_softskill.ID_SOFTSKILL');
        $this->db->where('memiliki_softskill.NIM', $nim);
        $query = $this->db->get();
        return $query;
    }

    function getBahasa(){
        $nim=$this->session->userdata('nim');
        $this->db->select('language_skill.LANGUAGE, memiliki_language.TINGKAT');
        $this->db->from('language_skill');
        $this->db->join('memiliki_language', 'language_skill.ID_LANGUAGE = memiliki_language.ID_LANGUAGE');
        $this->db->where('memiliki_language.NIM', $nim);
        $query = $this->db->get();
        return $query;
    }

    function getHard(){
        $nim=$this->session->userdata('nim');
        $this->db->select('hardskill.HARDSKILL, memiliki_hardskill.TINGKAT');
        $this->db->from('hardskill');
        $this->db->join('memiliki_hardskill', 'hardskill.ID_HARDSKILL = memiliki_hardskill.ID_HARDSKILL');
        $this->db->where('memiliki_hardskill.NIM', $nim);
        $query = $this->db->get();
        return $query;
    }

    function getHard_skill(){
        $nim=$this->session->userdata('nim');
        // $this->db->select('hardskill.HARDSKILL, memiliki_hardskill.TINGKAT');
        $this->db->select('*');
        $this->db->from('memiliki_hardskill');
        // $this->db->join('memiliki_hardskill', 'hardskill.ID_HARDSKILL = memiliki_hardskill.ID_HARDSKILL');
        $this->db->where('NIM', $nim);
        $query = $this->db->get();
        return $query;
    }
    function hapusriwayat($id){
        // $this->db->select('*');
        $this->db->delete('riwayat_kerja', array('ID_RIWAYAT' => $id));
        redirect("/careeruinsa/alumni");
        // $query = $this->db->get();
        // return $query->result();
    }
    function addhardskill(){
        $hardskill = $this->input->post('namahardskill');
        $maxid = 0;
        $row = $this->db->query("SELECT MAX(ID_HARDSKILL) as maxid from hardskill")->row();
        if($row){
            $maxid = $row->maxid;
        }
        $data = array(
            'ID_HARDSKILL' => ++$maxid,
            'HARDSKILL' => $hardskill,
        );
        $result=$this->db->insert('hardskill',$data);
        $this->addhardmemiliki($maxid);
        return $result;
    }
    function addsoftskill(){
        $softskill = $this->input->post('namasoftskill');
        $maxid = 0;
        $row = $this->db->query("SELECT MAX(ID_SOFTSKILL) as maxid from softskill")->row();
        if($row){
            $maxid = $row->maxid;
        }
        $data = array(
            'ID_SOFTSKILL' => ++$maxid,
            'SOFTSKILL' => $softskill,
        );
        $result=$this->db->insert('softskill',$data);
        return $result;
    }

    function addbhsskill(){
        $languageskill = $this->input->post('namalanguageskill');
        $maxid = 0;
        $row = $this->db->query("SELECT MAX(ID_LANGUAGE) as maxid from language_skill")->row();
        if($row){
            $maxid = $row->maxid;
        }
        $data = array(
            'ID_LANGUAGE' => ++$maxid,
            'LANGUAGE' => $languageskill,
        );
        $result=$this->db->insert('language_skill',$data);
        $this->addbhsmemiliki($maxid);
        return $result;
    }

    function addhardmemiliki($id){
      $nim=$this->session->userdata('nim');
      $tingkat=$this->input->post('tingkat');
      // $maxid = 0;
      // $row = $this->db->query("SELECT MAX(ID_HARDSKILL) as maxid from hardskill")->row();
      // if($row){
      //     $maxid = $row->maxid;
      // }
      $data = array(
          'NIM'=>$nim,
          'ID_HARDSKILL'=>$id,
          'TINGKAT'=>$tingkat
      );
        $this->db->insert('memiliki_hardskill',$data);
    }

    function addbhsmemiliki($id){
      $nim=$this->session->userdata('nim');
      $tingkat=$this->input->post('tingkat');
      // $maxid = 0;
      // $row = $this->db->query("SELECT MAX(ID_HARDSKILL) as maxid from hardskill")->row();
      // if($row){
      //     $maxid = $row->maxid;
      // }
      $data = array(
          'NIM'=>$nim,
          'ID_LANGUAGE'=>$id,
          'TINGKAT'=>$tingkat
      );
        $this->db->insert('memiliki_language',$data);
    }
}
