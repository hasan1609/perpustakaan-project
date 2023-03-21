<?php
session_start();
$sessionlevel = 1;
include '../../template/header.php';
include '../../template/sidebar.php';
include '../../config/function-buku.php';
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-sm-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Buku</h4>
            <a href="javascript:void(0)" class="btn btn-primary btn-icon-text btn-md mt-0" onClick="addBuku()">
            <i class="mdi mdi-plus-box btn-icon-prepend"></i> Buku </a>
            <br>
            <br>
            <div class="table-responsive">
              <table class="table table-striped table-bordered" id="example">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Buku</th>
                    <th>Nama Buku</th>
                    <th>Status</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                <?php list_buku(); ?>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!--add buku -->
    <div class="modal fade" id="modalBuku" tabindex="-1" role="dialog" aria-labelledby="modalBukuLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalBukuLabel"></h5>
          </div>
          <form role="form" method="post" action="index.php">
            <div class="modal-body">
              <div class="form-group mb-3">
                <label for="example-text-input" class="form-control-label">Kode Buku</label>
                <input class="form-control" type="number" name="kodeAdd" id="kodeAdd">
              </div>
              <div class="form-group mb-3">
                <label for="example-text-input" class="form-control-label">Nama Buku</label>
                <input class="form-control" type="text" name="namaAdd" id="namaAdd">
              </div>
              <img id="previewAdd" src="#" style="width: 100px; margin: 5px;" alt="Foto"><br>
              <div class="form-group mb-3">
                <label for="example-text-input" class="form-control-label">Foto Buku</label>
                <input class="form-control" type="file" name="gambarAdd" id="gambarAdd">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" onclick="closeBuku()">Close</button>
              <button type="submit" value="addbuku" name="addbuku" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
<script>
 function addBuku(){
   // $('#add-group').trigger('reset');
   $('#modalBukuLabel').html('Tambah Buku');
   $('#modalBuku').modal('show');
   // $('#id').val('');
   }
</script>

<?php

if (isset($_GET['hapus'])) {

  deletebuku($_GET['hapus']);
} else {
  echo '';
}

if (!empty($_POST['addbuku'])) {
  $img = "umi.jpg";
  //print_r($id);
  addbuku($_POST['kodeAdd'], $_POST['namaAdd'],$img);


  
} else {
  echo '';
}

if (!empty($_POST['updatebuku'])) {
  ///print_r($_REQUEST);
updatebuku($_POST['namaEdit'],$_POST['gambarEdit'],$_POST['idEdit'],$_POST['kodeEdit']);

} else {
  echo '';
}
?>
<?php if(@$_SESSION['sukses']){ ?>
  <script>
    Swal.fire({            
      icon: 'success',                   
      title: 'Sukses',    
      text: 'Buku berhasil dihapus',                        
      timer: 3000,                                
      showConfirmButton: false
    })
  </script>
  <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
<?php unset($_SESSION['sukses']); } ?>
  <script>
    $('.hapus_buku').on('click',function(){
      var getLink = $(this).attr('href');
      Swal.fire({
        title: "Yakin hapus buku?",            
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