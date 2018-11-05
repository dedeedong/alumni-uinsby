    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  		<div class="row">
  			<ol class="breadcrumb">
  				<li><a href="#">
  					<em class="fa fa-home"></em>
  				</a></li>
  				<li class="active">Lowongan</li>
  			</ol>
  		</div><!--/.row-->

  		<div class="row">
  			<div class="col-lg-12">
  				<h1 class="page-header">Lowongan</h1>
  			</div>
  		</div><!--/.row-->

  				<div class="panel panel-default">
  					<div class="panel-body">
  						<div class="col-md-6">
                <form role="form" action="<?php echo site_url(); ?>/admin/simpan_lowongan" method="post">
                <div class="form-group">
                  <label>Rekan</label>
                  <select class="form-control" name="rekan">
                    <?php foreach($rekan as $data):?>
                    <option value="<?php echo $data->ID_REKAN;?>"><?php echo $data->NAMA_REKAN;?></option>
                    <?php endforeach;?>
                  </select>
                </div>
                  <div class="form-group">
  									<label>Posisi Lowongan</label>
  									<input class="form-control" placeholder="Placeholder" value="" name="posisi">
  								</div>
                  <div class="form-group">
  									<label>Kota</label>
  									<input class="form-control" placeholder="Placeholder" value="" name="kota">
  								</div>
                  <div class="form-group">
  									<label>Tanggal Posting</label>
  									<input class="form-control" placeholder="Placeholder" value="" name="posting">
  								</div>
                  <div class="form-group">
  									<label>Tanggal Selesai</label>
  									<input class="form-control" placeholder="Placeholder" name="expired">
  								</div>
                  <div class="form-group">
										<label>Status Lowongan</label>
										<select class="form-control" name="status">
											<option value="active">Active</option>
											<option value="expired">Expired</option>
										</select>
									</div>
                  <div class="form-group">
										<label>Bursa Kerja</label>
										<select class="form-control" name="bursa">
											<option value="Y">Iya</option>
											<option value="T">Tidak</option>
										</select>
									</div>
  									<button type="submit" class="btn btn-primary">Save</button>
                  </form>
  								</div>

  						</div>
  					</div>
  				</div><!-- /.panel-->
