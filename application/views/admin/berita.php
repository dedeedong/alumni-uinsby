    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  		<div class="row">
  			<ol class="breadcrumb">
  				<li><a href="#">
  					<em class="fa fa-home"></em>
  				</a></li>
  				<li class="active">Berita</li>
  			</ol>
  		</div><!--/.row-->

  		<div class="row">
  			<div class="col-lg-12">
  				<h1 class="page-header">Berita</h1>
  			</div>
  		</div><!--/.row-->

  				<div class="panel panel-default">
  					<div class="panel-body">
  						<div class="col-md-6">
  							<?php echo form_open_multipart('Admin/save_berita'); ?>
  								<div class="form-group">
  									<label>Isi Berita</label>
                    <br />
  									<textarea cols="100px" rows="10px" style="resize:none;" name="isi" id="isi_berita" value=""></textarea>
  								</div>
                  <div class="form-group">
  									<label>Judul</label>
  									<input class="form-control" placeholder="Placeholder" id="judul_berita" name="judul" value="">
  								</div>
                  <div class="form-group">
										<label>Status Berita</label>
										<select class="form-control" name="publish" id="status_berita">
											<option value="Publish">Publish</option>
											<option value="Not Publish">Not Publish</option>
										</select>
									</div>
                  <!-- <div class="form-group">
  									<label>Tanggal</label>
  									<input id="dateberita" class="form-control" type="text" placeholder="Tanggal Lahir (YYY/MM/DD)" name="dateberita" data-large-default="true" data-format="Y-m-d" data-init-set="false" data-large-mode="true" data-theme="ikauinsa-datepicker">
  								</div> -->
                  <div class="form-group">
										<label>Status</label>
										<select class="form-control" name="status" id="status_ber">
											<option value="Berita">Berita</option>
											<option value="Agenda">Agenda</option>
                      <option value="Artikel">Artikel</option>
										</select>
									</div>
                  <div class="form-group">
									<label>Gambar</label>
									<input type="file" id="dokumen" name="dokumen" accept="image/png, image/jpg, image/jpeg" />
								  </div>
  									<button type="submit" class="btn btn-primary" name="submit">Submit</button>
                  </form>
  								</div>

  						</div>
              <div class="panel-body">
                <form role="form" action="<?php echo site_url(); ?>/Admin/accept/<?php $nim ?>" method="post">
            <table style="width:100%;">
              <tr>
                <th>Judul</th>
                <th>Status Berita</th>
                <th>Status</th>
              </tr>
              <?php foreach($berita as $data):?>
                <tr>
                  <td><?php echo $data->JUDUL;?></td>
                  <td><?php echo $data->STATUS_BERITA;?></td>
                  <td><?php echo $data->STATUS;?></td>
                  <td><a href="<?php echo base_url();?>Admin/publish/<?php echo $data->ID_BERITA;?>"><button type="button" class="btn btn-sm btn-primary" >  Publish  </button></a>
                  <a href="<?php echo base_url();?>Admin/notpublish/<?php echo $data->ID_BERITA;?>"><button type="button" class="btn btn-sm btn-primary" >Not Publish</button></a>
                <a href="<?php echo base_url();?>Admin/delete_berita/<?php echo $data->ID_BERITA;?>"><button type="button" class="btn btn-sm btn-primary" >Delete</button></a>
                <button type="button" class="btn btn-sm btn-primary" onclick="javascript:edit_berita('<?php echo $data->ID_BERITA;?>');" >Edit</button>
              </td>
                </tr>
              <?php endforeach;?>
            </table>
          </form>
          </div>
  					</div>
  				</div><!-- /.panel-->
  			</div><!-- /.col-->
  		</div>
