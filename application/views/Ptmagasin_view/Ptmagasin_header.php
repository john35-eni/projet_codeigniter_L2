<!DOCTYPE html>
<html >

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title; ?></title> 
    
    
    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!--<link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">-->

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <!--<link href="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">-->
    <!-- datatable -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/DataTables-1.10.24/css/dataTables.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Buttons-1.7.0/css/buttons.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Responsive-2.2.7/css/responsive.bootstrap4.min.css"/>
    <!--<link href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet">-->
    <link href="<?php echo base_url(); ?>assets/css/datepicker/css/bootstrap-datepicker.css" rel="stylesheet">
    <!-- toastr -->
    <link href="<?php echo base_url(); ?>assets/css/toastr.min.css" rel="stylesheet">
    <!-- sweetalert -->
    <link href="<?php echo base_url(); ?>assets/js/sweetalert2/dist/sweetalert2.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Petit magasin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            
             <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>Ptmagasin/commande">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Commandes</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

            

            
            

            
             

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <img src="<?php echo base_url();?>assets/img/floreal1.png" height="80%" width="20%">

                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        
                        
                       

                        
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata("username");?></span>
                                <img class="img-profile rounded-circle"
                                    src="<?php echo base_url();?>upload/<?php echo $this->session->userdata("image");?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 "></i>
                                    Profile
                                </a>
                               <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>-->
                                <!--<a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>-->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 "></i>
                                    Déconnecter
                                </a>
                            </div>
                        </li>

                    </ul>


                </nav>
                <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Voulez-vous déconnecter ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body"><center>Selectionner "<i> <b>Sortir</b></i> " si vous voulez quitter.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Non</button>
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>Login/logout">Sortir</a>
                </div>
            </div>
        </div>
    </div>