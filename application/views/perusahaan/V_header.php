<!-- <!DOCTYPE html> -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UINSA CAREER CENTER</title>

    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/image/favicon.png"
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/lowongan-style.css'?>">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <!-- CDN Data Tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>
    <!-- href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"> -->


    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- select2 -->

    <link href="<?php echo base_url().'assets/css/select2.min.css'?>" rel="stylesheet" />


    <script type="text/javascript">var site_url = '<?php echo site_url() ?>';</script>
    <script type="text/javascript">var base_url = '<?php echo base_url() ?>';</script>
</head>
<body>
        <div class="wrapper">
            <div id="content">

                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <img class="navbar-brand sembarang" src="<?php echo base_url().'assets/image/logo.png'?>">                                                            
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Menu</span>
                            </button>
                        </div>  
                        <div class="navbar-header">
                            <a href="<?php echo base_url();?>"><img class="navbar-brand" src="<?php echo base_url().'assets/image/logo.png'?>"></a>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <!--<li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>-->
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $this->session->userdata('nama'); ?>
                                    <span class="caret"> </span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url();?>perusahaan/daftarperusahaan">Daftar Perusahaan</a></li>
                                        <li><a href="<?php echo base_url();?>base/logout" class="logout">Log Out</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
