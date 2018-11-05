<div class="wrapper">
	<!-- Sidebar Holder -->
	<nav id="sidebar">
		<div class="sidebar-header">
			<h4>Main Menu</h4>
		</div>

		<ul class="list-unstyled components">
			<li class="namabar">
                <a href="<?php echo base_url();?>perusahaan/index"><?php echo $this->session->userdata('nama');?></a>
            </li>
			<li>
				<a href="<?php echo base_url();?>perusahaan/index">Home</a>
			</li>
			<li>
				<a href="<?php echo base_url();?>perusahaan/daftarperusahaan">Data Perusahaan</a>
			</li>
			<li class="active">
				<a href="<?php echo base_url();?>perusahaan/daftarlowongan">Daftar Lowongan</a>
			</li>
			<li>
				<a href="<?php echo base_url();?>perusahaan/daftarlamaran">Daftar Lamaran</a>
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
					<a href="<?php echo base_url();?>perusahaan/index">Home</a>
				</li>
				<li class="breadcrumb-item">
					<a href="<?php echo base_url();?>perusahaan/daftarlowongan">Daftar Lowongan</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">Input Lowongan</li>
			</ol>
		</nav>
		<div class="modal-body">
			<div class="form-group">
				<h4>Input Lowongan Baru</h4>
			</div>
			<div class="form-group">
				<h5>Informasi Lowongan</h5>
			</div>
		</div>

		<form class="form-horizontal" id="form-lowongan">

			<!-- <ul class="nav nav-tabs">
					<div>       -->
			<div class="modal-body">
				<div class="form-group">
					<label class="control-label col-sm-2" for="jp">Jenis Pekerjaan</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" name="jp" id="jp">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="kota">Kota</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" name="kota" id="kota" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="jenkel">Jenis Kelamin</label>
					<div class="col-sm-6">
						<input type="radio" name="jenkel" id="jenkel" value="pria"> Pria
						<br>
						<input type="radio" name="jenkel" id="jenkel" value="wanita"> Wanita
						<br>
						<input type="radio" name="jenkel" id="jenkel" value="semua"> Semua
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="ipk">IPK</label>
					<div class="col-sm-3">
						<select class="form-control" id="ipk" name="ipk">
							<option value="Lebih dari 3.50">Lebih dari 3.50</option>
							<option value="3.00 - 3.49">3.00 - 3.49</option>
							<option value="2.50 - 2.99">2.50 - 2.99</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="bu">Batasan Usia</label>
					<div class="col-sm-3">
						<select class="form-control" id="bts" name="bts">
							<option value="<25 Tahun">< 25 Tahun</option>
							<option value="25 - 35 Tahun">25 - 35 Tahun</option>
							<option value="35 - 45 Tahun">35 - 45 Tahun</option>
							<option value=">45 Tahun">>45 Tahun</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pengalaman-kerja">Pengalaman Kerja Yang dibutuhkan</label>
					<div class="form-group" style="margin-top: 10px;">
						<div class="col-sm-3">
							<select class="form-control" id="pengalaman" name="pengalaman">
								<option value="Tidak Ada">Tidak Ada</option>
								<option value="<1 Tahun"><1 Tahun</option>
								<option value="2-3 Tahun">2-3 Tahun</option>
								<option value="3-5 Tahun">3-5 Tahun</option>
								<option value=">5 Tahun">>5 Tahun</option>
							</select>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="jam-kerja">Jam Kerja:</label>
					<div class="col-sm-6" style="margin-top: 5px;">
						<input type="radio" name="jam-kerja" id="jam-kerja" value="Penuh Waktu"> Penuh Waktu
						<input type="radio" name="jam-kerja" id="jam-kerja" value="Paruh Waktu"> Paruh Waktu
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="status-nikaah">Status Pernikahan:</label>
					<div class="col-sm-6" style="margin-top: 5px;">
						<input type="radio" name="status-nikah" id="status-nikah" value="Menikah"> Menikah

						<input type="radio" name="status-nikah" id="status-nikah" value="Belum Menikah"> Belum Menikah
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="tl">Tanggal Lowongan:</label>
					<div class="form-group">
						<div class="col-sm-2">
							<input type="text" class="form-control" id="tl1" name="tl1">
						</div>
						<div class="col-sm-1">
							<h5>s/d</h5>
						</div>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="tl2" name="tl2">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Keterangan Lowongan:</label>
					<div class="col-sm-4">
						<textarea class="form-control" id="keterangan-lowongan" name="keterangan-lowongan" rows="10" cols="50"></textarea>
					</div>
				</div>
			</div>
			<div class="modal-header">
				<h4>Detail Kompetensi Yang Di Butuhkan</h4>
				<span style="color: red;"> (WAJIB DIPILIH! Silahakan memilih hardskill yang dibutukan untuk lowongan ini)</span>
			</div>
			<div class="modal-body">
				<h5>
					<b>Kemampuan Bahasa Yang Dibutuhkan</b>
				</h5>
				<h5>Berikut ini adalah daftar pilihan bahasa yang
					<u>tersedia</u>, tulis kata kunci kemudian pilih item :</h5>
				<br>
				<input id="selectbahasa" name="selectbahasa" style="width:100%; height:34px;border-radius:4px;border: 1px solid #ccc;padding-left:20px;" placeholder="Pilih bahasa yang diinginkan">
			</div>
			<!--<div class="modal-body">-->
			<!--	<table id="tabelbahasa" class="table table-striped table-bordered dataTable no-footer">-->
			<!--		<thead>-->
			<!--			<tr>-->
			<!--				<th>Bahasa</th>-->
			<!--				<th>Kemampuan</th>-->
			<!--				<th>Aksi</th>-->
			<!--			</tr>-->
			<!--		</thead>-->
			<!--		<tbody>-->

			<!--		</tbody>-->
			<!--	</table>-->

			<!--</div>-->
			<div class="modal-body">
				<h5>
					<b>Softskill</b>
				</h5>
				<h5>Berikut ini adalah daftar pilihan softskill yang
					<u>tersedia</u>, tulis kata kunci dan pilih beberapa item yang terdapat di list :</h5>
				<br>
				<input id="selectsoftskill" name="selectsoft" style="width:100%; height:34px;border-radius:4px;border: 1px solid #ccc;padding-left:20px;" placeholder="Pilih beberapa softskill yang diinginkan">

			</div>
			<div class="modal-body">
				<h5>
					<b>Hardskill </b>
				</h5>
				<h5>Berikut ini adalah daftar pilihan hardskill yang
					<u>tersedia</u>, tulis kata kunci kemudian pilih item :</h5>
				<br>
				<input id="selecthard" name="selecthard" style="width:100%; height:34px;border-radius:4px;border: 1px solid #ccc;padding-left:20px;" placeholder="Pilih bahasa yang diinginkan">
			</div>
			<!--<div class="modal-body">-->
			<!--	<table id="belum-hardskill" class="table table-striped table-bordered dataTable no-footer">-->
			<!--		<thead>-->
			<!--			<tr>-->
			<!--				<th>Hardskill</th>-->
			<!--				<th>Kemampuan</th>-->
			<!--				<th>Aksi</th>-->
			<!--			</tr>-->
			<!--		</thead>-->
			<!--		<tbody>-->
			<!--		</tbody>-->
			<!--	</table>-->
			<!--</div>-->
			<div class="modal-body">
				<h5>
					<b>Jurusan Yang Dibutuhkan</b>
				</h5>
				<h5>Berikut ini adalah daftar pilihan jurusan yang
					<u>tersedia</u>, tulis kata kunci dan pilih beberapa item yang terdapat di list :</h5>
				<br>
				<input id="selectjurusan" name="selectjurusan" style="width:100%; height:34px;border-radius:4px;border: 1px solid #ccc;padding-left:20px;" placeholder="Pilih beberapa jurusan yang diinginkan">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary pull-right" style="margin-left: 250px;" id="btn-simpan">Simpan</button>
			</div>

			<div id="pesan-error" class="alert alert-danger">
				<h5>
					Warning!
					Harap memeriksa lagi setiap informasi yang di-isikan sebelum melakukan proses penyimpanan.
					Anda tidak dapat mengubah data yang sudah di-inputkan setelah proses penyimpanan!!!
				</h5>
			</div>
<!-- </div> -->
		</form>
<!--penutup div content-->
	</div>
<!--penutup div wrapper-->
</div>
<script type="text/javascript">
	var simpan = '<?php echo site_url('perusahaan/savelowongan')?>';
</script>
