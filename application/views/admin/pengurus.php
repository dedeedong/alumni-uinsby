<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="#">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Pengurus</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Pengurus</h1>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-body">
      <div class="col-md-6">
        <form role="form" action="<?php echo site_url(); ?>/admin/simpan_pengurus" method="post">
          <div class="form-group">
            <label>Username</label>
            <input class="form-control" placeholder="Placeholder" value="" name="username" id="username">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input class="form-control" placeholder="Placeholder" value="" name="password" type="password" id="password">
          </div>
          <div class="form-group">
            <label>Nama Pengurus</label>
            <input class="form-control" placeholder="Placeholder" value="" name="nama" id="nama">
          </div>
          <div class="form-group">
            <label>Status Pengurus</label>
            <select class="form-control" name="status" id="status">
              <option value="Pembina">Pembina</option>
              <option value="Penasihat">Penasihat</option>
              <option value="Pengurus">Pengurus Harian</option>
            </select>
          </div>
          <div class="form-group">
            <label>Jabatan Pengurus</label>
            <input class="form-control" placeholder="Placeholder" value="" name="jabatan" id="jabatan">
          </div>
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
    <div class="panel-body">
  <table style="width:100%;">
    <tr>
			<th>Nama Pengurus</th>
			<th>Status Pengurus</th>
			<th>Jabatan</th>
			<th>Username</th>
      <th>Opsi</th>
    </tr>
    <?php foreach($pengurus as $data):?>
      <tr>
        <td><?php echo $data->NAMA_PENGURUS;?></td>
        <td><?php echo $data->STATUS_PENGURUS;?></td>
        <td><?php echo $data->JABATAN;?></td>
        <td><?php echo $data->USERNAME;?></td>
        <td><button type="button" class="btn btn-sm btn-primary" onclick="javascript:edit_pengurus('<?php echo $data->ID_PENGURUS;?>');">Edit</button>
        <a href="<?php echo base_url();?>Admin/hapus_rekan/<?php echo $data->ID_REKAN;?>"><button type="button" class="btn btn-sm btn-danger" >Hapus</button></a></td>
      </tr>
    <?php endforeach;?>
	</table>
</div>
  </div>

</div>
