<?php
include '../../template/header.php';
include '../../template/sidebar.php';
include '../../config/function-anggota.php';
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-sm-3 stretch-card grid-margin">
        <a href="" class="card bg-gradient-success card-img-holder text-white" style="text-decoration-line: none;">
          <div class="card-body">
            <img src="../../images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h2 class="font-weight-normal"> SKBP 1</h2>
          </div>
        </a>
      </div>
      <div class="col-sm-3 stretch-card grid-margin">
        <a href="skbp2.php" class="card bg-gradient-primary card-img-holder text-white" style="text-decoration-line: none;">
          <div class="card-body">
            <img src="../../images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h3 class="font-weight-normal"> SKBP 2</h3>
          </div>
        </a>
      </div>
    </div>

    <!-- UNTUK TAMPILAN ADMIN -->
    <div class="row">
      <div class="col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
          <div class="row">
            <h4 class="card-title">Data SKBP 1</h4>
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
            <h4 class="card-title">Data SKBP 2</h4>
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

    <!-- UNTUK TAMPILAN USER -->
    <div class="row">
      <div class="col-sm-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
          <div class="row">
            <h4 class="card-title">Data SKBP</h4>
              <div class="table-responsive">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Tgl Pengajuan</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>SKBP 1</td>
                      <td>Nama Anggota</td>
                      <td>
                        <label for="" class="badge badge-success">Diterima</label>
                        <label for="" class="badge badge-danger">Ditolak</label>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>SKBP 2</td>
                      <td>Nama Anggota</td>
                      <td>
                        <label for="" class="badge badge-success">Diterima</label>
                        <label for="" class="badge badge-danger">Ditolak</label>
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

<?php
include '../../template/footer.php';
?>