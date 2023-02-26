<?php
include '../../template/header.php';
include '../../template/sidebar.php'
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-sm-5 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
          <h3 class="card-title">Data Absensi Pengguna</h3>
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
                  <tr>
                    <td>1</td>
                    <td>0fhdu</td>
                    <td>bukuku</td>
                  </tr>
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
                  <tr>
                    <td>0fhdu</td>
                    <td>bukuku</td>
                    <td>
                      <button type="button" class="btn btn-success btn-icon-text">
                        <i class="ti-check btn-icon-prepend"></i>
                        Terima
                      </button>
                      <button type="button" class="btn btn-danger btn-icon-text">
                        <i class="ti-close btn-icon-prepend"></i>
                        Tolak
                      </button>
                      <button type="button" class="btn btn-warning btn-icon-text">
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

<?php
include '../../template/footer.php';
?>