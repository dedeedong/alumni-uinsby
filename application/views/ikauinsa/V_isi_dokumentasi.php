<!-- Events -->

    <div id="berita" class="events page_section" style="margin-top: 10%;">
      <div class="container">

        <div class="row">
          <div class="col">
            <div class="section_title text-center" style="margin-bottom:5%;">
              <h1>Dokumentasi Kegiatan IKA UINSA</h1>
            </div>
          </div>
        </div>
        <?php foreach($dokumentasi as $data): ?>
        <div class="col-lg-4 col-md-4 col-sm-12 order-lg-3 order-1">
          <div class="event_image">
          <?php  echo '<img src="data:image/jpeg;base64,'.base64_encode( $data->ISI_DOK ).'"/>';?>
          </div>
          <br>

        </div>
      <?php endforeach;?>

    </div>

  </div>
</div>
