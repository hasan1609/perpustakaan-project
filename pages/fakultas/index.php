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
            <h4 class="card-title">Data Fakultas</h4>
            <div class="btn-wraper">
              <a href="javascript:void(0)" class="btn btn-primary btn-icon-text btn-md mt-0" onClick="addFakultas()">
                <i class="mdi mdi-plus-box btn-icon-prepend"></i> Fakultas
              </a>
              <a href="javascript:void(0)" class="btn btn-success btn-icon-text btn-md mt-0" onClick="addJurusan()">
                <i class="mdi mdi-plus-box btn-icon-prepend"></i> Jurusan
              </a>
            </div>
            <br>
            <div class="table-responsive">
              <table class="table table-striped table-bordered" id="example">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Fakultas</th>
                    <th>Nama Jurusan</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>0fhdu</td>
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


    <!-- fakultas -->
    <div class="modal fade" id="modalFakultas" tabindex="-1" role="dialog" aria-labelledby="modalFakultasLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalFakultasLabel"></h5>
          </div>
          <form role="form" method="" action="">
            <div class="modal-body">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Nama Fakultas</label>
                <input class="form-control" type="text" name="fakultas" id="fakultas">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" onclick="closeFakultas()">Close</button>
              <button type="button" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- jurusan -->
    <div class="modal fade" id="modalJurusan" tabindex="-1" role="dialog" aria-labelledby="modalJurusanLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalJurusanLabel"></h5>
          </div>
          <form role="form" method="" action="">
            <div class="modal-body">
              <div class="form-group mb-3">
                <label for="fakultas">Pilih Fakultas</label>
                <select class="form-control" id="fakultas" name="fakultas">
                  <option value="">1</option>
                </select>
              </div>
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Nama Jurusan</label>
                <input class="form-control" type="text" name="jurusan" id="jurusan">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" onclick="closeJurusan()">Close</button>
              <button type="button" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>

  <script>
    function addFakultas(){
    // $('#add-group').trigger("reset");
      $('#modalFakultasLabel').html("Tambah Fakultas");
      $('#modalFakultas').modal('show');
    // $('#id').val('');
    }
    
    function closeFakultas() { 
      $('#modalFakultas').modal('hide');
    }

    function addJurusan(){
    // $('#add-group').trigger("reset");
      $('#modalJurusanLabel').html("Tambah Jurusan");
      $('#modalJurusan').modal('show');
    // $('#id').val('');
    }
    
    function closeJurusan() { 
      $('#modalJurusan').modal('hide');
    }

  </script>
<?php
include '../../template/footer.php';
?>