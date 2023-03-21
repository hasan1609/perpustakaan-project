<?php
session_start();
$sessionlevel = 1;
include '../../template/header.php';
include '../../template/sidebar.php';
include '../../config/function-denda.php';
error_reporting(E_ALL ^ E_NOTICE);

?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-sm-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Denda</h4>
            <div class="table-responsive">
              <table class="table table-striped table-bordered" id="example">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Anggota</th>
                    <th>Judul Buku</th>
                    <th>Tgl Pengembalian</th>
                    <th>Denda</th>
                    <th>Status</th>
                    <?php 
                    if ($sessionlevel == 1) {
                      echo "  <th>Opsi</th>";
                    }
                     
                    ?>
                  
                  </tr>
                </thead>
                <tbody>
                  <?php Denda($sessionlevel); ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <?php

      if ($sessionlevel == 1) {
        echo "<div class='col-sm-12 grid-margin stretch-card'>
        <div class='card'>
          <div class='card-body'>
            <h4 class='card-title'>Riwayat Denda</h4>
            <a href='javascript:void(0)' class='btn btn-primary btn-icon-text btn-md mt-0' onClick='exportDenda()'>
            <i class='mdi mdi-printer btn-icon-prepend'></i> Export </a>
            <br>
            <br>
            <div class='table-responsive'>
              <table class='table table-striped table-bordered' id='denda'>
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Anggota</th>
                    <th>Judul Buku</th>
                    <th>Tgl Pengembalian</th>
                    <th>Denda</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>";
                  riwayat_Denda();
                  echo "
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>


            <!--add Denda -->
    <div class='modal fade' id='exportDenda' tabindex='-1' role='dialog' aria-labelledby='exportDendaLabel' aria-hidden='true'>
      <div class='modal-dialog' role='document'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h5 class='modal-title' id='exportDendaLabel'></h5>
          </div>
          <form role='form' method='get' action='index.php'>
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
              <button type='submit' value='addDenda' name='addDenda' class='btn btn-primary'>Export</button>
            </div>
          </form>
        </div>
      </div>
    </div>";
      }
      ?>
      
<script>
 function exportDenda(){
   // $('#add-group').trigger('reset');
   $('#exportDendaLabel').html('Cetak Laporan');
   $('#exportDenda').modal('show');
   // $('#id').val('');
   }

   function closeExport() { 
    $('#exportDenda').modal('hide');
   }

  function viewAnggota(){
    // $('#add-group').trigger("reset");
    $('#modalAnggotaLabel').html("Data Anggota");
    $('#modalAnggota').modal('show');
    // $('#id').val('');
  }
  
  function closeAnggota() { 
    $('#modalAnggota').modal('hide');
  }
  
</script>
<?php



if ($_GET['terima']) {

  terima($_GET['terima'], $_GET['denda']);
  status_buku_kembali($_GET['denda']);


}elseif($_GET['addDenda']){
// export($_GET['bulan'],$_GET['tahun']);
  print_r($_REQUEST);
  echo "<script type='text/javascript'>window.top.location='../export/denda.php?tahun=".$_REQUEST['tahun']."&bulan=".$_REQUEST['bulan']."';</script>";

}



include '../../template/footer.php';
?>