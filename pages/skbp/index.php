<?php
session_start();
$sessionlevel = $_SESSION['level'];
include '../../template/header.php';
include '../../template/sidebar.php';
include '../../config/function-anggota.php';
include '../../config/function-skbp1.php';
include '../../config/function-skbp2.php';
if (empty($_SESSION["level"])) {
  echo "<script type='text/javascript'>window.top.location='../../logout.php';</script>";
}
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class='col-sm-3 stretch-card grid-margin'>
        <a href='index.php?noreg=<?php echo $_SESSION['req_perpus']; ?>&nidn=<?php echo $_SESSION['STB']; ?>&nama=<?php echo $_SESSION['nama']; ?>&fklts=<?php echo $_SESSION['fklts']; ?>&jrsn=<?php echo $_SESSION['jrsn']; ?>' class='card bg-gradient-success card-img-holder text-white' style='text-decoration-line: none;'>
          <div class='card-body'>
            <img src='../../images/dashboard/circle.svg' class='card-img-absolute' alt='circle-image' />
            <h2 class='font-weight-normal'> SKBP 1</h2>
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
              <?php skbp1($_SESSION['req_perpus']); ?>
                    </tr>
                    <tr>
                    <tr>
                      <td>SKBP 2</td>
                <?php skbp2($_SESSION['req_perpus']);?>
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
if (!empty($_GET['noreg'])) {

if (check_anggota($_GET['noreg']) > 0) {
 echo "MASIH ADA TANGGUNGAN.. SILAHAKAN HUBUNGI ADMIN";
}else{
    addskbp1($_GET['noreg'], $_GET['nidn'], $_GET['nama'], $_GET['fklts'], $_GET['jrsn']);
}


}

include '../../template/footer.php';
?>