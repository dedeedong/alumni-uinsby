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
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>careeruinsa/index">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>careeruinsa/alumni">Data Alumni</a></li>                        
					<li class="breadcrumb-item"><a href="<?php echo base_url();?>careeruinsa/riwayatkerja">Tambah Riwayat Kerja</a></li>                                            
					<li class="breadcrumb-item active" aria-current="page">Tambah Perusahaan Baru</li>
				</ol>
			</nav>

            <form class="form-horizontal" action="<?php echo site_url(); ?>/careeruinsa/savePerusahaan" method="post">
			
			<div class="form-group">

                    <label class="control-label col-sm-2" for="np">Nama Perusahaan</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="np" name="np">
                    </div>
                </div>
				
				<div class="form-group">
                            <label class="control-label col-sm-2" for="sp">Status Perusahaan</label>
                            <div class="col-sm-6" style="padding-top: 5px;">
                                <input type="radio" name="sp" id="sp" value="BUMN"> BUMN<br>
                                <input type="radio" name="sp" id="sp" value="Swasta" checked="checked"> Swasta
                                
                            </div>
                        </div>
				
				
                 <div class="form-group">
                            <label class="control-label col-sm-2" for="bu">Bidang Usaha:</label>
                            <div class="col-sm-4">
                            <input type="text" class="form-control" id="bu" name="bu">
                            </div>
                        </div> 


						<div class="form-group">
                            <label class="control-label col-sm-2" for="skala">Skala Perusahaan</label>
                            <div class="col-sm-6" style="padding-top: 5px;">
                                <input type="radio" name="skala" id="skala" value="Lokal"> Lokal<br>
                                <input type="radio" name="skala" id="skala" value="Nasional"> Nasional<br>
								<input type="radio" name="skala" id="skala" value="Multinasional"> Multinasional
                                
                            </div>
                        </div>
						
						<div class="form-group">
                            <label class="control-label col-sm-2" for="alamat">Alamat</label>
                            <div class="col-sm-4">
                                <textarea name="alamat" rows="10" cols="50"></textarea>
                            </div>
                        </div>
					
					
					<div class="form-group">
                            <label class="control-label col-sm-2" for="kota">Kota</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="kota" name="kota">  
                            </div>
                        </div>
					
                <div class="form-group">

                    <label class="control-label col-sm-2" for="kp">Kode Pos</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="kp" name="kp">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="nt">Nomor Telephone</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="nt" name="nt">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="nf">Nomor Fax</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="nf" name="nf">
                    </div>
                </div>
				
				<div class="form-group">
				<label class="control-label col-sm-2" for="email">Email</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                </div>
				
				
                <div class="modal-footer" style="margin-right: 69%">
                    <button type="submit" class="btn btn-primary"  id="btn-simpan" style="margin-right: 2%">Simpan</button>
                    <a href="alumni.html"><button type="button" class="btn btn-default" data-dismiss="modal">Batal</button></a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>