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
                  <h4 class="card-title">Data Buku</h4>
                  <a href="add.php" class="btn btn-xs btn-primary"><i class="fa fa-plus"></i> Tambah</a>
                  <br>
                  <br>
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="example">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Kode Buku</th>
                          <th>Nama Buku</th>
                          <th>Opsi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>0fhdu</td>
                          <td>bukuku</td>
                          <td></td>
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