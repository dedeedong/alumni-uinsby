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
				<li class="breadcrumb-item active" aria-current="page">Softskill</li>
			</ol>
		</nav>
		<div class="form-group">
			<form action="<?php echo site_url(); ?>/careeruinsa/saveSoftSkill" method="post">
				<table class="table table-bordered table-striped dataTable no-footer" id="tabelsoft">
					<a href="javascript:void(0);" class="btn btn-success" data-toggle="modal" data-target="#Modal_Add">
						<span class="glyphicon glyphicon-plus"></span> &nbsp;Tambah baru Softskill</a>
					<div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title" id="exampleModalLabel">Tambah baru Softskill</h4>
								</div>
								<div class="lds-spinner" style="100%;height:100%;display:none;">
									<div></div>
									<div></div>
									<div></div>
								</div>
								<div class="modal-body">
									<div class="form-group row">
										<label class="col-md-2 col-form-label">
											<div style="padding-top:5px;">Nama Softskill</div>
										</label>
										<div class="col-md-10">
											<input type="text" name="namasoftskill" id="namasoftskill" class="form-control" placeholder="Masukkan nama Softskill...">
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
					<thead>
						<tr>
							<th>Pilih</th>
							<th>Softskill</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<input type="checkbox" name="jujur" id="soft_1" value="1">
							</td>
							<td>Jujur</td>
						</tr>
						<tr>
							<td>
								<input type="checkbox" name="komunikatif" id="soft_3" value="3">
							</td>
							<td>Komunikatif</td>
						</tr>
						<tr>
							<td>
								<input type="checkbox" name="kreatif" id="soft_5" value="5">
							</td>
							<td>Kreatif</td>
						</tr>
						<tr>
							<td>
								<input type="checkbox" name="mandiri" id="soft_7" value="7">
							</td>
							<td>Mandiri</td>
						</tr>
						<tr>
							<td>
								<input type="checkbox" name="belajar" id="soft_9" value="9">
							</td>
							<td>Mau Belajar</td>
						</tr>
						<tr>
							<td>
								<input type="checkbox" name="rapi" id="soft_11" value="11">
							</td>
							<td>Rapi</td>
						</tr>
						<tr>
							<td>
								<input type="checkbox" name="self-motivated" id="soft_13" value="13">
							</td>
							<td>Self Motivated</td>
						</tr>
						<tr>
							<td>
								<input type="checkbox" name="kharismatik" id="soft_15" value="15">
							</td>
							<td>Semua</td>
						</tr>
						<tr>
							<td>
								<input type="checkbox" name="suka-tantangan" id="soft_17" value="17">
							</td>
							<td>Suka Tantangan</td>
						</tr>
						<tr>
							<td>
								<input type="checkbox" name="teliti" id="soft_19" value="19">
							</td>
							<td>Teliti</td>
						</tr>
						<tr>
							<td>
								<input type="checkbox" name="tanggungjawab" id="soft_21" value="21">
							</td>
							<td>Tanggung Jawab</td>
						</tr>
						<tr>
							<td>
								<input type="checkbox" name="target" id="soft_23" value="23">
							</td>
							<td>On Target</td>
						</tr>
						<tr>
							<td>
								<input type="checkbox" name="teamwork" id="soft_25" value="25">
							</td>
							<td>Team Work</td>
						</tr>
						<tr>
							<td>
								<input type="checkbox" name="tegas" id="soft_27" value="27">
							</td>
							<td>Tegas</td>
						</tr>
						<tr>
							<td>
								<input type="checkbox" name="Terampil" id="soft_29" value="29">
							</td>
							<td>Terampil</td>
						</tr>
						<tr>
							<td>
								<input type="checkbox" name="ulet" id="soft_31" value="31">
							</td>
							<td>Ulet</td>
						</tr>
						<tr>
							<td>
								<input type="checkbox" name="wawasan" id="soft_33" value="33">
							</td>
							<td>Wawasan Luas</td>
						</tr>
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
			site_url + '/careeruinsa/getSoftJson'
		).then(function (res) {
			var softjson = JSON.parse(res);
			for (var idjson = 0; idjson < softjson.length; idjson++) {
				document.getElementById("soft_" + softjson[idjson].ID_SOFTSKILL).checked = true;
			}
		})
	})();

</script>
