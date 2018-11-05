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
					<li class="breadcrumb-item active" aria-current="page">Tambah Riwayat Kerja</li>
				</ol>
			</nav>

            <form class="form-horizontal" action="<?php echo site_url(); ?>/careeruinsa/saveKerjaAkhir" method="post">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="np">Nama Perusahaan</label>
                    <div class="col-sm-4">
                        <input class="form-control" id="np" type="text" name="np" spellcheck="false">
                    </div>
                </div>
                <div class="form-group">

                    <label class="control-label col-sm-2" for="posisi">Posisi</label>
                    <div class="col-sm-4">
                    <input class="form-control" id="np" type="text" name="posisi">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="tm">Tahun Masuk</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="tm" name="tm">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="tk">Tahun Keluar</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="tk" name="tk">
                    </div>
                </div>
                <div style="margin: 0 0 0 17%;">
                <a href="<?php echo base_url();?>careeruinsa/tambahperusahaan"><u>Tambah Perusahaan Baru</u></a>
                </div>
                <div class="modal-footer" style="margin-right: 69%">
                    <button type="submit" class="btn btn-primary"  id="btn-simpan" style="margin-right: 2%">Simpan</button>
                    <a href="<?php echo base_url();?>careeruinsa/alumni"><button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button></a>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript">
			var tm = $('#tm').datepicker({ dateFormat: 'yy' }).val();
            var tk = $('#tk').datepicker({ dateFormat: 'yy' }).val();
    </script>
</body>
</html>
