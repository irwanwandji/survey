<?= $this->extend('admin/test') ?>

<?= $this->section('judul') ?>

<?= $this->endSection('judul') ?>

<?= $this->section('subjudul') ?>

<?= $this->endSection('subjudul') ?>

<?= $this->section('isi') ?>
<!-- <h5 class="logo-text">Ini Chartnya</h5> -->
<!-- <img src="assets/img/pie.jpg" width="1200px" height="600px"> -->

<!-- app/Views/chart.php -->

<!DOCTYPE html>
<html>

<head>
  <title>Donut Chart</title>
  <!-- Tambahkan link CSS Bootstrap -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Tambahkan library Chart.js -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
  <script src="assets/admlte/plugins/chart.js/Chart.js"></script>
</head>



<body>
  <center>

    <!-- <div class="container-fluid"> -->
    <!-- <div class="row"> -->
    <div class="col-6">
      <p style="font-family: Helvetica, sans-serif;">
      <h4>Rekapitulasi</h4>
      <h3>Responden Survey Kepuasan Layanan</h3>
      <h4>Biro Umum</h4>
      </p>


      <div class="card">
        <!-- <div class="card-header"> -->
        <!-- <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div> -->
        <!-- </div> -->
        <!-- <div class="card-body"> -->
        <canvas id="donutChart" style="min-height: 500px; height: 500px; max-height: 500px; max-width: 100%;"></canvas>
        <?php
        $db = \Config\Database::connect();
        $totalresponden = $db->table('tb_data')->countAllResults();
        ?>
        <label>Jumlah Responden : <?= $totalresponden; ?></label>
        <!-- </div> -->
      </div>
    </div>
    <!-- </div> -->
    <!-- </div> -->
  </center>


  </div>


  <script>
    // Ambil data dari PHP dan konversi ke JavaScript
    var chartData = <?php echo json_encode($chartData); ?>;

    // Buat Donut Chart menggunakan Chart.js
    var ctx = document.getElementById('donutChart').getContext('2d');
    var donutChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
        datasets: [{
          data: chartData.map(data => data.value),
          backgroundColor: [
            'RGBA(10, 255, 0, 0.7)',
            'RGBA(108, 128, 0, 1)',
            'RGBA(146, 139, 37, 0.7)',
            'RGBA(50, 168, 155, 1)',
            'RGBA(152, 201, 63, 1)',

          ],
        }],
        labels: chartData.map(data => data.label),
      },
      options: {
        responsive: true,
        legend: {
          position: 'right', // Mengatur posisi legend menjadi di bawah chart
        },
        plugins: {
          tooltip: {
            callbacks: {
              label: function(context) {
                var label = context.label || '';

                if (label) {
                  label += ': ';
                }
                label += Math.round(context.parsed * 100) + '%';
                return label;
              }
            }
          }
        }
      },
    });
  </script>
</body>

</html>



<?= $this->endSection('isi') ?>