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
                    <li>
                        <a href="<?php echo base_url();?>perusahaan/daftarlowongan">Daftar Lowongan</a>
                    </li>
                    <li class="active">
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
						<li class="breadcrumb-item active" aria-current="page">Lamaran</li>
					</ol>
				</nav>

                <form class="form-horizontal">
                <h4>Informasi Pemberitahuan Mengenai Lamaran Yang Diajukan</h4>                
                <div style="padding:10px;"></div>
	                <table id="tabel1" class="table table-striped table-bordered dataTable no-footer">
	                    <div></div>
	                    <thead>
	                        <tr>
	                            <th>No</th>
	                            <th>Nama Perusahaan</th>
	                            <th>Posisi Yang Dilamar</th>
	                            <th>Total Pelamar</th>
	                            <th>Aksi</th>
	                        </tr>
	                    </thead>
	                    <tbody>
                        <tr>
							   <?php
								if($getdatalamar->num_rows() > 0){
									$var=1;
									foreach($getdatalamar->result() as $row)
									{
								?>
										<tr>
											<td><?php echo $var?></td>
                                            <td><?php echo $row->NAMA_REKAN?></td>
											<td><?php echo $row->POSISI_LOWONGAN?></td>
											<td><?php echo $row->jumlah?></td>
											<td><button type="button" id="" class="btn btn-primary">
                                            <a href="<?php echo base_url();?>perusahaan/daftarpelamar/<?php echo $row->ID_LOWONGAN;?>">
                                            Lihat Detail</button></td>
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
	            </form>
            <!--penutup div content-->
            </div>
        <!--penutup div wrapper-->
        </div>