<?php
session_start();
$sessionlevel = $_SESSION['level'];
include '../../template/header.php';
include '../../template/sidebar.php';
include '../../config/function-absensi.php';
if (empty($_SESSION["level"])) {
  echo "<script type='text/javascript'>window.top.location='../../logout.php';</script>";
}
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-sm-5 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
          <h3 class="card-title">Data Absensi Pengguna</h3>
          <a href="javascript:void(0)" class="btn btn-primary btn-icon-text btn-md mt-0" onClick="exportAbsensi()">
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

        <!--add Absensi -->
    <div class="modal fade" id="exportAbsensi" tabindex="-1" role="dialog" aria-labelledby="exportAbsensiLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exportAbsensiLabel"></h5>
          </div>
          <form role="form" method="post" action="index.php">
            <div class="modal-body">
              <div class="form-group mb-3">
                <label for="example-text-input" class="form-control-label">Masukkan Tahun</label>
                <input class="form-control" type="number" name="tahun" id="tahun">
              </div>
              <div class="form-group mb-3">
                <label for="jurusan">Pilih Bulan</label>
                <select class="form-control" id="level" name="level">
                  <option value="" disabled selected>Pilih Bulan</option>
                  <option >Januari</option>
                  <option value="">Februari</option>
                  <option value="">Maret</option>
                  <option value="">April</option>
                  <option value="">Mei</option>
                  <option value="">Juni</option>
                  <option value="">Juli</option>
                  <option value="">Agustus</option>
                  <option value="">September</option>
                  <option value="">Oktober</option>
                  <option value="">November</option>
                  <option value="">Desember</option>
                </select>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" onclick="closeExport()">Close</button>
              <button type="submit" value="addAbsensi" name="addAbsensi" class="btn btn-primary">Export</button>
            </div>
          </form>
        </div>
      </div>
    </div>
<script>
 function exportAbsensi(){
   // $('#add-group').trigger('reset');
   $('#exportAbsensiLabel').html('Cetak Laporan');
   $('#exportAbsensi').modal('show');
   // $('#id').val('');
   }

   function closeExport() { 
    $('#exportAbsensi').modal('hide');
   }
</script>

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
      $('.terima_absensi').on('click',function(){
        var getLink = $(this).attr('href');
        Swal.fire({
          title: "Terima Absensi?",            
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
      $('.tolak_absensi').on('click',function(){
        var getLink = $(this).attr('href');
        Swal.fire({
          title: "Tolak Absensi?",            
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
      $('.hapus_absensi').on('click',function(){
        var getLink = $(this).attr('href');
        Swal.fire({
          title: "Hapus Absensi?",            
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