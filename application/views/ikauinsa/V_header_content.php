<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>IKA UINSA - Ikatan Keluarga Alumni Universitas Islam Negeri Sunan Ampel Surabaya</title>
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/image/favicon.png">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/ikauinsa-style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/datedropper.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/ikauinsa-datepicker.css">
    <script type="text/javascript">var base_url = '<?php echo base_url() ?>';</script>
    <script type="text/javascript">var site_url = '<?php echo site_url() ?>';</script>
  </head>
  <body>
    <!-- Home -->
    <div class="container-super">

      <!-- Header -->
      <header class="header d-flex flex-row">
        <div class="header_content d-flex flex-row align-items-center">

          <!-- Logo -->
          <div class="logo_container">
            <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/image/logo.png" alt="" class="logo"></a>
          </div>

          <!-- Main Navigation -->
          <nav class="main_nav_container">
            <div class="main_nav">
              <ul class="main_nav_list">
                <li class="main_nav_item"><a href="<?php echo base_url();?>">beranda</a></li>
                <li class="main_nav_item"><a href="<?php echo base_url();?>/#berita">berita</a></li>
                <li class="main_nav_item"><a href="<?php echo base_url();?>/#jobs">info jobs</a></li>
                <li class="main_nav_item"><a href="javascript: void(0);" id="search-button">cari alumni</a></li>
              </ul>
            </div>
          </nav>
        </div>
        <div class="header_side d-flex flex-row justify-content-center align-items-center">
          <ul>
            <li class="main_nav_item_side"><a href="<?php echo base_url();?>#login">login</a></li>
          </ul>
        </div>

        <!-- Hamburger -->
        <div class="searchicon_container">
          <i class="fa fa-search trans_200" title="Cari Alumni"></i>
        </div>
        <div class="hamburger_container">
          <i class="fa fa-bars trans_200"></i>
        </div>
      </header>

      <!-- Search -->
      <div class="overlay">
        <div class="mk-fullscreen-search-overlay" id="mk-search-overlay">
          <div id="mk-fullscreen-search-wrapper">
            <form method="get" id="mk-fullscreen-searchform" action="">
              <input type="text" value="" placeholder="Cari Alumni..." id="mk-fullscreen-search-input" spellcheck="false">
              <!-- <i class="fa fa-search fullscreen-search-icon"><input value="" type="submit"></i> -->
                <a href="javascript: closepopup()" class="mk-fullscreen-close" id="mk-fullscreen-close-button">
                  <div class="menu_close_container">
                    <div class="menu_close"></div>
                  </div>
                </a>
            </form>
          </div>
        </div>
      </div>

      <!-- Menu -->
      <div class="menu_container menu_mm">

        <!-- Menu Close Button -->
        <div class="menu_close_container">
          <div class="menu_close"></div>
        </div>

        <!-- Menu Items -->
        <div class="menu_inner menu_mm">
          <div class="menu menu_mm">
            <ul class="menu_list menu_mm">
              <li class="menu_item menu_mm"><a href="<?php echo base_url();?>">Beranda</a></li>
              <li class="menu_item menu_mm"><a href="<?php echo base_url();?>/#berita">Berita</a></li>
              <li class="menu_item menu_mm"><a href="<?php echo base_url();?>/#jobss">Info Jobs</a></li>
              <li class="menu_item menu_mm"><a href="<?php echo base_url();?>/#login">Login</a></li>
            </ul>

            <div class="menu_copyright menu_mm">Copyright &copy; <script>document.write(new Date().getFullYear());</script> Pusat Teknologi Informasi dan Pangkalan Data</div>
          </div>
        </div>

      </div>

    </div>
