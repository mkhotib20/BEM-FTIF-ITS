<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Area</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/bootstrap/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/dist/css/AdminLTE.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/dist/css/skins/_all-skins.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/iCheck/flat/blue.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/morris/morris.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/datepicker/datepicker3.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/daterangepicker/daterangepicker.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <a href="#" class="logo">
    <span class="logo-mini"><b>A</b></span>
      <span class="logo-lg"><b>Admin</b>AREA</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets/admin/dist/img/user2-160x160.jpg') ?>" class="user-image" alt="User Image">
              <span class="hidden-xs">Administrator</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="<?php echo base_url('assets/admin/dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image">
                <p>
                  Administrator
                  <small>BEM FTIf Semangat Berpadu</small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo base_url('admin/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/admin/dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Administrator</p>
          <a href="#"><i class="fa fa-circle text-warning"></i> Sinyal Lemah</a>
        </div>
      </div>
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li <?php if ($page=='tulis') {echo 'class="active"';} ?> >
          <a href="<?php echo base_url('admin') ?>">
            <i class="fa fa-pencil"></i>
            <span>Tulis </span>
          </a>
        </li>
        <li <?php if ($page=='artikel') {echo 'class="active"';} ?> >
          <a href="<?php echo base_url('admin/artikel') ?>">
            <i class="fa fa-book"></i>
            <span>Artikel</span>
          </a>
        </li>
        <li <?php if ($page=='berita') {echo 'class="active"';} ?> >
          <a href="<?php echo base_url('admin/berita') ?>">
            <i class="fa fa-newspaper-o"></i>
            <span>Berita</span>
          </a>
        </li>
        <li <?php if ($page=='kegiatan') {echo 'class="active"';} ?> >
          <a href="<?php echo base_url('admin/kegiatan') ?>">
            <i class="fa fa-bell"></i>
            <span>Kegiatan</span>
          </a>
        </li>
        <li <?php if ($page=='oprec') {echo 'class="active"';} ?> >
          <a href="<?php echo base_url('admin/oprec') ?>">
            <i class="fa fa-laptop"></i>
            <span>Oprec</span>
          </a>
        </li>
      </ul>
    </section>
  </aside>
