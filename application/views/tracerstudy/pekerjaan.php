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

    <form action="<?php echo site_url(); ?>/tracerstudy/simpan1" method="post" accept-charset="utf-8" id="frmBagian1">
<table class="table">
<tr><td >1</td>
<td width="40%" id="id_soal">Kapan anda mulai mencari pekerjaan?<br /><i>Mohon pekerjaan sambilan tidak dimasukkan.</i></td>
<td>
Kira-kira: &nbsp;<input type="text" id="jawaban_1" name="jawaban_1" oninvalid="this.setCustomValidity('Harap Diisi Dahulu!')" value="<?php echo $data[0]['jawaban_1'];?>" />
<select id="jawaban_2" name="jawaban_2">
  <option value="negatif" <?php if($data[0]['jawaban_2'] == "negatif") echo "Selected";?>>bulan sebelum lulus.</option>
  <option value="positif" <?php if($data[0]['jawaban_2'] == "positif") echo "Selected";?>>bulan setelah lulus.</option>
</select>
</td>
</tr>

<tr id="id_soal" value="2"><td>2</td>
<td>Bagaimana anda mencari pekerjaan setelah lulus?<br /><i>Jawaban bisa lebih dari satu</i></td>
<td>
            <label><input type="checkbox" name="jawaban_3" id="jawaban_1" value="1" <?php if($data[1]['jawaban_1'] == "1") echo "checked";?> /> Melalui iklan di koran/majalah, brosur.</label><br />
            <label><input type="checkbox" name="jawaban_4" id="jawaban_2" value="2" <?php if($data[1]['jawaban_2'] == "2") echo "checked";?>/> Melamar ke perusahaan tanpa mengetahui lowongan yang ada.</label><br />
            <label><input type="checkbox" name="jawaban_5" id="jawaban_3" value="3" <?php if($data[1]['jawaban_3'] == "3") echo "checked";?> /> Pergi ke bursa/pameran kerja.</label><br />
            <label><input type="checkbox" name="jawaban_6" id="jawaban_4" value="4" <?php if($data[1]['jawaban_4'] == "4") echo "checked";?>/> Mencari lewat internet/iklan online/milis.</label><br />
            <label><input type="checkbox" name="jawaban_7" id="jawaban_5" value="5" <?php if($data[1]['jawaban_5'] == "5") echo "checked";?>/> Dihubungi oleh perusahaan.</label><br />
            <label><input type="checkbox" name="jawaban_8" id="jawaban_6" value="6" <?php if($data[1]['jawaban_6'] == "6") echo "checked";?>/> Menghubungi Kemnakertrans.</label><br />
            <label><input type="checkbox" name="jawaban_9" id="jawaban_7" value="7" <?php if($data[1]['jawaban_7'] == "7") echo "checked";?>/> Menghubungi agen tenaga kerja komersiaI/swasta.</label><br />
            <label><input type="checkbox" name="jawaban_10" id="jawaban_8" value="8" <?php if($data[1]['jawaban_8'] == "8") echo "checked";?>/> Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas.</label><br />
            <label><input type="checkbox" name="jawaban_11" id="jawaban_9" value="9" <?php if($data[1]['jawaban_9'] == "9") echo "checked";?>/> Menghubungi kantor kemahasiswaan/hubungan alumni.</label><br />
            <label><input type="checkbox" name="jawaban_12" id="jawaban_10" value="10" <?php if($data[1]['jawaban_10'] == "10") echo "checked";?>/> Membangun network sejak masih kuliah.</label><br />
            <label><input type="checkbox" name="jawaban_13" id="jawaban_11" value="11" <?php if($data[1]['jawaban_11'] == "11") echo "checked";?>/> Melalui relasi (misalnya dosen, orantua, saudara, teman, dll.)</label><br />
            <label><input type="checkbox" name="jawaban_14" id="jawaban_12" value="12" <?php if($data[1]['jawaban_12'] == "12") echo "checked";?>/> Membangun bisnis sendiri.</label><br />
            <label><input type="checkbox" name="jawaban_15" id="jawaban_13" value="13" <?php if($data[1]['jawaban_13'] == "13") echo "checked";?> /> Melalui penempatan kerja atau magang.</label><br />
            <label><input type="checkbox" name="jawaban_16" id="jawaban_14" value="14" <?php if($data[1]['jawaban_14'] == "14") echo "checked";?> /> Bekerja di tempat yang sama dengan tempat kerja semasa kuliah.</label><br />
            <label><input type="checkbox" name="jawaban_17" id="jawaban_15" value="15" <?php if($data[1]['jawaban_15'] == "15") echo "checked";?>/> Lainnya.</label><br />
<!--<input type="text" id="SUMBER_LAIN" name="SUMBER_LAIN" />-->
</td>
</tr>

<tr id="id_soal" value="3"><td>3</td>
<td>Berapa perusahaan/instansi/institusi yang sudah anda lamar (lewat surat atau e-mail) sebelum anda memeroleh pekerjaan pertama?</td>
<td><input type="text" id="jawaban_1" name="jawaban_18" oninvalid="this.setCustomValidity('Harap Diisi Dahulu!')" value="<?php echo $data[2]['jawaban_1'];?>" /> perusahaan/instansi/institusi.</td>
</tr>

<tr id="id_soal" value="4"><td>4</td>
<td>Berapa bulan waktu yang dihabiskan (sebelum dan sesudah kelulusan) untuk memeroleh pekerjaan pertama?</td>
<td>
Kira-kira: &nbsp;<input type="text" id="jawaban_1" value="<?php echo $data[3]['jawaban_1'];?>" name="jawaban_19" oninvalid="this.setCustomValidity('Harap Diisi Dahulu!')" />
<select id="jawaban_2" name="jawaban_56">
  <option value="negatif"<?php if($data[3]['jawaban_2'] == "negatif") echo "Selected";?>>bulan sebelum lulus.</option>
  <option value="positif"<?php if($data[3]['jawaban_2'] == "positif") echo "Selected";?>>bulan setelah lulus.</option>
</select>
</td>
</tr>

<tr id="id_soal" value="5"><td>5</td>
<td>Berapa banyak perusahaan/instansi/institusi yang merespon lamaran anda?</td>
<td><input type="text" id="jawaban_1" value="<?php echo $data[4]['jawaban_1'];?>" name="jawaban_20" oninvalid="this.setCustomValidity('Harap Diisi Dahulu!')" /> perusahaan/instansi/institusi.</td>
</tr>

<tr id="id_soal" value="6"><td>6</td>
<td>Apakah anda bekerja saat ini (termasuk kerja sambilan dan wirausaha)?</td>
<td>
<select id="jawaban_1" name="jawaban_21" onchange="javascript:tampilkan_rowya();">
  <option value="Y"<?php if($data[5]['jawaban_1'] == "Y") echo "Selected";?>>Ya</option>
  <option value="T"<?php if($data[5]['jawaban_1'] == "T") echo "Selected";?>>Tidak</option>
</select>
</td>
</tr>

<tr id="id_soal" value="7"><td>7</td>
<td>Bagaimana anda menggambarkan situasi anda saat ini?<br /><i>Jawaban bisa lebih dari satu</i></td>
<td>
            <label><input type="checkbox" name="jawaban_22" id="jawaban_1" value="1" <?php if($data[6]['jawaban_1'] == "1") echo "checked";?>/> Saya masih belajar/melanjutkan kuliah profesi atau pascasarjana.</label><br />
            <label><input type="checkbox" name="jawaban_23" id="jawaban_2" value="2" <?php if($data[6]['jawaban_2'] == "2") echo "checked";?>/> Saya menikah.</label><br />
            <label><input type="checkbox" name="jawaban_24" id="jawaban_3" value="3" <?php if($data[6]['jawaban_3'] == "3") echo "checked";?>/> Saya sibuk dengan keluarga dan anak-anak.</label><br />
            <label><input type="checkbox" name="jawaban_25" id="jawaban_4" value="4" <?php if($data[6]['jawaban_4'] == "4") echo "checked";?>/> Saya sekarang sedang mencari pekerjaan.</label><br />
            <label><input type="checkbox" name="jawaban_26" id="jawaban_5" value="5" <?php if($data[6]['jawaban_5'] == "5") echo "checked";?>/> Lainnya.</label><br />
<!--<input type="text" id="SITUASI_LAIN" name="SITUASI_LAIN" />-->
</td>
</tr>

<tr id="id_soal" value="8"><td>8</td>
<td>Apakah anda aktif mencari pekerjaan dalam 4 minggu terakhir?<br /><i>Pilih satu jawaban</i>.</td>
<td>
<label><input type="radio" name="jawaban_27" id="jawaban_1" value="1" <?php if($data[7]['jawaban_1'] == "1") echo "checked:";?>/> Tidak</label><br />
<label><input type="radio" name="jawaban_27" id="jawaban_2" value="2" <?php if($data[7]['jawaban_2'] == "2") echo "checked:";?>/> Tidak, tapi saya sedang menunggu hasil lamaran kerja</label><br />
<label><input type="radio" name="jawaban_27" id="jawaban_3" value="3" <?php if($data[7]['jawaban_3'] == "3") echo "checked:";?>/> Ya, saya akan mulai bekerja dalam 2 minggu ke depan</label><br />
<label><input type="radio" name="jawaban_27" id="jawaban_4" value="4" <?php if($data[7]['jawaban_4'] == "4") echo "checked:";?>/> Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan</label><br />
<label><input type="radio" name="jawaban_27" id="jawaban_5" value="5" <?php if($data[7]['jawaban_5'] == "5") echo "checked:";?>/> Lainnya</label>
<!--<input typt="text" id="AKTIF_MENCARI_PEKERJAAN6" name="AKTIF_MENCARI_PEKERJAAN_LAIN" />-->
</td>
</tr>

<tr id="id_soal" value="9"><td>9</td>
<td>Apa jenis perusahaan/instansi/institusi tempat anda bekerja sekarang?</td>
<td>
<label><input type="radio" name="jawaban_28" id="jawaban_1" value="1" <?php if($data[8]['jawaban_1'] == "1")echo "checked";?>/> Instansi pemerintah (termasuk BUMN)</label><br />
<label><input type="radio" name="jawaban_28" id="jawaban_3" value="2" <?php if($data[8]['jawaban_2'] == "2")echo "checked";?>/> Perusahaan swasta</label><br />
<label><input type="radio" name="jawaban_28" id="jawaban_2" value="3" <?php if($data[8]['jawaban_3'] == "3")echo "checked";?>/> Organisasi non-profit/Lembaga Swadaya Masyarakat</label><br />
<label><input type="radio" name="jawaban_28" id="jawaban_4" value="4" <?php if($data[8]['jawaban_4'] == "4")echo "checked";?>/> Wiraswasta/perusahaan sendiri</label><br />
<label><input type="radio" name="jawaban_28" id="jawaban_5" value="5" <?php if($data[8]['jawaban_5'] == "5")echo "checked";?>/> Lainnya</label>
<!--<input typt="text" id="JENIS_PERUSAHAAN_ANDA6" name="JENIS_PERUSAHAAN_ANDA_LAIN" />-->
</td>
</tr>

<tr id="id_soal" value="10"><td>10</td>
<td>Tempat anda bekerja saat ini bergerak di bidang apa? (Klasifikasi Baku Lapangan Usaha Indonesia, Kemnakertrans, 2009)</td>
<td>
<select id="jawaban_37" name="jawaban_29" onchange="javacsript:isi_bidang_pekerjaan();">
  <option value="FUCK">- Pilih Satu -</option>
                <option value="A" <?php if($data[9]['jawaban_1'] == "A") echo "Selected";?>>Kategori A: Pertanian, kehutanan, dan perikanan</option>
                <option value="B" <?php if($data[9]['jawaban_2'] == "B") echo "Selected";?>>Kategori B: Pertambangan dan penggalian</option>
                <option value="C" <?php if($data[9]['jawaban_3'] == "C") echo "Selected";?>>Kategori C: Industri pengolahan</option>
                <option value="D" <?php if($data[9]['jawaban_4'] == "D") echo "Selected";?>>Kategori D: Pengadaan listrik, gas, uap/air panas dan udara dingin</option>
                <option value="E" <?php if($data[9]['jawaban_5'] == "E") echo "Selected";?>>Kategori E: Pengadaan air, pengelolaan sampah dan daur ulang, pembuangan dan pembersihan limbah dan sampah</option>
                <option value="F" <?php if($data[9]['jawaban_6'] == "F") echo "Selected";?>>Kategori F: Konstruksi</option>
                <option value="G" <?php if($data[9]['jawaban_7'] == "G") echo "Selected";?>>Kategori G: Perdagangan besar dan eceran; reparasi dan perawatan mobil dan sepeda motor</option>
                <option value="H" <?php if($data[9]['jawaban_8'] == "H") echo "Selected";?>>Kategori H: Transportasi dan pergudangan</option>
                <option value="I" <?php if($data[9]['jawaban_9'] == "I") echo "Selected";?>>Kategori I: Penyediaan akomodasi dan penyediaan makan minum</option>
                <option value="J" <?php if($data[9]['jawaban_10'] == "J") echo "Selected";?>>Kategori J: Informasi dan komunikasi</option>
                <option value="K" <?php if($data[9]['jawaban_11'] == "K") echo "Selected";?>>Kategori K: Jasa keuangan dan asuransi</option>
                <option value="L" <?php if($data[9]['jawaban_12'] == "L") echo "Selected";?>>Kategori L: Real estat</option>
                <option value="M" <?php if($data[9]['jawaban_13'] == "M") echo "Selected";?>>Kategori M: Jasa profesional, ilmiah dan teknis</option>
                <option value="N" <?php if($data[9]['jawaban_14'] == "N") echo "Selected";?>>Kategori N: Jasa persewaan dan sewa guna usaha tanpa hak opsi, ketenagakerjaan, agen perjalanan & penunjang usaha lainnya</option>
                <option value="O" <?php if($data[9]['jawaban_15'] == "O") echo "Selected";?>>Kategori O: Administrasi pemerintahan, pertahanan dan jaminan sosial wajib</option>
                <option value="P" <?php if($data[9]['jawaban_16'] == "P") echo "Selected";?>>Kategori P: Jasa pendidikan</option>
                <option value="Q" <?php if($data[9]['jawaban_17'] == "Q") echo "Selected";?>>Kategori Q: Jasa kesehatan dan kegiatan sosial</option>
                <option value="R" <?php if($data[9]['jawaban_18'] == "R") echo "Selected";?>>Kategori R: Kesenian, hiburan dan rekreasi</option>
                <option value="S" <?php if($data[9]['jawaban_19'] == "S") echo "Selected";?>>Kategori S: Kegiatan jasa lainnya</option>
                <option value="T" <?php if($data[9]['jawaban_20'] == "T") echo "Selected";?>>Kategori T: Jasa perorangan yang melayani rumah tangga; kegiatan yang menghasilkan barang dan jasa oleh rumah tangga yang digunakan sendiri untuk memenuhi kebutuhan</option>
                <option value="U" <?php if($data[9]['jawaban_21'] == "U") echo "Selected";?>>Kategori U: Kegiatan badan internasional dan badan ekstra internasional lainnya</option>
              </select>
<!-- <script type="text/javascript">
  function isi_bidang_pekerjaan() {
    var kategoriBidangPekerjaan=document.getElementById('jawaban_1').value;

    $.ajax({
      type: "POST",
      url: "http://alumni.stikom.edu/index.php/tracerstudy/bidang_pekerjaan",
      data: "jawaban_1="+kategoriBidangPekerjaan,
      success: function(msg) {document.getElementById('ID_BIDANG_PEKERJAAN').innerHTML=msg;}
    });
  }
</script> -->
</td>
</tr>

<tr id="id_soal" value="11"><td>11</td>
<td>Kira-kira berapa pendapatan anda setiap bulannya?</td>
<td>
<input type="text" id="jawaban_1" value="<?php echo $data[10]['jawaban_1'];?>" name="jawaban_30" oninvalid="this.setCustomValidity('Harap Diisi Dahulu!')" />&nbsp;dari pekerjaan utama.<br />
<input type="text" id="jawaban_2" value="<?php echo $data[10]['jawaban_2'];?>" name="jawaban_31" oninvalid="this.setCustomValidity('Harap Diisi Dahulu!')" />&nbsp;dari lembur dan tips.<br />
<input type="text" id="jawaban_3" value="<?php echo $data[10]['jawaban_3'];?>" name="jawaban_32" oninvalid="this.setCustomValidity('Harap Diisi Dahulu!')" />&nbsp;dari pekerjaan lainnya.<br />
</td>
</tr>

<tr id="id_soal" value="12"><td>12</td>
<td>Seberapa erat hubungan antara bidang studi dengan pekerjaan anda?</td>
<td>
<select id="jawaban_1" name="jawaban_33">
  <option value="1"<?php if($data[11]['jawaban_1'] == "1") echo "Selected";?>>Sangat erat</option>
  <option value="2"<?php if($data[11]['jawaban_2'] == "2") echo "Selected";?>>Cukup erat</option>
  <option value="3"<?php if($data[11]['jawaban_3'] == "3") echo "Selected";?>>Erat</option>
  <option value="4"<?php if($data[11]['jawaban_4'] == "4") echo "Selected";?>>Kurang Erat</option>
  <option value="5"<?php if($data[11]['jawaban_5'] == "5") echo "Selected";?>>Tidak Erat</option>
</select>
</td>
</tr>

<tr id="id_soal" value="13"><td>13</td>
<td>Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?</td>
<td>
<select id="jawaban_42" name="jawaban_34">
  <option value="1"<?php if($data[12]['jawaban_1'] == "1") echo "Selected";?>>Setingkat lebih tinggi</option>
  <option value="2"<?php if($data[12]['jawaban_2'] == "2") echo "Selected";?>>Tingkat yang sama</option>
  <option value="3"<?php if($data[12]['jawaban_3'] == "3") echo "Selected";?>>Setingkat lebih rendah</option>
  <option value="4"<?php if($data[12]['jawaban_4'] == "4") echo "Selected";?>>Tidak perlu pendidikan tinggi</option>
</select>
</td>
</tr>

<tr id="id_soal" value="14"><td>14</td>
<td>Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya?<br /><i>Jawaban bisa lebih dari satu</i></td>
<td>
            <label><input type="checkbox" name="jawaban_35" id="jawaban_1" value="1" <?php if($data[13]['jawaban_1'] == "1") echo "checked";?>/> Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya.</label><br />
            <label><input type="checkbox" name="jawaban_36" id="jawaban_2" value="2" <?php if($data[13]['jawaban_2'] == "2") echo "checked";?>/> Saya belum mendapatkan pekerjaan yang lebih sesuai.</label><br />
            <label><input type="checkbox" name="jawaban_37" id="jawaban_3" value="3" <?php if($data[13]['jawaban_3'] == "3") echo "checked";?>/> Di pekerjaan ini saya memeroleh prospek karir yang baik. </label><br />
            <label><input type="checkbox" name="jawaban_38" id="jawaban_4" value="4" <?php if($data[13]['jawaban_4'] == "4") echo "checked";?>/> Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya.</label><br />
            <label><input type="checkbox" name="jawaban_39" id="jawaban_5" value="5" <?php if($data[13]['jawaban_5'] == "5") echo "checked";?>/> Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya.</label><br />
            <label><input type="checkbox" name="jawaban_40" id="jawaban_6" value="6" <?php if($data[13]['jawaban_6'] == "6") echo "checked";?>/> Saya dapat memeroleh pendapatn yang lebih tinggi di pekerjaan ini.</label><br />
            <label><input type="checkbox" name="jawaban_41" id="jawaban_7" value="7" <?php if($data[13]['jawaban_7'] == "7") echo "checked";?>/> Pekerjaan saya saat ini lebih aman/terjamin/secure.</label><br />
            <label><input type="checkbox" name="jawaban_42" id="jawaban_8" value="8" <?php if($data[13]['jawaban_8'] == "8") echo "checked";?>/> Pekerjaan saya saat ini lebih menarik.</label><br />
            <label><input type="checkbox" name="jawaban_43" id="jawaban_9" value="9" <?php if($data[13]['jawaban_9'] == "9") echo "checked";?>/> Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll.</label><br />
            <label><input type="checkbox" name="jawaban_44" id="jawaban_10" value="10" <?php if($data[13]['jawaban_10'] == "10") echo "checked";?>/> Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya.</label><br />
            <label><input type="checkbox" name="jawaban_45" id="jawaban_11" value="11" <?php if($data[13]['jawaban_11'] == "11") echo "checked";?> /> Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya.</label><br />
            <label><input type="checkbox" name="jawaban_46" id="jawaban_12" value="12" <?php if($data[13]['jawaban_12'] == "12") echo "checked";?>/> Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya.</label><br />
            <label><input type="checkbox" name="jawaban_47" id="jawaban_13" value="13" <?php if($data[13]['jawaban_13'] == "13") echo "checked";?>/> Lainnya.</label><br />
<!--<input type="text" id="ALASAN_LAIN" name="ALASAN_LAIN" />-->
</td>
</tr>

<tr><td></td>
<td></td>
<td colspan="4">
<div class="form-actions">
  <button class="btn btn-primary" id="save1">Simpan</button>&nbsp;&nbsp;<button type="reset" class="btn">Reset</button>
</div>
</td>
</tr>
</table>
</form>
</div>
<script>
$("#jawaban_1,#jawaban_2,#jawaban_3").keydown(function (e) {
			// Allow: backspace, delete, tab, escape, enter and .
			if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
				// Allow: Ctrl/cmd+A
				(e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
				// Allow: Ctrl/cmd+C
				(e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
				// Allow: Ctrl/cmd+X
				(e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
				// Allow: home, end, left, right
				(e.keyCode >= 35 && e.keyCode <= 39)) {
				// let it happen, don't do anything
				return;
			}
			// Ensure that it is a number and stop the keypress
			if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
				e.preventDefault();
			}
		});
</script>