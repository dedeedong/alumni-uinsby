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
						<li class="breadcrumb-item active" aria-current="page">Daftar Lowongan</li>
					</ol>
				</nav>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#semua">Semua Lowongan</a></li>
                    <li><a data-toggle="tab" href="#perkota">Lowongan per Kota</a></li>
                    <li><a data-toggle="tab" href="#perposisi">Lowongan per Posisi</a></li>
                    <li><a data-toggle="tab" href="#perprodi">Lowongan per Prodi</a></li>                    
                    <li><a data-toggle="tab" href="#bursakerja" style="display:none;">Lowongan Bursa Kerja</a></li>                    
                </ul>
                <div class="form-group">
                    <div class="tab-content">
                        <div id="semua" class="tab-pane fade in active">
                            <table class="table table-bordered table-striped dataTable no-footer" id ="tabel1" style="width:100%">
                                <div style="padding: 15px;"></div>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Perusahaan</th>
                                        <th>Posisi Lowongan</th>
                                        <th>Tgl. Posting</th>
                                        <th>Tgl. Selesai</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php
                                        if($getsemua->num_rows() > 0){
                                            $var=1;
                                            foreach($getsemua->result() as $row)
                                            {
                                                                
                                        ?>
                                                <tr>
                                                    <td><?php echo $var?></td>
                                                    <td><?php echo $row->NAMA_REKAN?></td>
                                                    <td><?php echo $row->POSISI_LOWONGAN?></td>
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
                        <div id="perkota" class="tab-pane fade">
                            <table id="tabel2" class="table table-bordered table-striped dataTable no-footer" style="width:100%">
                                <div style="padding: 15px;"></div>                                
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kota</th>
                                        <th>Jumlah</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        if($getkota->num_rows() > 0){
                                            $var=1;
                                            foreach($getkota->result() as $row)
                                            {
                                        ?>
                                                <tr>
                                                    <td><?php echo $var?></td>
                                                    <td><?php echo $row->KOTA?></td>
                                                    <td><?php echo $row->jumlah?></td>
                                                    <td>
                                                        <button type="button" id="" class="btn btn-primary">
                                                        <a href="<?php echo base_url();?>careeruinsa/detaillowonganKota/<?php echo $row->KOTA;?>">
                                                        Lihat Detail</button>
                                                    </td>
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
                        <div id="perposisi" class="tab-pane fade">
                                <table id="tabel3" class="table table-bordered table-striped dataTable no-footer" style="width:100%">
                                    <div style="padding: 15px;"></div>                                
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Posisi</th>
                                            <th>Jumlah</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        if($getposisi->num_rows() > 0){
                                            $var=1;
                                            foreach($getposisi->result() as $row)
                                            {
                                                                
                                        ?>
                                                <tr>
                                                    <td><?php echo $var?></td>
                                                    <td><?php echo $row->POSISI_LOWONGAN?></td>
                                                    <td><?php echo $row->jumlah?></td>
                                                    <td>
                                                        <button type="button" type="submit" id="" class="btn btn-primary">
                                                        <a href="<?php echo base_url();?>careeruinsa/detaillowonganPosisi/<?php echo $row->POSISI_LOWONGAN;?>">
                                                        Lihat Detail</button>
                                                    </td>
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
                        <div id="perprodi" class="tab-pane fade">
                                <table id="tabel4" class="table table-bordered table-striped dataTable no-footer" style="width:100%">
                                    <div style="padding: 15px;"></div>                                
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Prodi</th>
                                            <th>Jumlah</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        if($getprodi->num_rows() > 0){
                                            $var=1;
                                            foreach($getprodi->result() as $row)
                                            {
                                                                
                                        ?>
                                                <tr>
                                                    <td><?php echo $var?></td>
                                                    <td><?php echo $row->JURUSAN?></td>
                                                    <td><?php echo $row->jumlah?></td>
                                                    <td>
                                                        <button type="button" type="submit" id="" class="btn btn-primary">
                                                        <a href="<?php echo base_url();?>careeruinsa/detaillowonganProdi/<?php echo $row->JURUSAN;?>">
                                                        Lihat Detail</button>
                                                    </td>
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
                        <div id="bursakerja" class="tab-pane fade" style="display:none;">
                                <table id="tabel5" class="table table-bordered table-striped dataTable no-footer" style="width:100%">
                                    <div style="padding: 15px;"></div>                                
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Perusahaan</th>
                                            <th>Posisi Lowongan</th>
                                            <th>Kota</th>
                                            <th>Tgl.Posting</th>
                                            <th>Tgl. Selesai</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            if($getbursa->num_rows() > 0){
                                                $var=1;
                                                foreach($getbursa->result() as $row)
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
    
       <script> var url_show = '<?php echo base_url('careeruinsa/dataSemuaLowongan')?>'; </script>