<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pengajuan Surat Ijin Magang, Penelitian, dan Pinjam Alat</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>asset/css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo base_url(); ?>asset/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>asset/css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url(); ?>asset/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>asset/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="<?php echo base_url(); ?>asset/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url(); ?>asset/css/dataTables/dataTables.responsive.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Pengajuan Surat Ijin</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="<?php echo base_url();?>index.php/ijin_magang"><i class="fa fa-group fa-fw"></i> Surat Ijin Magang</a></li>
            <li><a href="<?php echo base_url();?>index.php/ijin_penelitian"><i class="fa fa-book fa-fw"></i> Surat Ijin Penelitian</a></li>
            <li><a href="<?php echo base_url();?>index.php/ijin_pinjam_alat"><i class="fa fa-wrench fa-fw"></i> Surat Ijin Pinjam Alat</a></li>
            <li><a href="<?php echo base_url();?>index.php/uji_sample"><i class="fa fa-wrench fa-fw"></i> Surat Ijin Uji Sample</a></li>
            <li><a href="<?php echo base_url();?>index.php/ijin_akses_lab"><i class="fa fa-wrench fa-fw"></i> Surat Ijin Akses Lab</a></li>
        </ul>

        <!-- Top Navigation: Right Menu -->
      

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Daftar Pengajuan<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url();?>index.php/ijin_magang">Surat Ijin Magang</a>
                                <a href="<?php echo base_url();?>index.php/ijin_penelitian">Surat Ijin Penelitian</a>
                                <a href="<?php echo base_url();?>index.php/ijin_pinjam_alat">Surat Ijin Pinjam Alat</a>
                                <a href="<?php echo base_url();?>index.php/uji_sample">Surat Ijin Uji Sample</a>
                                <a href="<?php echo base_url();?>index.php/ijin_akses_lab">Surat Ijin Akses Lab</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
