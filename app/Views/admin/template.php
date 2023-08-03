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

  <!-- DataTables -->
  <link rel="stylesheet" href="assets/admlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/admlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/admlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<body class="bg-theme bg-theme2">
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

  <!-- Bootstrap core JavaScript-->
  <script src="assets/dm/assets/js/jquery.min.js"></script>
  <script src="assets/dm/assets/js/popper.min.js"></script>
  <script src="assets/dm/assets/js/bootstrap.min.js"></script>

  <!-- simplebar js -->
  <script src="assets/dm/assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/dm/assets/js/sidebar-menu.js"></script>
  <!-- loader scripts -->
  <script src="assets/dm/assets/js/jquery.loading-indicator.js"></script>
  <!-- Custom scripts -->
  <script src="assets/dm/assets/js/app-script.js"></script>
  <!-- Chart js -->
  <!-- <script src="assets/dm/assets/plugins/Chart.js/Chart.min.js"></script> -->

  <!-- Index js -->
  <script src="assets/dm/assets/js/index.js"></script>

  <!-- jQuery -->
  <script src="assets/admlte/plugins/jquery/jquery.min.js"></script>
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
  <!-- AdminLTE App -->
  <script src="assets/admlte/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="assets/admlte/dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": false,
        "lengthChange": true,
        "autoWidth": true,
        "buttons": ["excel", "pdf"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": true,
      });
    });
  </script>

  <!-- ChartJS INTERACTIVE-->
  <script src="assets/admlte/plugins/chart.js/Chart.min.js"></script>

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
       * Flot Interactive Chart
       * -----------------------
       */
      // We use an inline data source in the example, usually data would
      // be fetched from a server
      var data = [],
        totalPoints = 100

      function getRandomData() {

        if (data.length > 0) {
          data = data.slice(1)
        }

        // Do a random walk
        while (data.length < totalPoints) {

          var prev = data.length > 0 ? data[data.length - 1] : 50,
            y = prev + Math.random() * 10 - 5

          if (y < 0) {
            y = 0
          } else if (y > 100) {
            y = 100
          }

          data.push(y)
        }

        // Zip the generated y values with the x values
        var res = []
        for (var i = 0; i < data.length; ++i) {
          res.push([i, data[i]])
        }

        return res
      }

      var interactive_plot = $.plot('#interactive', [{
        data: getRandomData(),
      }], {
        grid: {
          borderColor: '#f3f3f3',
          borderWidth: 1,
          tickColor: '#f3f3f3'
        },
        series: {
          color: '#3c8dbc',
          lines: {
            lineWidth: 2,
            show: true,
            fill: true,
          },
        },
        yaxis: {
          min: 0,
          max: 100,
          show: true
        },
        xaxis: {
          show: true
        }
      })

      var updateInterval = 500 //Fetch data ever x milliseconds
      var realtime = 'on' //If == to on then fetch data every x seconds. else stop fetching
      function update() {

        interactive_plot.setData([getRandomData()])

        // Since the axes don't change, we don't need to call plot.setupGrid()
        interactive_plot.draw()
        if (realtime === 'on') {
          setTimeout(update, updateInterval)
        }
      }

      //INITIALIZE REALTIME DATA FETCHING
      if (realtime === 'on') {
        update()
      }
      //REALTIME TOGGLE
      $('#realtime .btn').click(function() {
        if ($(this).data('toggle') === 'on') {
          realtime = 'on'
        } else {
          realtime = 'off'
        }
        update()
      })
      /*
       * END INTERACTIVE CHART
       */


      /*
       * LINE CHART
       * ----------
       */
      //LINE randomly generated data

      var sin = [],
        cos = []
      for (var i = 0; i < 14; i += 0.5) {
        sin.push([i, Math.sin(i)])
        cos.push([i, Math.cos(i)])
      }
      var line_data1 = {
        data: sin,
        color: '#3c8dbc'
      }
      var line_data2 = {
        data: cos,
        color: '#00c0ef'
      }
      $.plot('#line-chart', [line_data1, line_data2], {
        grid: {
          hoverable: true,
          borderColor: '#f3f3f3',
          borderWidth: 1,
          tickColor: '#f3f3f3'
        },
        series: {
          shadowSize: 0,
          lines: {
            show: true
          },
          points: {
            show: true
          }
        },
        lines: {
          fill: false,
          color: ['#3c8dbc', '#f56954']
        },
        yaxis: {
          show: true
        },
        xaxis: {
          show: true
        }
      })
      //Initialize tooltip on hover
      $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
        position: 'absolute',
        display: 'none',
        opacity: 0.8
      }).appendTo('body')
      $('#line-chart').bind('plothover', function(event, pos, item) {

        if (item) {
          var x = item.datapoint[0].toFixed(2),
            y = item.datapoint[1].toFixed(2)

          $('#line-chart-tooltip').html(item.series.label + ' of ' + x + ' = ' + y)
            .css({
              top: item.pageY + 5,
              left: item.pageX + 5
            })
            .fadeIn(200)
        } else {
          $('#line-chart-tooltip').hide()
        }

      })
      /* END LINE CHART */

      /*
       * FULL WIDTH STATIC AREA CHART
       * -----------------
       */
      var areaData = [
        [2, 88.0],
        [3, 93.3],
        [4, 102.0],
        [5, 108.5],
        [6, 115.7],
        [7, 115.6],
        [8, 124.6],
        [9, 130.3],
        [10, 134.3],
        [11, 141.4],
        [12, 146.5],
        [13, 151.7],
        [14, 159.9],
        [15, 165.4],
        [16, 167.8],
        [17, 168.7],
        [18, 169.5],
        [19, 168.0]
      ]
      $.plot('#area-chart', [areaData], {
        grid: {
          borderWidth: 0
        },
        series: {
          shadowSize: 0, // Drawing is faster without shadows
          color: '#00c0ef',
          lines: {
            fill: true //Converts the line chart to area chart
          },
        },
        yaxis: {
          show: false
        },
        xaxis: {
          show: false
        }
      })

      /* END AREA CHART */

      /*
       * BAR CHART
       * ---------
       */

      var bar_data = {
        data: [
          [1, 10],
          [2, 8],
          [3, 4],
          [4, 13],
          [5, 17],
          [6, 9]
        ],
        bars: {
          show: true
        }
      }
      $.plot('#bar-chart', [bar_data], {
        grid: {
          borderWidth: 1,
          borderColor: '#f3f3f3',
          tickColor: '#f3f3f3'
        },
        series: {
          bars: {
            show: true,
            barWidth: 0.5,
            align: 'center',
          },
        },
        colors: ['#3c8dbc'],
        xaxis: {
          ticks: [
            [1, 'January'],
            [2, 'February'],
            [3, 'March'],
            [4, 'April'],
            [5, 'May'],
            [6, 'June']
          ]
        }
      })
      /* END BAR CHART */

      /*
       * DONUT CHART
       * -----------
       */

      var donutData = [{
          label: 'Series2',
          data: 30,
          color: '#3c8dbc'
        },
        {
          label: 'Series3',
          data: 20,
          color: '#0073b7'
        },
        {
          label: 'Series4',
          data: 50,
          color: '#00c0ef'
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