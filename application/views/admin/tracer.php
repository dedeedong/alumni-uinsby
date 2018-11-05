<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="#">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Laporan</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Laporan Tracer Study</h1>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-body">
      <form role="form" action="<?php echo site_url(); ?>/Admin/detailtrace/<?php $nim ?>" method="post">
  <table style="width:100%;" class="tablam">
    <tr class="headtablam">
		<th class="head1">NIM</th>
    <th class="head1">Time</th>
    <th class="head1">Opsi</th>
    </tr>
    <?php for($i=0; $i<count($tracer_study[0]); $i++):?>
      <tr class="tabisilam">
        <td><?php echo $tracer_study[0][$i]['nim']."<br>";?></td>
        <td><?php echo $tracer_study[0][$i]['tanggal']."<br>";?></td>
        <td><a href="<?php echo base_url();?>Admin/detailtrace/<?php echo $tracer_study[0][$i]['nim']."/".$tracer_study[0][$i]['tanggal'];?>"><button type="button" class="btn btn-sm btn-primary" >Detail</button></a></td>
      </tr>
    <?php endfor;?>
	</table>
</form>
</div>
</div>


</div>
