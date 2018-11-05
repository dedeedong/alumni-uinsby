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
                    <li class="active">
                        <a href="<?php echo base_url();?>perusahaan/index">Home</a>
                    </li>
                    <li>
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
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Welcome</a></li>
                </ul>
                      
                <div class="tab-content">
	                <div id="home" class="tab-pane fade in active">
	                    <div class="form-group">
	                    	<h3>IKA-UINSA JOBS CENTER</h3>
	                    </div>
                        <p>
	                    	<b>Cari Kerja Gampang</b>
	                    </p>                        
	                    <p>Website yang diperuntukan bagi para alumni UIN Sunan Ampel Surabaya agar dapat memperoleh pekerjaan yang sesuai dengan mudah.
	                    <br>Silahkan menghubungi pihak UINCARE untuk informasi lebih lanjut.</p>
	                    <p>
	                    	<b>Contact Person IKA-UINSA CAREER CENTER (UINCARE)</b>
	                    </p>
	                    <p>
	                    	Universitas Islam Negeri Sunan Ampel Surabaya
	                    	<br>
	                    	Jl. Achmad Yani 117, Surabaya 60298
	                        <br>
	                        Telp. +62 31 8721731
	                        <br>
	                        Fax. +62 31 8710218
	                        <br>
	                        Email. uincare@uinsby.ac.id
	                    </p>
	                </div>
	            </div>
            <!--penutup div content-->
            </div>
        <!--penutup div wrapper-->
</div>