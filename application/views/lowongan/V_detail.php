
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="logo.png"/>


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
						<li class="breadcrumb-item active" aria-current="page">Detail Lowongan</li>
					</ol>
				</nav>
                <form action="<?php echo site_url(); ?>/careeruinsa/saveLamaran/<?php echo $getlowo['ID_LOWONGAN']?>" method="post" role="form" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="imageupload panel panel-default">
                            <div class="panel-heading clearfix">
                                Upload Dokumen
                                <input type="file" id="dokumen" name="berkas1" accept="image/png, image/jpg, image/jpeg, file/pdf, file/doc, file/docx" required="required"/>
                            </div>
                            <div class="panel-heading clearfix">
                                Upload Surat Ijazah
                                <input type="file" id="ijazah" name="berkas2" accept="image/png, image/jpg, image/jpeg, file/pdf, file/doc, file/docx" required="required"/>
                            </div>
                            <div class="panel-heading clearfix">
                                Upload Transkrip Nilai
                                <input type="file" id="transkrip" name="berkas3" accept="image/png, image/jpg, image/jpeg, file/pdf, file/doc, file/docx" required="required"/>
                            </div>
                            <div class="panel-heading clearfix">
                                <button type="submit" id="submit" class="btn btn-success">
                                Submit</button>
                            </div>

                        </div>
                    </div>
                </form>

                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#infolowongan">Informasi Perusahaan</a></li>
                    <li><a data-toggle="tab" href="#detailkebutuhan">Informasi Lowongan</a></li>
                </ul>
                <div class="tab-content">

                    <div id="infolowongan" class="tab-pane fade in active">
                        <form class="form-horizontal">
                            <h2>Informasi Perusahaan</h2>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Nama Perusahaan</label>
                                <div class="col-sm-4">
                                <input type="text" class="form-control" id="namaperusahaan" readonly="readonly" value="<?php echo $getlowo['NAMA_REKAN']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Deskripsi Perusahaan</label>
                                <div class="col-sm-4">
                                <!-- <input type="textarea" class="form-control" id="posisi" readonly="readonly"> -->
                                <textarea name="" id="descperusahaan" cols="51" rows="5" readonly="readonly"><?php echo $getsemua['DESKRIPSI']?>"</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Alamat Perusahaan</label>
                                <div class="col-sm-4">
                                <!-- <input type="textarea" class="form-control" id="posisi" readonly="readonly"> -->
                                <textarea name="" id="alamatperusahaan" cols="51" rows="5" readonly="readonly"><?php echo $getsemua['ALAMAT_REKAN']?>"</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Lokasi Perusahaan</label>
                                <div class="col-sm-4">
                                <input type="text" class="form-control" id="lokasiperusahaan" readonly="readonly" value="<?php echo $getsemua['KOTA_REKAN']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Bidang Usaha</label>
                                <div class="col-sm-4">
                                <input type="text" class="form-control" id="bidangusaha" readonly="readonly" value="<?php echo $getsemua['BIDANG_USAHA']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Website</label>
                                <div class="col-sm-4">
                                <input type="text" class="form-control" id="website" readonly="readonly" value="<?php echo $getsemua['WEBSITE']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Email</label>
                                <div class="col-sm-4">
                                <input type="text" class="form-control" id="email" readonly="readonly" value="<?php echo $getsemua['EMAIL']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Nama CP</label>
                                <div class="col-sm-4">
                                <input type="text" class="form-control" id="namacp" readonly="readonly" value="<?php echo $getsemua['NAMA_CP']?>">
                                </div>
                            </div>                 
                    </div>
                    <div id="detailkebutuhan" class="tab-pane fade active">
                        <h2>Informasi Lowongan</h2>
                            <div class="form-group">
                                <label class="control-label d-inline-flex p-2">Posisi yang Ditawarkan</label>
                                <div class="align-self-center">
                                <input type="text" class="form-control" id="posisi" readonly="readonly" value="<?php echo $getlowo['POSISI_LOWONGAN']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label d-inline-flex p-2">Jurusan</label>
                                <div class="d-inline-flex p-2">
                                <input type="text" class="form-control" id="jurusan" readonly="readonly" value="<?php echo $getlowo['JURUSAN']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label d-inline-flex p-2">Hard Skill</label>
                                <div class="d-inline-flex p-2">
                                <input type="text" class="form-control" id="jurusan" readonly="readonly" value="<?php echo $getlowo['HARDSKILL']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label d-inline-flex p-2">Soft Skill</label>
                                <div class="d-inline-flex p-2">
                                <input type="text" class="form-control" id="jurusan" readonly="readonly" value="<?php echo $getlowo['SOFTSKILL']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label d-inline-flex p-2">Kemampuan Bahasa</label>
                                <div class="d-inline-flex p-2">
                                <input type="text" class="form-control" id="jurusan" readonly="readonly" value="<?php echo $getlowo['BHSSKILL']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label d-inline-flex p-2">IPK Minimum</label>
                                <div class="d-inline-flex p-2">
                                <input type="text" class="form-control" id="ipk" readonly="readonly" value="<?php echo $getlowo['IPK_MINIMUM']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label d-inline-flex p-2">Gender</label>
                                <div class="d-inline-flex p-2">
                                <input type="text" class="form-control" id="gender" readonly="readonly" value="<?php echo $getlowo['GENDER']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label d-inline-flex p-2">Batasan Usia</label>
                                <div class="d-inline-flex p-2">
                                <input type="text" class="form-control" id="batasanusia" readonly="readonly" value="<?php echo $getlowo['BATASAN_USIA']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label d-inline-flex p-2">Pengalaman Kerja</label>
                                <div class="d-inline-flex p-2">
                                <input type="text" class="form-control" id="pengalaman" readonly="readonly" value="<?php echo $getlowo['PENGALAMAN_KERJA']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label d-inline-flex p-2">Jam Kerja</label>
                                <div class="d-inline-flex p-2">
                                <input type="text" class="form-control" id="jamkerja" readonly="readonly" value="<?php echo $getlowo['JAM_KERJA']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label d-inline-flex p-2">Status Pernikahan</label>
                                <div class="d-inline-flex p-2">
                                <input type="text" class="form-control" id="statuspernikahan" readonly="readonly" value="<?php echo $getlowo['STATUS_PERNIKAHAN']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label d-inline-flex p-2">Tanggal Posting</label>
                                <div class="d-inline-flex p-2">
                                <input type="text" class="form-control" id="tglposting" readonly="readonly" value="<?php echo $getlowo['TGL_POSTING']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label d-inline-flex p-2">Batas Akhir</label>
                                <div class="d-inline-flex p-2">
                                <input type="text" class="form-control" id="batasakhir" readonly="readonly" value="<?php echo $getlowo['TGL_SELESAI']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label d-inline-flex p-2">Keterangan Lowongan</label>
                                <div class="d-inline-flex p-2">
                                <textarea name="" id="ketlowongan" cols="51" rows="5" readonly="readonly"><?php echo $getlowo['KETERANGAN_LOWONGAN']?></textarea>
                                </div>
                            </div>
                    <!-- <h3>Kebutuhan Hard Skill</h3>
						<div style="padding:5px;"></div>
						<table class="table table-bordered table-striped dataTable no-footer" id ="tablehardskill" style="width:100%">
							<thead>
								<tr>
									<th>No</th>
									<th>Hardskill</th>
									<th>Tingkat Kemampuan</th>
								</tr>
							</thead>
							<tbody>

							</tbody>
						</table>
					<h3>Kebutuhan Soft Skill</h3>
						<div style="padding:5px;"></div>
						<table class="table table-bordered table-striped dataTable no-footer" id ="tablesoftskill" style="width:100%">
							<thead>
								<tr>
									<th>No</th>
									<th>Tipe SoftSkill</th>
								</tr>
							</thead>
							<tbody>

							</tbody>
						</table>

					<h3>Kebutuhan Language Skill</h3>
						<div style="padding:5px;"></div>
						<table class="table table-bordered table-striped dataTable no-footer" id ="tablebahasa" style="width:100%">
							<thead>
								<tr>
									<th>No</th>
									<th>Bahasa</th>
									<th>Kemampuan</th>
								</tr>
							</thead>
							<tbody>

							</tbody>
						</table> -->
                    </div>
                </div>
            </div>
       </div>


    </body>
</html>
