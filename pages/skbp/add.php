<?php
session_start();
$sessionlevel = $_SESSION['level'];
include '../../template/header.php';
include '../../template/sidebar.php';
include '../../config/function-anggota.php';
include '../../config/function-skbp2.php';
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
            <form action="add.php" method="post" enctype="multipart/form-data" name="uploader" id="uploader">
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
                            <label for="example-text-input" class="form-control-label">Chapter 1</label>
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
                
                
            <?php
                if (checkskb1($_SESSION['req_perpus']) == 1) {
                    echo "<button name='_upl' type='submit' id='_upl' value='Upload' class='btn btn-primary mt-4'>Upload</button>";
                }
            ?>
            
            
            
            </form>
          </div>
        </div>
      </div>
    </div>

<?php
include '../../template/footer.php';
print_r($_REQUEST);

if( $_POST['_upl'] == "Upload" ) { 
    if(@copy($_FILES['abstrak']['tmp_name'],"../../skbp_file/abstratk_".$_SESSION['req_perpus'].".jpg") 
    && @copy($_FILES['appedieces']['tmp_name'],"../../skbp_file/appedieces_".$_SESSION['req_perpus'].".jpg") 
    && @copy($_FILES['chapter1']['tmp_name'],"../../skbp_file/chapter1_".$_SESSION['req_perpus'].".jpg") 
    && @copy($_FILES['chapter2']['tmp_name'],"../../skbp_file/chapter2_".$_SESSION['req_perpus'].".jpg")
    && @copy($_FILES['chapter3']['tmp_name'],"../../skbp_file/chapter3_".$_SESSION['req_perpus'].".jpg")
    && @copy($_FILES['chapter4']['tmp_name'],"../../skbp_file/chapter4_".$_SESSION['req_perpus'].".jpg")
    && @copy($_FILES['conclusion']['tmp_name'],"../../skbp_file/conclusion_".$_SESSION['req_perpus'].".jpg")
    && @copy($_FILES['cover']['tmp_name'],"../../skbp_file/cover_".$_SESSION['req_perpus'].".jpg")
    && @copy($_FILES['references']['tmp_name'],"../../skbp_file/references_".$_SESSION['req_perpus'].".jpg"))
    {
        addskbp2($_SESSION['req_perpus']);
        
    echo '<b>sukses</b><br><br>';
    }
    else
    {
    echo '<b>Gagal!</b><br><br></font>';
    }
}
?>