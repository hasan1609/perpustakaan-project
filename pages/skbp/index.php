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
                      <a href="javascript:void(0)" class="btn btn-primary btn-icon-text btn-md mt-0" onClick="viewSkbp2()">
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
                        <a href="javascript:void(0)" class="btn btn-primary btn-icon-text btn-md mt-0" onClick="viewSkbp2()">
                          <i class="mdi mdi-eye btn-icon-prepend"></i> View </a>
                          <!-- jika sudah diterima -->
                        <a href="javascript:void(0)" class="btn btn-primary btn-icon-text btn-md mt-0" onClick="viewSkbp2()">
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
    </div>

            <!--view Skbp2 -->
    <div class="modal fade" id="modalSkbp2" tabindex="-1" role="dialog" aria-labelledby="modalSkbp2Label" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalSkbp2Label"></h5>
          </div>
          <form role="form" method="post" action="index.php">
            <div class="modal-body">
            </div>
            <div class="modal-footer">
            <a href=''type='submit' class='btn btn-primary btn-icon-text terima_skbp2'><i class='ti-check btn-icon-prepend'></i>Terima</a>
            <a href='' type='submit' class='btn btn-danger btn-icon-text tolak_skbp2'><i class='ti-close btn-icon-prepend'></i>Tolak</a>
            <button type='button' class='btn btn-secondary' onclick='closeView()'>Close</button>
            </div>
          </form>
        </div>
      </div>
    </div>
<script>
 function viewSkbp2(){
   // $('#add-group').trigger('reset');
   $('#modalSkbp2Label').html('Data SKBP 2');
   $('#modalSkbp2').modal('show');
   // $('#id').val('');
   }
</script>

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