
<!-- Events -->
  <div class="events page_section" style="margin-top: 15%;">
    <div class="container">

      <?php foreach($isi_berita->result() as $data):?>
      <?php
        $potong = $data->CONTENT;
        $pos = strpos($potong, "</p>");
        $kata = substr($potong,$pos+4,7000);
      ?>
      <div class="row">
        <div class="col">
          <div class="section_title text-center" style="margin-bottom: 5%;">
            <h1><?php echo $data->JUDUL;?></h1>
          </div>
        </div>
      </div>

      <div class="row event_item">
        <div class="col">
          <div class="row d-flex flex-row align-items-end">

            <div class="col-lg-12 order-lg-3 order-1">
              <div class="event_image berita_full">
                <img src="http://beta.uinsby.ac.id/assets/uploads/gambar/1/<?php echo $data->GAMBAR;?>"/>
              </div>

              <div class="event_content">
                <div class="event_isi"><?php echo $kata;?></div>
              </div>

            </div>


          </div>

        </div>
      </div>
    <?php endforeach;?>

    </div>
  </div>
</div>
