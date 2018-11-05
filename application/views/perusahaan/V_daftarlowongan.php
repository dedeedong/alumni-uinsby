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
            <!--penutup div content-->
                <nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?php echo base_url();?>perusahaan/index">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Daftar Lowongan</li>
					</ol>
				</nav>
                    <div class="form-group">
                    <h4>Data Lowongan Yang Diajukan</h4>
                        <button type="button" id="btn-tambah" data-toggle="modal" class="btn btn-success"><a href="<?php echo base_url();?>perusahaan/inputlowongan">
                            <span class="glyphicon glyphicon-plus"></span>&nbsp;Tambah</a>
                        </button>
                    </div>
                    <form class="form-horizontal">
                        <table id="tabel1" class="table table-striped table-bordered dataTable no-footer">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul Lowongan</th>
                                    <th>Tgl.Posting</th>
                                    <th>Tgl. Selesai</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
							   <?php
								if($getdatalowong->num_rows() > 0){
									$var=1;
									foreach($getdatalowong->result() as $row)
									{
								?>
										<tr>
											<td><?php echo $var?></td>
											<td><?php echo $row->POSISI_LOWONGAN?></td>
											<td><?php echo $row->TGL_POSTING?></td>
											<td><?php echo $row->TGL_SELESAI?></td>
											<td><?php echo $row->STATUS_LOWONGAN?></td>
										</tr>
								<?php
								$var++;
								}
								}else{
								?>
									<!-- <tr>
										<td></td>
									</tr> -->
								<?php
								}
							   ?>
                            </tbody>
                        </table>
                    </form>
            <!--penutup div content-->
            </div>
        <!--penutup div wrapper-->
        </div>
