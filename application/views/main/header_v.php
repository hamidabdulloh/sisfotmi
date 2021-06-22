<?php

include('datehelper.php');

?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SISFOTMI | Dashboard</title>

    <link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/css/plugins/codemirror/codemirror.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/css/plugins/codemirror/ambiance.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/css/plugins/select2/select2.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">




</head>

<body class="fixed-sidebar no-skin-config full-height-layout">

    <div id="wrapper">

        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <div class="sidebarlogo">
                    <p> SISFO<span>TMI</span></p>
                </div>

                <div class="sidebaruser">
                    <img alt="image" class="rounded-circle" src="<?php echo base_url() ?>/assets/img/profile_small.jpg" />
                    <div class="username">
                        <p class="block">Prof. Dr.
                            Ir.Soekarno, SH</p>
                        <p class="small">Kepala Sekolah</p>

                    </div>
                </div>


                <ul class="nav metismenu" id="side-menu">
                    <li <?= $this->uri->segment(2) == 'dashboard' || $this->uri->segment(2) == '' ? 'class="active"' : '' ?>>
                        <a href="<?= base_url() ?>"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span></a>
                    </li>
                    <li class="<?= $this->uri->segment(2) == 'matapelajaran_c' || $this->uri->segment(2) == 'ruangankelas_c' || $this->uri->segment(2) == 'jenisptk_c' ? 'active' : '' || $this->uri->segment(2) == 'statuskepegawaian_c' ? 'active' : '' ?>">
                        <a href="#"><i class="fa fa-server"></i> <span class="nav-label">Induk Data</span>
                            <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse ">
                            <li <?= $this->uri->segment(2) == 'matapelajaran_c' ? 'class="active"' : '' ?>><a href="<?= base_url() ?>indukdata/matapelajaran_c"><i class="fa fa-caret-right"></i> Mata Pelajaran</a></li>
                            <li <?= $this->uri->segment(2) == 'ruangankelas_c' ? 'class="active"' : '' ?>><a href="<?= base_url() ?>indukdata/ruangankelas_c"><i class="fa fa-caret-right"></i> Ruangan / Kelas</a></li>
                            <li <?= $this->uri->segment(2) == 'jenisptk_c' ? 'class="active"' : '' ?>><a href="<?= base_url() ?>indukdata/jenisptk_c"><i class="fa fa-caret-right"></i> Jenis PTK</a></li>
                            <li <?= $this->uri->segment(2) == 'statuskepegawaian_c' ? 'class="active"' : '' ?>><a href="<?= base_url() ?>indukdata/statuskepegawaian_c"><i class="fa fa-caret-right"></i> Status Kepegawaian</a></li>
                        </ul>
                    </li>
                    <li class="<?= $this->uri->segment(2) == 'guru_c' || $this->uri->segment(2) == 'siswa_c' ? 'active' : '' ?>">
                        <a href=""><i class="fa fa-database"></i> <span class="nav-label">Master Data</span>
                            <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse ">
                            <li <?= $this->uri->segment(2) == 'guru_c' ? 'class="active"' : '' ?>><a href="<?= base_url() ?>masterdata/guru_c"><i class="fa fa-caret-right"></i> Data Guru</a></li>
                            <li <?= $this->uri->segment(2) == 'siswa_c' ? 'class="active"' : '' ?>><a href="<?= base_url() ?>masterdata/siswa_c"><i class="fa fa-caret-right"></i> Data Siswa</a></li>

                        </ul>
                    </li>


                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation">
                    <div class="navbar-header navnav">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i>
                        </a>
                        <div class="small text-white">
                            <i class="fa fa-clock-o text-white"></i>&nbsp;
                            <?php
                            $tanggal = time();
                            date_default_timezone_set('Asia/Jakarta');
                            echo indonesian_date($tanggal, 'l, d F Y') . " <b>‖</b> " .  date('H:i') . " WIB"; ?>
                        </div>

                    </div>
                    <ul class="nav navbar-top-links navbar-right">

                        <li class="dropdown usernav">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <img alt="image" class="rounded-circle img-sm" src="<?php echo base_url() ?>/assets/img/profile_small.jpg" />
                                <div class="nameuser">
                                    <p class="nama">Prof. Dr. Ir.
                                        Soekarno, SH <b class="caret"></b></p>
                                    <p class="jabatan">Kepala Sekolah</p>
                                </div>
                            </a>
                            <ul class="dropdown-menu usernav">
                                <li>
                                    <a href="login.html">
                                        <i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;Profil
                                    </a>
                                </li>
                                <li>
                                    <a href="login.html">
                                        <i class="fa fa-sign-out"></i>&nbsp;&nbsp;Log out
                                    </a>
                                </li>

                            </ul>
                        </li>



                    </ul>

                </nav>
            </div>

            <div class="fh-no-breadcrumb">
                <div class="full-height">
                    <div class=" full-height-scroll border-left">
                        <div class="element-detail-box">
                            <div class="tab-content">
                                <div class="tab-pane active">