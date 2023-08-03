<?= $this->extend('admin/test') ?>

<?= $this->section('judul') ?>

<?= $this->endSection('judul') ?>

<?= $this->section('subjudul') ?>

<?= $this->endSection('subjudul') ?>

<?= $this->section('isi') ?>
<!-- <h5 class="logo-text">Ini Chartnya</h5> -->
<!-- <img src="assets/img/pie.jpg" width="1200px" height="600px"> -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <title>AdminLTE 3 | Flot Charts</title> -->

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/admlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/admlte/dist/css/adminlte.min.css">
</head>

<body>
  <!-- <div class="wrapper"> -->


  <!-- Content Wrapper. Contains page content -->
  <!-- <div class="content-wrapper"> -->


  <!-- Main content -->

  <div class="row">
    <div class="col-6">

      <div id="chart"></div>

      <script>
        var options = {
          chart: {
            type: 'pie',
          },
          series: <?= json_encode($data) ?>,
          labels: <?= json_encode(array_column($data, 'layanan')) ?>,
        };

        var chart = new ApexCharts(document.querySelector('#chart'), options);
        chart.render();
      </script>

    </div>
  </div>




</body>

</html>



<?= $this->endSection('isi') ?>