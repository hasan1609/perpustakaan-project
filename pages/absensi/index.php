<?php
include '../../template/header.php';
include '../../template/sidebar.php';
include '../../config/function-absensi.php';
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-sm-5 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
          <h3 class="card-title">Data Absensi Pengguna</h3>
            <br>
            <div class="table-responsive">
              <table class="table table-striped table-bordered" id="example">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tgl</th>
                  </tr>
                </thead>
                <tbody>
                 <?php list_absensi_terima(); ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-7 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
          <h3 class="card-title">Permintaan Absensi</h3>
            <br>
            <div class="table-responsive">
              <table class="table table-striped table-bordered" id="absensi2">
                <thead>
                  <tr>
                  <tr>
                    <th>Nama</th>
                    <th>Tgl</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                <?php list_absensi();?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php
// terima absensi
if (isset($_GET['terima'])) {

  terima_absensi_anggota($_REQUEST['terima']);
} else {
  echo '';
}

// tolak absensi
if (isset($_GET['tolak'])) {

  tolak_absensi_anggota($_REQUEST['tolak']);
} else {
  echo '';
}

// hapus absensi
if (isset($_GET['hapus'])) {

  delete_absensi_anggota($_REQUEST['hapus']);
} else {
  echo '';
}


include '../../template/footer.php';
?>