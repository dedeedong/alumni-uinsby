<!-- Events -->

<div class="events page_section" style="margin-top: 15%;">
  <div class="container">

    <div class="row">
      <div class="col">
        <div class="section_title text-center">
          <h1>DAFTAR NAMA PENGURUS PUSAT IKATAN ALUMNI UNIVERSITAS ISLAM NEGERI SUNAN AMPEL </h1>
        </div>
      </div>
    </div>
    <div>Pengurus Ikatan Alumni Universitas Islam Negeri Sunan Ampel terdiri dari tiga kategori yaitu: Pengurus Pusat (PP), Pengurus Fakultas & PPS, dan Pengurus Wilayah (PW).</div>

    <!--Pembina-->
    <div class="container">
        <div class="col">
          <div class="section_title text-center">
            <h1>Pembina</h1>
          </div>
        </div>


      <div class="event_items">
        <table class="table_zebra">
          <tr>
              <th>Nama</th>
              <th>Jabatan</th>
          </tr>
          <?php foreach($pembina->result() as $data) :?>
          <tr>
            <td><?php echo $data->nama_pengurus;?></td> <!--nama-->
            <td><?php echo $data->jabatan;?></td><!--jabatan-->
          </tr>
            <?php endforeach;?>

        </table>
      </div>
    </div>

    <!--Penasihat-->
    <div class="container">
        <div class="col">
          <div class="section_title text-center">
            <h1>Penasihat</h1>
          </div>
        </div>


      <div class="event_items">
        <table class="table_zebra">
          <tr>
              <th>Nama</th>
              <th>Jabatan</th>
          </tr>
          <?php foreach($penasihat->result() as $data) :?>
          <tr>
            <td><?php echo $data->nama_pengurus;?></td> <!--nama-->
            <td><?php echo $data->jabatan;?></td><!--jabatan-->
          </tr>
            <?php endforeach;?>


        </table>
      </div>
    </div>

    <!--Pengurus Harian-->
    <div class="container">
        <div class="col">
          <div class="section_title text-center">
            <h1>Pengurus Harian</h1>
          </div>
        </div>


      <div class="event_items">
        <table class="table_zebra">
          <tr>
              <th>Nama</th>
              <th>Jabatan</th>
          </tr>
          <?php foreach($pengurus->result() as $data) :?>
          <tr>
            <td><?php echo $data->nama_pengurus;?></td> <!--nama-->
            <td><?php echo $data->jabatan;?></td><!--jabatan-->
          </tr>
            <?php endforeach;?>


        </table>
      </div>
    </div>

    </div>

  </div>
</div>
