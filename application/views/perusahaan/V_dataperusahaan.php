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
                    <li class="active">
                        <a href="<?php echo base_url();?>perusahaan/daftarperusahaan">Data Perusahaan</a>
                    </li>
                    <li>
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

                <!-- <div class="modal-header">
                </div> -->
                <form class="form-horizontal" action="<?php echo site_url(); ?>/perusahaan/saveDataRekan" method="post">
                	<h3>Informasi Umum Perusahaan</h3>
                	<div class="modal-body">
	                    <div class="form-group">
	                        <label class="control-label col-sm-2" for="id_perusahaan">ID Perusahaan:</label>
	                        <div class="col-sm-3">
	                            <input type="text" class="form-control" id="id_perusahaan" name="id_perusahaan" value="<?php echo $this->session->userdata('id'); ?>" readonly>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-sm-2" for="nama_perusahaan">Nama Perusahaan:</label>
	                        <div class="col-sm-3">
	                            <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" value="<?php echo $this->session->userdata('nama'); ?>" readonly>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-sm-2" for="desc">Deskripsi Perusahaan:</label>
	                        <div class="col-sm-4">
								<textarea name="desc" size="20px" cols="60px" rows="5px" class="form-control"><?php echo $getdatarekan['DESKRIPSI']?></textarea>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-sm-2" for="status-perusahaan">Status Perusahaan:</label>
	                        <div class="col-sm-6" id="status-perusahaan" style="padding-top: 5px;">
	                            <input type="radio" name="status-perusahaan" value="bumn"> BUMN <br>
	                            <input type="radio" name="status-perusahaan" value="swasta"> SWASTA 
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-sm-2" for="bidang-usaha">Bidang Usaha:</label>
	                        <div class="col-sm-3">
								<input type="text" class="form-control" id="bidang-usaha" name="bidang-usaha" value="<?php echo $getdatarekan['BIDANG_USAHA']?>">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-sm-2" for="status-perusahaan">Skala Perusahaan:</label>
	                        <div class="col-sm-6" id="skala-perusahaan" style="padding-top: 5px;">
	                            <input type="radio" name="skala-perusahaan" value="lokal"> Lokal <br>
	                            <input type="radio" name="skala-perusahaan" value="nasional"> Nasional <br>
	                            <input type="radio" name="skala-perusahaan" value="multinasional"> Multinasional
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-sm-2" for="tb">Tahun Berdiri:</label>
	                        <div class="col-sm-3">
	                            <input type="text" class="form-control" id="tb" name="tb" value="<?php echo $getdatarekan['THN_BERDIRI']?>">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-sm-2" for="jk">Jumlah Karyawan:</label>
	                        <div class="col-sm-3">
	                            <input type="text" class="form-control" id="jk" name="jk" value="<?php echo $getdatarekan['JML_KARYAWAN']?>">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-sm-2" for="kota">Kota:</label>
	                        <div class="col-sm-3">
								<input type="text" class="form-control" id="kota" name="kota" value="<?php echo $getdatarekan['KOTA_REKAN']?>" required="required" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
	                        </div>
	                    </div>
                        <div class="form-group">
	                        <label class="control-label col-sm-2" for="ala">Alamat:</label>
	                        <div class="col-sm-4">
							<textarea name="ala" size="20px" cols="60px" rows="5px" class="form-control"><?php echo $getdatarekan['ALAMAT_REKAN']?></textarea>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-sm-2" for="kp">Kode Pos:</label>
	                        <div class="col-sm-3">
	                            <input type="text" class="form-control" id="kp" name="kp_rekan" value="<?php echo $getdatarekan['KODEPOS']?>">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-sm-2" for="tlp">Nomor Telepon:</label>
	                        <div class="col-sm-3">
	                            <input type="text" class="form-control" id="tlp" name="tlp_rekan" value="<?php echo $getdatarekan['NO_TELP']?>" required="required">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-sm-2" for="fax">Nomor Fax:</label>
	                        <div class="col-sm-3">
	                            <input type="text" class="form-control" id="fax" name="fax_rekan" value="<?php echo $getdatarekan['NO_FAX']?>">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-sm-2" for="email">Email:</label>
	                        <div class="col-sm-3">
	                            <input type="text" class="form-control" id="email" placeholder="namaemail@gmail.com" name="email_rekan" value="<?php echo $getdatarekan['EMAIL']?>" required="required">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-sm-2" for="website">Website:</label>
	                        <div class="col-sm-3">
	                            <input type="text" class="form-control" id="website" placeholder="https://alamatwebsite.co.id" name="website_rekan" value="<?php echo $getdatarekan['WEBSITE']?>">
	                        </div>
	                    </div>
						<h3 style="text-align: left;">Informasi Pabrik Perusahaan</h3>
	            		<div class="form-group">
	                        <label class="control-label col-sm-2" for="negara-pabrik">Negara Pabrik:</label>
	                        <div class="col-sm-3">
								<input type="text" class="form-control" id="negara-pabrik" name="negara-pabrik" value="<?php echo $getdatarekan['NEGARA_PABRIK']?>" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-sm-2" for="kota-pabrik">Kota Pabrik:</label>
	                        <div class="col-sm-3">
								<input type="text" class="form-control" id="kota-pabrik" name="kota-pabrik" value="<?php echo $getdatarekan['KOTA_PABRIK']?>" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-sm-2" for="alamat-pabrik">Alamat Pabrik:</label>
	                        <div class="col-sm-3">
								<textarea name="alamat-pabrik" size="20px" cols="60px" rows="5px" class="form-control"><?php echo $getdatarekan['ALAMAT_PABRIK']?></textarea>
	                        </div>
	                    </div>
						<h3 style="text-align: left;">Informasi Contact Person</h3>
						<div class="form-group">
	                        <label class="control-label col-sm-2" for="namacp">Nama:</label>
	                        <div class="col-sm-3">
	                            <input type="text" class="form-control" id="namacp" name="namacp" value="<?php echo $getdatarekan['NAMA_CP']?>" required="required" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-sm-2" for="jabatancp">Jabatan:</label>
	                        <div class="col-sm-3">
								<input type="text" class="form-control" id="jabatancp" name="jabatancp" value="<?php echo $getdatarekan['JABATAN_CP']?>">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-sm-2" for="emailcp">Email CP:</label>
	                        <div class="col-sm-3">``
	                            <input type="text" class="form-control" id="emailcp" placeholder="namaemail@gmail.com" name="emailcp" value="<?php echo $getdatarekan['EMAIL_CP']?>" required="required">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-sm-2" for="password">Password:</label>
	                        <div class="col-sm-3">
	                            <input type="password" class="form-control" id="password" name="password" value="<?php echo $getdatarekan['PASSWORD']?>" required="required">
	                        </div>
	                    </div>
						<div style="padding: 0px 210px;">
                        	<button type="submit" class="btn btn-primary pull-left">Simpan</button>
                    	</div>
	            	</div>
	            </form>
                    <!-- <div style="padding-left: 300px;">
                        <button type="button" class="btn btn-default pull-left">Batal</button>
                    </div> -->
            <!--penutup div content-->
            </div>
        <!--penutup div wrapper-->
</div>
