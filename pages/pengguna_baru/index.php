<?php
session_start();
$sessionlevel = $_SESSION['level'];
include '../../config/function-anggota.php';
include '../../template/header.php';
include '../../template/sidebar.php';
if (empty($_SESSION["level"])) {
  echo "<script type='text/javascript'>window.top.location='../../logout.php';</script>";
}

?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-sm-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Permintaan Pengguna Baru</h4>
            <a href="javascript:void(0)" class="btn btn-primary btn-icon-text btn-md mt-0" onClick="exportPengguna()">
            <i class="mdi mdi-printer btn-icon-prepend"></i> Export </a>
            <br>
            <br>
            <div class="table-responsive">
              <table class="table table-striped table-bordered" id="example">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tgl</th>
                   <?php 
                   if ($sessionlevel == 1) {
                     echo " <th>Opsi</th>";
                   }
                 
                    ?>
                  </tr>
                </thead>
                <tbody>
                <?php list_anggota_baru($sessionlevel); ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

        <!--add Pengguna -->
    <div class="modal fade" id="exportPengguna" tabindex="-1" role="dialog" aria-labelledby="exportPenggunaLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exportPenggunaLabel"></h5>
          </div>
          <form role="form" method="get" action="index.php">
            <div class="modal-body">
              <div class="form-group mb-3">
                <label for="example-text-input" class="form-control-label">Masukkan Tahun</label>
                <input class="form-control" type="number" name="tahun" id="tahun">
              </div>
              <div class="form-group mb-3">
                <label for="jurusan">Pilih Bulan</label>
                <select class="form-control" id="level" name="level">
                  <option value="" disabled selected>Pilih Bulan</option>
                  <option value="01">Januari</option>
                  <option value="02">Februari</option>
                  <option value="03">Maret</option>
                  <option value="04">April</option>
                  <option value="05">Mei</option>
                  <option value="06">Juni</option>
                  <option value="07">Juli</option>
                  <option value="08">Agustus</option>
                  <option value="09">September</option>
                  <option value="10">Oktober</option>
                  <option value="11">November</option>
                  <option value="12">Desember</option>
                </select>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" onclick="closeExport()">Close</button>
              <button type="submit" value="addPengguna" name="addPengguna" class="btn btn-primary">Export</button>
            </div>
          </form>
        </div>
      </div>
    </div>
<script>
 function exportPengguna(){
   // $('#add-group').trigger('reset');
   $('#exportPenggunaLabel').html('Cetak Laporan');
   $('#exportPengguna').modal('show');
   // $('#id').val('');
   }

   function closeExport() { 
    $('#exportPengguna').modal('hide');
   }
</script>

    

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
?>

<?php if(@$_SESSION['terima']){ ?>
      <script>
        Swal.fire({            
          icon: 'success',                   
          title: 'Diterima',                           
          timer: 3000,                                
          showConfirmButton: false
        })
      </script>
      <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
<?php unset($_SESSION['terima']); 
  }else if(@$_SESSION['tolak']){ ?>
    <script>
      Swal.fire({            
        icon: 'success',                   
        title: 'Ditolak',                           
        timer: 3000,                                
        showConfirmButton: false
        })
    </script>
<?php unset($_SESSION['tolak']); 
  }else if(@$_SESSION['hapus']){ ?>
    <script>
      Swal.fire({            
        icon: 'success',                   
        title: 'Dihapus',                           
        timer: 3000,                                
        showConfirmButton: false
        })
    </script>
<?php unset($_SESSION['hapus']); } ?>
    <script>
      $('.terima_anggota').on('click',function(){
        var getLink = $(this).attr('href');
        Swal.fire({
          title: "Terima Anggota?",            
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#d33',
          confirmButtonText: 'Ya',
          cancelButtonColor: '#3085d6',
          cancelButtonText: "Batal"
        }).then(result => {
        //jika klik ya maka arahkan ke proses.php
          if(result.isConfirmed){
            window.location.href = getLink
        }
        })
      return false;
      });
      $('.tolak_anggota').on('click',function(){
        var getLink = $(this).attr('href');
        Swal.fire({
          title: "Tolak Anggota?",            
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#d33',
          confirmButtonText: 'Ya',
          cancelButtonColor: '#3085d6',
          cancelButtonText: "Batal"
        }).then(result => {
        //jika klik ya maka arahkan ke proses.php
          if(result.isConfirmed){
            window.location.href = getLink
        }
        })
      return false;
      });
      $('.hapus_Anggota').on('click',function(){
        var getLink = $(this).attr('href');
        Swal.fire({
          title: "Hapus anggota?",            
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#d33',
          confirmButtonText: 'Ya',
          cancelButtonColor: '#3085d6',
          cancelButtonText: "Batal"
        }).then(result => {
        //jika klik ya maka arahkan ke proses.php
          if(result.isConfirmed){
            window.location.href = getLink
        }
        })
      return false;
      });
      </script>

<?php

include '../../template/footer.php';
?>