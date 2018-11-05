<div class="wrapper">
	<!-- Sidebar Holder -->
	<nav id="sidebar">
		<div class="sidebar-header">
			<h4>Main Menu</h4>
		</div>

		<ul class="list-unstyled components">
			<li class="namabar">
                <a href="<?php echo base_url();?>careeruinsa/cv"><?php echo $this->session->userdata('nama');?></a>
            </li>
			<li>
				<a href="<?php echo base_url();?>careeruinsa/index">Home</a>
			</li>
			<li class="active">
				<a href="<?php echo base_url();?>careeruinsa/alumni">Data Alumni</a>
			</li>
			<li>
				<a href="<?php echo base_url();?>careeruinsa/cv">Curriculum Vitae</a>
			</li>
			<li>
				<a href="<?php echo base_url();?>careeruinsa/lowongan">Daftar Lowongan</a>
			</li>
			<li>
				<a href="<?php echo base_url();?>careeruinsa/info">Informasi Pemberitahuan</a>
			</li>
			<li class="logoutbar">
                <a href="<?php echo base_url();?>base/logout">Log Out</a>
            </li>
		</ul>
	</nav>

	<!-- Page Content Holder -->
	<div id="content">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="<?php echo base_url();?>careeruinsa/index">Home</a>
				</li>
				<li class="breadcrumb-item">
					<a href="<?php echo base_url();?>careeruinsa/alumni">Data Alumni</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">Hardskill</li>
			</ol>
		</nav>
		<div class="form-group">
			<div class="modal-body">
				<form action="<?php echo site_url(); ?>/careeruinsa/addnewhardskill" method="post">
					<a href="javascript:void(0);" class="btn btn-success" data-toggle="modal" data-target="#Modal_Add">
						<span class="glyphicon glyphicon-plus"></span> &nbsp;Tambah baru Hardskill</a>
					<div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title" id="exampleModalLabel">Tambah baru Hardskill</h4>
								</div>
								<div class="lds-spinner" style="100%;height:100%;display:none;">
									<div></div>
									<div></div>
									<div></div>
								</div>
								<div class="modal-body">
									<div class="form-group row">
										<label class="col-md-2 col-form-label">
											<div style="padding-top:5px;">Nama Hardskill</div>
										</label>
										<div class="col-md-10">
											<input type="text" name="namahardskill" id="namahardskill" class="form-control" placeholder="Masukkan nama Hardskil...">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-2 col-form-label">
											<div style="padding-top:5px;">Kemampuan </div>
										</label>
										<div class="col-md-10">
											<input type="radio" name="tingkat" value="Tidak Menguasai" checked="checked"> Tidak Menguasai
											<input type="radio" name="tingkat" value="Sedikit Menguasai"> Sedikit Menguasai
											<input type="radio" name="tingkat" value="Lumayan Menguasai"> Lumayan Menguasai
											<input type="radio" name="tingkat" value="Sangat Menguasai"> Sangat Menguasai
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
									<button type="submit" id="btn_save" class="btn btn-primary">Simpan</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<form action="<?php echo site_url(); ?>/careeruinsa/saveHardskill" method="post">
				<table class="table table-bordered table-striped dataTable no-footer" id="tablehardskill1" style="width:100%">
					<thead>
						<tr>
							<th>Nomor</th>
							<th>Hardskill</th>
							<th>Tingkat Kemampuan</th>
						</tr>
					</thead>
					<tbody <?php if($gethardskill->num_rows() > 0){ $var=1; foreach($gethardskill->result() as $row) { ?>
						<tr>
							<td>
								<?php echo $var?>
							</td>
							<td>
								<?php echo $row->HARDSKILL?>
							</td>
							<td>
								<input type="radio" name="<?php echo $var?>" id="hard_<?php echo $var?>1" value="Tidak Menguasai"> Tidak Menguasai
								<input type="radio" name="<?php echo $var?>" id="hard_<?php echo $var?>2" value="Sedikit Menguasai"> Sedikit Menguasai
								<input type="radio" name="<?php echo $var?>" id="hard_<?php echo $var?>3" value="Lumayan Menguasai"> Lumayan Menguasai
								<input type="radio" name="<?php echo $var?>" id="hard_<?php echo $var?>4" value="Sangat Menguasai"> Sangat Menguasai
								<br>
							</td>
						</tr>
						<?php
                            $var++;
                            }
                            }else{
                            ?>
							<?php
                            }
                            ?>
					</tbody>

				</table>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary" id="btn-simpan">Simpan</button>
					<a href="<?php echo base_url();?>careeruinsa/alumni">
						<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
					</a>
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
	(function () {
		$.ajax(
			site_url + '/careeruinsa/getHardJson'
		).then(function (res) {
			var hardjson = JSON.parse(res);
            var index=0;
            for (var idjson = 1; idjson <= hardjson.length; idjson++) {
                if (hardjson[index].TINGKAT == "Tidak Menguasai") {
					document.getElementById("hard_"+idjson+"1").checked = true;
				} else if (hardjson[index].TINGKAT == "Sedikit Menguasai") {
					document.getElementById("hard_"+idjson+"2").checked = true;
				} else if (hardjson[index].TINGKAT == "Lumayan Menguasai") {
					document.getElementById("hard_"+idjson+"3").checked = true;
				} else {
					document.getElementById("hard_"+idjson+"4").checked = true;
				}
                index+=1;
            }
		})
	})();
</script>
