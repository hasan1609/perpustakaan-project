<?php
include '../../template/header.php';
include '../../template/sidebar.php';
include '../../config/function-anggota.php';
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-sm-3 stretch-card grid-margin">
        <button class="card bg-gradient-success card-img-holder text-white" style="text-decoration-line: none;">
          <div class="card-body">
            <img src="../../images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h2 class="font-weight-normal"> SKBP 1</h2>
          </div>
        </button>
      </div>
      <div class="col-sm-3 stretch-card grid-margin">
        <button class="card bg-gradient-primary card-img-holder text-white" style="text-decoration-line: none;">
          <div class="card-body">
            <img src="../../images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h3 class="font-weight-normal"> SKBP 2</h3>
          </div>
        </button>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
          <div class="row">
            <h4 class="card-title">Riwayat SKBP 1</h4>
              <div class="table-responsive">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tgl Pengajuan</th>
                      <th>Status</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Nama Anggota</td>
                      <td>
                        <label for="" class="badge badge-danger">Lunas</label>
                      </td>
                      <td>
                        <button type="button" class="btn btn-md btn-social-icon btn-outline-twitter"><i class="ti-printer"></i></button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
          <div class="row">
            <h4 class="card-title">Riwayat SKBP 2</h4>
              <div class="table-responsive">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tgl Pengajuan</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Nama Anggota</td>
                      <td>
                        <label for="" class="badge badge-danger">Diterima</label>
                      </td>
                      <td>
                          <button type="button" class="btn btn-md btn-social-icon btn-outline-facebook"><i class="ti-eye"></i></button>
                        <button type="button" class="btn btn-md btn-social-icon btn-outline-twitter"><i class="ti-printer"></i></button>
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

    <div class="modal fade" id="modalSkbp" tabindex="-1" role="dialog" aria-labelledby="modalAnggotaLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalAnggotaLabel"></h5>
          </div>
          <div class="modal-body">
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" onclick="closeAnggota()">Close</button>
              <button type="button" class="btn btn-primary">Save</button>
          </div>
        </div>
      </div>
    </div>


<script>
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
include '../../template/footer.php';
?>