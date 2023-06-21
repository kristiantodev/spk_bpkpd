<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>SPK Metode SMART</title>

   <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/logo.png">

    <!-- jquery.vectormap css -->
    <link href="<?= base_url('assets/')?>libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="<?= base_url('assets/')?>css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?= base_url('assets/')?>css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?= base_url('assets/')?>css/app.css" id="app-style" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url();?>assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">

    
    <!-- DataTables -->
    <link href="<?= base_url('assets/')?>libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/')?>libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="<?= base_url('assets/')?>libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

</head>

<body data-layout="detached" data-topbar="colored">

    <div class="container-fluid">
        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="container-fluid">
                        <div class="float-right">
                            <div class="dropdown d-inline-block d-lg-none ml-2">
                                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-magnify"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-search-dropdown">

                                    <form class="p-3">
                                        <div class="form-group m-0">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>



                         <div class="d-inline-block">
                               
                                   
                                    </font> </span>
                         
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-notifications-dropdown">
                                    <div class="p-3">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-0"> Pemberitahuan </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-simplebar style="max-height: 230px;">

                                       
                                            

        
                                        
                                    </div>
                                    <div class="p-2 border-top">
                                        <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="<?php echo base_url().$link.'/notifikasi'?>">
                                            <i class="mdi mdi-arrow-right-circle mr-1"></i> Lihat Semua...
                                        </a>
                                    </div>
                                </div>
                            </div>

                   <!--   <div class="dropdown d-inline-block mt-3">
                                <a href="<?= base_url('login/logout')?>" class="btn btn-success btn-sm waves-effect waves-light" onclick="return confirm('Apakah anda ingin logout?')">
                                  <i class="bx bx-power-off"> Logout</i>
                                </a>
                    </div> -->
                        </div>
                        <div>
                            <!-- LOGO -->
                            <div class="navbar-brand-box">
                                <center>
                                <a href="#" class="logo logo-light">
                                    <img src="<?php echo base_url();?>assets/images/logo.png" alt="" height="75">
                                </a>
                                </center>
                            </div>
                        </div>
                        <marquee align="center" width="60%">
                          <h4 class="mt-4 text-white">
                            SISTEM PENDUKUNG KEPUTUSAN DINAS BPKPD KOTA CIREBON 
                          </h4>
                        </marquee>
                    </div>
                </div>
            </header> 