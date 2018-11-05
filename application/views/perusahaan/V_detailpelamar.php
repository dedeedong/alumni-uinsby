<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    </head>
    <body>



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
                    <li>
                        <a href="<?php echo base_url();?>perusahaan/daftarlowongan">Daftar Lowongan</a>
                    </li>
                    <li class="active">
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
						<li class="breadcrumb-item"><a href="<?php echo base_url();?>perusahaan/index">Home</a></li>
						<li class="breadcrumb-item"><a href="<?php echo base_url();?>perusahaan/daftarlamaran">Daftar Pelamar</a></li>                        
						<li class="breadcrumb-item active" aria-current="page">Detail Pelamar</li>
					</ol>
				</nav>

                <h2 style="text-align: center;"><?php echo $getdetailpelamar['NAMA']; ?></h2>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#dataalumni">Data Pribadi Pelamar</a></li>
                    <li><a data-toggle="tab" href="#kompetensi">Daftar Kompetensi Pelamar</a></li>
                    <li><a data-toggle="tab" href="#riwayatpekerjaan">Daftar Riwayat Pekerjaan</a></li>
                </ul>
                      
            <div class="tab-content">
                <div id="dataalumni" class="tab-pane fade in active">
					<form class="form-horizontal">
						<h3>Ringkasan Resume</h3>
						<div class="form-group">
							<label class="control-label col-sm-2" for="posisi">Posisi Terakhir:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="posisi" value="<?php echo $getdetailpelamar['POSISI_TERAKHIR']?>">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="it">Industri Terakhir:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="it" value="<?php echo $getdetailpelamar['JENIS_PERUSAHAAN']?>">
							</div>
						</div>			
						<div class="form-group">
							<label class="control-label col-sm-2" for="gt">Gaji Terakhir:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="gt" value="<?php echo $getdetailpelamar['GAJI_AKHIR']?>">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="gyd">Gaji Yang Diinginkan:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="gyd" value="<?php echo $getdetailpelamar['GAJI_HARAP']?>">
							</div>
						</div>	
						<h3>Keterangan Pribadi</h3>
						<div class="form-group">
							<label class="control-label col-sm-2" for="jk">Jenis Kelamin:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="jk" value="<?php $sex=(string)$getdetailpelamar['GENDER'];
								if ($sex=="L") {
									echo "Laki-laki";
								} else {
									echo "Perempuan";
								}?>">
							</div>
						</div>		
						<div class="form-group">
							<label class="control-label col-sm-2" for="umur">Umur:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="umur" value="<?php
									$from = new DateTime($getdetailpelamar['TANGGAL_LAHIR']);
									$to   = new DateTime('today');
									echo $from->diff($to)->y; ?>">
							</div>
						</div>		
						<div class="form-group">
							<label class="control-label col-sm-2" for="agama">Agama:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="agama" value="<?php echo $getdetailpelamar['AGAMA']?>">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="status">Status:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="status" value="<?php echo $getdetailpelamar['STATUS']?>">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="ttl">TTL:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="ttl" value="<?php echo $getdetailpelamar['TEMPAT_LAHIR']?>, <?php #echo $getdataalumni['TANGGAL_LAHIR']?>">
							</div>
						</div>	
						<div class="form-group">
							<label class="control-label col-sm-2" for="as">Alamat Sekarang:</label>
							<div class="col-sm-4">
								<input type="textarea" size="20px" cols="40px" rows="5px" class="form-control" id="as" value="<?php echo $getdetailpelamar['ALAMAT']?>">
							</div>
						</div>	
						<div class="form-group">
							<label class="control-label col-sm-2" for="kota">Kota:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="kota" value="<?php echo $getdetailpelamar['KOTA']?>">
							</div>
						</div>	
						<div class="form-group">
							<label class="control-label col-sm-2" for="tlp">Telepon:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="tlp" value="<?php echo $getdetailpelamar['NO_TLP']?>">
							</div>
						</div>	
						<div class="form-group">
							<label class="control-label col-sm-2" for="hp">Handphone:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="hp" value="<?php echo $getdetailpelamar['NO_HP']?>">
							</div>
						</div>	
						<div class="form-group">
							<label class="control-label col-sm-2" for="email">Email:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="email" value="<?php echo $getdetailpelamar['EMAIL']?>">
							</div>
						</div>	
							<h3>Promosi Diri</h3>	
							<label>Kelebihan yang dimiliki Pelamar</label></br>
							<textarea id="kelebihan" name="kelebihan" rows="10" cols="50"><?php echo $getdetailpelamar['PROMOSI']?></textarea>

							<h3>Pendidikan Non Formal</h3>
							<label>Pendidikan non formal Pelamar</label></br>
							<textarea id="pnf" name="pnf" rows="12" cols="70"><?php echo $getdetailpelamar['PENDIDIKAN_NONFORMAL']?></textarea>
					</form>
				</div>
	
                <div id="kompetensi" class="tab-pane fade">
					<h3>Hard Skill</h3>
						<div style="padding:5px;"></div>
						<table class="table table-bordered table-striped dataTable no-footer" id ="tablehardskill" style="width:100%">
							<thead>
								<tr>
									<th>No</th>
									<th>Hardskill</th>
									<th>Tingkat Kemampuan</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<?php
									 if($gethard->num_rows() > 0){
										$var=1;
										foreach($gethard->result() as $row)
										{
															
									?>
											<tr>
												<td><?php echo $var?></td>
												<td><?php echo $row->HARDSKILL?></td>
												<td><?php echo $row->TINGKAT?></td>
											</tr>
									<?php
									$var++;    
									}
									}else{
									?>
										<tr>
											<td></td>
										</tr>
									<?php
									}
									
									?>
								</tr>
							</tbody>
						</table>
					<h3>Soft Skill</h3>
						<div style="padding:5px;"></div>
						<table class="table table-bordered table-striped dataTable no-footer" id ="tablesoftskill" style="width:100%">
							<thead>
								<tr>
									<th>No</th>
									<th>Tipe SoftSkill</th>
								</tr>
							</thead>
							<tbody>
							<tr>
									<?php
									if($getsoft->num_rows() > 0){
										$var=1;
										foreach($getsoft->result() as $row)
										{
															
									?>
											<tr>
												<td><?php echo $var?></td>
												<td><?php echo $row->SOFTSKILL?></td>
											</tr>
									<?php
									$var++;    
									}
									}else{
									?>
										<tr>
											<td></td>
										</tr>
									<?php
									}
									
									?>
								</tr>
							</tbody>
						</table>
						
					<h3>Language Skill</h3>
						<div style="padding:5px;"></div>
						<table class="table table-bordered table-striped dataTable no-footer" id ="tablebahasa" style="width:100%">
							<thead>
								<tr>
									<th>No</th>
									<th>Bahasa</th>
									<th>Kemampuan</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<?php
									if($getbhs->num_rows() > 0){
										$var=1;
										foreach($getbhs->result() as $row)
										{
															
									?>
											<tr>
												<td><?php echo $var?></td>
												<td><?php echo $row->LANGUAGE?></td>
												<td><?php echo $row->TINGKAT?></td>
											</tr>
									<?php
									$var++;    
									}
									}else{
									?>
										<tr>
											<td></td>
										</tr>
									<?php
									}
									
									?>
								</tr>
							</tbody>
						</table>
				</div>
                    
                <div id="riwayatpekerjaan" class="tab-pane fade">
					<div style="padding: 15px;"></div>
						<h3>DAFTAR RIWAYAT KERJA</h3>
						<table class="table table-bordered table-striped dataTable no-footer" id ="tableriwayat" style="width:100%">
							<thead>
                                <tr>
                                    <th>No</th>
									<th>NIM</th>
                                    <th>Perusahaan</th>
                                    <th>Posisi</th>
                                    <th>Th.Masuk</th>
                                    <th>Th.Keluar</th>
                                	<!-- <th>Action</th> -->
                                </tr>
                            </thead>
                            <tbody
                               <tr>
							   <?php
								if($getriwayatkj->num_rows() > 0){
									$var=1;
									foreach($getriwayatkj->result() as $row)
									{
								?>
										<tr>
											<td><?php echo $var?></td>
											<td><?php echo $row->NIM?></td>
											<td><?php echo $row->NAMA_PERUSAHAAN?></td>
											<td><?php echo $row->POSISI?></td>
											<td><?php echo $row->THN_MASUK?></td>
											<td><?php echo $row->THN_KELUAR?></td>
										</tr>
								<?php
								$var++;	
								}
								}else{
								?>
									<tr>
										<td></td>
									</tr>
								<?php
								}
							   ?>
							   </tr>
                            </tbody>
						</table>
				</div>
			</div>
		</div>
		

        <script type="text/javascript">
			$("#posisi").attr("readonly","readonly");
			$("#it").attr("readonly","readonly");
			$("#gt").attr("readonly","readonly");
			$("#gyd").attr("readonly","readonly");
			$("#jk").attr("readonly","readonly");
			$("#umur").attr("readonly","readonly");
			$("#agama").attr("readonly","readonly");
			$("#status").attr("readonly","readonly");
			$("#ttl").attr("readonly","readonly");
			$("#as").attr("readonly","readonly");
			$("#kota").attr("readonly","readonly");
			$("#tlp").attr("readonly","readonly");
			$("#hp").attr("readonly","readonly");
			$("#email").attr("readonly","readonly");
			$("#kelebihan").attr("readonly","readonly");
			$("#pnf").attr("readonly","readonly");
		</script>
    </body>
</html>
