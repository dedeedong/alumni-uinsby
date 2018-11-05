<html>
  <head>
    <title>admin</title>
    <link href="<?php echo base_url() ?>assets/css/styleslogin.css" rel="stylesheet">
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">

  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>

    <div class="col-md-4">
      <section class="login-form">
        <form action="<?php echo site_url(); ?>/admin/masukadmin" method="post" role="login">
          <img src="<?php echo base_url()?>/assets/image/logo.jpg" class="img-responsive" alt="" />
          <!-- <?php if ($login_error) { ?>
            <div class="alert alert-danger">DATA YANG ANDA MASUKKAN SALAH</div>
          <?php } ?> -->
          <input type="text" name="user" placeholder="Username" required class="form-control input-lg"/>
          <input type="password" class="form-control input-lg" id="password" placeholder="Password" required name="pass"/>
          <div class="pwstrength_viewport_progress"></div>
          <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Log in</button>
        </form>
      </section>
      </div>

      <div class="col-md-4"></div>


  </div>


</div>
  </body>
</html>
