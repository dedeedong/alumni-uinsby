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
    <form action="<?php echo site_url(); ?>/tracerstudy/simpan3" method="post" accept-charset="utf-8" id="frmBagian1">
<table class="table">
<tbody><tr><td value="42">1</td>
<td width="40%">Pengetahuan di bidang atau disiplin ilmu Anda</td>
<td>
<label><input type="radio" id="PENGETAHUAN_DISIPLIN_ILMU5" name="jawaban_75" value="5" <?php if($data[0]['jawaban_1'] == "5") echo "checked";?> /> Sangat Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PENGETAHUAN_DISIPLIN_ILMU4" name="jawaban_75" value="4" <?php if($data[0]['jawaban_1'] == "4") echo "checked";?> /> Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PENGETAHUAN_DISIPLIN_ILMU3" name="jawaban_75" value="3" <?php if($data[0]['jawaban_1'] == "3") echo "checked";?> /> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PENGETAHUAN_DISIPLIN_ILMU2" name="jawaban_75" value="2" <?php if($data[0]['jawaban_1'] == "2") echo "checked";?> /> Rendah</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PENGETAHUAN_DISIPLIN_ILMU1" name="jawaban_75" value="1" <?php if($data[0]['jawaban_1'] == "1") echo "checked";?> /> Sangat Rendah</label>
</td>
</tr>
<tr><td value="43">2</td>
<td>Pengetahuan di luar bidang atau disiplin ilmu anda</td>
<td>
<label><input type="radio" id="PENGETAHUAN_SELAIN_DISIPLIN_IL5" name="jawaban_76" value="5"<?php if($data[1]['jawaban_1'] == "5") echo "checked";?> /> Sangat Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PENGETAHUAN_SELAIN_DISIPLIN_IL4" name="jawaban_76" value="4"<?php if($data[1]['jawaban_1'] == "4") echo "checked";?>/> Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PENGETAHUAN_SELAIN_DISIPLIN_IL3" name="jawaban_76" value="3"<?php if($data[1]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PENGETAHUAN_SELAIN_DISIPLIN_IL2" name="jawaban_76" value="2"<?php if($data[1]['jawaban_1'] == "2") echo "checked";?>/> Rendah</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PENGETAHUAN_SELAIN_DISIPLIN_IL1" name="jawaban_76" value="1"<?php if($data[1]['jawaban_1'] == "1") echo "checked";?>/> Sangat Rendah</label>
</td>
</tr>
<tr><td value="44">3</td>
<td>Pengetahuan umum</td>
<td>
<label><input type="radio" id="PENGETAHUAN_UMUM5" name="jawaban_77" value="5"<?php if($data[2]['jawaban_1'] == "5") echo "checked";?>/> Sangat Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PENGETAHUAN_UMUM4" name="jawaban_77" value="4"<?php if($data[2]['jawaban_1'] == "4") echo "checked";?>/> Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PENGETAHUAN_UMUM3" name="jawaban_77" value="3"<?php if($data[2]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PENGETAHUAN_UMUM2" name="jawaban_77" value="2"<?php if($data[2]['jawaban_1'] == "2") echo "checked";?>/> Rendah</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="PENGETAHUAN_UMUM1" name="jawaban_77" value="1"<?php if($data[2]['jawaban_1'] == "1") echo "checked";?>/> Sangat Rendah</label>
</td>
</tr>
<tr><td value="45">4</td>
<td>Keterampilan internet</td>
<td>
<label><input type="radio" id="KETERAMPILAN_INTERNET5" name="jawaban_78" value="5"<?php if($data[3]['jawaban_1'] == "5") echo "checked";?>/> Sangat Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KETERAMPILAN_INTERNET4" name="jawaban_78" value="4"<?php if($data[3]['jawaban_1'] == "4") echo "checked";?>/> Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KETERAMPILAN_INTERNET3" name="jawaban_78" value="3"<?php if($data[3]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KETERAMPILAN_INTERNET2" name="jawaban_78" value="2"<?php if($data[3]['jawaban_1'] == "2") echo "checked";?>/> Rendah</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KETERAMPILAN_INTERNET1" name="jawaban_78" value="1"<?php if($data[3]['jawaban_1'] == "1") echo "checked";?>/> Sangat Rendah</label>
</td>
</tr>
<tr><td value="46">5</td>
<td>Keterampilan komputer</td>
<td>
<label><input type="radio" id="KETERAMPILAN_KOMPUTER5" name="jawaban_79" value="5"<?php if($data[4]['jawaban_1'] == "5") echo "checked";?>/> Sangat Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KETERAMPILAN_KOMPUTER4" name="jawaban_79" value="4"<?php if($data[4]['jawaban_1'] == "4") echo "checked";?>/> Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KETERAMPILAN_KOMPUTER3" name="jawaban_79" value="3"<?php if($data[4]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KETERAMPILAN_KOMPUTER2" name="jawaban_79" value="2"<?php if($data[4]['jawaban_1'] == "2") echo "checked";?>/> Rendah</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KETERAMPILAN_KOMPUTER1" name="jawaban_79" value="1"<?php if($data[4]['jawaban_1'] == "1") echo "checked";?>/> Sangat Rendah</label>
</td>
</tr>
<tr><td value="47">6</td>
<td>Berpikir kritis</td>
<td>
<label><input type="radio" id="BERPIKIR_KRITIS5" name="jawaban_80" value="5"<?php if($data[5]['jawaban_1'] == "5") echo "checked";?>/> Sangat Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="BERPIKIR_KRITIS4" name="jawaban_80" value="4"<?php if($data[5]['jawaban_1'] == "4") echo "checked";?>/> Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="BERPIKIR_KRITIS3" name="jawaban_80" value="3"<?php if($data[5]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="BERPIKIR_KRITIS2" name="jawaban_80" value="2"<?php if($data[5]['jawaban_1'] == "2") echo "checked";?>/> Rendah</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="BERPIKIR_KRITIS1" name="jawaban_80" value="1"<?php if($data[5]['jawaban_1'] == "1") echo "checked";?>/> Sangat Rendah</label>
</td>
</tr>
<tr><td value="48">7</td>
<td>Keterampilan riset</td>
<td>
<label><input type="radio" id="KETERAMPILAN_RISET5" name="jawaban_81" value="5"<?php if($data[6]['jawaban_1'] == "5") echo "checked";?>/> Sangat Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KETERAMPILAN_RISET4" name="jawaban_81" value="4"<?php if($data[6]['jawaban_1'] == "4") echo "checked";?>/> Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KETERAMPILAN_RISET3" name="jawaban_81" value="3"<?php if($data[6]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KETERAMPILAN_RISET2" name="jawaban_81" value="2"<?php if($data[6]['jawaban_1'] == "2") echo "checked";?>/> Rendah</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KETERAMPILAN_RISET1" name="jawaban_81" value="1"<?php if($data[6]['jawaban_1'] == "1") echo "checked";?>/> Sangat Rendah</label>
</td>
</tr>
<tr><td value="49">8</td>
<td>Kemampuan belajar</td>
<td>
<label><input type="radio" id="KEMAMPUAN_BELAJAR5" name="jawaban_82" value="5"<?php if($data[7]['jawaban_1'] == "5") echo "checked";?>/> Sangat Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEMAMPUAN_BELAJAR4" name="jawaban_82" value="4"<?php if($data[7]['jawaban_1'] == "4") echo "checked";?>/> Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEMAMPUAN_BELAJAR3" name="jawaban_82" value="3"<?php if($data[7]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEMAMPUAN_BELAJAR2" name="jawaban_82" value="2"<?php if($data[7]['jawaban_1'] == "2") echo "checked";?>/> Rendah</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEMAMPUAN_BELAJAR1" name="jawaban_82" value="1"<?php if($data[7]['jawaban_1'] == "1") echo "checked";?>/> Sangat Rendah</label>
</td>
</tr>
<tr><td value="50">9</td>
<td>Kemampuan berkomunikasi</td>
<td>
<label><input type="radio" id="KEMAMPUAN_BERKOMUNIKASI5" name="jawaban_83" value="5"<?php if($data[8]['jawaban_1'] == "5") echo "checked";?>/> Sangat Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEMAMPUAN_BERKOMUNIKASI4" name="jawaban_83" value="4"<?php if($data[8]['jawaban_1'] == "4") echo "checked";?>/> Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEMAMPUAN_BERKOMUNIKASI3" name="jawaban_83" value="3"<?php if($data[8]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEMAMPUAN_BERKOMUNIKASI2" name="jawaban_83" value="2"<?php if($data[8]['jawaban_1'] == "2") echo "checked";?>/> Rendah</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEMAMPUAN_BERKOMUNIKASI1" name="jawaban_83" value="1"<?php if($data[8]['jawaban_1'] == "1") echo "checked";?>/> Sangat Rendah</label>
</td>
</tr>
<tr><td value="51">10</td>
<td>Bekerja di bawah tekanan</td>
<td>
<label><input type="radio" id="BEKERJA_DIBAWAH_TEKANAN5" name="jawaban_84" value="5"<?php if($data[9]['jawaban_1'] == "5") echo "checked";?>/> Sangat Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="BEKERJA_DIBAWAH_TEKANAN4" name="jawaban_84" value="4"<?php if($data[9]['jawaban_1'] == "4") echo "checked";?>/> Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="BEKERJA_DIBAWAH_TEKANAN3" name="jawaban_84" value="3"<?php if($data[9]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="BEKERJA_DIBAWAH_TEKANAN2" name="jawaban_84" value="2"<?php if($data[9]['jawaban_1'] == "2") echo "checked";?>/> Rendah</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="BEKERJA_DIBAWAH_TEKANAN1" name="jawaban_84" value="1"<?php if($data[9]['jawaban_1'] == "1") echo "checked";?>/> Sangat Rendah</label>
</td>
</tr>
<tr><td value="52">11</td>
<td>Manajemen waktu</td>
<td>
<label><input type="radio" id="MANAJEMEN_WAKTU5" name="jawaban_85" value="5"<?php if($data[10]['jawaban_1'] == "5") echo "checked";?>/> Sangat Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="MANAJEMEN_WAKTU4" name="jawaban_85" value="4"<?php if($data[10]['jawaban_1'] == "4") echo "checked";?>/> Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="MANAJEMEN_WAKTU3" name="jawaban_85" value="3"<?php if($data[10]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="MANAJEMEN_WAKTU2" name="jawaban_85" value="2"<?php if($data[10]['jawaban_1'] == "2") echo "checked";?>/> Rendah</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="MANAJEMEN_WAKTU1" name="jawaban_85" value="1"<?php if($data[10]['jawaban_1'] == "1") echo "checked";?>/> Sangat Rendah</label>
</td>
</tr>
<tr><td value="53">12</td>
<td>Bekerja secara mandiri</td>
<td>
<label><input type="radio" id="BEKERJA_SECARA_MANDIRI5" name="jawaban_86" value="5"<?php if($data[11]['jawaban_1'] == "5") echo "checked";?>/> Sangat Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="BEKERJA_SECARA_MANDIRI4" name="jawaban_86" value="4"<?php if($data[11]['jawaban_1'] == "4") echo "checked";?>/> Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="BEKERJA_SECARA_MANDIRI3" name="jawaban_86" value="3"<?php if($data[11]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="BEKERJA_SECARA_MANDIRI2" name="jawaban_86" value="2"<?php if($data[11]['jawaban_1'] == "2") echo "checked";?>/> Rendah</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="BEKERJA_SECARA_MANDIRI1" name="jawaban_86" value="1"<?php if($data[11]['jawaban_1'] == "1") echo "checked";?>/> Sangat Rendah</label>
</td>
</tr>
<tr><td value="54">13</td>
<td>Bekerja dalam tim/bekerjasama dengan orang lain</td>
<td>
<label><input type="radio" id="BEKERJA_DALAM_TIM5" name="jawaban_87" value="5"<?php if($data[12]['jawaban_1'] == "5") echo "checked";?>/> Sangat Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="BEKERJA_DALAM_TIM4" name="jawaban_87" value="4"<?php if($data[12]['jawaban_1'] == "4") echo "checked";?>/> Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="BEKERJA_DALAM_TIM3" name="jawaban_87" value="3"<?php if($data[12]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="BEKERJA_DALAM_TIM2" name="jawaban_87" value="2"<?php if($data[12]['jawaban_1'] == "2") echo "checked";?>/> Rendah</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="BEKERJA_DALAM_TIM1" name="jawaban_87" value="1"<?php if($data[12]['jawaban_1'] == "1") echo "checked";?>/> Sangat Rendah</label>
</td>
</tr>
<tr><td value="55">14</td>
<td>Kemampuan memecahkan masalah</td>
<td>
<label><input type="radio" id="KEMAMPUAN_MEMECAHKAN_MASALAH5" name="jawaban_88" value="5"<?php if($data[13]['jawaban_1'] == "5") echo "checked";?>/> Sangat Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEMAMPUAN_MEMECAHKAN_MASALAH4" name="jawaban_88" value="4"<?php if($data[13]['jawaban_1'] == "4") echo "checked";?>/> Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEMAMPUAN_MEMECAHKAN_MASALAH3" name="jawaban_88" value="3"<?php if($data[13]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEMAMPUAN_MEMECAHKAN_MASALAH2" name="jawaban_88" value="2"<?php if($data[13]['jawaban_1'] == "2") echo "checked";?>/> Rendah</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEMAMPUAN_MEMECAHKAN_MASALAH1" name="jawaban_88" value="1"<?php if($data[13]['jawaban_1'] == "1") echo "checked";?>/> Sangat Rendah</label>
</td>
</tr>
<tr><td value="56">15</td>
<td>Negosiasi</td>
<td>
<label><input type="radio" id="NEGOSIASI5" name="jawaban_89" value="5"<?php if($data[14]['jawaban_1'] == "5") echo "checked";?>/> Sangat Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="NEGOSIASI4" name="jawaban_89" value="4"<?php if($data[14]['jawaban_1'] == "4") echo "checked";?>/> Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="NEGOSIASI3" name="jawaban_89" value="3"<?php if($data[14]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="NEGOSIASI2" name="jawaban_89" value="2"<?php if($data[14]['jawaban_1'] == "2") echo "checked";?>/> Rendah</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="NEGOSIASI1" name="jawaban_89" value="1"<?php if($data[14]['jawaban_1'] == "1") echo "checked";?>/> Sangat Rendah</label>
</td>
</tr>
<tr><td value="57">16</td>
<td>Kemampuan analisis</td>
<td>
<label><input type="radio" id="KEMAMPUAN_ANALISIS5" name="jawaban_90" value="5"<?php if($data[15]['jawaban_1'] == "5") echo "checked";?>/> Sangat Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEMAMPUAN_ANALISIS4" name="jawaban_90" value="4"<?php if($data[15]['jawaban_1'] == "4") echo "checked";?>/> Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEMAMPUAN_ANALISIS3" name="jawaban_90" value="3"<?php if($data[15]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEMAMPUAN_ANALISIS2" name="jawaban_90" value="2"<?php if($data[15]['jawaban_1'] == "2") echo "checked";?>/> Rendah</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEMAMPUAN_ANALISIS1" name="jawaban_90" value="1"<?php if($data[15]['jawaban_1'] == "1") echo "checked";?>/> Sangat Rendah</label>
</td>
</tr>
<tr><td value="58">17</td>
<td>Toleransi</td>
<td>
<label><input type="radio" id="TOLERANSI5" name="jawaban_91" value="5"<?php if($data[16]['jawaban_1'] == "5") echo "checked";?>/> Sangat Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="TOLERANSI4" name="jawaban_91" value="4"<?php if($data[16]['jawaban_1'] == "4") echo "checked";?>/> Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="TOLERANSI3" name="jawaban_91" value="3"<?php if($data[16]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="TOLERANSI2" name="jawaban_91" value="2"<?php if($data[16]['jawaban_1'] == "2") echo "checked";?>/> Rendah</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="TOLERANSI1" name="jawaban_91" value="1"<?php if($data[16]['jawaban_1'] == "1") echo "checked";?>/> Sangat Rendah</label>
</td>
</tr>
<tr><td value="59">18</td>
<td>Kemampuan adaptasi</td>
<td>
<label><input type="radio" id="KEMAMPUAN_ADAPTASI5" name="jawaban_92" value="5"<?php if($data[17]['jawaban_1'] == "5") echo "checked";?>/> Sangat Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEMAMPUAN_ADAPTASI4" name="jawaban_92" value="4"<?php if($data[17]['jawaban_1'] == "4") echo "checked";?>/> Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEMAMPUAN_ADAPTASI3" name="jawaban_92" value="3"<?php if($data[17]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEMAMPUAN_ADAPTASI2" name="jawaban_92" value="2"<?php if($data[17]['jawaban_1'] == "2") echo "checked";?>/> Rendah</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEMAMPUAN_ADAPTASI1" name="jawaban_92" value="1"<?php if($data[17]['jawaban_1'] == "1") echo "checked";?>/> Sangat Rendah</label>
</td>
</tr>
<tr><td value="60">19</td>
<td>Loyalitas dan integritas</td>
<td>
<label><input type="radio" id="LOYALITAS_DAN_INTEGRITAS5" name="jawaban_93" value="5"<?php if($data[18]['jawaban_1'] == "5") echo "checked";?>/> Sangat Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="LOYALITAS_DAN_INTEGRITAS4" name="jawaban_93" value="4"<?php if($data[18]['jawaban_1'] == "4") echo "checked";?>/> Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="LOYALITAS_DAN_INTEGRITAS3" name="jawaban_93" value="3"<?php if($data[18]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="LOYALITAS_DAN_INTEGRITAS2" name="jawaban_93" value="2"<?php if($data[18]['jawaban_1'] == "2") echo "checked";?>/> Rendah</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="LOYALITAS_DAN_INTEGRITAS1" name="jawaban_93" value="1"<?php if($data[18]['jawaban_1'] == "1") echo "checked";?>/> Sangat Rendah</label>
</td>
</tr>
<tr><td value="61">20</td>
<td>Bekerja dengan orang yang berbeda budaya maupun latar belakang</td>
<td>
<label><input type="radio" id="BEKERJA_BUDAYA_LAIN5" name="jawaban_94" value="5"<?php if($data[19]['jawaban_1'] == "5") echo "checked";?>/> Sangat Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="BEKERJA_BUDAYA_LAIN4" name="jawaban_94" value="4"<?php if($data[19]['jawaban_1'] == "4") echo "checked";?>/> Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="BEKERJA_BUDAYA_LAIN3" name="jawaban_94" value="3"<?php if($data[19]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="BEKERJA_BUDAYA_LAIN2" name="jawaban_94" value="2"<?php if($data[19]['jawaban_1'] == "2") echo "checked";?>/> Rendah</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="BEKERJA_BUDAYA_LAIN1" name="jawaban_94" value="1"<?php if($data[19]['jawaban_1'] == "1") echo "checked";?>/> Sangat Rendah</label>
</td>
</tr>
<tr><td value="62">21</td>
<td>Kepemimpinan</td>
<td>
<label><input type="radio" id="KEPEMIMPINAN5" name="jawaban_95" value="5"<?php if($data[20]['jawaban_1'] == "5") echo "checked";?>/> Sangat Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEPEMIMPINAN4" name="jawaban_95" value="4"<?php if($data[20]['jawaban_1'] == "4") echo "checked";?>/> Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEPEMIMPINAN3" name="jawaban_95" value="3"<?php if($data[20]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEPEMIMPINAN2" name="jawaban_95" value="2"<?php if($data[20]['jawaban_1'] == "2") echo "checked";?>/> Rendah</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEPEMIMPINAN1" name="jawaban_95" value="1"<?php if($data[20]['jawaban_1'] == "1") echo "checked";?>/> Sangat Rendah</label>
</td>
</tr>
<tr><td value="63">22</td>
<td>Kemampuan dalam memegang tanggungjawab</td>
<td>
<label><input type="radio" id="KEMAMPUAN_MEMEGANG_TANGGUNGJAW5" name="jawaban_96" value="5"<?php if($data[21]['jawaban_1'] == "5") echo "checked";?>/> Sangat Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEMAMPUAN_MEMEGANG_TANGGUNGJAW4" name="jawaban_96" value="4"<?php if($data[21]['jawaban_1'] == "4") echo "checked";?>/> Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEMAMPUAN_MEMEGANG_TANGGUNGJAW3" name="jawaban_96" value="3"<?php if($data[21]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEMAMPUAN_MEMEGANG_TANGGUNGJAW2" name="jawaban_96" value="2"<?php if($data[21]['jawaban_1'] == "2") echo "checked";?>/> Rendah</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEMAMPUAN_MEMEGANG_TANGGUNGJAW1" name="jawaban_96" value="1"<?php if($data[21]['jawaban_1'] == "1") echo "checked";?>/> Sangat Rendah</label>
</td>
</tr>
<tr><td value="64">23</td>
<td>Inisiatif</td>
<td>
<label><input type="radio" id="INISIATIF5" name="jawaban_97" value="5"<?php if($data[22]['jawaban_1'] == "5") echo "checked";?>/> Sangat Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="INISIATIF4" name="jawaban_97" value="4"<?php if($data[22]['jawaban_1'] == "4") echo "checked";?>/> Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="INISIATIF3" name="jawaban_97" value="3"<?php if($data[22]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="INISIATIF2" name="jawaban_97" value="2"<?php if($data[22]['jawaban_1'] == "2") echo "checked";?>/> Rendah</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="INISIATIF1" name="jawaban_97" value="1"<?php if($data[22]['jawaban_1'] == "1") echo "checked";?>/> Sangat Rendah</label>
</td>
</tr>
<tr><td value="65">24</td>
<td>Manajemen proyek</td>
<td>
<label><input type="radio" id="MANAJEMEN_PROYEK5" name="jawaban_98" value="5"<?php if($data[23]['jawaban_1'] == "5") echo "checked";?>/> Sangat Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="MANAJEMEN_PROYEK4" name="jawaban_98" value="4"<?php if($data[23]['jawaban_1'] == "4") echo "checked";?>/> Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="MANAJEMEN_PROYEK3" name="jawaban_98" value="3"<?php if($data[23]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="MANAJEMEN_PROYEK2" name="jawaban_98" value="2"<?php if($data[23]['jawaban_1'] == "2") echo "checked";?>/> Rendah</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="MANAJEMEN_PROYEK1" name="jawaban_98" value="1"<?php if($data[23]['jawaban_1'] == "1") echo "checked";?>/> Sangat Rendah</label>
</td>
</tr>
<tr><td value="66">25</td>
<td>Kemampuan untuk memresentasikan ide/produk/laporan</td>
<td>
<label><input type="radio" id="KEMAMPUAN_PRESENTASI5" name="jawaban_99" value="5"<?php if($data[24]['jawaban_1'] == "5") echo "checked";?>/> Sangat Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEMAMPUAN_PRESENTASI4" name="jawaban_99" value="4"<?php if($data[24]['jawaban_1'] == "4") echo "checked";?>/> Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEMAMPUAN_PRESENTASI3" name="jawaban_99" value="3"<?php if($data[24]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEMAMPUAN_PRESENTASI2" name="jawaban_99" value="2"<?php if($data[24]['jawaban_1'] == "2") echo "checked";?>/> Rendah</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEMAMPUAN_PRESENTASI1" name="jawaban_99" value="1"<?php if($data[24]['jawaban_1'] == "1") echo "checked";?>/> Sangat Rendah</label>
</td>
</tr>
<tr><td value="67">26</td>
<td>Kemampuan dalam menulis laporan, memo dan dokumen</td>
<td>
<label><input type="radio" id="KEMAMPUAN_MENULIS_LAPORAN5" name="jawaban_100" value="5"<?php if($data[25]['jawaban_1'] == "5") echo "checked";?>/> Sangat Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEMAMPUAN_MENULIS_LAPORAN4" name="jawaban_100" value="4"<?php if($data[25]['jawaban_1'] == "4") echo "checked";?>/> Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEMAMPUAN_MENULIS_LAPORAN3" name="jawaban_100" value="3"<?php if($data[25]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEMAMPUAN_MENULIS_LAPORAN2" name="jawaban_100" value="2"<?php if($data[25]['jawaban_1'] == "2") echo "checked";?>/> Rendah</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEMAMPUAN_MENULIS_LAPORAN1" name="jawaban_100" value="1"<?php if($data[25]['jawaban_1'] == "1") echo "checked";?>/> Sangat Rendah</label>
</td>
</tr>
<tr><td value="68">27</td>
<td>Kemampuan untuk terus belajar sepanjang hayat</td>
<td>
<label><input type="radio" id="KEMAMPUAN_TERUS_BELAJAR5" name="jawaban_101" value="5"<?php if($data[26]['jawaban_1'] == "5") echo "checked";?>/> Sangat Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEMAMPUAN_TERUS_BELAJAR4" name="jawaban_101" value="4"<?php if($data[26]['jawaban_1'] == "4") echo "checked";?>/> Tinggi</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEMAMPUAN_TERUS_BELAJAR3" name="jawaban_101" value="3"<?php if($data[26]['jawaban_1'] == "3") echo "checked";?>/> Cukup</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEMAMPUAN_TERUS_BELAJAR2" name="jawaban_101" value="2"<?php if($data[26]['jawaban_1'] == "2") echo "checked";?>/> Rendah</label>&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="KEMAMPUAN_TERUS_BELAJAR1" name="jawaban_101" value="1"<?php if($data[26]['jawaban_1'] == "1") echo "checked";?>/> Sangat Rendah</label>
</td>
</tr>

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
