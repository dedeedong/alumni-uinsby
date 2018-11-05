<!DOCTYPE html>
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


    <script type="text/javascript">var site_url = '<?php echo site_url() ?>';</script>
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
                            <a href="<?php echo base_url();?>base/index"><img class="navbar-brand" src="<?php echo base_url().'assets/image/logo.png'?>"></a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <!--<li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>-->
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $this->session->userdata('nama');?>
                                    <span class="caret"> 
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url();?>careeruinsa/alumni">Data Alumnni</a></li>
                                        <li><a href="<?php echo base_url();?>base/logout" class="logout">Log Out</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Data Tables CDN -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <!-- Style JS -->
    <script type="text/javascript" src="<?php echo base_url().'assets/js/lowongan-style.js'?>"></script>

    <script type="text/javascript" src="<?php echo base_url().'assets/js/lowongan-proses.js'?>"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
