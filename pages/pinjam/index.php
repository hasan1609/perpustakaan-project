<?php
include '../../template/header.php';
include '../../template/sidebar.php';
include '../../config/function-pinjam.php';
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
                    <tr>
                      <td>1</td>
                      <td>0fhdu</td>
                      <td>fhdjkhf</td>
                      <td>hfdehafj</td>
                      <td>bukuku</td>
                      <td>gfjhkd</td>
                      <td><label for="" class="badge badge-danger">Pinjam</label></td>
                      <td>
                        <button type="button" class="btn btn-primary btn-icon-text">
                          <i class="ti-check btn-icon-prepend"></i>
                          Terima
                        </button>
                        <button type="button" class="btn btn-warning btn-icon-text">
                          <i class="ti-close btn-icon-prepend"></i>
                          Tolak
                        </button>
                        <button type="button" class="btn btn-danger btn-icon-text">
                          <i class="ti-trash btn-icon-prepend"></i>
                          Hapus
                        </button>
                      </td>
                    </tr>
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
                  <option value="1">1</option>
                  <option value="2">234</option>
                  <option value="3">djdfkjf</option>
                  <option value="4">efjkoj</option>
                </select>
              </div>
              <div class="form-group mb-3">
                <label for="example-text-input" class="form-control-label">Tgl Kembali</label>
                <input class="form-control" type="date" name="tgl_kembali" id="tgl_kembali">
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

print_r($_REQUEST['pilihBuku']);

echo "<br>";

foreach ($_REQUEST['pilihBuku'] as $value) {
  pinjambuku($value);

}

include '../../template/footer.php';
?>