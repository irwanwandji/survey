<?= $this->extend('layout') ?>
<?= $this->section('judul') ?>
<?= $this->endSection('judul') ?>
<?= $this->section('subjudul') ?>
<?= $this->endSection('subjudul') ?>
<?= $this->section('isi') ?>


<!-- <h3 align="center">Hai, Selamat datang di BIRO UMUM.
  <br> Silahkan nilai kinerja kami
</h3>
<p align="center"> Penilaian Anda kami butuhkan untuk peningkatan kualitas layanan kami kepada Anda di waktu mendatang </p> -->
<center>
<h2 align="center">
  SURVEY KEPUASAN LAYANAN<br><h3>BIRO UMUM | KEMENTERIAN KESEHATAN</h3>
</h2></center>
<h5 class="text-large-emphasis large" align="center">
  <blink>Silahkan nilai kinerja kami. Penilaian Anda sangat membantu kami<br>untuk peningkatan kualitas layanan kami kepada Anda<br>di waktu mendatang.</strong></blink>
</h5>
<br>
<?= session()->getFlashdata('sukses'); ?>


<div class="container-fluid">
  <br>
  <form action="<?= base_url('home/simpan') ?>" method="POST">
    <!-- <center>
    <div>
      <h4>Silahkan pilih Layanan yang Anda terima :</h4>
      <select id="layanan" name="layanan" required>
        <option selected>-Pilih-</option>
        <option value="Kerumahtanggaan">Kerumahtanggaan</option>
        <option value="Kearsipan & Tata Persuratan">Kearsipan & Tata Persuratan</option>
        <option value="Pengamanan">Pengamanan</option>
        <option value="Pengelolaan Gaji">Pengelolaan Gaji</option>
        <option value="PDLN">PDLN</option>
      </select>
    </div>
    </center> -->

    <!-- <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-primary rounded-3 shadow-sm" role="tablist" style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-primary); --bs-nav-pills-link-active-bg: var(--bs-white);">
      <li class="nav-item" role="presentation">
        <a class="nav-link rounded-3" data-bs-toggle="tab" role="tab" aria-selected="true">
        </a>
      </li>
    </ul> -->

    <!--  <center>
          <blink>
            <h4>Silahkan pilih Layanan yang Anda terima :</h4>
          </blink>
        </center> -->

    <!-- <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-primary rounded-5 shadow-sm" id="pillNav2" role="tablist" style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-primary); --bs-nav-pills-link-active-bg: var(--bs-white);">
      &nbsp
      <li class="nav-item" role="presentation">
        <button id="layanan" name="layanan" value="Kerumahtanggaan" class="nav-link active rounded-5" id="home-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="true"> KERUMAHTANGGAAN</button>
      </li>
      <li class="nav-item" role="presentation">
        <button id="layanan" name="layanan" value="Kearsipan & Tata Persuratan" class="nav-link rounded-5" id="profile-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">KEARSIPAN <br>DAN<BR>TATA PERSURATAN</button>
      </li>
      <li class="nav-item" role="presentation">
        <button id="layanan" name="layanan" value="Pengamanan" class="nav-link rounded-5" id="contact-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">PENGAMANAN</button>
      </li>
      <li class="nav-item" role="presentation">
        <button id="layanan" name="layanan" value="Pengelolaan Gaji" class="nav-link rounded-5" id="contact-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">PENGELOLAAN GAJI</button>
      </li>
      <li class="nav-item" role="presentation">
        <button id="layanan" name="layanan" value="PDLN" class="nav-link rounded-5" id="contact-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">PDLN</button>
      </li>
      &nbsp
    </ul> -->
    <!-- <strong>Toggle buttons</strong><span class="small ms-1">Radio</span> -->

    <center>
      <div class="col-12">
        <div class="card mb-6">
          <div class="card-body">
            <h3 class="text-large-emphasis large" align="center">
              <blink><strong>PILIH JENIS LAYANAN</strong></blink>
            </h3>
            <div class="example">
              <div class="tab-content rounded-bottom">
                <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1266">
                  <input class="btn-check" id="option_b1" type="radio" name="layanan" value="Kerumahtanggaan" autocomplete="off" required="Isi">
                  <label class="btn btn-outline-success" for="option_b1">
                    <img src="assets/img/1rt.png" width="80">
                    <h5>KERUMAHTANGGAAN</h5>
                    </label>
                  </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  
                  <input class="btn-check" id="option_b2" type="radio" name="layanan" value="Kearsipan & Tata Persuratan" autocomplete="off">
                  <label class="btn btn-outline-success" for="option_b2"><strong>
                    <img src="assets/img/4arsip.png" width="70">
                      <h5>KEARSIPAN</h5>
                    </strong><h6>DAN TATA PERSURATAN</h6>
                  </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  
                  <input class="btn-check" id="option_b3" type="radio" name="layanan" value="Pengamanan" autocomplete="off">
                  <label class="btn btn-outline-success" for="option_b3">
                    <img src="assets/img/9sec.png" width="90">
                    <h5>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp PENGAMANAN &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h5>
                  </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  
                  <input class="btn-check" id="option_b4" type="radio" name="layanan" value="Pengelolaan Gaji" autocomplete="off">
                  <label class="btn btn-outline-success" for="option_b4">
                    <img src="assets/img/8gaji.png" width="80">
                    <h5>&nbsp&nbsp&nbsp&nbsp PENGELOLAAN GAJI &nbsp&nbsp&nbsp&nbsp</h5>
                  </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  
                  <input class="btn-check" id="option_b5" type="radio" align="center" name="layanan" value="PDLN" autocomplete="off">
                  <label class="btn btn-outline-success" for="option_b5">
                    <img src="assets/img/2passport.png" width="90">
                    <h5>PERJALANAN DINAS<br>LUAR NEGERI</h5>
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </center>

<!-- <div class="col-12">
<div class="card mb-6">    
<div class="card-body">
<div class="example">
  <div class="tab-content rounded-bottom">
    <table style="width: 100%; border-collapse: collapse;" align="center">
      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1266">
    <tbody>
        <tr>
            <td style="width: 20%; border: none rgb(0, 0, 0);" align="center"><br>
              <input class="btn-check" id="option_b1" type="radio" name="layanan" value="Kerumahtanggaan" autocomplete="off" required="Isi">
                  <label class="btn btn-outline-success" for="option_b1">
                    <img src="assets/img/1rt.png" width="100"></td>
            <td style="width: 20%; border: none rgb(0, 0, 0);" align="center"><br>
              <input class="btn-check" id="option_b2" type="radio" name="layanan" value="Kearsipan & Tata Persuratan" autocomplete="off">
                  <label class="btn btn-outline-success" for="option_b2">
                    <img src="assets/img/4arsip.png" width="70"></td>
            <td style="width: 20%; border: none rgb(0, 0, 0);" align="center"><br>
              <input class="btn-check" id="option_b3" type="radio" name="layanan" value="Pengamanan" autocomplete="off">
                  <label class="btn btn-outline-success" for="option_b3">
                    <img src="assets/img/9sec.png" width="90"></td>
            <td style="width: 20%; border: none rgb(0, 0, 0);" align="center"><br>
              <input class="btn-check" id="option_b4" type="radio" name="layanan" value="Pengelolaan Gaji" autocomplete="off">
                  <label class="btn btn-outline-success" for="option_b4">
                    <img src="assets/img/8gaji.png" width="80"></td>
            <td style="width: 20%; border: none rgb(0, 0, 0);" align="center"><br>
              <input class="btn-check" id="option_b5" type="radio" align="center" name="layanan" value="PDLN" autocomplete="off">
                  <label class="btn btn-outline-success" for="option_b5">
                    <img src="assets/img/2passport.png" width="90"></td>
        </tr>
        <tr>
            <td style="width: 20%; border: none rgb(0, 0, 0);" align="center"><br>KERUMAHTANGGAAN</td>
            <td style="width: 20%; border: none rgb(0, 0, 0);" align="center"><br>KEARSIPAN DAN TATA PERSURATAN</td>
            <td style="width: 20%; border: none rgb(0, 0, 0);" align="center"><br>PENGAMANAN</td>
            <td style="width: 20%; border: none rgb(0, 0, 0);" align="center"><br>PENGELOLAAN GAJI</td>
            <td style="width: 20%; border: none rgb(0, 0, 0);" align="center"><br>PERJALANAN DINAS LUAR NEGERI</td>
        </tr>
    </tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div> -->

<p><br></p>

    <!--     <center>
      <div class="btn-group btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-default active">
          <input type="radio" name="layanan" value="Kerumahtanggaan" id="option_b1" autocomplete="off" required>
          <h5>KERUMAHTANGGAAN</h5>
        </label>&nbsp&nbsp&nbsp&nbsp&nbsp
        <label class="btn btn-default">
          <input type="radio" name="layanan" value="Kearsipan & Tata Persuratan" id="option_b2" autocomplete="off">
          <h5>KEARSIPAN <BR>DAN<BR> TATA PERSURATAN</h5> &nbsp&nbsp&nbsp&nbsp
        </label>&nbsp&nbsp&nbsp&nbsp&nbsp
        <label class="btn btn-default">
          <input type="radio" name="layanan" value="Pengamanan" id="option_b3" autocomplete="off"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <h5>PENGAMANAN</h5> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        </label>&nbsp&nbsp&nbsp&nbsp&nbsp
        <label class="btn btn-default">
          <input type="radio" name="layanan" value="Pengelolaan Gaji" id="option_b4" autocomplete="off"> &nbsp&nbsp <h5>PENGELOLAAN GAJI</h5> &nbsp&nbsp
        </label>&nbsp&nbsp&nbsp&nbsp&nbsp
        <label class="btn btn-default">
          <input type="radio" name="layanan" value="PDLN" id="option_b5" autocomplete="off">
          <h5>PERJALANAN DINAS <BR>LUAR NEGERI</h5>
        </label>
      </div>
    </center> -->


    <!-- <center>
    <div>
      <h3>Silahkan pilih Layanan yang Anda terima :</h3>
      
        <table class="table table-striped">      
        <tr align="center">
      </tr>
    </div>
    </table>
    </center> -->
    <BR>

    <table id="example1" class="table-resposive table-striped" align="center" width="1100">
      <thead>
        <tr align="center">
          <th align="center">
            <!-- <h4>Silahkan pilih tingkat kepuasan Anda terhadap layanan kami :</h4> -->
          </th>
          <th>
            <center class="add_bottom_45"><img src="assets/img/spuas.png" alt="" width="100"></a></center>Sangat Puas
          </th>
          <th>
            <center class="add_bottom_45"><img src="assets/img/puas.png" alt="" width="80"></a></center>Puas
          </th>
          <th>
            <center class="add_bottom_45"><img src="assets/img/kurangpuas.png" alt="" width="60"></a></center>Kurang Puas
          </th>
          <th>
            <center class="add_bottom_45"><img src="assets/img/tidakpuas.png" alt="" width="55"></a></center>Tidak Puas
          </th>
        </tr>
      </thead>


      <tbody>
        <tr align="center">
          <td align="left">
            <h5>Prosedur Layanan
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="prosedur" id="prosedur1" value="4" required>
              <label for="prosedur1"></label>
            </div>
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="prosedur" id="prosedur2" value="3">
              <label for="prosedur2"></label>
            </div>
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="prosedur" id="prosedur3" value="2">
              <label for="prosedur3"></label>
            </div>
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="prosedur" id="prosedur4" value="1">
              <label for="prosedur4"></label>
            </div>
          </td>
        </tr>
        <tr align="center">
          <td align="left">
            <h5>Kesesuaian Persyaratan Layanan
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="kesesuaian" id="kesesuaian1" value="4" required>
              <label for="kesesuaian1"></label>
            </div>
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="kesesuaian" id="kesesuaian2" value="3">
              <label for="kesesuaian2"></label>
            </div>
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="kesesuaian" id="kesesuaian3" value="2">
              <label for="kesesuaian3"></label>
            </div>
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="kesesuaian" id="kesesuaian4" value="1">
              <label for="kesesuaian4"></label>
            </div>
          </td>
        </tr>
        <tr align="center">
          <td align="left">
            <h5>Kejelasan Layanan
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="kejelasan" id="kejelasan1" value="4" required>
              <label for="kejelasan1"></label>
            </div>
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="kejelasan" id="kejelasan2" value="3">
              <label for="kejelasan2"></label>
            </div>
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="kejelasan" id="kejelasan3" value="2">
              <label for="kejelasan3"></label>
            </div>
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="kejelasan" id="kejelasan4" value="1">
              <label for="kejelasan4"></label>
            </div>
          </td>
        </tr>
        <tr align="center">
          <td align="left">
            <h5>Kemampuan Layanan
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="kemampuan" id="kemampuan1" value="4" required>
              <label for="kemampuan1"></label>
            </div>
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="kemampuan" id="kemampuan2" value="3">
              <label for="kemampuan2"></label>
            </div>
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="kemampuan" id="kemampuan3" value="2">
              <label for="kemampuan3"></label>
            </div>
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="kemampuan" id="kemampuan4" value="1">
              <label for="kemampuan4"></label>
            </div>
          </td>
        </tr>
        <tr align="center">
          <td align="left">
            <h5>Kecepatan Layanan
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="kecepatan" id="kecepatan1" value="4" required>
              <label for="kecepatan1"></label>
            </div>
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="kecepatan" id="kecepatan2" value="3">
              <label for="kecepatan2"></label>
            </div>
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="kecepatan" id="kecepatan3" value="2">
              <label for="kecepatan3"></label>
            </div>
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="kecepatan" id="kecepatan4" value="1">
              <label for="kecepatan4"></label>
            </div>
          </td>
        </tr>
        <tr align="center">
          <td align="left">
            <h5>Kesopanan dan Keramahan Layanan
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="kesopanan" id="kesopanan1" value="4" required>
              <label for="kesopanan1"></label>
            </div>
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="kesopanan" id="kesopanan2" value="3">
              <label for="kesopanan2"></label>
            </div>
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="kesopanan" id="kesopanan3" value="2">
              <label for="kesopanan3"></label>
            </div>
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="kesopanan" id="kesopanan4" value="1">
              <label for="kesopanan4"></label>
            </div>
          </td>
        </tr>
        <tr align="center">
          <td align="left">
            <h5>Kewajaran Biaya Layanan
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="kewajaran" id="kewajaran1" value="4" required>
              <label for="kewajaran1"></label>
            </div>
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="kewajaran" id="kewajaran2" value="3">
              <label for="kewajaran2"></label>
            </div>
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="kewajaran" id="kewajaran3" value="2">
              <label for="kewajaran3"></label>
            </div>
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="kewajaran" id="kewajaran4" value="1">
              <label for="kewajaran4"></label>
            </div>
          </td>
        </tr>
        <tr align="center">
          <td align="left">
            <h5>Kepastian Biaya Layanan
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="kepastian_biaya" id="kepastian_biaya1" value="4" required>
              <label for="kepastian_biaya1"></label>
            </div>
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="kepastian_biaya" id="kepastian_biaya2" value="3">
              <label for="kepastian_biaya2"></label>
            </div>
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="kepastian_biaya" id="kepastian_biaya3" value="2">
              <label for="kepastian_biaya3"></label>
            </div>
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="kepastian_biaya" id="kepastian_biaya4" value="1">
              <label for="kepastian_biaya4"></label>
            </div>
          </td>
        </tr>
        <tr align="center">
          <td align="left">
            <h5>Kepastian Jadwal Layanan
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="kepastian_jadwal" id="kepastian_jadwal1" value="4" required>
              <label for="kepastian_jadwal1"></label>
            </div>
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="kepastian_jadwal" id="kepastian_jadwal2" value="3">
              <label for="kepastian_jadwal2"></label>
            </div>
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="kepastian_jadwal" id="kepastian_jadwal3" value="2">
              <label for="kepastian_jadwal3"></label>
            </div>
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="kepastian_jadwal" id="kepastian_jadwal4" value="1">
              <label for="kepastian_jadwal4"></label>
            </div>
          </td>
        </tr>
        <tr align="center">
          <td align="left">
            <h5>Kenyamanan Layanan
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="kenyamanan" id="kenyamanan1" value="4" required>
              <label for="kenyamanan1"></label>
            </div>
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="kenyamanan" id="kenyamanan2" value="3">
              <label for="kenyamanan2"></label>
            </div>
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="kenyamanan" id="kenyamanan3" value="2">
              <label for="kenyamanan3"></label>
            </div>
          </td>
          <td>
            <div class="icheck-success d-inline">
              <input type="radio" name="kenyamanan" id="kenyamanan4" value="1">
              <label for="kenyamanan4"></label>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
    <br>
    <br>
    <center>
      <button class="btn btn-danger btn-lg">&nbsp RESET</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <button class="btn btn-success btn-lg" type="submit">SIMPAN</button>
      <!-- <img src="assets/img/tombolreset.png" type="submit" width="160"></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <img src="assets/img/tombolsave.png" type="submit" onclick="popUP()" width="150"></a> -->
    </center>

  </form>
</div>





<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
<script>
  function popUP() {
    let timerInterval
    Swal.fire({
      title: 'Terima Kasih Sudah Mengisi Survey',
      html: 'I will close in <b></b> milliseconds.',
      timer: 12000,
      timerProgressBar: true,
      didOpen: () => {
        Swal.showLoading()
        const b = Swal.getHtmlContainer().querySelector('b')
        timerInterval = setInterval(() => {
          b.textContent = Swal.getTimerLeft()
        }, 100)
      },
      willClose: () => {
        clearInterval(timerInterval)
      }
    }).then((result) => {
      /* Read more about handling dismissals below */
      if (result.dismiss === Swal.DismissReason.timer) {
        console.log('I was closed by the timer')
      }
    })
  }
</script>

<!-- TIME TOP -->
<script>
  var timeDisplay = document.getElementById("time");

  function refreshTime() {
    var dateString = new Date().toLocaleString("en-US", {
      timeZone: "Asia/Jakarta"
    });
    var formattedString = dateString.replace(", ", " - ");
    timeDisplay.innerHTML = formattedString;
  }
  setInterval(refreshTime, 1000);
</script>



<?= $this->endSection('isi') ?>