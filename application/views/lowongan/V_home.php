    <div id="wrapper">
        <!-- SIDEBAR HOLDER -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h4>Main Menu</h4>
            </div>

            <ul class="list-unstyled components">
                <li class="namabar">
                    <a href="<?php echo base_url();?>careeruinsa/cv"><?php echo $this->session->userdata('nama');?></a>
                </li>
                <li class="active">
                    <a href="<?php echo base_url();?>careeruinsa/index">Home</a>
                </li>
                <li>
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
        <div id="content">
            <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Welcome</a></li>
            </ul>
                      
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <h3>IKA-UINSA CAREER CENTER (UINCARE)</h3>
                        <p>Website yang diperuntukan bagi para alumni UIN Sunan Ampel Surabaya agar dapat memperoleh pekerjaan yang sesuai dengan mudah
                            Silahkan menghubungi pihak UINCARE untuk informasi lebih lanjut.</p>
                        <p>Jl. Achmad Yani 117, Surabaya 60298
                            <br>
                            Telp. +62 31 8721731
                            <br>
                            Fax. +62 31 8710218
                            <br>
                            Email. uincare@uinsby.ac.id
                        </p>

                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <h3>Menu 1</h3>
                        <p>Some content in menu 1.</p>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <h3>Menu 2</h3>
                        <p>Some content in menu 2.</p>
                    </div>
                </div>
        </div>
    </div>