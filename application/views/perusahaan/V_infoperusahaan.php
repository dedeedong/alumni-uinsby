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
						<li class="breadcrumb-item"><a href="<?php echo base_url();?>perusahaan/index">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Daftar Perusahaan</li>
					</ol>
				</nav>
                <ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#infolowongan">Informasi Lowongan</a></li>
					<li><a data-toggle="tab" href="#kebutuhanlowongan">Detail Kebutuhan Lowongan</a></li>
        		</ul>
                <div class="tab-content">
                    <div id="infolowongan" class="tab-pane fade in active">
                        <form class="form-horizontal">
                        <h3>Informasi Umum Perusahaan</h3>                
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="nama_perusahaan">Nama Perusahaan:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="addressnow">Deskripsi Perusahaan:</label>
                                    <div class="col-sm-4">
                                        <textarea size="20px" cols="60px" rows="5px" class="form-control" id="deskripsi" name="deskripsi"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="addressnow">Alamat:</label>
                                    <div class="col-sm-4">
                                        <textarea size="20px" cols="60px" rows="5px" class="form-control" id="addressnow" name="addressnow"></textarea>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="bidang-usaha">Bidang Usaha:</label>
                                    <div class="col-sm-3">
                                            <input type="text" class="form-control" id="bidang-usaha" name="bidang-usaha" placeholder="ADVERTISING">
                                        </select>
                                    </div>
                                </div>   
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="website">Website:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="website" name="website" placeholder="www.website.com">
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="jk">Jumlah Karyawan:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="jk" name="jk">
                                    </div>
                                </div>    
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="namacp">Nama CP:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="namacp" name="namacp">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="email">Email:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="email" placeholder="namaemail@gmail.com" name="email_rekan">
                                    </div>
                                </div>  
                            </div>
                        </form>

                        <h3 style="text-align: left;">Informasi Lowongan</h3>
                        <div class="modal-body">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="bidang-pekerjaan">Bidang Pekerjaan:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="bidang-pekerjaan" name="bidang-pekerjaan" placeholder="STOREKEEPEER">
                                    </div>
                                </div>   
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="jurusan">Jurusan:</label>
                                    <div class="col-sm-4">
                                        <textarea size="20px" cols="60px" rows="5px" class="form-control" id="jurusan" name="jurusan"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="gender">Gender:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="gender" name="gender">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="batasusia">Batasan Usia:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="batasusia" name="batasusia">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="pengalamankerja">Pengalaman Kerja:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="pengalamankerja" name="pengalamankerja">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="jamkerja">Jam Kerja:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="jamkerja" name="jamkerja">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="statusnikah">Status Pernikahan:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="statusnikah" name="statusnikah">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="ketlowongan">Keterangan Lowongan:</label>
                                    <div class="col-sm-4">
                                        <textarea size="20px" cols="60px" rows="5px" class="form-control" id="ketlowongan" name="ketlowongan"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="tglposting">Tanggal Posting:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="tglposting" name="tglposting">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="batasakhir">Status Pernikahan:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="batasakhir" name="batasakhir">
                                    </div>
                                </div>
                            </form>
                        </div>    
                    </div>
                    <div id="kebutuhanlowongan" class="tab-fane fade">
                    <div style="padding:5px;"></div>
						<table class="table table-bordered table-striped dataTable no-footer" id ="hardskillperusahaan" style="width:100%">
							<thead>
								<tr>
									<th>No</th>
									<th>`Tipe Hardskill</th>
									<th>Nama Hardskill</th>
								</tr>
							</thead>
							<tbody>
								<tr>
                                    <td>1</td>
                                    <td>ANIMASI</td>
                                    <td>3D MAX</td>
                                    
								</tr>
							</tbody>
						</table>
						<div style="padding:5px;"></div>
						<table class="table table-bordered table-striped dataTable no-footer" id ="softskillperusahaan" style="width:100%">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama SoftSkill</th>
								</tr>
							</thead>
							<tbody>
							    <tr>
                                    <td>1</td>
                                    <td>Underpressure</td>
								</tr>
							</tbody>
						</table>
						<div style="padding:5px;"></div>
						<table class="table table-bordered table-striped dataTable no-footer" id ="bahasaperusahaan" style="width:100%">
							<thead>
								<tr>
									<th>No</th>
									<th>Bahasa</th>
									<th>Kemampuan</th>
								</tr>
							</thead>
							<tbody>
								<tr>
                                    <td>1</td>
                                    <td>Jepang</td>
                                    <td>Jago Banget</td>                                    
								</tr>
							</tbody>
						</table>
					</div>
                    </div>
	            </div>
            <!--penutup div content-->
            </div>
        <!--penutup div wrapper-->
</div>
<script>
            $("#nama_perusahaan").attr("readonly","readonly");
            $("#deskripsi").attr("readonly","readonly");            
			$("#addressnow").attr("readonly","readonly");
			$("#bidang-usaha").attr("readonly","readonly");
			$("#website").attr("readonly","readonly");
			$("#namacp").attr("readonly","readonly");
			$("#email").attr("readonly","readonly");
			$("#bidang-pekerjaan").attr("readonly","readonly");
			$("#jurusan").attr("readonly","readonly");
			$("#gender").attr("readonly","readonly");
			$("#batasusia").attr("readonly","readonly");
			$("#pengalamankerja").attr("readonly","readonly");
			$("#jamkerja").attr("readonly","readonly");
			$("#statusnikah").attr("readonly","readonly");
			$("#ketlowongan").attr("readonly","readonly");
			$("#tglposting").attr("readonly","readonly");
			$("#batasakhir").attr("readonly","readonly");
    
            
            
            
			$("#lulus").attr("readonly","readonly");
			$("#jk").attr("readonly","readonly");
</script>