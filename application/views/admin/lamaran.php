<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="#">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Lamaran</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Lamaran</h1>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-body">
      <form role="form" action="<?php echo site_url(); ?>/Admin/accept/<?php $nim ?>" method="post">
  <table style="width:100%;" class="tablam">
    <tr class="headtablam">
			<th>NIM</th>
			<th>Nama</th>
			<th>Rekan</th>
			<th>Posisi</th>
			<th>Status</th>
      <th>Opsi</th>
    </tr>
    <?php foreach($lamaran as $data):?>
      <tr class="tabisilam">
        <td><?php echo $data->NIM;?></td>
        <td><?php echo $data->NAMA;?></td>
        <td><?php echo $data->NAMA_REKAN;?></td>
        <td><?php echo $data->POSISI_LOWONGAN;?></td>
        <td><?php echo $data->STATUS_LAMARAN;?></td>
        <td><a href="<?php echo base_url();?>Admin/accept/<?php echo $data->NIM;?>"><button type="button" class="btn btn-sm btn-primary" >Terima</button></a></td>
      </tr>
    <?php endforeach;?>
	</table>
</form>
</div>
</div>


</div>
