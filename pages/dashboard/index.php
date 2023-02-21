<?php
include '../../template/header.php';
include '../../template/sidebar.php'
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-sm-3 stretch-card grid-margin">
        <a href="" class="card bg-gradient-success card-img-holder text-white" style="text-decoration-line: none;">
          <div class="card-body">
            <img src="../../images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h5 class="font-weight-normal mb-3"> Anggota</h5>
            <h3 class="mb-2">122837</h3>
          </div>
        </a>
      </div>
      <div class="col-sm-3 stretch-card grid-margin">
        <a href="" class="card bg-gradient-info card-img-holder text-white" style="text-decoration-line: none;">
          <div class="card-body">
            <img src="../../images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h5 class="font-weight-normal mb-3"> Buku</h5>
            <h3 class="mb-2">122837</h3>
          </div>
        </a>
      </div>
      <div class="col-sm-3 stretch-card grid-margin">
        <a href="" class="card bg-gradient-warning card-img-holder text-white" style="text-decoration-line: none;">
          <div class="card-body">
            <img src="../../images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h5 class="font-weight-normal mb-3"> Anggota Baru</h5>
            <h3 class="mb-2">122837</h3>
          </div>
        </a>
      </div>
      <div class="col-sm-3 stretch-card grid-margin">
        <a href="" class="card bg-gradient-danger card-img-holder text-white" style="text-decoration-line: none;">
          <div class="card-body">
            <img src="../../images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h5 class="font-weight-normal mb-3"> Permintaan Pinjaman</h5>
            <h3 class="mb-2">122837</h3>
          </div>
        </a>
      </div>
      <div class="col-sm-3 stretch-card grid-margin">
        <a href="" class="card bg-gradient-dark card-img-holder text-white" style="text-decoration-line: none;">
          <div class="card-body">
            <img src="../../images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h5 class="font-weight-normal mb-3"> SKBP 1</h5>
            <h3 class="mb-2">122837</h3>
          </div>
        </a>
      </div>
      <div class="col-sm-3 stretch-card grid-margin">
        <a href="" class="card bg-gradient-dark card-img-holder text-white" style="text-decoration-line: none;">
          <div class="card-body">
            <img src="../../images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h5 class="font-weight-normal mb-3"> SKBP 2</h5>
            <h3 class="mb-2">122837</h3>
          </div>
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Pengguna Baru</h4>
            <canvas id="barChart"></canvas>
          </div>
        </div>
      </div>
      <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Pengunjung</h4>
            <canvas id="lineChart"></canvas>
          </div>
        </div>
      </div>
    </div>
      

<?php
include '../../template/footer.php';
?>