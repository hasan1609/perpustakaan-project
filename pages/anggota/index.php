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
            <h4 class="card-title">Data Anggota</h4>
            <br>
            <div class="table-responsive">
              <table class="table table-striped table-bordered" id="example">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Fakultas</th>
                    <th>Jurusan</th>
                    <th>Jabatan</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>0fhdu</td>
                    <td>bukuku</td>
                    <td>fjdhjf</td>
                    <td>dhfghdj</td>
                    <td>
                      <button type="button" class="btn btn-md btn-social-icon btn-outline-twitter"><i class="ti-pencil"></i></button>
                      <button type="button" class="btn btn-social-icon btn-outline-youtube"><i class="ti-trash"></i></button>
                      <button type="button" class="btn btn-md btn-social-icon btn-outline-facebook"><i class="ti-printer"></i></button>
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