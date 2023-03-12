<?php
include '../../template/header.php';
include '../../template/sidebar.php';
include '../../config/function-anggota.php';
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-sm-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data SKBP 1</h4>
            <a href="" class="btn btn-primary btn-icon-text btn-md mt-0" onClick="addBuku()">
            <i class="mdi mdi-printer btn-icon-prepend"></i> SKBP 1 </a>
            <br>
            <br>
              <div class="table-responsive">
                <table class="table table-striped table-bordered" id="example">
                  <thead>
                    <tr>
                      <th>No. Registrasi</th>
                      <th>Nama</th>
                      <th>NIDN</th>
                      <th>Fakultas</th>
                      <th>Jurusan</th>
                      <th>Tgl Pengajuan</th>
                      <th>Status</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>SKBP 1</td>
                      <td>Nama Anggota</td>
                      <td>dfnjdnf</td>
                      <td>fdhedfb</td>
                      <td>fdsfnj</td>
                      <td>
                        <label for="" class="badge badge-info">Pending</label>
                        <label for="" class="badge badge-success">Diterima</label>
                        <label for="" class="badge badge-danger">Ditolak</label>
                      </td>
                      <td>
                      <a href='' type='submit' class='btn btn-success btn-icon-text terima_absensi'>
                        <i class='ti-check btn-icon-prepend'></i>
                        Terima
                      </a>
                      <a href='' type='submit' class='btn btn-danger btn-icon-text tolak_absensi'>
                        <i class='ti-close btn-icon-prepend'></i>
                        Tolak
                      </a>
                      <a href='' type='submit' class='btn btn-warning btn-icon-text hapus_absensi'>
                        <i class='ti-trash btn-icon-prepend'></i>
                        Hapus
                      </a>
                      <!-- jika sudah diterima -->
                      <a href="" class="btn btn-primary btn-icon-text btn-md mt-0" onClick="viewSkbp2()">
                        <i class="mdi mdi-printer btn-icon-prepend"></i> Cetak </a>
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