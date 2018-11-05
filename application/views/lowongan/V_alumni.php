	<div class="wrapper">
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
		<div id="content">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="<?php echo base_url();?>careeruinsa/index">Home</a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">Data Alumni</li>
				</ol>
			</nav>
			<ul class="nav nav-tabs">
				<li class="active">
					<a data-toggle="tab" href="#dataalumni">Data Alumni</a>
				</li>
				<li>
					<a data-toggle="tab" href="#kompetensi">Kompetensi</a>
				</li>
				<li>
					<a data-toggle="tab" href="#riwayatpekerjaan">Riwayat Pekerjaan</a>
				</li>
				<li>
					<a data-toggle="tab" href="#promosidiri">Promosi Diri</a>
				</li>
			</ul>
			<div class="tab-content">
				<div id="dataalumni" class="tab-pane fade in active">
					<h3>DATA ALUMNI</h3>
					<form class="form-horizontal" role="form" action="<?php echo site_url(); ?>/careeruinsa/saveDataAlumni" method="post">
						<div class="form-group">
							<label class="control-label col-sm-2" for="nama">Nama Lengkap:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $this->session->userdata('nama'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="prodi">Prodi:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="prodi" name="prodi" value="<?php echo $this->session->userdata('prodi'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="lulus">Tahun Lulus:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="lulus" name="lulus" value="<?php $string=(string)$this->session->userdata('periodelulus'); echo substr_replace($string, "
								", -1)?>">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="jk">Jenis Kelamin:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="jk" name="jk" value="<?php $sex=(string)$this->session->userdata('sex');
								if ($sex==" L ") {
									echo "Laki-laki ";
								} else {
									echo "Perempuan ";
								}?>">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="tl">Tempat Lahir:</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" id="tl" name="tl" value="<?php echo $this->session->userdata('tmplahir'); ?>" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="tl1">Tanggal Lahir:</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" id="tl1" name="tl1" value="<?php echo $this->session->userdata('tgllahir'); ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="ks">Kota Sekarang:</label>
									<div class="col-sm-4">
									<input type="text" class="form-control" id="ks" name="ks" value="<?php echo $getdataalumni['KOTA']?>" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="as">Alamat Sekarang:</label>
									<div class="col-sm-4">
										<!-- <input type="textarea" size="20px" cols="40px" rows="5px" class="form-control" id="as" name="as" value=""> -->
										<textarea id="as" name="as" rows="6" cols="50"><?php echo $getdataalumni['ALAMAT']?></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="kp">Kode Pos:</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" id="kp" name="kp" value="<?php echo $getdataalumni['KODEPOS']?>">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="ka">Kota Asal:</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" id="ka" name="ka" value="<?php echo $getdataalumni['KOTA_ASAL']?>" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="aa">Alamat Asal:</label>
									<div class="col-sm-4">
										<!-- <input type="textarea" size="20px" cols="40px" rows="5px" class="form-control" id="aa" name="aa" value="<?php #echo $getdataalumni['ALAMAT_ASAL']?>" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"> -->
										<textarea id="aa" name="as" rows="6" cols="50"><?php echo $getdataalumni['ALAMAT_ASAL']?></textarea>										
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="agama">Agama:</label>
									<div class="col-sm-6" style="padding-top: 6px;">
										<input type="radio" name="agama" id="agama" value="Islam"> Islam
										<input type="radio" name="agama" id="agama" value="Katolik"> Katolik
										<input type="radio" name="agama" id="agama" value="Kristen"> Kristen
										<input type="radio" name="agama" id="agama" value="Hindu"> Hindu
										<input type="radio" name="agama" id="agama" value="Buddha"> Buddha
										<input type="radio" name="agama" id="agama" value="Konghuchu"> Konghuchu
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="status">Status:</label>
									<div class="col-sm-6" style="padding-top: 6px;">
										<input type="radio" name="status" id="status" value="Menikah"> Menikah
										<input type="radio" name="status" id="status" value="Belum Menikah"> Belum Menikah
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="tlp">Telepon:</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" id="tlp" name="tlp" value="<?php echo $getdataalumni['NO_TLP']?>">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="hp">Handphone:</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" id="hp" name="hp" value="<?php echo $getdataalumni['NO_HP']?>">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="email">Email:</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" id="email" name="email" value="<?php echo $getdataalumni['EMAIL']?>">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="sedia">Ketersediaan:</label>
									<div class="col-sm-6" style="padding-top: 6px;">
										<input type="radio" name="sedia" id="sedia" value="Belum Bekerja"> Belum Bekerja
										<input type="radio" name="sedia" id="sedia" value="Bekerja"> Bekerja
										<input type="radio" name="sedia" id="sedia" value="Lanjut Studi"> Melanjutkan Studi
									</div>
								</div>

						<button type="submit" style="margin: 20px 240px;" class="btn btn-primary">Simpan
							<?php echo $this->session->userdata('nimselect'); ?>
						</button>
					</form>
				</div>
				<div id="kompetensi" class="tab-pane fade">
					<button type="button" id="btn-tambah" data-toggle="modal" data-target="#form-modal" class="btn btn-success" style="margin: 2% 0 0 0;">
						<a href="<?php echo base_url();?>careeruinsa/tambahhardskill">
							<span class="glyphicon glyphicon-plus"></span> &nbsp;Tambah</span>
						</a>
					</button>
					<div style="padding:5px;"></div>
					<table class="table table-bordered table-striped dataTable no-footer" id="tablehardskill" style="width:100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Hardskill</th>
								<th>Tingkat Kemampuan</th>
							</tr>
						</thead>
						<tbody>		
								<?php
									if($gethard->num_rows() > 0){
										$var=1;
										foreach($gethard->result() as $row)
										{
									?>
									<tr>
										<td>
											<?php echo $var?>
										</td>
										<td>
											<?php echo $row->HARDSKILL?>
										</td>
										<td>
											<?php echo $row->TINGKAT?>
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
					<button type="button" id="btn-tambah" data-toggle="modal" data-target="#form-modal" class="btn btn-success" style="margin: 2% 0 0 0;">
						<a href="<?php echo base_url();?>careeruinsa/softskill">
							<span class="glyphicon glyphicon-plus"></span> &nbsp;Tambah</span>
						</a>
					</button>
					<div style="padding:5px;"></div>
					<table class="table table-bordered table-striped dataTable no-footer" id="tablesoftskill" style="width:100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Tipe SoftSkill</th>
							</tr>
						</thead>
						<tbody
								<?php
									if($getsoftskill->num_rows() > 0){
										$var=1;
										foreach($getsoftskill->result() as $row)
										{

									?>
									<tr>
										<td>
											<?php echo $var?>
										</td>
										<td>
											<?php echo $row->SOFTSKILL?>
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
					<button type="button" id="btn-tambah" data-toggle="modal" data-target="#form-modal" class="btn btn-success" style="margin: 2% 0 0 0;">
						<a href="<?php echo base_url();?>careeruinsa/bahasa">
							<span class="glyphicon glyphicon-plus"></span> &nbsp;Tambah</span>
						</a>
					</button>
					<div style="padding:5px;"></div>
					<table class="table table-bordered table-striped dataTable no-footer" id="tablebahasa" style="width:100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Bahasa</th>
								<th>Kemampuan</th>
							</tr>
						</thead>
						<tbody>
								<?php
									if($getbahasa->num_rows() > 0){
										$var=1;
										foreach($getbahasa->result() as $row)
										{

									?>
									<tr>
										<td>
											<?php echo $var?>
										</td>
										<td>
											<?php echo $row->LANGUAGE?>
										</td>
										<td>
											<?php echo $row->TINGKAT?>
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
				</div>
				<div id="riwayatpekerjaan" class="tab-pane fade">
					<h3>RIWAYAT PEKERJAAN</h3>
					<form class="form-horizontal" role="form" action="<?php echo site_url(); ?>/careeruinsa/saveRiwayatKerja" method="post">
						<div class="form-group">
							<label class="control-label col-sm-2" for="posisi">Posisi Terakhir:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="posisi" name="posisi" value="<?php echo $getdatariwayat['POSISI_TERAKHIR']?>">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="jp">Jenis Perusahaan:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="jp" name="jp" value="<?php echo $getdatariwayat['JENIS_PERUSAHAAN']?>">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="gt">Gaji Terakhir:</label>
							<div class="col-sm-4">
								<select class="form-control" id="gt" name="gt">
									<option value="<1 Juta">
										<1 Juta</option>
											<option value="1-2 Juta">1-2 Juta</option>
											<option value="2-3 Juta">2-3 Juta</option>
											<option value=">3 Juta">>3 Juta</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="gyd">Gaji Yang Diinginkan:</label>
							<div class="col-sm-4">
								<select class="form-control" id="gyd" name="gyd">
									<option value="<1 Juta">
										<1 Juta</option>
											<option value="1-2 Juta">1-2 Juta</option>
											<option value="2-3 Juta">2-3 Juta</option>
											<option value=">3 Juta">>3 Juta</option>
								</select>
							<button type="submit" style="margin: 7% 0 0 0;" class="btn btn-primary">Simpan</button>
							</div>
						</div>
						</form>
						<h3>DAFTAR RIWAYAT KERJA</h3>
						<button type="button" id="btn-tambah" data-toggle="modal" data-target="#form-modal" class="btn btn-success" style="margin: 0 100% 0 0;">
							<a href="<?php echo base_url();?>careeruinsa/riwayatkerja">
							<span class="glyphicon glyphicon-plus" style="padding: 0 2% 0 0"></span> &nbsp;Tambah</span></a>
						</button>
						<div style="padding:5px"></div>
						<table class="table table-bordered table-striped dataTable no-footer" id ="tableriwayat" style="width:100%">
							<thead>
                                <tr>
                                    <th>No</th>
									<th>NIM</th>
                                    <th>Perusahaan</th>
                                    <th>Posisi</th>
                                    <th>Th.Masuk</th>
                                    <th>Th.Keluar</th>
                                	<th>Action</th>
                                </tr>
                            </thead>
                            <tbody> 
							   <?php
								if($getriwayatpkj->num_rows() > 0){
									$var=1;
									foreach($getriwayatpkj->result() as $row)
									{
								?>
										<tr>
											<td><?php echo $var?></td>
											<td><?php echo $row->NIM?></td>
											<td><?php echo $row->NAMA_PERUSAHAAN?></td>
											<td><?php echo $row->POSISI?></td>
											<td><?php echo $row->THN_MASUK?></td>
											<td><?php echo $row->THN_KELUAR?></td>
											<td><button type="button" id="" class="btn btn-danger">
                                                <a href="<?php echo base_url();?>careeruinsa/hapusriwayatpkj/<?php echo $row->ID_RIWAYAT;?>">HAPUS
                                            </button></td>
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
				</div>
				<div id="promosidiri" class="tab-pane fade">
					<h3>PROMOSI DIRI</h3>
					<div class="form-group">
						<label>Silahkan tuliskan Kelebihan Yang Anda Miliki</label>
						<form role="form" action="<?php echo site_url(); ?>/careeruinsa/savePromosi" method="post">
							<textarea name="promosi" rows="10" cols="50">
								<?php echo $getdatariwayat['PROMOSI']?>
							</textarea>
					</div>
					<div class="form-group">
						<h3>PENDIDIKAN NON FORMAL</h3>
						<label>Silahkan tuliskan pendidikan anda lainnya seperti pernah mengikuti program pelatihan, kursus bahasa, pembukuan, pendidikan
							/ kursus komputer, training, seminar yang akan menujang keahlian dan menambah skill di dalam pekerjaan anda </label>
						<form method="post" action="">
							<textarea name="pendidikan" rows="12" cols="70">
								<?php echo $getdatariwayat['PENDIDIKAN_NONFORMAL']?>
							</textarea>
					</div>
					<button type="submit" class="btn btn-primary" id="btn-simpan">Simpan</button>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">

		var date = $('#tl1').datepicker({
			dateFormat: 'yy-mm-dd'
		}).val();

		(function () {
			$.ajax(
				site_url + '/careeruinsa/get_data_alumni'
			).then(function (res) {
				var alumniss = JSON.parse(res);

				if (alumniss.AGAMA == "Islam") {
					document.querySelector('input[name=agama][value="Islam"]').checked = true;
				} else if (alumniss.AGAMA == "Kristen") {
					document.querySelector('input[name=agama][value="Kristen"]').checked = true;
				} else if (alumniss.AGAMA == "Katolik") {
					document.querySelector('input[name=agama][value="Katolik"]').checked = true;
				} else if (alumniss.AGAMA == "Hindu") {
					document.querySelector('input[name=agama][value="Hindu"]').checked = true;
				} else if (alumniss.AGAMA == "Buddha") {
					document.querySelector('input[name=agama][value="Buddha"]').checked = true;
				} else {
					document.querySelector('input[name=agama][value="Konghuchu"]').checked = true;
				}

				if (alumniss.STATUS == "Menikah") {
					document.querySelector('input[name=status][value="Menikah"]').checked = true;
				} else {
					document.querySelector('input[name=status][value="Belum Menikah"]').checked = true;
				}

				if (alumniss.KETERSEDIAAN == "Bekerja") {
					document.querySelector('input[name=sedia][value="Bekerja"]').checked = true;
				} else if (alumniss.KETERSEDIAAN == "Lanjut Studi") {
					document.querySelector('input[name=sedia][value="Lanjut Studi"]').checked = true;
				} else {
					document.querySelector('input[name=sedia][value="Belum Bekerja"]').checked = true;
				}
				// console.log(alumniss);
			})
		})();

		// $('[name="nama"]').val(
		// $('[name="lulus"]').val(agama);


		$("#nama").attr("readonly", "readonly");
		$("#prodi").attr("readonly", "readonly");
		$("#lulus").attr("readonly", "readonly");
		$("#jk").attr("readonly", "readonly");

		$("#tl1, #kp, #tlp, #hp").keydown(function (e) {
			// Allow: backspace, delete, tab, escape, enter and .
			if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
				// Allow: Ctrl/cmd+A
				(e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
				// Allow: Ctrl/cmd+C
				(e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
				// Allow: Ctrl/cmd+X
				(e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
				// Allow: home, end, left, right
				(e.keyCode >= 35 && e.keyCode <= 39)) {
				// let it happen, don't do anything
				return;
			}
			// Ensure that it is a number and stop the keypress
			if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
				e.preventDefault();
			}
		});

	</script>
