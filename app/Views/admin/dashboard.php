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
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-6">

          <!-- Donut chart -->
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">
                <!-- <i class="far fa-chart-bar"></i> -->
                Dashboard
              </h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div id="donut-chart" style="height: 300px;"></div>
            </div>
            <!-- /.card-body-->
          </div>
          <!-- /.card -->



        </div>
      </div>
      <!-- /.row -->




      <!-- /.col -->
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
  <!-- </div> -->
  <!-- /.content-wrapper -->

  <!-- ./wrapper -->
</body>

</html>



<?= $this->endSection('isi') ?>