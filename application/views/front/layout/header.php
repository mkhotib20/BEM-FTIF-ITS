<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>BEM FTIf Semangat Berpadu</title>
    <link href="<?php echo base_url('assets/front/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/front/css/font-awesome.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/front/css/animate.min.css') ?>" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/front/css/normalize.css') ?>">
    <link href="<?php echo base_url('assets/front/css/lightbox.css') ?>" rel="stylesheet"> 
	<link href="<?php echo base_url('assets/front/css/main.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/front/css/responsive.css') ?>" rel="stylesheet">      
    <link rel="shortcut icon" href="<?php echo base_url('assets/front/images/ico/favicon.ico') ?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('assets/front/images/ico/apple-touch-icon-144-precomposed.png') ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('assets/front/images/ico/apple-touch-icon-114-precomposed.png') ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('assets/front/images/ico/apple-touch-icon-72-precomposed.png') ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets/front/images/ico/apple-touch-icon-57-precomposed.png') ?>">
</head>

<body>
	<header id="header">      
        <div class="container">
            <div class="row">
                <div class="col-sm-12 overflow">
                   <div class="social-icons pull-right">
                        <ul class="nav nav-pills">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div> 
                </div>
             </div>
        </div>
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="<?php echo base_url('') ?>">
                    	<h1><img style="height: 70px;" src="<?php echo base_url('assets/front/images/logo1.png') ?>" alt="logo"></h1>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li <?php if($page=='home') {echo 'class="active"';} ?> ><a href="<?php echo base_url('') ?>">Home</a></li>
                        <li <?php if($page=='profil') {echo 'class="active dropdown "';}?> ><a href="#">Profil <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="<?php echo base_url('profil/sambutan') ?>">Sambutan Ketua BEM FTIf</a></li>
                                <li><a href="<?php echo base_url('profil/') ?>">Susunan Kepengurusan</a></li>
                                <li><a href="<?php echo base_url('profil/') ?>">Visi Misi</a></li>   
                                <li><a href="<?php echo base_url('profil/') ?>">Program Kerja</a></li> 
                            </ul>
                        </li>                    
                        <li <?php if($page=='info') {echo 'class="active dropdown "';}?>><a href="blog.html">Info <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="<?php echo base_url('info/artikel') ?>">Artikel</a></li>
                                <li><a href="<?php echo base_url('info/berita') ?>">Berita Terbaru</a></li>
                                <li><a href="<?php echo base_url('info/') ?>">Kegiatan</a></li>
                            </ul>
                        </li>   
                        <li><a href="#hubungi">Hubungi Kami</a></li>                            
                    </ul>
                </div>
                <div class="search">
                    <form role="form">
                        <i class="fa fa-search"></i>
                        <div class="field-toggle">
                            <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>