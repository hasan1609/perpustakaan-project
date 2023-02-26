<?php
include '../../template/header.php';
include '../../template/sidebar.php';
include '../../config/function-anggota.php';
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-sm-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Anggota</h4>
            <br>
            <div class="table-responsive">
              <table class="table table-striped table-bordered" id="example">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Fakultas</th>
                    <th>Jurusan</th>
                    <th>Jabatan</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php list_anggota(); ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php

if (isset($_GET['hapus'])) {
   $id = $_REQUEST['hapus'];
 //print_r($id);
   deletanggota($id);
}else{
  echo '';
}

include '../../template/footer.php';
?>