<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="<?php echo base_url().'assets/front-end/img/icon_sw.png'?>" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>SIWARGA</title>

        <!-- Icon css link -->
        <link href="<?php echo base_url().'assets/front-end/vendors/material-icon/css/materialdesignicons.min.css" rel="stylesheet'?>">
        <link href="<?php echo base_url().'assets/front-end/css/font-awesome.min.css'?>" rel="stylesheet">
        <link href="<?php echo base_url().'assets/front-end/vendors/linears-icon/style.css'?>" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="<?php echo base_url().'assets/front-end/css/bootstrap.min.css'?>" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="<?php echo base_url().'assets/front-end/vendors/owl-carousel/assets/owl.carousel.css'?>" rel="stylesheet">
        <link href="<?php echo base_url().'assets/front-end/vendors/animate-css/animate.css'?>" rel="stylesheet">
        
        <link href="<?php echo base_url().'assets/front-end/css/style.css'?>" rel="stylesheet">
        <link href="<?php echo base_url().'assets/front-end/css/style2.css'?>" rel="stylesheet">
        <link href="<?php echo base_url().'assets/front-end/css/responsive.css'?>" rel="stylesheet">
        
        <link rel="stylesheet" href="<?php echo base_url().'assets/front-end/css/colors/default.css'?>" title="default">
        <link rel="alternate stylesheet" href="<?php echo base_url().'assets/front-end/css/colors/orange.css'?>" title="orange">
        <link rel="alternate stylesheet" href="<?php echo base_url().'assets/front-end/css/colors/pink.css'?>" title="pink">
        <link rel="alternate stylesheet" href="<?php echo base_url().'assets/front-end/css/colors/violet.css'?>" title="violet">
        <link rel="alternate stylesheet" href="<?php echo base_url().'assets/front-end/css/colors/blue.css'?>" title="blue">
        <link rel="alternate stylesheet" href="<?php echo base_url().'assets/front-end/css/colors/past.css'?>" title="past">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="light_bg" data-spy="scroll" data-target="#bs-example-navbar-collapse-1" data-offset="80" data-scroll-animation="true">
       
        <div id="preloader">
            <div id="preloader_spinner">
                <div class="spinner"></div>
            </div>
        </div>
        
        <!--================ Frist hader Area =================-->
        <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html"><img src="<?php echo base_url().'assets/front-end/img/dd.png'?>" width= "25%" alt=""></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <!-- <li><a href="#portfolio">PROFIL DESA</a></li> -->
                            <li><a href="<?php echo base_url().'Siwarga_fe/'?>">WARGA</a></li>
                            <li><a href="<?php echo base_url().'Siwarga_fe/tampil_perangkat'?>">PERANGKAT DESA</a></li>
                            <li><a href="<?php echo base_url().'Siwarga_fe/tampil_login'?>">LOGIN</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </div>
        </header>
        <!--================End Footer Area =================-->