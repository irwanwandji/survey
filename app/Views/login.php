<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/admlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/admlte/dist/css/adminlte.min.css">
</head>

<body class="hold-transition lockscreen">
  <!-- Automatic element centering -->
  <div class="lockscreen-wrapper">
    <div class="lockscreen-logo">
      <a href="<?= base_url() ?>/assets/admlte/index2.html"><b>Survey</b> Kepuasan</a>
    </div>
    <!-- User name -->
    <div class="lockscreen-name">Administrator</div>

    <!-- START LOCK SCREEN ITEM -->
    <div class="lockscreen-item">
      <!-- lockscreen image -->
      <div class="lockscreen-image">
        <img src="<?= base_url() ?>/assets/admlte/dist/img/carelogo.png" alt="User Image">
      </div>
      <!-- /.lockscreen-image -->

      <!-- lockscreen credentials (contains the form) -->
      <form method="post" action="<?= base_url('login/processLogin') ?>" class="lockscreen-credentials">
        <div class="input-group">
          <!-- <input type="hidden" class="form-control" value="admin" name="iduser"> -->
          <input type="password" class="form-control" placeholder="password" name="pass" required>

          <div class="input-group-append">
            <button type="submit" class="btn">
              <i class="fas fa-arrow-right text-muted"></i>
            </button>
          </div>
        </div>
      </form>
      <!-- /.lockscreen credentials -->

    </div>
    <!-- /.lockscreen-item -->
    <div class="help-block text-center">
      Enter your password
    </div>
    <div class="text-center">
    </div>
    <div class="lockscreen-footer text-center">
      Copyright &copy; 2023 <b>&nbsp<a href="https://roum.kemkes.go.id" class="text-black">Biro Umum | Kementerian Kesehatan</a></b><br>
      All rights reserved
    </div>
  </div>
  <!-- /.center -->

  <!-- jQuery -->
  <script src="<?= base_url() ?>/assets/admlte/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url() ?>/assets/admlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>