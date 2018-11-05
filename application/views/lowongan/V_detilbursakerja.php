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
                    <li>
                        <a href="<?php echo base_url();?>careeruinsa/cv">Curriculum Vitae</a>
                    </li>
                    <li class="active">
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
						<li class="breadcrumb-item"><a href="<?php echo base_url();?>careeruinsa/index">Home</a></li>
						<li class="breadcrumb-item"><a href="<?php echo base_url();?>careeruinsa/lowongan">Daftar Lowongan</a></li>
						<li class="breadcrumb-item active" aria-current="page">Detail Bursa Kerja</li>
					</ol>
				</nav>

                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#info">Detail Bursa Kerja</a></li>
                </ul>
                <div class="form-group">
                    <div class="tab-content">
                        <div id="info" class="tab-pane fade in active">
                            <table id="tabelinfo" class="stripe" style="width:100%">
                                <div style="padding: 15px;"></div>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Perusahaan</th>
                                        <th>Judul Lowongan</th>
                                        <th>Tgl. Posting</th>
                                        <th>Tgl. Selesai</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>                                    
                                        <td>PT. MILLENIA</td>                                    
                                        <td>WEB DESIGNER</td>                                    
                                        <td>29/07/2018</td>                                    
                                        <td>31/07/2018</td>                                    
                                        <td>Lihat Detail</td>                                    
                                    </tr>
                                </tbody>
                            </table>
                        </div> 
                    </div>
                </div>
            </div>
       </div> 