<?= $this->extend('admin/test') ?>
<?= $this->section('judul') ?>
<?= $this->endSection('judul') ?>
<?= $this->section('subjudul') ?>
<?= $this->endSection('subjudul') ?>
<?= $this->section('isi') ?>

<!--Start Dashboard Content-->
<div class="card">
    <div class="card-header">
        <h3 class="card-title"> Daftar Data Survey Kepuasan</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table-responsive table-bordered table-striped" width="800">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th width="8%">Jenis Layanan</th>
                    <th width="8%">Prosedur Layanan</th>
                    <th width="5%">Kesesuaian Persyaratan Layanan</th>
                    <th>Kejelasan Layanan</th>
                    <th width="3%">Kemampuan Layanan</th>
                    <th>Kecepatan Layanan</th>
                    <th width="3%">Kesopanan dan Keramahan Layanan</th>
                    <th>Kewajaran Biaya Layanan</th>
                    <th>Kepastian Biaya Layanan</th>
                    <th width="8%">Kepastian Jadwal Layanan</th>
                    <th>Kenyamanan Layanan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach ($survey as $row) :

                    //prosedur
                    if ($row->prosedur == 4) {
                        $prosedur = "<span class=\"badge bg-primary\">Sangat Puas</span>";
                    } elseif ($row->prosedur == 3) {
                        $prosedur = "<span class=\"badge bg-success\">Puas</span>";
                    } elseif ($row->prosedur == 2) {
                        $prosedur = "<span class=\"badge bg-warning\">Kurang Puas</span>";
                    } else {
                        $prosedur = "<span class=\"badge bg-danger\">Tidak Puas</span>";
                    };
                    //kesesuaian
                    if ($row->kesesuaian == 4) {
                        $kesesuaian = "<span class=\"badge bg-primary\">Sangat Puas</span>";
                    } elseif ($row->kesesuaian == 3) {
                        $kesesuaian = "<span class=\"badge bg-success\">Puas</span>";
                    } elseif ($row->kesesuaian == 2) {
                        $kesesuaian = "<span class=\"badge bg-warning\">Kurang Puas</span>";
                    } else {
                        $kesesuaian = "<span class=\"badge bg-danger\">Tidak Puas</span>";
                    };
                    //kejelasan
                    if ($row->kejelasan == 4) {
                        $kejelasan = "<span class=\"badge bg-primary\">Sangat Puas</span>";
                    } elseif ($row->kejelasan == 3) {
                        $kejelasan = "<span class=\"badge bg-success\">Puas</span>";
                    } elseif ($row->kejelasan == 2) {
                        $kejelasan = "<span class=\"badge bg-warning\">Kurang Puas</span>";
                    } else {
                        $kejelasan = "<span class=\"badge bg-danger\">Tidak Puas</span>";
                    };
                    //kemampuan
                    if ($row->kemampuan == 4) {
                        $kemampuan = "<span class=\"badge bg-primary\">Sangat Puas</span>";
                    } elseif ($row->kemampuan == 3) {
                        $kemampuan = "<span class=\"badge bg-success\">Puas</span>";
                    } elseif ($row->kemampuan == 2) {
                        $kemampuan = "<span class=\"badge bg-warning\">Kurang Puas</span>";
                    } else {
                        $kemampuan = "<span class=\"badge bg-danger\">Tidak Puas</span>";
                    };
                    //kecepatan
                    if ($row->kecepatan == 4) {
                        $kecepatan = "<span class=\"badge bg-primary\">Sangat Puas</span>";
                    } elseif ($row->kecepatan == 3) {
                        $kecepatan = "<span class=\"badge bg-success\">Puas</span>";
                    } elseif ($row->kecepatan == 2) {
                        $kecepatan = "<span class=\"badge bg-warning\">Kurang Puas</span>";
                    } else {
                        $kecepatan = "<span class=\"badge bg-danger\">Tidak Puas</span>";
                    };
                    //kesopanan
                    if ($row->kesopanan == 4) {
                        $kesopanan = "<span class=\"badge bg-primary\">Sangat Puas</span>";
                    } elseif ($row->kesopanan == 3) {
                        $kesopanan = "<span class=\"badge bg-success\">Puas</span>";
                    } elseif ($row->kesopanan == 2) {
                        $kesopanan = "<span class=\"badge bg-warning\">Kurang Puas</span>";
                    } else {
                        $kesopanan = "<span class=\"badge bg-danger\">Tidak Puas</span>";
                    };
                    //kewajaran
                    if ($row->kewajaran == 4) {
                        $kewajaran = "<span class=\"badge bg-primary\">Sangat Puas</span>";
                    } elseif ($row->kewajaran == 3) {
                        $kewajaran = "<span class=\"badge bg-success\">Puas</span>";
                    } elseif ($row->kewajaran == 2) {
                        $kewajaran = "<span class=\"badge bg-warning\">Kurang Puas</span>";
                    } else {
                        $kewajaran = "<span class=\"badge bg-danger\">Tidak Puas</span>";
                    };
                    //kepastian_biaya
                    if ($row->kepastian_biaya == 4) {
                        $kepastian_biaya = "<span class=\"badge bg-primary\">Sangat Puas</span>";
                    } elseif ($row->kepastian_biaya == 3) {
                        $kepastian_biaya = "<span class=\"badge bg-success\">Puas</span>";
                    } elseif ($row->kepastian_biaya == 2) {
                        $kepastian_biaya = "<span class=\"badge bg-warning\">Kurang Puas</span>";
                    } else {
                        $kepastian_biaya = "<span class=\"badge bg-danger\">Tidak Puas</span>";
                    };
                    //kepastian_jadwal
                    if ($row->kepastian_jadwal == 4) {
                        $kepastian_jadwal = "<span class=\"badge bg-primary\">Sangat Puas</span>";
                    } elseif ($row->kepastian_jadwal == 3) {
                        $kepastian_jadwal = "<span class=\"badge bg-success\">Puas</span>";
                    } elseif ($row->kepastian_jadwal == 2) {
                        $kepastian_jadwal = "<span class=\"badge bg-warning\">Kurang Puas</span>";
                    } else {
                        $kepastian_jadwal = "<span class=\"badge bg-danger\">Tidak Puas</span>";
                    };
                    //kenyamanan
                    if ($row->kenyamanan == 4) {
                        $kenyamanan = "<span class=\"badge bg-primary\">Sangat Puas</span>";
                    } elseif ($row->kenyamanan == 3) {
                        $kenyamanan = "<span class=\"badge bg-success\">Puas</span>";
                    } elseif ($row->kenyamanan == 2) {
                        $kenyamanan = "<span class=\"badge bg-warning\">Kurang Puas</span>";
                    } else {
                        $kenyamanan = "<span class=\"badge bg-danger\">Tidak Puas</span>";
                    };

                ?>
                    <tr>
                        <td><?= $nomor++; ?></td>
                        <td><?= $row->time; ?></td>
                        <td><?= $row->layanan; ?></td>
                        <td><?= $prosedur; ?></td>
                        <td><?= $kesesuaian; ?></td>
                        <td><?= $kejelasan; ?></td>
                        <td><?= $kemampuan; ?></td>
                        <td><?= $kecepatan; ?></td>
                        <td><?= $kesopanan; ?></td>
                        <td><?= $kewajaran; ?></td>
                        <td><?= $kepastian_biaya; ?></td>
                        <td><?= $kepastian_jadwal; ?></td>
                        <td><?= $kenyamanan; ?></td>
                    </tr>
                <?php endforeach; ?>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!--End Dashboard Content-->

<?= $this->endSection('isi') ?>