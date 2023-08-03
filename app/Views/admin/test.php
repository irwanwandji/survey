<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Survey Kepuasan Layanan</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/admlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="assets/admlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="assets/admlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="assets/admlte/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/admlte/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="assets/admlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="assets/admlte/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="assets/admlte/plugins/summernote/summernote-bs4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="assets/admlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/admlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/admlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/admlte/dist/css/adminlte.min.css">
    <!--favicon-->
    <link rel="icon" href="assets/img/carelogo.png">

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div> -->


        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <!--  <a href="<?= base_url('admin') ?>" class="brand-link">
                <img src="assets/img/carelogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-2" style="opacity: .8">
                <span class="brand-text font-weight-light">Biro Umum | Kemenkes</span>
            </a> -->

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="assets/img/carelogo.png" class="img-circle elevation-3" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="<?= base_url('admin') ?>" class="d-block">Biro Umum | Kemenkes</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->

                        <li class="nav-item">
                            <a href="<?= base_url('daftar') ?>" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Daftar
                                </p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="<?= base_url('chart') ?>" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    ChArt
                                </p>
                            </a>
                        </li> -->

                        <li class="nav-item">
                            <a href="<?= base_url('logOut') ?>" class="nav-link">&nbsp
                                <!-- <i class="fa-solid fa-right-from-bracket"></i> -->
                                <i class="fas fa-sign-out-alt fa-lg"></i>&nbsp
                                <p>
                                    Log Out
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">

            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <?= $this->renderSection('isi') ?>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="footer">
            <div class="container">
                <div class="text-center">
                    Copyright © 2023 | Survey Kepuasan Layanan | Biro Umum | Kemenkes
                </div>
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="assets/admlte/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="assets/admlte/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="assets/admlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="assets/admlte/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="assets/admlte/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="assets/admlte/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="assets/admlte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="assets/admlte/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="assets/admlte/plugins/moment/moment.min.js"></script>
    <script src="assets/admlte/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="assets/admlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="assets/admlte/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="assets/admlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/admlte/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="assets/admlte/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="assets/admlte/dist/js/pages/dashboard.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="assets/admlte/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/admlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/admlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/admlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="assets/admlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/admlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/admlte/plugins/jszip/jszip.min.js"></script>
    <script src="assets/admlte/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="assets/admlte/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="assets/admlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/admlte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="assets/admlte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "buttons": ["excel"]
                // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,
            });
        });
    </script>




    <!-- FLOT CHARTS -->
    <script src="assets/admlte/plugins/flot/jquery.flot.js"></script>
    <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
    <script src="assets/admlte/plugins/flot/plugins/jquery.flot.resize.js"></script>
    <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
    <script src="assets/admlte/plugins/flot/plugins/jquery.flot.pie.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="assets/admlte/dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {


            /*
             * DONUT CHART
             * -----------
             */



            var donutData = [{
                    label: 'Kerumahtanggaan',
                    data: 20,
                    color: '#133C17'
                },
                {
                    label: 'Kearsipan dan Tata Persuratan',
                    data: 40,
                    color: '#0073b7'
                },
                {
                    label: 'Pengamanan',
                    data: 10,
                    color: '#2FC39F'
                },
                {
                    label: 'Pengelolaan Gaji',
                    data: 20,
                    color: '#2FC317'
                },
                {
                    label: 'PDLN',
                    data: 10,
                    color: '#D93C17'
                }
            ]
            $.plot('#donut-chart', donutData, {
                series: {
                    pie: {
                        show: true,
                        radius: 1,
                        innerRadius: 0.5,
                        label: {
                            show: true,
                            radius: 2 / 3,
                            formatter: labelFormatter,
                            threshold: 0.1
                        }

                    }
                },
                legend: {
                    show: false
                }
            })
            /*
             * END DONUT CHART
             */

        })

        /*
         * Custom Label formatter
         * ----------------------
         */
        function labelFormatter(label, series) {
            return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">' +
                label +
                '<br>' +
                Math.round(series.percent) + '%</div>'
        }
    </script>

</body>

</html>