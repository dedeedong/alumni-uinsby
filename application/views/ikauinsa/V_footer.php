<footer class="site-footer">
    <div class="footer-widgets">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="foot-about">
                        <a class="foot-logo" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/image/logo.png" style="width: 200px;"></a>

                        <p>IKA UINSA berdiri pada tanggal 22 Januari 1983, merupakan sebuah organisasi yang bersifat kekeluargaan, keilmuan dan kemasyarakatan, berkedudukan di Universitas Islam Negeri Sunan Ampel.</p>

                        <p class="footer-copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy; <script>document.write(new Date().getFullYear());</script> Pusat Teknologi Informasi dan Pangkalan Data
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div><!-- .foot-about -->
                </div><!-- .col -->

                <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                    <div class="foot-contact">
                        <h2>Alamat</h2>

                        <ul>
                            <li>Email: humas@uinsby.ac.id</li>
                            <li>Telphone: +62 31 8410298</li>
                            <li>Fax: +62 31 8413300</li>
                            <li>Alamat: JL. A. Yani 117, Surabaya, Jawa Timur, Indonesia, 60237</li>
                        </ul>
                    </div><!-- .foot-contact -->
                </div><!-- .col -->

                <div class="col-12 col-md-6 col-lg-3 mt-5 mt-lg-0">
                    <div class="quick-links flex flex-wrap">
                        <h2 class="w-100">Menu Cepat</h2>

                        <ul class="w-50">
                            <li><a href="http://www.uinsby.ac.id">UINSBY</a></li>
                            <li><a href="http://siakad.uinsby.ac.id">SIAKAD</a></li>
                            <li><a href="http://sifasum.uinsby.ac.id/">SIFASUM</a></li>
                        </ul>

                        <ul class="w-50">
                            <li><a href="http://ctrl.uinsby.ac.id/index">SIMPEG</a></li>
                            <li><a href="http://ejournal.uinsby.ac.id/">E-JOURNAL</a></li>
                            <li><a href="<?php echo base_url();?>Admin/index">ADMIN</a></li>
                        </ul>
                    </div><!-- .quick-links -->
                </div><!-- .col -->

                <div class="col-12 col-md-6 col-lg-3 mt-5 mt-lg-0">
                    <div class="follow-us">
                        <h2>Ikuti Kita</h2>

                        <ul class="follow-us flex flex-wrap align-items-center">
                            <li><a href="https://www.facebook.com/ikauinsa/"><i class="fa fa-facebook"></i></a></li>
                        </ul>
                        <!-- <ul class="follow-us flex flex-wrap align-items-center">
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul> -->
                        <ul class="follow-us flex flex-wrap align-items-center">
                            <li><a href="https://www.instagram.com/ika_uinsa/"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                        <ul class="follow-us flex flex-wrap align-items-center">
                            <li><a href="https://twitter.com/ika_uinsa"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div><!-- .quick-links -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .footer-widgets -->
</footer><!-- .site-footer -->




<script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-ui.js"></script>
<script src="<?php echo base_url();?>assets/js/popper.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/ScrollMagic.min.js"></script>
<script src="<?php echo base_url();?>assets/js/owl.carousel.js"></script>
<script src="<?php echo base_url();?>assets/js/search-header.js"></script>
<script src="<?php echo base_url();?>assets/js/custom.js"></script>
<script src="<?php echo base_url();?>assets/js/datepicker.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap3-typeahead.js"></script>
<script src="<?php echo base_url();?>assets/js/smooth-scroll.js"></script>
<script src="<?php echo base_url();?>assets/js/smooth-scroll.polyfills.js"></script>
<script src="<?php echo base_url();?>assets/js/moment-with-locales.js"></script>
<script src="<?php echo base_url();?>assets/js/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/js/loadmore.js"></script>
<!--<script>
var datanya = "<?php echo $alumni?>";
</script>-->
<script src="<?php echo base_url();?>assets/js/ikauinsa-style.js"></script>
</body>
</html>


<?php
$par = $_GET['par'];
if($par == 'perusahaan'){
  echo '<script>document.getElementById("login").style.display = "none";document.getElementById("loginperusahaan").style.display = "block";</script>';
}
?>
