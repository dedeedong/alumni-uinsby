<!-- <?php print_r($data);?> -->
<div id="content">

    <nav class="navbar navbar-default">
        <div class="container-fluid">

            <div class="navbar-header">
                <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                    <i class="glyphicon glyphicon-align-left"></i>
                    <span></span>
                </button>
            </div>
        </div>
    </nav>
    <form action="<?php echo site_url(); ?>/tracerstudy/simpan4" method="post" accept-charset="utf-8" id="frmBagian1">
<table class="table">
<tbody><tr><td value="69">1</td>
<td width="40%">Apakah Anda lulus tepat waktu?</td>
<td>
<select id="cboTidakLulus" name="jawaban_102">
  <option value="1" <?php if($data[0]['jawaban_1'] == "1") echo "Selected";?>>Ya</option>
  <option value="0" <?php if($data[0]['jawaban_1'] == "0") echo "Selected";?>>Tidak</option>
</select>
<script type="text/javascript">
  $(document).ready(function() {
    $("#rowTidakLulus1").hide();
    $("#rowTidakLulus2").hide();
    $("#rowTidakLulus3").hide();
    $("#rowTidakLulus4").hide();
    $("#rowTidakLulus5").hide();
    $("#rowTidakLulus6").hide();
    $("#rowTidakLulus7").hide();
  });
  $("#cboTidakLulus").change(function() {
    tepat_waktu();
  });
  function tepat_waktu() {
    if($("#cboTidakLulus").val()==0) {
      $("#rowTidakLulus1").show('medium');
      $("#rowTidakLulus2").show('medium');
      $("#rowTidakLulus3").show('medium');
      $("#rowTidakLulus4").show('medium');
      $("#rowTidakLulus5").show('medium');
      $("#rowTidakLulus6").show('medium');
      $("#rowTidakLulus7").show('medium');
    } else {
      $("#rowTidakLulus1").hide('medium');
      $("#rowTidakLulus2").hide('medium');
      $("#rowTidakLulus3").hide('medium');
      $("#rowTidakLulus4").hide('medium');
      $("#rowTidakLulus5").hide('medium');
      $("#rowTidakLulus6").hide('medium');
      $("#rowTidakLulus7").hide('medium');
    }
  }
</script>
</td>
</tr>

<!-- Pertanyaan ini keluar kalo nomor 1=tidak  -->
<tr id="rowTidakLulus1" style="display: none;">
<td colspan="3" style="text-align: center;background-color: #eee;"><b>Seberapa besar alasan-alasan di bawah ini menyebabkan ketidaktepatan masa studi anda?</b></td>
</tr>
<tr id="rowTidakLulus2" style="display: none;"><td>1.1</td>
<td>Alasan keuangan</td>
<td>
<label><input type="radio" id="ALASAN_KEUANGAN5" name="jawaban_103" value="5"<?php if($data[1]['jawaban_1'] == "5") echo "checked";?>/> Sangat Besar</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="ALASAN_KEUANGAN4" name="jawaban_103" value="4"<?php if($data[1]['jawaban_1'] == "4") echo "checked";?>/> Besar</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="ALASAN_KEUANGAN3" name="jawaban_103" value="3"<?php if($data[1]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="ALASAN_KEUANGAN2" name="jawaban_103" value="2"<?php if($data[1]['jawaban_1'] == "2") echo "checked";?>/> Kecil</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="ALASAN_KEUANGAN1" name="jawaban_103" value="1"<?php if($data[1]['jawaban_1'] == "1") echo "checked";?>/> Tidak Sama Sekali</label>
</td>
</tr>
<tr id="rowTidakLulus3" style="display: none;"><td>1.2</td>
<td>Tidak lulus ujian (banyak mengulang)</td>
<td>
<label><input type="radio" id="TIDAK_LULUS_UJIAN1" name="jawaban_104" value="5"<?php if($data[2]['jawaban_1'] == "5") echo "checked";?>/> Sangat Besar</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="TIDAK_LULUS_UJIAN2" name="jawaban_104" value="4"<?php if($data[2]['jawaban_1'] == "4") echo "checked";?>/> Besar</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="TIDAK_LULUS_UJIAN3" name="jawaban_104" value="3"<?php if($data[2]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="TIDAK_LULUS_UJIAN4" name="jawaban_104" value="2"<?php if($data[2]['jawaban_1'] == "2") echo "checked";?>/> Kecil</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="TIDAK_LULUS_UJIAN5" name="jawaban_104" value="1"<?php if($data[2]['jawaban_1'] == "1") echo "checked";?>/> Tidak Sama Sekali</label>
</td>
</tr>
<tr id="rowTidakLulus4" style="display: none;"><td>1.3</td>
<td>Penulisan skripsi lambat</td>
<td>
<label><input type="radio" id="PENULISAN_SKRIPSI_LAMBAT5" name="jawaban_105" value="5"<?php if($data[3]['jawaban_1'] == "5") echo "checked";?>/> Sangat Besar</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PENULISAN_SKRIPSI_LAMBAT4" name="jawaban_105" value="4"<?php if($data[3]['jawaban_1'] == "4") echo "checked";?>/> Besar</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PENULISAN_SKRIPSI_LAMBAT3" name="jawaban_105" value="3"<?php if($data[3]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PENULISAN_SKRIPSI_LAMBAT2" name="jawaban_105" value="2"<?php if($data[3]['jawaban_1'] == "2") echo "checked";?>/> Kecil</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PENULISAN_SKRIPSI_LAMBAT1" name="jawaban_105" value="1"<?php if($data[3]['jawaban_1'] == "1") echo "checked";?>/> Tidak Sama Sekali</label>
</td>
</tr>
<tr id="rowTidakLulus5" style="display: none;"><td>1.4</td>
<td>Alasan keluarga</td>
<td>
<label><input type="radio" id="ALASAN_KELUARGA5" name="jawaban_106" value="5"<?php if($data[4]['jawaban_1'] == "5") echo "checked";?>/> Sangat Besar</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="ALASAN_KELUARGA4" name="jawaban_106" value="4"<?php if($data[4]['jawaban_1'] == "4") echo "checked";?>/> Besar</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="ALASAN_KELUARGA3" name="jawaban_106" value="3"<?php if($data[4]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="ALASAN_KELUARGA2" name="jawaban_106" value="2"<?php if($data[4]['jawaban_1'] == "2") echo "checked";?>/> Kecil</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="ALASAN_KELUARGA1" name="jawaban_106" value="1"<?php if($data[4]['jawaban_1'] == "1") echo "checked";?>/> Tidak Sama Sekali</label>
</td>
</tr>
<tr id="rowTidakLulus6" style="display: none;"><td>1.5</td>
<td>Kesehatan</td>
<td>
<label><input type="radio" id="KESEHATAN5" name="jawaban_107" value="5"<?php if($data[5]['jawaban_1'] == "5") echo "checked";?>/> Sangat Besar</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KESEHATAN4" name="jawaban_107" value="4"<?php if($data[5]['jawaban_1'] == "4") echo "checked";?>/> Besar</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KESEHATAN3" name="jawaban_107" value="3"<?php if($data[5]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KESEHATAN2" name="jawaban_107" value="2"<?php if($data[5]['jawaban_1'] == "2") echo "checked";?>/> Kecil</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KESEHATAN1" name="jawaban_107" value="1"<?php if($data[5]['jawaban_1'] == "1") echo "checked";?>/> Tidak Sama Sekali</label>
</td>
</tr>
<tr id="rowTidakLulus7" style="display: none;"><td>1.6</td>
<td>Lainnya</td>
<td>
<label><input type="radio" id="LAINNYA5" name="jawaban_108" value="5"<?php if($data[6]['jawaban_1'] == "5") echo "checked";?>/> Sangat Besar</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="LAINNYA4" name="jawaban_108" value="4"<?php if($data[6]['jawaban_1'] == "4") echo "checked";?>/> Besar</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="LAINNYA3" name="jawaban_108" value="3"<?php if($data[6]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="LAINNYA2" name="jawaban_108" value="2"<?php if($data[6]['jawaban_1'] == "2") echo "checked";?>/> Kecil</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="LAINNYA1" name="jawaban_108" value="1"<?php if($data[6]['jawaban_1'] == "1") echo "checked";?>/> Tidak Sama Sekali</label>
</td>
</tr>
<!-- Pertanyaan ini keluar kalo nomor 1=tidak  -->

<tr><td>2</td>
<td>Siapa yang terutama membayar biaya kuliah Anda?</td>
<td>
<label><input type="radio" id="MEMBAYAR_BIAYA_KULIAH5" name="jawaban_109" value="Beasiswa"<?php if($data[7]['jawaban_1'] == "Beasiswa") echo "checked";?>/> Beasiswa (misalnya dari pemerintah, universitas)</label><br>
<label><input type="radio" id="MEMBAYAR_BIAYA_KULIAH4" name="jawaban_109" value="Sebagian beasiswa"<?php if($data[7]['jawaban_1'] == "Sebagian beasiswa") echo "checked";?>/> Sebagian beasiswa</label><br>
<label><input type="radio" id="MEMBAYAR_BIAYA_KULIAH3" name="jawaban_109" value="Orang tua/keluarga"<?php if($data[7]['jawaban_1'] == "Orang tua/keluarga") echo "checked";?>/> Orang tua/keluarga</label><br>
<label><input type="radio" id="MEMBAYAR_BIAYA_KULIAH2" name="jawaban_109" value="Biaya sendiri"<?php if($data[7]['jawaban_1'] == "Biaya sendiri") echo "checked";?>/> Biaya sendiri</label><br>
<label><input type="radio" id="MEMBAYAR_BIAYA_KULIAH1" name="jawaban_109" value="Lainnya"<?php if($data[7]['jawaban_1'] == "Lainnya") echo "checked";?>/> Lainnya</label>
</td>
</tr>
<tr><td>3</td>
<td>Selama kuliah, apakah Anda menjadi anggota dari suatu organisasi (sosial, pemuda, organisasi keagamaan) di dalam atau di luar kampus?</td>
<td>
<select id="cboOrganisasi" name="jawaban_110">
  <option value="1"<?php if($data[8]['jawaban_1'] == "1") echo "Selected";?>>Ya</option>
  <option value="0"<?php if($data[8]['jawaban_1'] == "0") echo "Selected";?>>Tidak</option>
</select>
<script type="text/javascript">
  $(document).ready(function() {
    $("#rowOrganisasi").show();
  });
  $("#cboOrganisasi").change(function() {
    keaktifan_organisasi();
  });
  function keaktifan_organisasi() {
    if($("#cboOrganisasi").val()=='1') {
      $("#rowOrganisasi").show('medium');
    } else {
      $("#rowOrganisasi").hide('medium');
    }
  }
</script>
</td>
</tr>
<tr id="rowOrganisasi"><td>3.1</td>
<td>Seberapa aktif anda di organisasi tersebut?</td>
<td>
<label><input type="radio" id="SEBERAPA_AKTIF5" name="jawaban_111" value="5"<?php if($data[9]['jawaban_1'] == "5") echo "checked";?>/> Sangat aktif</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="SEBERAPA_AKTIF4" name="jawaban_111" value="4"<?php if($data[9]['jawaban_1'] == "4") echo "checked";?>/> Aktif</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="SEBERAPA_AKTIF3" name="jawaban_111" value="3"<?php if($data[9]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="SEBERAPA_AKTIF2" name="jawaban_111" value="2"<?php if($data[9]['jawaban_1'] == "2") echo "checked";?>/> Kurang Aktif</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="SEBERAPA_AKTIF1" name="jawaban_111" value="1"<?php if($data[9]['jawaban_1'] == "1") echo "checked";?>/> Pasif</label>
</td>
</tr>

<tr>
<td colspan="3" style="text-align: center;background-color: #eee;">Menurut anda seberapa besar penekanan pada aspek-aspek pembelajaran di bawah ini dilaksanakan di program studi anda?</td>
</tr>
<tr><td>4.1</td>
<td>Perkuliahan</td>
<td>
<label><input type="radio" id="PERKULIAHAN5" name="jawaban_112" value="5"<?php if($data[10]['jawaban_1'] == "5") echo "checked";?>/> Sangat besar</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PERKULIAHAN4" name="jawaban_112" value="4"<?php if($data[10]['jawaban_1'] == "4") echo "checked";?>/> Besar</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PERKULIAHAN3" name="jawaban_112" value="3"<?php if($data[10]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PERKULIAHAN2" name="jawaban_112" value="2"<?php if($data[10]['jawaban_1'] == "2") echo "checked";?>/> Kurang besar</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PERKULIAHAN1" name="jawaban_112" value="1"<?php if($data[10]['jawaban_1'] == "1") echo "checked";?>/> Tidak sama sekali</label>
</td>
</tr>
<tr><td>4.2</td>
<td>Demonstrasi (peragaan)</td>
<td>
<label><input type="radio" id="DEMONSTRASI5" name="jawaban_113" value="5"<?php if($data[11]['jawaban_1'] == "5") echo "checked";?>/> Sangat besar</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="DEMONSTRASI4" name="jawaban_113" value="4"<?php if($data[11]['jawaban_1'] == "4") echo "checked";?>/> Besar</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="DEMONSTRASI3" name="jawaban_113" value="3"<?php if($data[11]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="DEMONSTRASI2" name="jawaban_113" value="2"<?php if($data[11]['jawaban_1'] == "2") echo "checked";?>/> Kurang besar</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="DEMONSTRASI1" name="jawaban_113" value="1"<?php if($data[11]['jawaban_1'] == "1") echo "checked";?>/> Tidak sama sekali</label>
</td>
</tr>
<tr><td>4.3</td>
<td>Partisipasi dalam proyek riset</td>
<td>
<label><input type="radio" id="PARTISIPASI_PROYEK_RISET5" name="jawaban_114" value="5"<?php if($data[12]['jawaban_1'] == "5") echo "checked";?>/> Sangat besar</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PARTISIPASI_PROYEK_RISET4" name="jawaban_114" value="4"<?php if($data[12]['jawaban_1'] == "4") echo "checked";?>/> Besar</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PARTISIPASI_PROYEK_RISET3" name="jawaban_114" value="3"<?php if($data[12]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PARTISIPASI_PROYEK_RISET2" name="jawaban_114" value="2"<?php if($data[12]['jawaban_1'] == "2") echo "checked";?>/> Kurang besar</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PARTISIPASI_PROYEK_RISET1" name="jawaban_114" value="1"<?php if($data[12]['jawaban_1'] == "1") echo "checked";?>/> Tidak sama sekali</label>
</td>
</tr>
<tr><td>4.4</td>
<td>Magang</td>
<td>
<label><input type="radio" id="MAGANG5" name="jawaban_115" value="5"<?php if($data[13]['jawaban_1'] == "5") echo "checked";?>/> Sangat besar</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="MAGANG4" name="jawaban_115" value="4"<?php if($data[13]['jawaban_1'] == "4") echo "checked";?>/> Besar</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="MAGANG3" name="jawaban_115" value="3"<?php if($data[13]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="MAGANG2" name="jawaban_115" value="2"<?php if($data[13]['jawaban_1'] == "2") echo "checked";?>/> Kurang besar</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="MAGANG1" name="jawaban_115" value="1"<?php if($data[13]['jawaban_1'] == "1") echo "checked";?>/> Tidak sama sekali</label>
</td>
</tr>
<tr><td>4.5</td>
<td>Praktikum/kerja lapangan</td>
<td>
<label><input type="radio" id="PRAKTIKUM5" name="jawaban_116" value="5"<?php if($data[14]['jawaban_1'] == "5") echo "checked";?>/> Sangat besar</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PRAKTIKUM4" name="jawaban_116" value="4"<?php if($data[14]['jawaban_1'] == "4") echo "checked";?>/> Besar</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PRAKTIKUM3" name="jawaban_116" value="3"<?php if($data[14]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PRAKTIKUM2" name="jawaban_116" value="2"<?php if($data[14]['jawaban_1'] == "2") echo "checked";?>/> Kurang besar</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PRAKTIKUM1" name="jawaban_116" value="1"<?php if($data[14]['jawaban_1'] == "1") echo "checked";?>/> Tidak sama sekali</label>
</td>
</tr>
<tr><td>4.6</td>
<td>Diskusi</td>
<td>
<label><input type="radio" id="DISKUSI5" name="jawaban_117" value="5"<?php if($data[15]['jawaban_1'] == "5") echo "checked";?>/> Sangat besar</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="DISKUSI4" name="jawaban_117" value="4"<?php if($data[15]['jawaban_1'] == "4") echo "checked";?>/> Besar</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="DISKUSI3" name="jawaban_117" value="3"<?php if($data[15]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="DISKUSI2" name="jawaban_117" value="2"<?php if($data[15]['jawaban_1'] == "2") echo "checked";?>/> Kurang besar</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="DISKUSI1" name="jawaban_117" value="1"<?php if($data[15]['jawaban_1'] == "1") echo "checked";?>/> Tidak sama sekali</label>
</td>
</tr>

<tr>
<td colspan="3" style="text-align: center;background-color: #eee;">Bagaimana penilaian anda terhadap aspek belajar mengajar di bawah ini?</td>
</tr>
<tr><td>5.1</td>
<td>Kesempatan untuk berinteraksi dengan dosen-dosen di luar jadwal kuliah</td>
<td>
<label><input type="radio" id="INTERAKSI_DOSEN_DILUARJADWAL5" name="jawaban_118" value="5"<?php if($data[16]['jawaban_1'] == "5") echo "checked";?>/> Sangat baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="INTERAKSI_DOSEN_DILUARJADWAL4" name="jawaban_118" value="4"<?php if($data[16]['jawaban_1'] == "4") echo "checked";?>/> Baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="INTERAKSI_DOSEN_DILUARJADWAL3" name="jawaban_118" value="3"<?php if($data[16]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="INTERAKSI_DOSEN_DILUARJADWAL2" name="jawaban_118" value="2"<?php if($data[16]['jawaban_1'] == "2") echo "checked";?>/> Buruk</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="INTERAKSI_DOSEN_DILUARJADWAL1" name="jawaban_118" value="1"<?php if($data[16]['jawaban_1'] == "1") echo "checked";?>/> Sangat buruk</label>
</td>
</tr>
<tr><td>5.2</td>
<td>Pembimbingan akademik</td>
<td>
<label><input type="radio" id="BIMBINGAN_AKADEMIK5" name="jawaban_119" value="5"<?php if($data[17]['jawaban_1'] == "5") echo "checked";?>/> Sangat baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="BIMBINGAN_AKADEMIK4" name="jawaban_119" value="4"<?php if($data[17]['jawaban_1'] == "4") echo "checked";?>/> Baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="BIMBINGAN_AKADEMIK3" name="jawaban_119" value="3"<?php if($data[17]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="BIMBINGAN_AKADEMIK2" name="jawaban_119" value="2"<?php if($data[17]['jawaban_1'] == "2") echo "checked";?>/> Buruk</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="BIMBINGAN_AKADEMIK1" name="jawaban_119" value="1"<?php if($data[17]['jawaban_1'] == "1") echo "checked";?>/> Sangat buruk</label>
</td>
</tr>
<tr><td>5.3</td>
<td>Kesempatan berpartisipasi dalam proyek riset</td>
<td>
<label><input type="radio" id="KESEMPATAN_PROYEK_RISET5" name="jawaban_120" value="5"<?php if($data[18]['jawaban_1'] == "5") echo "checked";?>/> Sangat baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KESEMPATAN_PROYEK_RISET4" name="jawaban_120" value="4"<?php if($data[18]['jawaban_1'] == "4") echo "checked";?>/> Baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KESEMPATAN_PROYEK_RISET3" name="jawaban_120" value="3"<?php if($data[18]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KESEMPATAN_PROYEK_RISET2" name="jawaban_120" value="2"<?php if($data[18]['jawaban_1'] == "2") echo "checked";?>/> Buruk</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KESEMPATAN_PROYEK_RISET1" name="jawaban_120" value="1"<?php if($data[18]['jawaban_1'] == "1") echo "checked";?>/> Sangat buruk</label>
</td>
</tr>
<tr><td>5.4</td>
<td>Kondisi umum belajar mengajar</td>
<td>
<label><input type="radio" id="KONDISI_UMUM_BELAJAR_MENGAJAR5" name="jawaban_121" value="5"<?php if($data[19]['jawaban_1'] == "5") echo "checked";?>/> Sangat baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KONDISI_UMUM_BELAJAR_MENGAJAR4" name="jawaban_121" value="4"<?php if($data[19]['jawaban_1'] == "4") echo "checked";?>/> Baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KONDISI_UMUM_BELAJAR_MENGAJAR3" name="jawaban_121" value="3"<?php if($data[19]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KONDISI_UMUM_BELAJAR_MENGAJAR2" name="jawaban_121" value="2"<?php if($data[19]['jawaban_1'] == "2") echo "checked";?>/> Buruk</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KONDISI_UMUM_BELAJAR_MENGAJAR1" name="jawaban_121" value="1"<?php if($data[19]['jawaban_1'] == "1") echo "checked";?>/> Sangat buruk</label>
</td>
</tr>
<tr><td>5.5</td>
<td>Kesempatan untuk memasuki dan menjadi bagian dari jejaring ilmiah profesional</td>
<td>
<label><input type="radio" id="KESEMPATAN_JEJARING_ILMIAH5" name="jawaban_122" value="5"<?php if($data[20]['jawaban_1'] == "5") echo "checked";?>/> Sangat baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KESEMPATAN_JEJARING_ILMIAH4" name="jawaban_122" value="4"<?php if($data[20]['jawaban_1'] == "4") echo "checked";?>/> Baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KESEMPATAN_JEJARING_ILMIAH3" name="jawaban_122" value="3"<?php if($data[20]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KESEMPATAN_JEJARING_ILMIAH2" name="jawaban_122" value="2"<?php if($data[20]['jawaban_1'] == "2") echo "checked";?>/> Buruk</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KESEMPATAN_JEJARING_ILMIAH1" name="jawaban_122" value="1"<?php if($data[20]['jawaban_1'] == "1") echo "checked";?>/> Sangat buruk</label>
</td>
</tr>

<tr>
<td colspan="3" style="text-align: center;background-color: #eee;">Selama anda kuliah di UIN Sunan Ampel Surabaya, bagaimana pendapat anda terhadap kondisi fasilitas belajar di bawah ini?</td>
</tr>
<tr><td>6.1</td>
<td>Perpustakaan</td>
<td>
<label><input type="radio" id="PERPUSTAKAAN5" name="jawaban_123" value="5"<?php if($data[21]['jawaban_1'] == "5") echo "checked";?>/> Sangat baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PERPUSTAKAAN4" name="jawaban_123" value="4"<?php if($data[21]['jawaban_1'] == "4") echo "checked";?>/> Baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PERPUSTAKAAN3" name="jawaban_123" value="3"<?php if($data[21]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PERPUSTAKAAN2" name="jawaban_123" value="2"<?php if($data[21]['jawaban_1'] == "2") echo "checked";?>/> Buruk</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PERPUSTAKAAN1" name="jawaban_123" value="1"<?php if($data[21]['jawaban_1'] == "1") echo "checked";?>/> Sangat buruk</label>
</td>
</tr>
<tr><td>6.2</td>
<td>Teknologi informasi dan Komunikasi</td>
<td>
<label><input type="radio" id="TEKNOLOGI_INFORMASI5" name="jawaban_124" value="5"<?php if($data[22]['jawaban_1'] == "5") echo "checked";?>/> Sangat baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="TEKNOLOGI_INFORMASI4" name="jawaban_124" value="4"<?php if($data[22]['jawaban_1'] == "4") echo "checked";?>/> Baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="TEKNOLOGI_INFORMASI3" name="jawaban_124" value="3"<?php if($data[22]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="TEKNOLOGI_INFORMASI2" name="jawaban_124" value="2"<?php if($data[22]['jawaban_1'] == "2") echo "checked";?>/> Buruk</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="TEKNOLOGI_INFORMASI1" name="jawaban_124" value="1"<?php if($data[22]['jawaban_1'] == "1") echo "checked";?>/> Sangat buruk</label>
</td>
</tr>
<tr><td>6.3</td>
<td>Modul belajar</td>
<td>
<label><input type="radio" id="MODUL_BELAJAR5" name="jawaban_125" value="5"<?php if($data[23]['jawaban_1'] == "5") echo "checked";?>/> Sangat baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="MODUL_BELAJAR4" name="jawaban_125" value="4"<?php if($data[23]['jawaban_1'] == "4") echo "checked";?>/> Baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="MODUL_BELAJAR3" name="jawaban_125" value="3"<?php if($data[23]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="MODUL_BELAJAR2" name="jawaban_125" value="2"<?php if($data[23]['jawaban_1'] == "2") echo "checked";?>/> Buruk</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="MODUL_BELAJAR1" name="jawaban_125" value="1"<?php if($data[23]['jawaban_1'] == "1") echo "checked";?>/> Sangat buruk</label>
</td>
</tr>
<tr><td>6.4</td>
<td>Ruang belajar</td>
<td>
<label><input type="radio" id="RUANG_BELAJAR5" name="jawaban_126" value="5"<?php if($data[24]['jawaban_1'] == "5") echo "checked";?>/> Sangat baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="RUANG_BELAJAR4" name="jawaban_126" value="4"<?php if($data[24]['jawaban_1'] == "4") echo "checked";?>/> Baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="RUANG_BELAJAR3" name="jawaban_126" value="3"<?php if($data[24]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="RUANG_BELAJAR2" name="jawaban_126" value="2"<?php if($data[24]['jawaban_1'] == "2") echo "checked";?>/> Buruk</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="RUANG_BELAJAR1" name="jawaban_126" value="1"<?php if($data[24]['jawaban_1'] == "1") echo "checked";?>/> Sangat buruk</label>
</td>
</tr>
<tr><td>6.5</td>
<td>Laboratorium</td>
<td>
<label><input type="radio" id="LABORATORIUM5" name="jawaban_127" value="5"<?php if($data[25]['jawaban_1'] == "5") echo "checked";?>/> Sangat baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="LABORATORIUM4" name="jawaban_127" value="4"<?php if($data[25]['jawaban_1'] == "4") echo "checked";?>/> Baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="LABORATORIUM3" name="jawaban_127" value="3"<?php if($data[25]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="LABORATORIUM2" name="jawaban_127" value="2"<?php if($data[25]['jawaban_1'] == "2") echo "checked";?>/> Buruk</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="LABORATORIUM1" name="jawaban_127" value="1"<?php if($data[25]['jawaban_1'] == "1") echo "checked";?>/> Sangat buruk</label>
</td>
</tr>
<tr><td>6.6</td>
<td>Variasi matakuliah yang ditawarkan</td>
<td>
<label><input type="radio" id="VARIASI_MATAKULIAH5" name="jawaban_128" value="5"<?php if($data[26]['jawaban_1'] == "5") echo "checked";?>/> Sangat baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="VARIASI_MATAKULIAH4" name="jawaban_128" value="4"<?php if($data[26]['jawaban_1'] == "4") echo "checked";?>/> Baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="VARIASI_MATAKULIAH3" name="jawaban_128" value="3"<?php if($data[26]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="VARIASI_MATAKULIAH2" name="jawaban_128" value="2"<?php if($data[26]['jawaban_1'] == "2") echo "checked";?>/> Buruk</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="VARIASI_MATAKULIAH1" name="jawaban_128" value="1"<?php if($data[26]['jawaban_1'] == "1") echo "checked";?>/> Sangat buruk</label>
</td>
</tr>
<tr><td>6.7</td>
<td>Akomodasi</td>
<td>
<label><input type="radio" id="AKOMODASI5" name="jawaban_129" value="5"<?php if($data[27]['jawaban_1'] == "5") echo "checked";?>/> Sangat baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="AKOMODASI4" name="jawaban_129" value="4"<?php if($data[27]['jawaban_1'] == "4") echo "checked";?>/> Baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="AKOMODASI3" name="jawaban_129" value="3"<?php if($data[27]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="AKOMODASI2" name="jawaban_129" value="2"<?php if($data[27]['jawaban_1'] == "2") echo "checked";?>/> Buruk</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="AKOMODASI1" name="jawaban_129" value="1"<?php if($data[27]['jawaban_1'] == "1") echo "checked";?>/> Sangat buruk</label>
</td>
</tr>
<tr><td>6.8</td>
<td>Kantin</td>
<td>
<label><input type="radio" id="KANTIN5" name="jawaban_130" value="5"<?php if($data[28]['jawaban_1'] == "5") echo "checked";?>/> Sangat baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KANTIN4" name="jawaban_130" value="4"<?php if($data[28]['jawaban_1'] == "4") echo "checked";?>/> Baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KANTIN3" name="jawaban_130" value="3"<?php if($data[28]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KANTIN2" name="jawaban_130" value="2"<?php if($data[28]['jawaban_1'] == "2") echo "checked";?>/> Buruk</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KANTIN1" name="jawaban_130" value="1"<?php if($data[28]['jawaban_1'] == "1") echo "checked";?>/> Sangat buruk</label>
</td>
</tr>
<tr><td>6.9</td>
<td>Pusat kegiatan mahasiswa dan fasilitasnya, ruang rekreasi</td>
<td>
<label><input type="radio" id="PUSAT_KEGIATAN_MAHASISWA5" name="jawaban_131" value="5"<?php if($data[29]['jawaban_1'] == "5") echo "checked";?>/> Sangat baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PUSAT_KEGIATAN_MAHASISWA4" name="jawaban_131" value="4"<?php if($data[29]['jawaban_1'] == "4") echo "checked";?>/> Baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PUSAT_KEGIATAN_MAHASISWA3" name="jawaban_131" value="3"<?php if($data[29]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PUSAT_KEGIATAN_MAHASISWA2" name="jawaban_131" value="2"<?php if($data[29]['jawaban_1'] == "2") echo "checked";?>/> Buruk</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PUSAT_KEGIATAN_MAHASISWA1" name="jawaban_131" value="1"<?php if($data[29]['jawaban_1'] == "1") echo "checked";?>/> Sangat buruk</label>
</td>
</tr>
<tr><td>6.10</td>
<td>Fasilitas layanan kesehatan</td>
<td>
<label><input type="radio" id="FASILITAS_LAYANAN_KESEHATAN5" name="jawaban_132" value="5"<?php if($data[30]['jawaban_1'] == "5") echo "checked";?>/> Sangat baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="FASILITAS_LAYANAN_KESEHATAN4" name="jawaban_132" value="4"<?php if($data[30]['jawaban_1'] == "4") echo "checked";?>/> Baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="FASILITAS_LAYANAN_KESEHATAN3" name="jawaban_132" value="3"<?php if($data[30]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="FASILITAS_LAYANAN_KESEHATAN2" name="jawaban_132" value="2"<?php if($data[30]['jawaban_1'] == "2") echo "checked";?>/> Buruk</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="FASILITAS_LAYANAN_KESEHATAN1" name="jawaban_132" value="1"<?php if($data[30]['jawaban_1'] == "1") echo "checked";?>/> Sangat buruk</label>
</td>
</tr>

<tr>
<td colspan="3" style="text-align: center;background-color: #eee;">Bagaimana penilaian anda terhadap pengalaman belajar di bawah ini?</td>
</tr>
<tr><td>7.1</td>
<td>Pembelajaran di kelas</td>
<td>
<label><input type="radio" id="PEMBELAJARAN_DI_KELAS5" name="jawaban_133" value="5"<?php if($data[31]['jawaban_1'] == "5") echo "checked";?>/> Sangat baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PEMBELAJARAN_DI_KELAS4" name="jawaban_133" value="4"<?php if($data[31]['jawaban_1'] == "4") echo "checked";?>/> Baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PEMBELAJARAN_DI_KELAS3" name="jawaban_133" value="3"<?php if($data[31]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PEMBELAJARAN_DI_KELAS2" name="jawaban_133" value="2"<?php if($data[31]['jawaban_1'] == "2") echo "checked";?>/> Buruk</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PEMBELAJARAN_DI_KELAS1" name="jawaban_133" value="1"<?php if($data[31]['jawaban_1'] == "1") echo "checked";?>/> Sangat buruk</label>
</td>
</tr>
<tr><td>7.2</td>
<td>Magang/kerja lapangan/praktikum</td>
<td>
<label><input type="radio" id="KERJA_LAPANGAN5" name="jawaban_134" value="5"<?php if($data[32]['jawaban_1'] == "5") echo "checked";?>/> Sangat baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KERJA_LAPANGAN4" name="jawaban_134" value="4"<?php if($data[32]['jawaban_1'] == "4") echo "checked";?>/> Baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KERJA_LAPANGAN3" name="jawaban_134" value="3"<?php if($data[32]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KERJA_LAPANGAN2" name="jawaban_134" value="2"<?php if($data[32]['jawaban_1'] == "2") echo "checked";?>/> Buruk</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KERJA_LAPANGAN1" name="jawaban_134" value="1"<?php if($data[32]['jawaban_1'] == "1") echo "checked";?>/> Sangat buruk</label>
</td>
</tr>
<tr><td>7.3</td>
<td>Pengabdian dan penjangkauan masyarakat</td>
<td>
<label><input type="radio" id="PENGABDIAN_MASYARAKAT5" name="jawaban_135" value="5"<?php if($data[33]['jawaban_1'] == "5") echo "checked";?>/> Sangat baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PENGABDIAN_MASYARAKAT4" name="jawaban_135" value="4"<?php if($data[33]['jawaban_1'] == "4") echo "checked";?>/> Baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PENGABDIAN_MASYARAKAT3" name="jawaban_135" value="3"<?php if($data[33]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PENGABDIAN_MASYARAKAT2" name="jawaban_135" value="2"<?php if($data[33]['jawaban_1'] == "2") echo "checked";?>/> Buruk</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PENGABDIAN_MASYARAKAT1" name="jawaban_135" value="1"<?php if($data[33]['jawaban_1'] == "1") echo "checked";?>/> Sangat buruk</label>
</td>
</tr>
<tr><td>7.4</td>
<td>Pelaksanaan riset/penulisan skripsi</td>
<td>
<label><input type="radio" id="PELAKSANAAN_RISET5" name="jawaban_136" value="5"<?php if($data[34]['jawaban_1'] == "5") echo "checked";?>/> Sangat baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PELAKSANAAN_RISET4" name="jawaban_136" value="4"<?php if($data[34]['jawaban_1'] == "4") echo "checked";?>/> Baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PELAKSANAAN_RISET3" name="jawaban_136" value="3"<?php if($data[34]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PELAKSANAAN_RISET2" name="jawaban_136" value="2"<?php if($data[34]['jawaban_1'] == "2") echo "checked";?>/> Buruk</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PELAKSANAAN_RISET1" name="jawaban_136" value="1"<?php if($data[34]['jawaban_1'] == "1") echo "checked";?>/> Sangat buruk</label>
</td>
</tr>
<tr><td>7.5</td>
<td>Organisasi kemahasiswaan</td>
<td>
<label><input type="radio" id="ORGANISASI_KEMAHASISWAAN5" name="jawaban_137" value="5"<?php if($data[35]['jawaban_1'] == "5") echo "checked";?>/> Sangat baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="ORGANISASI_KEMAHASISWAAN4" name="jawaban_137" value="4"<?php if($data[35]['jawaban_1'] == "4") echo "checked";?>/> Baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="ORGANISASI_KEMAHASISWAAN3" name="jawaban_137" value="3"<?php if($data[35]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="ORGANISASI_KEMAHASISWAAN2" name="jawaban_137" value="2"<?php if($data[35]['jawaban_1'] == "2") echo "checked";?>/> Buruk</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="ORGANISASI_KEMAHASISWAAN1" name="jawaban_137" value="1"<?php if($data[35]['jawaban_1'] == "1") echo "checked";?>/> Sangat buruk</label>
</td>
</tr>
<tr><td>7.6</td>
<td>Kegiatan ekstrakurikuler</td>
<td>
<label><input type="radio" id="KEGIATAN_EKSTRAKURIKULER5" name="jawaban_138" value="5"<?php if($data[36]['jawaban_1'] == "5") echo "checked";?>/> Sangat baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEGIATAN_EKSTRAKURIKULER4" name="jawaban_138" value="4"<?php if($data[36]['jawaban_1'] == "4") echo "checked";?>/> Baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEGIATAN_EKSTRAKURIKULER3" name="jawaban_138" value="3"<?php if($data[36]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEGIATAN_EKSTRAKURIKULER2" name="jawaban_138" value="2"<?php if($data[36]['jawaban_1'] == "2") echo "checked";?>/> Buruk</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEGIATAN_EKSTRAKURIKULER1" name="jawaban_138" value="1"<?php if($data[36]['jawaban_1'] == "1") echo "checked";?>/> Sangat buruk</label>
</td>
</tr>
<tr><td>7.7</td>
<td>Rekreasi dan olahraga</td>
<td>
<label><input type="radio" id="REKREASI_DAN_OLAHRAGA5" name="jawaban_139" value="5"<?php if($data[37]['jawaban_1'] == "5") echo "checked";?>/> Sangat baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="REKREASI_DAN_OLAHRAGA4" name="jawaban_139" value="4"<?php if($data[37]['jawaban_1'] == "4") echo "checked";?>/> Baik</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="REKREASI_DAN_OLAHRAGA3" name="jawaban_139" value="3"<?php if($data[37]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="REKREASI_DAN_OLAHRAGA2" name="jawaban_139" value="2"<?php if($data[37]['jawaban_1'] == "2") echo "checked";?>/> Buruk</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="REKREASI_DAN_OLAHRAGA1" name="jawaban_139" value="1"<?php if($data[37]['jawaban_1'] == "1") echo "checked";?>/> Sangat buruk</label>
</td>
</tr>

<tr><td>8</td>
<td>Berdasarkan persepsi anda, seberapa pengtingkah aspek-aspek di bawah ini bagi perusahaan/instansi dalam melakukan penerimaan pegawai baru?<br><i>Jawaban bisa lebih dari satu.</i></td>
<td>
            <label><input type="checkbox" name="jawaban_140" id="app1" value="1"<?php if($data[38]['jawaban_1'] == "1") echo "checked";?>/> Program studi</label><br>
            <label><input type="checkbox" name="jawaban_141" id="app2" value="2"<?php if($data[38]['jawaban_2'] == "2") echo "checked";?>/> Spesialisasi</label><br>
            <label><input type="checkbox" name="jawaban_142" id="app3" value="3"<?php if($data[38]['jawaban_3'] == "3") echo "checked";?>/> IPK</label><br>
            <label><input type="checkbox" name="jawaban_143" id="app4" value="4"<?php if($data[38]['jawaban_4'] == "4") echo "checked";?>/> Pengalaman kerja selama kuliah</label><br>
            <label><input type="checkbox" name="jawaban_144" id="app5" value="5"<?php if($data[38]['jawaban_5'] == "5") echo "checked";?>/> Reputasi dari perguruan tinggi</label><br>
            <label><input type="checkbox" name="jawaban_145" id="app6" value="6"<?php if($data[38]['jawaban_6'] == "6") echo "checked";?>/> Pengalaman ke luar negeri (untuk bekerja atau magang)</label><br>
            <label><input type="checkbox" name="jawaban_146" id="app7" value="7"<?php if($data[38]['jawaban_7'] == "7") echo "checked";?>/> Kemampuan bahasa Inggris</label><br>
            <label><input type="checkbox" name="jawaban_147" id="app8" value="8"<?php if($data[38]['jawaban_8'] == "8") echo "checked";?>/> Kemampuan bahasa asing lainnya</label><br>
            <label><input type="checkbox" name="jawaban_148" id="app9" value="9"<?php if($data[38]['jawaban_9'] == "9") echo "checked";?>/> Pengalaman berorganisasi</label><br>
            <label><input type="checkbox" name="jawaban_149" id="app10" value="10"<?php if($data[38]['jawaban_10'] == "10") echo "checked";?>/> Rekomendasi dari pihak ketiga</label><br>
            <label><input type="checkbox" name="jawaban_150" id="app11" value="11"<?php if($data[38]['jawaban_11'] == "11") echo "checked";?>/> Kepribadian dan ketrampilan antar personal</label><br>
            <label><input type="checkbox" name="jawaban_150" id="app12" value="12"<?php if($data[38]['jawaban_12'] == "12") echo "checked";?>/> Kemampuan program komputer</label><br>
            <label><input type="checkbox" name="jawaban_151" id="app13" value="13"<?php if($data[38]['jawaban_13'] == "13") echo "checked";?>/> Kemampuan programming</label><br>
            <label><input type="checkbox" name="jawaban_152" id="app14" value="14"<?php if($data[38]['jawaban_14'] == "14") echo "checked";?>/> Kemampuan analisis</label><br>
          </td></tr>

<tr><td></td>
<td></td>
<td colspan="4">
<div class="form-actions">
  <button class="btn btn-primary">Simpan</button>&nbsp;&nbsp;<button type="reset" class="btn">Reset</button>
</div>
</td>
</tr>
</tbody></table>
</form>
</div>
