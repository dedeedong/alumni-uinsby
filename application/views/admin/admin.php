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
  		</div><!--/.row-->

  				<div class="panel panel-default">
  					<div class="panel-body">
  						<div class="col-md-6">
  							<form role="form" action="<?php echo site_url(); ?>/admin/simpan_rekan" method="post">
  								<div class="form-group">
  									<label>Nama Rekan</label>
  									<input class="form-control" placeholder="Nama Rekan" name="nama_rekan" value="">
  								</div>
                  <div class="form-group">
  									<label>Alamat</label>
  									<input class="form-control" placeholder="Alamat Rekan" name="alamat_rekan" value="">
  								</div>
  									<button type="submit" class="btn btn-primary">Submit Button</button>
                  </form>
  								</div>

  						</div>
  					</div>
  				</div><!-- /.panel-->
