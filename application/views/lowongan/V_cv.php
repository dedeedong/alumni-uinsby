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
                        <a href="<?php echo base_url();?>careeruinsa/index/">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>careeruinsa/alumni">Data Alumni</a>
                    </li>
                    <li class="active">
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
						<li class="breadcrumb-item"><a href="<?php echo base_url();?>careeruinsa/index">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Curriculum Vitae</li>
					</ol>
				</nav>

                <button type="button" onclick="printJS('docs/printjs.pdf')" class="btn btn-success"><a href="<?php echo base_url();?>careeruinsa/report">Cetak CV</a>
				</button>
                <button type="submit" class="btn btn-default"><a href="<?php echo base_url();?>careeruinsa/alumni">Rubah CV</a></button>
                <h2 style="text-align: center;"><?php echo $this->session->userdata('nama'); ?></h2>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#dataalumni">Data Pribadi Pelamar</a></li>
                    <li><a data-toggle="tab" href="#kompetensi">Daftar Kompetensi Pelamar</a></li>
                    <li><a data-toggle="tab" href="#riwayatpekerjaan">Daftar Riwayat Pekerjaan</a></li>
                    <!--<li><a data-toggle="tab" href="#promosiDiri">Promosi Diri</a></li>-->
                </ul>
                      
            <div class="tab-content">
                <div id="dataalumni" class="tab-pane fade in active">
					<form class="form-horizontal">
						<h3>Ringkasan Resume</h3>
						<div class="form-group">
							<label class="control-label col-sm-2" for="posisi">Posisi Terakhir:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="posisi" value="<?php echo $getdatariwayat['POSISI_TERAKHIR']?>">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="it">Industri Terakhir:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="it" value="<?php echo $getdatariwayat['JENIS_PERUSAHAAN']?>">
							</div>
						</div>			
						<div class="form-group">
							<label class="control-label col-sm-2" for="gt">Gaji Terakhir:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="gt" value="<?php echo $getdatariwayat['GAJI_AKHIR']?>">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="gyd">Gaji Yang Diinginkan:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="gyd" value="<?php echo $getdatariwayat['GAJI_HARAP']?>">
							</div>
						</div>	
						<h3>Keterangan Pribadi</h3>
						<div class="form-group">
							<label class="control-label col-sm-2" for="jk">Jenis Kelamin:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="jk" value="<?php $sex=(string)$getdataalumni['GENDER'];
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
									$from = new DateTime($getdataalumni['TANGGAL_LAHIR']);
									$to   = new DateTime('today');
									echo $from->diff($to)->y; ?>">
							</div>
						</div>		
						<div class="form-group">
							<label class="control-label col-sm-2" for="agama">Agama:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="agama" value="<?php echo $getdataalumni['AGAMA']?>">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="status">Status:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="status" value="<?php echo $getdataalumni['STATUS']?>">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="ttl">TTL:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="ttl" value="<?php echo $getdataalumni['TEMPAT_LAHIR']?>, <?php echo $getdataalumni['TANGGAL_LAHIR']?>">
							</div>
						</div>	
						<div class="form-group">
							<label class="control-label col-sm-2" for="as">Alamat Sekarang:</label>
							<div class="col-sm-4">
								<input type="textarea" size="20px" cols="40px" rows="5px" class="form-control" id="as" value="<?php echo $getdataalumni['ALAMAT']?>">
							</div>
						</div>	
						<div class="form-group">
							<label class="control-label col-sm-2" for="kota">Kota:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="kota" value="<?php echo $getdataalumni['KOTA']?>">
							</div>
						</div>	
						<div class="form-group">
							<label class="control-label col-sm-2" for="tlp">Telepon:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="tlp" value="<?php echo $getdataalumni['NO_TLP']?>">
							</div>
						</div>	
						<div class="form-group">
							<label class="control-label col-sm-2" for="hp">Handphone:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="hp" value="<?php echo $getdataalumni['NO_HP']?>">
							</div>
						</div>	
						<div class="form-group">
							<label class="control-label col-sm-2" for="email">Email:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="email" value="<?php echo $getdataalumni['EMAIL']?>">
							</div>
						</div>	
							<h3>Promosi Diri</h3>	
							<label>Silahkan tuliskan Kelebihan Yang Anda Miliki</label></br>
							<textarea id="kelebihan" name="kelebihan" rows="10" cols="50"><?php echo $getdatariwayat['PROMOSI']?></textarea>

							<h3>Pendidikan Non Formal</h3>
							<label>Silahkan tuliskan pendidikan anda lainnya seperti pernah mengikuti program pelatihan, kursus bahasa, pembukuan, pendidikan / kursus komputer, training, seminar yang akan menujang keahlian dan menambah skill di dalam pekerjaan anda </label>
							<textarea id="pnf" name="pnf" rows="12" cols="70"><?php echo $getdatariwayat['PENDIDIKAN_NONFORMAL']?></textarea>
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
									<?php
									}
									?>
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
									<?php
									if($getsoftskill->num_rows() > 0){
										$var=1;
										foreach($getsoftskill->result() as $row)
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
									<?php
									}
									?>
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
									<?php
									if($getbahasa->num_rows() > 0){
										$var=1;
										foreach($getbahasa->result() as $row)
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
									<?php
									}
									?>
							</tbody>
						</table>
				</div>
                    
                <div id="riwayatpekerjaan" class="tab-pane fade">
					<div style="padding: 15px;"></div>
						<h3>DAFTAR RIWAYAT KERJA</h3>
						<table class="table table-bordered table-striped dataTable no-footer tabelbaru" id ="tableriwayat" style="width:100%">
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
