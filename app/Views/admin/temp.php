<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Survey Kepuasan</title>
    <!-- loader-->
    <!-- <link href="assets/dm/assets/css/pace.min.css" rel="stylesheet" /> -->
    <!-- <script src="assets/dm/assets/js/pace.min.js"></script> -->
    <!--favicon-->
    <link rel="icon" href="assets/img/carelogo.png" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="assets/dm/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- simplebar CSS-->
    <link href="assets/dm/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="assets/dm/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="assets/dm/assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="assets/dm/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="assets/dm/assets/css/sidebar-menu.css" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="assets/dm/assets/css/app-style.css" rel="stylesheet" />

    <!-- AdmLTE CHART JS CHART -->
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/admlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <!-- <link rel="stylesheet" href="assets/admlte/dist/css/adminlte.min.css"> -->

    <!-- ChartJS -->
    <script src="assets/admlte/plugins/chart.js/Chart.min.js"></script>

    <!-- DataTables -->
    <link rel="stylesheet" href="assets/admlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/admlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/admlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<body class="bg-theme bg-theme1">
    <!-- Start wrapper-->
    <div id="wrapper">
        <!--Start sidebar-wrapper-->
        <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
            <div class="brand-logo">
                <a href="<?= base_url('admin') ?>">
                    <img src="assets/img/carelogo.png" class="logo-icon" alt="logo icon">
                    <h5 class="logo-text">Biro Umum | Kemenkes</h5>
                </a>
            </div>
            <ul class="sidebar-menu do-nicescrol">
                <li class="sidebar-header">MENU</li>
                <li>
                    <a href="<?= base_url('daftar') ?>">
                        <i class="zmdi zmdi-view-dashboard"></i> <span>Daftar Survey</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('pie') ?>">
                        <i class="zmdi zmdi-view-dashboard"></i> <span>PIE</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('logOut') ?>" target="_blank">
                        <i class="zmdi zmdi-account-circle"></i> <span>Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <!--End sidebar-wrapper-->
        <!--Start topbar header-->
        <header class="topbar-nav">
            <nav class="navbar navbar-expand fixed-top">
                <ul class="navbar-nav mr-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link toggle-menu" href="javascript:void();">
                            <i class="icon-menu menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <form class="search-bar">
                            <input type="text" class="form-control" placeholder="Enter keywords">
                            <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                        </form>
                    </li>
                </ul>
                <ul class="navbar-nav align-items-center right-nav-link">
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                            <span class="user-profile"><img src="assets/img/carelogo.png" class="logo-icon" alt="logo icon"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item user-details">
                                <a href="javaScript:void();">
                                    <div class="media">
                                        <div class="avatar"><img src="assets/img/carelogo.png" class="logo-icon" alt="logo icon"></div>
                                        <div class="media-body">
                                            <h6 class="mt-2 user-title">Administrator Survey Layanan</h6>
                                            <p class="user-subtitle">roum.kemkes@kemkes.go.id</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <!--End topbar header-->
        <div class="content-wrapper">
            <div class="container-fluid">
                <?= $this->renderSection('isi'); ?>
                <div class="overlay toggle-menu"></div>
            </div>
            <!-- End container-fluid-->
        </div>
        <!--End content-wrapper-->
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->
        <!--Start footer-->
        <footer class="footer">
            <div class="container">
                <div class="text-center">
                    Copyright © 2023 | Survey Kepuasan Layanan | Biro Umum | Kemenkes
                </div>
            </div>
        </footer>
        <!--End footer-->
        <!--start color switcher-->
        <div class="right-sidebar">
            <div class="switcher-icon">
                <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
            </div>
            <div class="right-sidebar-content">
                <p class="mb-0">Gaussion Texture</p>
                <hr>
                <ul class="switcher">
                    <li id="theme1"></li>
                    <li id="theme2"></li>
                    <li id="theme3"></li>
                    <li id="theme4"></li>
                    <li id="theme5"></li>
                    <li id="theme6"></li>
                </ul>
                <p class="mb-0">Gradient Background</p>
                <hr>
                <ul class="switcher">
                    <li id="theme7"></li>
                    <li id="theme8"></li>
                    <li id="theme9"></li>
                    <li id="theme10"></li>
                    <li id="theme11"></li>
                    <li id="theme12"></li>
                    <li id="theme13"></li>
                    <li id="theme14"></li>
                    <li id="theme15"></li>
                </ul>
            </div>
        </div>
        <!--end color switcher-->
    </div><!--End wrapper-->



</body>

</html>