<?php
include '../../template/header.php';
include '../../template/sidebar.php';
include '../../config/function-anggota.php';
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-sm-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">SKBP 2</h4>
            <br>
            <div class="table-responsive">
              <table class="table table-striped table-bordered" id="example">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Anggota</th>
                    <th>Judul Buku</th>
                    <th>Denda</th>
                    <th>Status</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Nama Anggota</td>
                        <td>Judul Buku</td>
                        <td>Denda</td>
                        <td>
                            <label for="" class="badge badge-danger">Lunas</label>
                        </td>
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

    <div class="modal fade" id="modalAnggota" tabindex="-1" role="dialog" aria-labelledby="modalAnggotaLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalAnggotaLabel"></h5>
          </div>
          <div class="modal-body">
            <table>
              <tr>
                <td>No. Reg Pendaftaran</td>
                <td>:</td>
                <td>sdhgfjd</td>
              </tr>
              <tr>
                <td>Email</td>
                <td>:</td>
                <td>sdhgfjd</td>
              </tr>
              <tr>
                <td>Nama</td>
                <td>:</td>
                <td>sdhgfjd</td>
              </tr>
              <tr>
                <td>NIDN</td>
                <td>:</td>
                <td>sdhgfjd</td>
              </tr>
              <tr>
                <td>Fak/Jur</td>
                <td>:</td>
                <td>sdhgfjd</td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>sdhgfjd</td>
              </tr>
            </table>
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