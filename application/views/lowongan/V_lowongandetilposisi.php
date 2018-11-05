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
						<li class="breadcrumb-item active" aria-current="page">Detail Daftar Posisi</li>
					</ol>
				</nav>

                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#info">Detail Daftar Lowongan Posisi</a></li>
                </ul>
                <div class="form-group">
                    <div class="tab-content">
                        <div id="info" class="tab-pane fade in active">
                            <table id="tabelinfo" class="table table-bordered table-striped dataTable no-footer" style="width:100%">
                                <div style="padding: 15px;"></div>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Perusahaan</th>
                                        <th>Judul Lowongan</th>
                                        <th>Kota</th>
                                        <th>Tgl. Posting</th>
                                        <th>Tgl. Selesai</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                            <?php
                                            if(count($getposisi)){
                                                $var=1;
                                                foreach($getposisi as $row)
                                                {
                                                                    
                                            ?>
                                                    <tr>
                                                        <td><?php echo $var?></td>
                                                        <td><?php echo $row->NAMA_REKAN?></td>
                                                        <td><?php echo $row->POSISI_LOWONGAN?></td>
                                                        <td><?php echo $row->KOTA?></td>
                                                        <td><?php echo $row->TGL_POSTING?></td>
                                                        <td><?php echo $row->TGL_SELESAI?></td>
                                                        <td><button type="button" id="" class="btn btn-primary">
                                                        <a href="<?php echo base_url();?>careeruinsa/detail/<?php echo $row->ID_LOWONGAN;?>">
                                                        Lihat Detail</button></td>
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
            </div>
       </div> 