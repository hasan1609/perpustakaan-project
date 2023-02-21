<?php
include '../../template/header.php';
include '../../template/sidebar.php'
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
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>hrgrretg</td>
                    <td>bukuku</td>
                    <td>
                      <button type="button" class="btn btn-md btn-social-icon btn-outline-twitter"><i class="ti-pencil"></i></button>
                      <button type="button" class="btn btn-social-icon btn-outline-youtube"><i class="ti-trash"></i></button>
                    </td>
                  </tr>
                </tbody>
              </table>
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
          <form role="form" method="" action="">
            <div class="modal-body">
              <div class="form-group mb-3">
                <label for="example-text-input" class="form-control-label">Kode Buku</label>
                <input class="form-control" type="number" name="kode" id="kode">
              </div>
              <div class="form-group mb-3">
                <label for="example-text-input" class="form-control-label">Nama Buku</label>
                <input class="form-control" type="text" name="nama" id="nama">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" onclick="closeBuku()">Close</button>
              <button type="button" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>


<script>
  function addBuku(){
    // $('#add-group').trigger("reset");
    $('#modalBukuLabel').html("Tambah Buku");
    $('#modalBuku').modal('show');
    // $('#id').val('');
  }
  
  function closeBuku() { 
    $('#modalBuku').modal('hide');
  }
</script>


<?php
include '../../template/footer.php';
?>