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
      <div class="col-sm-3 stretch-card grid-margin">
        <a href="" class="card bg-gradient-success card-img-holder text-white" style="text-decoration-line: none;">
          <div class="card-body">
            <img src="../../images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h2 class="font-weight-normal"> SKBP 1</h2>
          </div>
        </a>
      </div>
      <div class="col-sm-3 stretch-card grid-margin">
        <a href="add.php" class="card bg-gradient-primary card-img-holder text-white" style="text-decoration-line: none;">
          <div class="card-body">
            <img src="../../images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h3 class="font-weight-normal"> SKBP 2</h3>
          </div>
        </a>
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
                      <th>Nama</th>
                      <th>No. Registrasi</th>
                      <th>Tgl Pengajuan</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>SKBP 1</td>
                      <td>1</td>
                      <td>fdsfnj</td>
                      <td>
                        <label for="" class="badge badge-info">Pending</label>
                        <label for="" class="badge badge-success">Diterima</label>
                        <label for="" class="badge badge-danger">Ditolak</label>
                      </td>
                    </tr>
                    <tr>
                    <tr>
                      <td>SKBP 2</td>
                      <td>1</td>
                      <td>fdsfnj</td>
                      <td>
                        <label for="" class="badge badge-success">Diterima</label>
                        <label for="" class="badge badge-danger">Ditolak</label>
                      </td>
                    </tr>
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