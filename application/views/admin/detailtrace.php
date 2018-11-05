<style>
 #exTab1 .tab-content {
  color : white;
  padding : 5px 15px;
}

#exTab2 h3 {
  color : white;
  background-color: white;
  padding : 5px 15px;
}

/* remove border radius for the tab */

#exTab1 .nav-pills > li > a {
  border-radius: 0;
}

/* change border radius for the tab , apply corners on top*/

#exTab3 .nav-pills > li > a {
  border-radius: 4px 4px 0 0 ;
}

#exTab3 .tab-content {
  color : white;
  background-color: white;
  padding : 5px 15px;
}

</style>
<script>
  var nim  = "<?php echo $nim?>";
  var tanggal  = "<?php echo $tanggal?>";
</script>
<script src="<?php echo base_url()?>assets/js/page/detailtracer.js"></script>

<div id="exTab1">	
<ul  class="nav nav-pills">
			<li class="tabhal active">
        <a  href="#halaman1" data-toggle="tab">Halaman 1</a>
			</li>
			<li><a href="#halaman2" data-toggle="tab">Halaman 2</a>
			</li>
			<li><a href="#halaman3" data-toggle="tab">Halaman 3</a>
			</li>
  		<li><a href="#halaman4" data-toggle="tab">Halaman 4</a>
			</li>
		</ul>

			<div class="tab-content clearfix">
			    <div class="tab-pane active" id="halaman1">
                <div class="panel panel-default">
                <div class="panel-body">
                <table style="width:100%;" class="tabpanel">
                <tr class="tabtrace">
                <td class="nosoaltracestud">Nomor</td>
                <td class="soaltracestud">Pertanyaan</td>
                <td class="jawabantracestud">Jawaban</td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">1</td>
                <td class="soaltrace">Kapan anda mulai mencari pekerjaan?</td>
                <td ><span id="jawaban_1"></span><span id="jawaban_2"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">2</td>
                <td class="soaltrace">Bagaimana anda mencari pekerjaan setelah lulus?</td>
                  <td>
                    <li id="li_3">
                      <span id="jawaban_3"></span>
                    </li>
                    <li id="li_4">
                      <span id="jawaban_4"></span> 
                    </li>
                    <li id="li_5">
                      <span id="jawaban_5"></span> 
                    </li>
                    <li id="li_6">
                      <span id="jawaban_6"></span> 
                    </li>
                    <li id="li_7">
                      <span id="jawaban_7"></span> 
                    </li>
                    <li id="li_8">
                      <span id="jawaban_8"></span> 
                    </li>      
                    <li id="li_9">
                      <span id="jawaban_9"></span> 
                    </li>
                    <li id="li_10">
                      <span id="jawaban_10"></span>
                    </li>
                    <li id="li_11">
                      <span id="jawaban_11"></span> 
                    </li>
                    <li id="li_12">
                      <span id="jawaban_12"></span> 
                    </li>
                    <li id="li_13">
                      <span id="jawaban_13"></span> 
                    </li>
                    <li id="li_14">
                        <span id="jawaban_14"></span> 
                    </li>
                    <li id="li_15">
                        <span id="jawaban_15"></span> 
                    </li>
                    <li id="li_16">
                      <span id="jawaban_16"></span> 
                    </li>
                    <li id="li_17">
                      <span id="jawaban_17"></span>
                    </li>
                  </td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">3</td>
                <td class="soaltrace">Berapa perusahaan/instansi/institusi yang sudah anda lamar (lewat surat atau e-mail) sebelum anda memeroleh pekerjaan pertama?</td>
                <td><span id="jawaban_18"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">4</td>
                <td class="soaltrace">Berapa bulan waktu yang dihabiskan (sebelum dan sesudah kelulusan) untuk memeroleh pekerjaan pertama?</td>
                <td><span id="jawaban_19"></span><span id="jawaban_20"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">5</td>
                <td class="soaltrace">Berapa banyak perusahaan/instansi/institusi yang merespon lamaran anda?</td>
                <td><span id="jawaban_21"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">6</td>
                <td class="soaltrace">Apakah anda bekerja saat ini (termasuk kerja sambilan dan wirausaha)?</td>
                <td><span id="jawaban_22"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">7</td>
                <td class="soaltrace">Bagaimana anda menggambarkan situasi anda saat ini?</td>
                <td>
                <li id="li_23">
                  <span id="jawaban_23"></span>
                </li>
                <li id="li_24">
                  <span id="jawaban_24"></span>
                </li>
                <li id="li_25">
                  <span id="jawaban_25"></span>
                </li>
                <li id="li_26">
                  <span id="jawaban_26"></span>
                </li>
                <li id="li_27">
                    <span id="jawaban_27"></span>
                </li>
                </td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">8</td>
                <td class="soaltrace">Apakah anda aktif mencari pekerjaan dalam 4 minggu terakhir?</td>
                <td><span id="jawaban_28"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">9</td>
                <td class="soaltrace">Apa jenis perusahaan/instansi/institusi tempat anda bekerja sekarang?</td>
                <td><span id="jawaban_29"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">10</td>
                <td class="soaltrace">Tempat anda bekerja saat ini bergerak di bidang apa? (Klasifikasi Baku Lapangan Usaha Indonesia, Kemnakertrans, 2009)</td>
                <td><span id="jawaban_30"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">11</td>
                <td class="soaltrace">Kira-kira berapa pendapatan anda setiap bulannya?</td>
                <td><span id="jawaban_31"></span><br/><span id="jawaban_32"></span><br/><span id="jawaban_33"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">12</td>
                <td class="soaltrace">Seberapa erat hubungan antara bidang studi dengan pekerjaan anda?</td>
                <td><span id="jawaban_34"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">13</td>
                <td class="soaltrace">Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?</td>
                <td><span id="jawaban_35"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">14</td>
                <td class="soaltrace">Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya?</td>
                <td>
                  <li id="li_36"> 
                    <span id="jawaban_36"></span>
                  </li>
                  <li id="li_37"> 
                      <span id="jawaban_37"></span>
                  </li>
                  <li id="li_38"> 
                    <span id="jawaban_38"></span>
                  </li>
                  <li id="li_39"> 
                    <span id="jawaban_39"></span>
                  </li>
                  <li id="li_40"> 
                    <span id="jawaban_40"></span>
                  </li>
                  <li id="li_41"> 
                    <span id="jawaban_41"></span>
                  </li>
                  <li id="li_42"> 
                    <span id="jawaban_42"></span>
                  </li>
                  <li id="li_43"> 
                    <span id="jawaban_43"></span>
                  </li>
                  <li id="li_44"> 
                    <span id="jawaban_44"></span>
                  </li>
                  <li id="li_45"> 
                    <span id="jawaban_45"></span>
                  </li>
                  <li id="li_46"> 
                    <span id="jawaban_46"></span>
                  </li>
                  <li id="li_47"> 
                    <span id="jawaban_47"></span>
                  </li>
                  <li id="li_48"> 
                    <span id="jawaban_48"></span>
                  </li>
                </td>
                </tr>
	            </table>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="halaman2">
                <div class="panel panel-default">
                <div class="panel-body">
                <table style="width:100%;" class="tabpanel">
                <tr class="tabtrace">
                <td class="nosoaltracestud">Nomor</td>
                <td class="soaltracestud">Pertanyaan</td>
                <td class="jawabantracestud">Jawaban</td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">1</td>
                <td class="soaltrace2">Pengetahuan di bidang atau disiplin ilmu Anda</td>
                <td><span id="jawaban_49"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">2</td>
                <td class="soaltrace">Pengetahuan di luar bidang atau disiplin ilmu anda</td>
                <td><span id="jawaban_50"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">3</td>
                <td class="soaltrace">Pengetahuan umum</td>
                <td><span id="jawaban_51"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">4</td>
                <td class="soaltrace">Keterampilan internet</td>
                <td><span id="jawaban_52"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">5</td>
                <td class="soaltrace">Keterampilan komputer</td>
                <td><span id="jawaban_53"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">6</td>
                <td class="soaltrace">Berpikir kritis</td>
                <td><span id="jawaban_54"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">7</td>
                <td class="soaltrace">Keterampilan riset</td>
                <td><span id="jawaban_55"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">8</td>
                <td class="soaltrace">Kemampuan belajar</td>
                <td><span id="jawaban_56"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">9</td>
                <td class="soaltrace">Kemampuan berkomunikasi</td>
                <td><span id="jawaban_57"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">10</td>
                <td class="soaltrace">Bekerja di bawah tekanan</td>
                <td><span id="jawaban_58"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">11</td>
                <td class="soaltrace">Manajemen waktu</td>
                <td><span id="jawaban_59"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">12</td>
                <td class="soaltrace">Bekerja secara mandiri</td>
                <td><span id="jawaban_60"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">13</td>
                <td class="soaltrace">Bekerja dalam tim/bekerjasama dengan orang lain</td>
                <td><span id="jawaban_61"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">14</td>
                <td class="soaltrace">Kemampuan memecahkan masalah</td>
                <td><span id="jawaban_62"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">15</td>
                <td class="soaltrace">Negosiasi</td>
                <td><span id="jawaban_63"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">16</td>
                <td class="soaltrace">Kemampuan analisis</td>
                <td><span id="jawaban_64"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">17</td>
                <td class="soaltrace">Toleransi</td>
                <td><span id="jawaban_65"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">18</td>
                <td class="soaltrace">Kemampuan adaptasi</td>
                <td><span id="jawaban_66"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">19</td>
                <td class="soaltrace">Loyalitas dan integritas</td>
                <td><span id="jawaban_67"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">20</td>
                <td class="soaltrace">Bekerja dengan orang yang berbeda budaya maupun latar belakang</td>
                <td><span id="jawaban_68"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">21</td>
                <td class="soaltrace">Kepemimpinan</td>
                <td><span id="jawaban_69"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">22</td>
                <td class="soaltrace">Kemampuan dalam memegang tanggungjawab</td>
                <td><span id="jawaban_70"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">23</td>
                <td class="soaltrace">Inisiatif</td>
                <td><span id="jawaban_71"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">24</td>
                <td class="soaltrace">Manajemen proyek</td>
                <td><span id="jawaban_72"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">25</td>
                <td class="soaltrace">Kemampuan untuk memresentasikan ide/produk/laporan</td>
                <td><span id="jawaban_73"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">26</td>
                <td class="soaltrace">Kemampuan dalam menulis laporan, memo dan dokumen</td>
                <td><span id="jawaban_74"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">27</td>
                <td class="soaltrace">Kemampuan untuk terus belajar sepanjang hayat</td>
                <td><span id="jawaban_75"></span></td>
                </tr>
	            </table>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="halaman3">
                <div class="panel panel-default">
                <div class="panel-body">
                <table style="width:100%;" class="tabpanel">
                <tr class="tabtrace">
                <td class="nosoaltracestud">Nomor</td>
                <td class="soaltracestud">Pertanyaan</td>
                <td class="jawabantracestud">Jawaban</td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">1</td>
                <td class="soaltrace2">Pengetahuan di bidang atau disiplin ilmu Anda</td>
                <td><span id="jawaban_76"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">2</td>
                <td class="soaltrace">Pengetahuan di luar bidang atau disiplin ilmu anda</td>
                <td><span id="jawaban_77"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">3</td>
                <td class="soaltrace">Pengetahuan umum</td>
                <td><span id="jawaban_78"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">4</td>
                <td class="soaltrace">Keterampilan internet</td>
                <td><span id="jawaban_79"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">5</td>
                <td class="soaltrace">Keterampilan komputer</td>
                <td><span id="jawaban_80"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">6</td>
                <td class="soaltrace">Berpikir kritis</td>
                <td><span id="jawaban_81"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">7</td>
                <td class="soaltrace">Keterampilan riset</td>
                <td><span id="jawaban_82"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">8</td>
                <td class="soaltrace">Kemampuan belajar</td>
                <td><span id="jawaban_83"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">9</td>
                <td class="soaltrace">Kemampuan berkomunikasi</td>
                <td><span id="jawaban_84"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">10</td>
                <td class="soaltrace">Bekerja di bawah tekanan</td>
                <td><span id="jawaban_85"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">11</td>
                <td class="soaltrace">Manajemen waktu</td>
                <td><span id="jawaban_86"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">12</td>
                <td class="soaltrace">Bekerja secara mandiri</td>
                <td><span id="jawaban_87"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">13</td>
                <td class="soaltrace">Bekerja dalam tim/bekerjasama dengan orang lain</td>
                <td><span id="jawaban_88"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">14</td>
                <td class="soaltrace">Kemampuan memecahkan masalah</td>
                <td><span id="jawaban_89"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">15</td>
                <td class="soaltrace">Negosiasi</td>
                <td><span id="jawaban_90"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">16</td>
                <td class="soaltrace">Kemampuan analisis</td>
                <td><span id="jawaban_91"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">17</td>
                <td class="soaltrace">Toleransi</td>
                <td><span id="jawaban_92"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">18</td>
                <td class="soaltrace">Kemampuan adaptasi</td>
                <td><span id="jawaban_93"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">19</td>
                <td class="soaltrace">Loyalitas dan integritas</td>
                <td><span id="jawaban_94"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">20</td>
                <td class="soaltrace">Bekerja dengan orang yang berbeda budaya maupun latar belakang</td>
                <td><span id="jawaban_95"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">21</td>
                <td class="soaltrace">Kepemimpinan</td>
                <td><span id="jawaban_96"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">22</td>
                <td class="soaltrace">Kemampuan dalam memegang tanggungjawab</td>
                <td><span id="jawaban_97"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">23</td>
                <td class="soaltrace">Inisiatif</td>
                <td><span id="jawaban_98"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">24</td>
                <td class="soaltrace">Manajemen proyek</td>
                <td><span id="jawaban_99"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">25</td>
                <td class="soaltrace">Kemampuan untuk memresentasikan ide/produk/laporan</td>
                <td><span id="jawaban_100"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">26</td>
                <td class="soaltrace">Kemampuan dalam menulis laporan, memo dan dokumen</td>
                <td><span id="jawaban_101"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">27</td>
                <td class="soaltrace">Kemampuan untuk terus belajar sepanjang hayat</td>
                <td><span id="jawaban_102"></span></td>
                </tr>
	            </table>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="halaman4">
                <div class="panel panel-default">
                <div class="panel-body">
                <table style="width:100%;" class="tabpanel">
                <tr class="tabtrace">
                <td class="nosoaltracestud">Nomor</td>
                <td class="soaltracestud">Pertanyaan</td>
                <td class="jawabantracestud">Jawaban</td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">1</td>
                <td class="soaltrace2">Apakah Anda lulus tepat waktu?</td>
                <td><span id="jawaban_103"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">1.1</td>
                <td class="soaltrace">Alasan keuangan</td>
                <td><span id="jawaban_104"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">1.2</td>
                <td class="soaltrace">Tidak lulus ujian (banyak mengulang)</td>
                <td><span id="jawaban_105"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">1.3</td>
                <td class="soaltrace">Penulisan skripsi lambat</td>
                <td><span id="jawaban_106"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">1.4</td>
                <td class="soaltrace">Alasan keluarga</td>
                <td><span id="jawaban_107"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">1.5</td>
                <td class="soaltrace">Kesehatan</td>
                <td><span id="jawaban_108"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">1.6</td>
                <td class="soaltrace">Lainnya</td>
                <td><span id="jawaban_109"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">2</td>
                <td class="soaltrace">Siapa yang terutama membayar biaya kuliah Anda?</td>
                <td><span id="jawaban_110"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">3</td>
                <td class="soaltrace">Selama kuliah, apakah Anda menjadi anggota dari suatu organisasi (sosial, pemuda, organisasi keagamaan) di dalam atau di luar kampus?</td>
                <td><span id="jawaban_111"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">3.1</td>
                <td class="soaltrace">Seberapa aktif anda di organisasi tersebut?</td>
                <td><span id="jawaban_112"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">4.1</td>
                <td class="soaltrace">Perkuliahan</td>
                <td><span id="jawaban_113"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">4.2</td>
                <td class="soaltrace">Demonstrasi (peragaan)</td>
                <td><span id="jawaban_114"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">4.3</td>
                <td class="soaltrace">Partisipasi dalam proyek riset</td>
                <td><span id="jawaban_115"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">4.4</td>
                <td class="soaltrace">Magang</td>
                <td><span id="jawaban_116"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">4.5</td>
                <td class="soaltrace">Praktikum/kerja lapangan</td>
                <td><span id="jawaban_117"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">4.6</td>
                <td class="soaltrace">Diskusi</td>
                <td><span id="jawaban_118"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">5.1</td>
                <td class="soaltrace">Kesempatan untuk berinteraksi dengan dosen-dosen di luar jadwal kuliah</td>
                <td><span id="jawaban_119"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">5.2</td>
                <td class="soaltrace">Pembimbingan akademik</td>
                <td><span id="jawaban_120"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">5.3</td>
                <td class="soaltrace">Kesempatan berpartisipasi dalam proyek riset</td>
                <td><span id="jawaban_121"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">5.4</td>
                <td class="soaltrace">Kondisi umum belajar mengajar</td>
                <td><span id="jawaban_122"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">5.5</td>
                <td class="soaltrace">Kesempatan untuk memasuki dan menjadi bagian dari jejaring ilmiah profesional</td>
                <td><span id="jawaban_123"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">6.1</td>
                <td class="soaltrace">Perpustakaan</td>
                <td><span id="jawaban_124"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">6.2</td>
                <td class="soaltrace">Teknologi informasi dan Komunikasi</td>
                <td><span id="jawaban_125"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">6.3</td>
                <td class="soaltrace">Modul belajar</td>
                <td><span id="jawaban_126"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">6.4</td>
                <td class="soaltrace">Ruang belajar</td>
                <td><span id="jawaban_127"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">6.5</td>
                <td class="soaltrace">Laboratorium</td>
                <td><span id="jawaban_128"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">6.6</td>
                <td class="soaltrace">Variasi matakuliah yang ditawarkan</td>
                <td><span id="jawaban_129"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">6.7</td>
                <td class="soaltrace">Akomodasi</td>
                <td><span id="jawaban_130"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">6.8</td>
                <td class="soaltrace">Kantin</td>
                <td><span id="jawaban_131"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">6.9</td>
                <td class="soaltrace">Pusat kegiatan mahasiswa dan fasilitasnya, ruang rekreasi</td>
                <td><span id="jawaban_132"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">6.10</td>
                <td class="soaltrace">Fasilitas layanan kesehatan</td>
                <td><span id="jawaban_133"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">7.1</td>
                <td class="soaltrace">Pembelajaran di kelas</td>
                <td><span id="jawaban_134"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">7.2</td>
                <td class="soaltrace">Magang/kerja lapangan/praktikum</td>
                <td><span id="jawaban_135"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">7.3</td>
                <td class="soaltrace">Pengabdian dan penjangkauan masyarakat</td>
                <td><span id="jawaban_136"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">7.4</td>
                <td class="soaltrace">Pelaksanaan riset/penulisan skripsi</td>
                <td><span id="jawaban_137"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">7.5</td>
                <td class="soaltrace">Organisasi kemahasiswaan</td>
                <td><span id="jawaban_138"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">7.6</td>
                <td class="soaltrace">Kegiatan ekstrakurikuler</td>
                <td><span id="jawaban_139"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">7.7</td>
                <td class="soaltrace">Rekreasi dan olahraga</td>
                <td><span id="jawaban_140"></span></td>
                </tr>
                <tr class="tabtrace">
                <td class="nosoaltrace">8</td>
                <td class="soaltrace">Berdasarkan persepsi anda, seberapa pengtingkah aspek-aspek di bawah ini bagi perusahaan/instansi dalam melakukan penerimaan pegawai baru?</td>
                <td>
                  <li id="li_141">
                    <span id="jawaban_141"></span>
                  </li>
                  <li id="li_142">
                    <span id="jawaban_142"></span>
                  </li>
                  <li id="li_143">
                    <span id="jawaban_143"></span>
                  </li>
                  <li id="li_144">
                    <span id="jawaban_144"></span>
                  </li>
                  <li id="li_145">
                    <span id="jawaban_145"></span>
                  </li>
                  <li id="li_146">
                    <span id="jawaban_146"></span>
                  </li>
                  <li id="li_147">
                    <span id="jawaban_147"></span>
                  </li>
                  <li id="li_148">
                    <span id="jawaban_148"></span>
                  </li>
                  <li id="li_149">
                    <span id="jawaban_149"></span>
                  </li>
                  <li id="li_150">
                    <span id="jawaban_150"></span>
                  </li>
                  <li id="li_151">
                    <span id="jawaban_151"></span>
                  </li>
                  <li id="li_152">
                    <span id="jawaban_152"></span>
                  </li>
                  <li id="li_153">
                    <span id="jawaban_153"></span>
                  </li>
                  <li id="li_154">
                    <span id="jawaban_154"></span>
                  </li>
                </td>
                </tr>
	            </table>
                </div>
              </div>
            </div>
			    </div>
</div>



