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
            <h4 class="card-title">Data Permintaan Pengguna Baru</h4>
            <div class="table-responsive">
              <table class="table table-striped table-bordered" id="example">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tgl</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>0fhdu difuyiod difyior hreifh</td>
                    <td>bukuku</td>
                    <td>
                      <a href="javascript:void(0)" onClick="viewAnggota()" class="btn btn-info btn-icon-text">
                        <i class="ti-eye btn-icon-prepend"></i>
                        Lihat
                      </a>
                      <button type="button" class="btn btn-warning btn-icon-text">
                        <i class="ti-trash btn-icon-prepend"></i>
                        Hapus
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- view -->
    <div class="modal fade" id="modalView" tabindex="-1" role="dialog" aria-labelledby="modalViewLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalViewLabel"></h5>
          </div>
          <form role="form" method="" action="">
            <div class="modal-body">
              <table>
                <tr>
                  <td>No. Reg Pendaftaran</td>
                  <td>:</td>
                  <td>sdhgfjd</td>
                </tr>
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td>sdhgfjd</td>
                </tr>
                <tr>
                  <td>NIDN</td>
                  <td>:</td>
                  <td>sdhgfjd</td>
                </tr>
                <tr>
                  <td>Fak/Jur</td>
                  <td>:</td>
                  <td>sdhgfjd</td>
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td>:</td>
                  <td>sdhgfjd</td>
                </tr>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary btn-icon-text"><i class="ti-check btn-icon-prepend"></i>Terima</button>
              <button type="button" class="btn btn-danger btn-icon-text"><i class="ti-close btn-icon-prepend"></i>Tolak</button>
              <button type="button" class="btn btn-secondary" onclick="closeView()">Close</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script>
      function viewAnggota(){
        // $('#add-group').trigger("reset");
        $('#modalViewLabel').html("Data Anggota Baru");
        $('#modalView').modal('show');
        // $('#id').val('');
      }
    </script>

<?php
include '../../template/footer.php';
?>