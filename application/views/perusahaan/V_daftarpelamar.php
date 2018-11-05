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
            <div id="content">
            <nav aria-label="breadcrumb">
					<ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>perusahaan/index">Home</a></li>
						<li class="breadcrumb-item"><a href="<?php echo base_url();?>perusahaan/daftarlamaran">Lamaran</a></li>                        
						<li class="breadcrumb-item active" aria-current="page">Daftar Pelamar</li>
					</ol>
				</nav>

                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#info">Detail Daftar Pelamar</a></li>
                </ul>
                <div class="form-group">
                    <div class="tab-content">
                        <div id="info" class="tab-pane fade in active">
                            <table id="tabelinfo" class="table table-bordered table-striped dataTable no-footer" style="width:100%">
                                <div style="padding: 15px;"></div>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Posisi</th>
                                        <th>Nama</th>
                                        <th>Tgl. Apply</th>
                                        <th>Status Lamaran</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php
                                        if($getpelamar->num_rows() > 0){
                                            $var=1;
                                            foreach($getpelamar->result() as $row)
                                            {
        
                                        ?>
                                                <tr>
                                                    <td><?php echo $var?></td>
                                                    <td><?php echo $row->POSISI_LOWONGAN?></td>
                                                    <td><?php echo $row->NAMA?></td>                                                    
                                                    <td><?php echo $row->TGL_APPLY?></td>
                                                    <td><?php echo $row->STATUS_LAMARAN?></td>
                                                    <td><button type="button" id="" class="btn btn-primary">
                                                    <a href="<?php echo base_url();?>perusahaan/detailpelamar/<?php echo $row->ID_LAMARAN;?>">
                                                    Lihat Detail</button>
                                                    <button type="button" id="" class="btn btn-success">
                                                        <a href="<?php echo base_url();?>perusahaan/download/<?php echo $row->DIR_FILE?>">Download
                                                    </button>
                                                    <button type="button" id="" class="btn btn-warning">
                                                        <a href="<?php echo base_url();?>perusahaan/update/<?php echo $row->ID_LAMARAN;?>">Proses
                                                    </button></td>
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
            </div>
       </div> 