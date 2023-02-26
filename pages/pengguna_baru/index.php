<?php
include '../../config/function-anggota.php';
include '../../template/header.php';
include '../../template/sidebar.php';

?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-sm-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Permintaan Pengguna Baru</h4>
            <div class="table-responsive">
              <table class="table table-striped table-bordered" id="example">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tgl</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                <?php list_anggota_baru(); ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

        <!-- view -->
    

<?php


// aktifasi anggota 
if (isset($_GET['aktif'])) {
  $id = $_REQUEST['aktif'];

  terima_anggota($id);
} else {
  echo '';
}


// tolak anggota
if (isset($_GET['tolak'])) {
  $id = $_REQUEST['tolak'];

  tolak_anggota($id);
} else {
  echo '';
}



// hapus anggota
if (isset($_GET['hapus'])) {
  $id = $_REQUEST['hapus'];
  deletanggota($id);
} else {
  echo '';
}

include '../../template/footer.php';
?>