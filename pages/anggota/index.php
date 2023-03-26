<?php
session_start();
$sessionlevel = $_SESSION['level'];
include '../../template/header.php';
include '../../template/sidebar.php';
include '../../config/function-anggota.php';
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
                  <?php list_anggota($_SESSION["level"]); ?>
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
    ?>
    <?php if(@$_SESSION['sukses']){ ?>
      <script>
        Swal.fire({            
          icon: 'success',                   
          title: 'Sukses',    
          text: 'Anggota berhasil dihapus',                        
          timer: 3000,                                
          showConfirmButton: false
        })
      </script>
      <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
    <?php unset($_SESSION['sukses']); } ?>
    <script>
      $('.hapus_anggota').on('click',function(){
        var getLink = $(this).attr('href');
        Swal.fire({
          title: "Yakin hapus data?",            
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
if (!empty($_GET['cetak'])) {
  echo "<script type='text/javascript'>window.top.location='../export/kartu_anggota.php?id=". $_GET['cetak']."';</script>";
  # code...
}

include '../../template/footer.php';
?>