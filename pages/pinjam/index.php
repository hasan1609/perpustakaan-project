<?php
include '../../template/header.php';
include '../../template/sidebar.php';
include '../../config/function-pinjam.php';
error_reporting(E_ALL ^ E_NOTICE);
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-sm-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Peminjaman Buku</h4>
            <a href="javascript:void(0)" class="btn btn-primary btn-icon-text btn-md mt-0" onClick="addPinjam()">
            <i class="mdi mdi-plus-box btn-icon-prepend"></i> Pinjam Buku </a>
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
                    <th>Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php data_pinjam(); ?>
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
    </script>
<?php


$user = "nama";
echo "<br>";
if (!empty($_REQUEST['pilihBuku'])) {
  foreach ($_REQUEST['pilihBuku'] as $value) {
    $buku = explode(',',$value);
    $idbuku = $buku[0];
    $jdl_buku = $buku[1];
    status_buku_pinjam($idbuku);
    pinjambuku($idbuku,$jdl_buku,$user);

  
  }
}

if ($_GET['kembali']) {
  status_buku_kembali($_GET['code']);

  Kembali($_GET['kembali']);
 
}elseif ($_GET['terima']) {

  terima($_GET['terima']);


}elseif ($_GET['tolak']) {
  status_buku_kembali($_GET['code']);
  tolak($_GET['tolak']);

}elseif($_GET['hapus']){

  hapus($_GET['hapus']);

}

include '../../template/footer.php';
?>