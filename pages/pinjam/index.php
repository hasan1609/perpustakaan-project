<?php
session_start();
$sessionlevel = $_SESSION['level'];
include '../../template/header.php';
include '../../template/sidebar.php';
include '../../config/function-pinjam.php';
if (empty($_SESSION["level"])) {
  echo "<script type='text/javascript'>window.top.location='../../logout.php';</script>";
}
error_reporting(E_ALL ^ E_NOTICE);
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-sm-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Peminjaman Buku</h4>
            <?php 
            if ($sessionlevel == 2 or $sessionlevel == 3) {
              echo " <a href='javascript:void(0)' class='btn btn-primary btn-icon-text btn-md mt-0' onClick='addPinjam()'>
              <i class='mdi mdi-plus-box btn-icon-prepend'></i> Pinjam Buku </a>";
            }else{
              echo "<a href='javascript:void(0)' class='btn btn-primary btn-icon-text btn-md mt-0' onClick='exportPinjam()'>
            <i class='mdi mdi-printer btn-icon-prepend'></i> Export </a>";
            }
            
            ?>
            <br>
            <br>
            <div class="table-responsive">
              <table class="table table-striped table-bordered" id="example">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Buku</th>
                    <th>Nama Buku</th>
                    <th>Nama Anggota</th>
                    <th>Tgl. Pinjam</th>
                    <th>Tgl. Kembali</th>
                    <th>Status</th>
                    <?php 
                    if ($sessionlevel == 1) {
                      echo "<th>Opsi</th>";
                    }
                    ?>
                    
                  </tr>
                  </thead>
                  <tbody>
                  <?php data_pinjam($_SESSION['req_perpus'], $sessionlevel); ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- buku -->
    <div class="modal fade" id="modalBuku" tabindex="-1" role="dialog" aria-labelledby="modalBukuLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalBukuLabel"></h5>
          </div>
          <form role="form" method="post" action="index.php">
            <div class="modal-body">
              <div class="form-group mb-3">
                <label for="jurusan">Pilih Buku</label>
                <select class="form-control" id="pilihBuku" name="pilihBuku[]" multiple="multiple" style="width: 100%">
                 
                <?php list_buku(); ?>
                </select>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" onclick="closeBuku()">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!--add Pinjam -->
    <div class='modal fade' id='exportPinjam' tabindex='-1' role='dialog' aria-labelledby='exportPinjamLabel' aria-hidden='true'>
      <div class='modal-dialog' role='document'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h5 class='modal-title' id='exportPinjamLabel'></h5>
          </div>
          <form role='form' method='get' action='../export/pinjam.php' target="_blank">
            <div class='modal-body'>
              <div class='form-group mb-3'>
                <label for='example-text-input' class='form-control-label'>Masukkan Tahun</label>
                <input class='form-control' type='number' name='tahun' id='tahun'>
              </div>
              <div class='form-group mb-3'>
                <label for='jurusan'>Pilih Bulan</label>
                <select class='form-control' id='bulan' name='bulan'>
                  <option value='' disabled selected>Pilih Bulan</option>
                  <option value='01'>Januari</option>
                  <option value='02'>Februari</option>
                  <option value='03'>Maret</option>
                  <option value='04'>April</option>
                  <option value='05'>Mei</option>
                  <option value='06'>Juni</option>
                  <option value='07'>Juli</option>
                  <option value='08'>Agustus</option>
                  <option value='09'>September</option>
                  <option value='10'>Oktober</option>
                  <option value='11'>November</option>
                  <option value='12'>Desember</option>
                </select>
              </div>
            </div>
            <div class='modal-footer'>
              <button type='button' class='btn btn-secondary' onclick='closeExport()'>Close</button>
              <button type='submit' class='btn btn-primary'>Export</button>
            </div>
          </form>
        </div>
      </div>
    </div>


    <script>
      function addPinjam(){
        // $('#add-group').trigger("reset");
        $('#modalBukuLabel').html("Pinjam Buku");
        $('#modalBuku').modal('show');
        $('#pilihBuku').select2();
        // $('#id').val('');
      }

      function closeBuku() { 
        $('#modalBuku').modal('hide');
      }

      $('#pilihBuku').select2({
        dropdownParent: $('#modalBuku'),
        theme: "classic"
    });

    function exportPinjam(){
   // $('#add-group').trigger('reset');
   $('#exportPinjamLabel').html('Cetak Laporan');
   $('#exportPinjam').modal('show');
   // $('#id').val('');
   }

   function closeExport() { 
    $('#exportPinjam').modal('hide');
   }
    </script>
<?php


$user = $_SESSION['nama'];
$noreg = $_SESSION['req_perpus'];
echo "<br>";
if (!empty($_REQUEST['pilihBuku'])) {
  foreach ($_REQUEST['pilihBuku'] as $value) {
    $buku = explode(',',$value);
    $idbuku = $buku[0];
    $jdl_buku = $buku[1];
    status_buku_pinjam($idbuku);
    pinjambuku($idbuku,$jdl_buku,$user, $noreg);

  
  }
}

if (!empty($_GET['kembali'])) {
  status_buku_kembali($_GET['code']);

  Kembali($_GET['kembali']);
 
}elseif (!empty($_GET['terima'])) {

  terima($_GET['terima']);


}elseif (!empty($_GET['tolak'])) {
  status_buku_kembali($_GET['code']);
  tolak($_GET['tolak']);

}elseif(!empty($_GET['hapus'])){

  hapus($_GET['hapus']);

}

include '../../template/footer.php';
?>