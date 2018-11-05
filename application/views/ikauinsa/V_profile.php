
<!-- Events -->
  <div class="events page_section" style="margin-top: 15%;">
    <?php
      $myfile = fopen("assets/json/alumni.json","r") or die("Unable To Open FIle");
      $readJson = fread($myfile, filesize("assets/json/alumni.json"));

      $arr = json_decode($readJson, true);
      // print_r($arr);

      $banyak = count($arr);
      // print_r($nimid);
      // print_r($profile->result()->NIM);
      foreach ($profile->result() as $data) {
        $tampungNIM = $data->NIM;
        $tampungNAMA = $data->NAMA;
        $tampungPRODI = $data->PRODI;
        $tampungFAK = $data->FAKULTAS;
        $tampungHP = $data->NO_HP;
        $tampungALAM = $data->ALAMAT;
        $tampungEMAIL = $data->EMAIL;
      }

      if ($nimid == $data->NIM) {
        // print_r('database');
        $namapro = $tampungNAMA;
        $nimpro = $tampungNIM;
        $prodipro = $tampungPRODI;
        $fakpro = $tampungPRODI;
        $hppro = $tampungHP;
        $alampro = $tampungALAM;
        $emailpro = $tampungEMAIL;
      } else {
        // print_r('json');
        for ($i=0; $i < $banyak; $i++) {
          if ($arr[$i]['nim'] == $nimid) {
            $namapro = $arr[$i]['nama'];
            $nimpro = $arr[$i]['nim'];
            $prodipro = $arr[$i]['prodi'];
            $fakpro = $arr[$i]['fakultas'];
            $hppro = "No Handphone Belum Diisi";
            $alampro = "Alamat Belum Diisi";
            $emailpro = "Email Belum Diisi";
          }
        }
      }

      fclose($myfile);
    ?>
    <div class="container">

      <div class="row">
        <div class="col">
          <div class="section_title text-center" style="margin-bottom: 5%;">

            <h1>PROFILE <a id="nama_profile"></a><?php echo $namapro;?></h3>
            <br>
            <h3><a><?php echo $nimpro;?></a></h3>
            <h3><a><?php echo $prodipro;?></a></h3>
            <h3><a><?php echo $fakpro;?></a></h3>
            <h3><a><?php echo $hppro;?></a></h3>
            <h3><a><?php echo $alampro;?></a></h3>
          </div>
        </div>
      </div>

      <div class="row event_item">
        <div class="col">
          <div class="row d-flex flex-row align-items-end">

            <div class="col-lg-12 order-lg-3 order-1">
              <!-- <div class="event_image">
                <img src="<?php echo base_url();?>assets/image/event_2.jpg">
              </div> -->

              <div class="event_content">
                <div class="col-lg-12 nopadding">

                  <!-- Search -->

                  <div class="search_section d-flex flex-column align-items-center justify-content-center">
                    <div class="search_content text-center" style="margin: 57px;">
                      <h1 class="search_title">Kirim Email</h1>
                      <form class="search_form" action="base/masuk" method="post">
                        <input id="fromemail" class="input_field" type="text" placeholder="Email Pengirim" >
                        <input id="toemail" class="input_field" type="text" placeholder="<?php echo $emailpro;?>" disabled>
                        <!-- <input id="contentemail" class="input_field" type="text" placeholder="Tulis Email Anda Di Sini ..." > -->
                        <textarea id="contentemail" class="input_textarea" name="comment" form="usrform" placeholder="Tulis Isi Email Disini ..." style="margin-top:24px;"></textarea>
                        <button id="login_id" type="submit" class="search_submit_button trans_200" value="Submit">Kirim</button>
                      </form>
                    </div>
                  </div>

                </div>
              </div>

            </div>


          </div>

        </div>
      </div>
    </div>
  </div>
</div>
