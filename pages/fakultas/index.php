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
                  <h4 class="card-title">Data Fakultas</h4>
                  <div class="btn-wraper">
                    <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary text-white mb-0 me-0"><i class="fa-solid fa-user-plus"></i>Tambah Fakultas</button>
                    <button type="button" data-toggle="modal" data-target="#exampleModal2" class="btn btn-success text-white mb-0 me-0">Tambah Jurusan</a>
                  </div>
                  <br>
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="example">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Fakultas</th>
                          <th>Nama Jurusan</th>
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