<?php
session_start();
$sessionlevel = 1;
include '../../template/header.php';
include '../../template/sidebar.php';
include '../../config/function-anggota.php';
?>

<div class="main-panel">
  <div class="content-wrapper">
    <!-- UNTUK TAMPILAN ADMIN -->
    <div class="row">
      <div class="col-sm-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data SKBP 2</h4>
            <a href="" class="btn btn-primary btn-icon-text btn-md mt-0" onClick="addBuku()">
            <i class="mdi mdi-printer btn-icon-prepend"></i> SKBP 1 </a>
            <br>
            <br>
              <div class="table-responsive">
                <table class="table table-striped table-bordered" id="example">
                  <thead>
                  <tr>
                      <th>No. Reg</th>
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
                        <a href="javascript:void(0)" class="btn btn-info btn-icon-text btn-md mt-0" onClick="viewSkbp2()">
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

<?php
include '../../template/footer.php';
?>