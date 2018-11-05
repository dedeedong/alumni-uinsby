<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="#">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Rekan</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Rekan</h1>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-body">
      <form role="form" action="<?php echo site_url(); ?>/Admin/terima_rekan" method="post">
  <table style="width:100%;" class="tabrek">
    <tr class="headtabrek">
			<th>Kode Perusahaan</th>
			<th>Nama Perusahaan</th>
			<th>Email</th>
			<th>No Telepon</th>
			<th>Status</th>
      <th>Opsi</th>
    </tr>
    <?php foreach($rekan as $data):?>
      <tr class="tabisirek">
        <td><?php echo $data->ID_REKAN;?></td>
        <td><?php echo $data->NAMA_REKAN;?></td>
        <td><?php echo $data->EMAIL_CP;?></td>
        <td><?php echo $data->NO_TELP;?></td>
        <td><?php echo $data->STATUS;?></td>
        <td><a href="<?php echo base_url();?>Admin/terima_rekan/<?php echo $data->ID_REKAN;?>"><button type="button" class="btn btn-sm btn-primary" >Terima</button></a>
        <a href="<?php echo base_url();?>Admin/hapus_rekan/<?php echo $data->ID_REKAN;?>"><button type="button" class="btn btn-sm btn-danger" >Hapus</button></a></td>
      </tr>
    <?php endforeach;?>
	</table>
</form>
</div>
</div>



</div>
