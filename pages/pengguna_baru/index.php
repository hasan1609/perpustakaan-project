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
include '../../template/footer.php';
?>