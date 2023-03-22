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
      <div class="col-sm-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">SKBP 2</h3>
            <br>
            <h4>Upload File Skripsi</h4>
            <form action="" method="post">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group mb-3">
                            <label for="example-text-input" class="form-control-label">Abstrak-Toc</label>
                            <input class="form-control" type="file" name="abstrak" id="abstrak">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group mb-3">
                            <label for="example-text-input" class="form-control-label">Appedieces</label>
                            <input class="form-control" type="file" name="appedieces" id="appedieces">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group mb-3">
                            <label for="example-text-input" class="form-control-label">Chapter 01</label>
                            <input class="form-control" type="file" name="chapter1" id="chapter1">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group mb-3">
                            <label for="example-text-input" class="form-control-label">Chapter 2</label>
                            <input class="form-control" type="file" name="chapter2" id="chapter2">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group mb-3">
                            <label for="example-text-input" class="form-control-label">Chapter 3</label>
                            <input class="form-control" type="file" name="chapter3" id="chapter3">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group mb-3">
                            <label for="example-text-input" class="form-control-label">Chapter 4</label>
                            <input class="form-control" type="file" name="chapter4" id="chapter4">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group mb-3">
                            <label for="example-text-input" class="form-control-label">Conclusiuon</label>
                            <input class="form-control" type="file" name="conclusion" id="conclusion">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group mb-3">
                            <label for="example-text-input" class="form-control-label">Cover</label>
                            <input class="form-control" type="file" name="cover" id="cover">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group mb-3">
                            <label for="example-text-input" class="form-control-label">References</label>
                            <input class="form-control" type="file" name="references" id="references">
                        </div>
                    </div>
                    
                </div>
                
                <button type="button" class="btn btn-primary mt-4">Upload</button>
            </form>
          </div>
        </div>
      </div>
    </div>

<?php
include '../../template/footer.php';
?>