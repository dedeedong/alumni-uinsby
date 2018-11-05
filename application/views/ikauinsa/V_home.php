
<div class="home">

  <!-- Hero Slider -->
  <div class="hero_slider_container">
    <div class="hero_slider owl-carousel">

      <!-- Hero Slide -->
      <div class="hero_slide">
        <div class="hero_slide_background" style="background-image:url(../assets/image/slider_background_2.jpg)"></div>
        <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
          <div class="hero_slide_content text-center">
            <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"><a href="#login" style="color:white;">Login <span>IKA UINSA</span> Sekarang!</a></h1>
          </div>
        </div>
      </div>

      <!-- Hero Slide -->
      <div class="hero_slide">
        <div class="hero_slide_background" style="background-image:url(../assets/image/slider_background_1.jpg)"></div>
        <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
          <div class="hero_slide_content text-center">
            <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"><a href="<?php echo base_url();?>base/become" style="color:white;">Tata Cara <span>Pendaftaran</span> Perusahaan</a></h1>
          </div>
        </div>
      </div>

    </div>

    <div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">prev</span></div>
    <div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">next</span></div>
  </div>

</div>

<!-- <div class="icon-boxes">
    <div class="container-fluid">
        <div class="flex flex-wrap align-items-stretch">
            <div class="icon-box">
                <div class="icon">
                    <span class="ti-user"></span>
                </div>

                <header class="entry-header">
                    <h2 class="entry-title">Tentang IKA UINSA</h2>
                </header>

                <div class="entry-content">
                    <p>IKA UINSA berdiri pada tanggal 22 Januari 1983, merupakan sebuah organisasi yang bersifat</p>
                </div>

                <footer class="entry-footer read-more">
                    <a href="<?php echo base_url();?>base/about">selengkapnya<i class="fa fa-long-arrow-right"></i></a>
                </footer>
            </div>

            <div class="icon-box">
                <div class="icon">
                    <span class="ti-folder"></span>
                </div>

                <header class="entry-header">
                    <h2 class="entry-title">Pengurus IKA UINSA</h2>
                </header>

                <div class="entry-content">
                    <p>Pengurus Ikatan Alumni Universitas Islam Negeri Sunan Ampel terdiri dari tiga kategori, Yaitu : Pembina, Penasihat, Pengurus Harian</p>
                </div>

                <footer class="entry-footer read-more">
                    <a href="<?php echo base_url();?>base/manager">selengkapnya<i class="fa fa-long-arrow-right"></i></a>
                </footer>
            </div>

            <div class="icon-box">
                <div class="icon">
                    <span class="ti-book"></span>
                </div>

                <header class="entry-header">
                    <h2 class="entry-title">Panduan Perusahaan</h2>
                </header>

                <div class="entry-content">
                    <p>Panduan pendaftaran perusahaan ini berfungsi untuk membantu sebuah perusahaan yang ingin menjadi rekan ikauinsa.</p>
                </div>

                <footer class="entry-footer read-more">
                    <a href="<?php echo base_url();?>base/become">selengkapnya<i class="fa fa-long-arrow-right"></i></a>
                </footer>
            </div>

            <div class="icon-box">
                <div class="icon">
                    <span class="ti-world"></span>
                </div>

                <header class="entry-header">
                    <h2 class="entry-title">Galeri Dokumentasi</h2>
                </header>

                <div class="entry-content">
                    <p>Dokumentasi kegiatan Ikatan Keluarga Alumni Universitas Islam Negeri Sunan Ampel Surabaya</p>
                </div>

                <footer class="entry-footer read-more">
                    <a href="<?php echo base_url();?>base/docs">selengkapnya<i class="fa fa-long-arrow-right"></i></a>
                </footer>
            </div>
        </div>
    </div>
</div> -->
<!-- .icon-boxes -->

<div style="clear:both;"></div>

<!-- Events -->

<div id="berita" class="events page_section">
  <div class="container">

    <div class="row">
      <div class="col">
        <div class="section_title text-center">
          <h1>Kolom Berita</h1>
        </div>
      </div>
    </div>

    <div class="event_items" id="berita-list">

    <input type="hidden" id="coba1" value="0">

      <!-- Event Item -->

    </div>

    <div class="row" style="margin: 10% 0 3% 0;">
      <div class="col">
        <div class="section_title text-center">
          <div class="col-12 px-25 flex justify-content-center">
              <a class="btn-event" href="#" id="load_more">baca berita lainya</a>
              <a class="btn-event" href="#" id="tunggu" style="display:hidden;">harap menunggu...</a>
          </div><!-- .col -->
        </div>
      </div>
    </div>

  </div>
</div>

<!-- login -->

<div id="login" class="login">

  <div class="container-fluid">

    <div class="row row-eq-height">
      <div class="col-lg-6 nopadding">

        <!-- login -->

        <div class="login_section d-flex flex-column align-items-center justify-content-center">
          <div class="login_content text-center">
              <h1 class="login_title">"Semakin tinggi <span>ilmu</span> seseorang, maka <span>semakin besar</span> rasa toleransinya."</h1>
            <p class="login_text">-- KH. Abdurrahman Wahid --</p>
          </div>
        </div>

      </div>

      <div class="col-lg-6 nopadding">

        <!-- Search -->
        <?php
          $ci = get_instance();
          $login_error = $ci->session->flashdata("login_error");
          if (!isset($login_error)) {
            $login_error = false;
          }
        ?>
        <div class="search_section d-flex flex-column align-items-center justify-content-center">
          <div class="search_background" style="background-image:url(<?php echo base_url();?>/assets/image/search_background.jpg);"></div>
          <div class="search_content text-center">
            <h1 class="search_title">Login Alumni</h1>
            <form id="search_form" class="search_form" action="base/masuk" method="post">
              <?php if ($login_error) { ?>
                <div class="alert alert-danger">DATA YANG ANDA MASUKKAN SALAH</div>
              <?php } ?>
              <input id="namaselect" class="input_field" type="text" placeholder="Nama Lengkap" name="nameselect" required="required" spellcheck="false">
              <input id="namaHidden" class="input_field" type="text" style="display:none;">
              <input id="nim" class="input_field" type="text" placeholder="NIM" name="nim" readonly>
              <!-- <input id="datelogin" class="input_field" type="text" placeholder="Tanggal Lahir (YYYY/MM/DD)" name="datelogin" data-large-default="true" data-format="Y-m-d" data-init-set="false" data-large-mode="true" data-theme="ikauinsa-datepicker"> -->
              <input id="datelogin" class="input_field" type="text" placeholder="Tanggal Lahir (YYYY-MM-DD)" name="datelogin" data-toggle="datepicker">
              <button id="login_id" type="submit" class="search_submit_button trans_200" value="Submit">login</button>
            </form>
            <h4>Punya akun perusahaan? <a href="javascript:showStuff('login', 'loginperusahaan', this);">Klik Disini</a></h4>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<!-- login Perusahaan -->

<div id="loginperusahaan" class="login" style=" margin-top:10%; display:none;">

  <div class="container-fluid">

    <div class="row row-eq-height">
      <div class="col-lg-6 nopadding">

        <!-- login -->

        <div class="login_section d-flex flex-column align-items-center justify-content-center">
          <div class="login_content text-center">
            <h1 class="login_title">Register Perusahaan</h1>
            <form id="daftar_perusahaan" action="base/saveperreg" method="post">
              <input id="namaperreg" name="namaperreg" class="input_field" type="text" placeholder="Nama Perusahaan" required="required" spellcheck="false">
              <input id="passperreg" name="passperreg" class="input_field" type="password" placeholder="Password Perusahaan">
              <textarea id="alamatperreg" name="alamatperreg" class="input_textarea" placeholder="Alamat Perusahaan"></textarea>
              <input id="posperreg" name="posperreg" class="input_field" type="text" placeholder="Kode Pos">
              <input id="namaconperreg" name="namaconperreg" class="input_field" type="text" placeholder="Nama Contact Perusahaan">
              <input id="emailperreg" name="emailperreg" class="input_field" type="text" placeholder="Email Perusahaan">
              <input id="noperreg" name="noperreg" class="input_field" type="text" placeholder="No Telephone Perusahaan">
              <input id="usahaperreg" name="usahaperreg" class="input_field" type="text" placeholder="Bidang Usaha">
              <button id="regper" type="submit" class="register_button trans_200" value="Submit">Register</button>
            </form>
          </div>
        </div>

      </div>

      <div class="col-lg-6 nopadding">

        <!-- Search -->
        <?php
          $ci = get_instance();
          $login_error = $ci->session->flashdata("login_error");

          if (!isset($login_error)) {
            $login_error = false;
          }
        ?>
        <div class="search_section d-flex flex-column align-items-center justify-content-center">
          <div class="search_background" style="background-image:url(assets/image/search_background.jpg);"></div>
          <div class="search_content text-center">
            <h1 class="search_title">Login Perusahaan</h1>
            <form class="search_form" action="<?php echo site_url(); ?>/base/masukrekan" method="post">
              <?php if ($login_error) { ?>
                <div class="alert alert-danger">DATA YANG ANDA MASUKKAN SALAH</div>
              <?php } ?>
              <input id="kdper" class="input_field" type="text" placeholder="Kode Perusahaan" name="kdper" required="required" spellcheck="false">
              <input id="passper" class="input_field" type="password" placeholder="Password Perusahaan" name="passper">
              <input type="hidden" name="tampunglogin" value="perusahaan" id="tampunglogin">
              <button id="loginper" type="submit" class="search_submit_button trans_200" value="Submit">login</button>
            </form>
            <h4>Punya akun alumni? <a href="javascript:showStuff('loginperusahaan', 'login', this);">Klik Disini</a></h4>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<!-- Jobs -->

<div id="jobs" class="events page_section">
  <div class="container">

    <!-- <div class="row"> -->
      <div class="col">
        <div class="section_title text-center">
          <h1>Info Pekerjaan</h1>
        </div>
      </div>
    <!-- </div> -->

    <div class="event_items">
      <table class="table_zebra">
        <tr>

            <th>Perusahaan</th>
            <th>Kota</th>
            <th>Judul Lowongan</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Selesai</th>

        </tr>
        <?php foreach($lowongan->result() as $data) :
          ?>
        <tr>

          <td><?php echo $data->nama_rekan; ?></td> <!--Perusahaan-->
          <td><?php echo $data->kota;?></td><!--kota-->
          <td><?php echo $data->posisi_lowongan;?></td><!--Judul lowongan-->
          <td><?php echo $data->tgl_posting;?></td><!--tgl mulai-->
          <td><?php echo $data->tgl_selesai;?></td><!--tgl selesai-->
        </tr>
        <?php endforeach;?>

      </table>
    </div>
  </div>
</div>
