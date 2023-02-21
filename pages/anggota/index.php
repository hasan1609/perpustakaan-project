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
              <?php list_anggota(); ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modalAnggota" tabindex="-1" role="dialog" aria-labelledby="modalAnggotaLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalAnggotaLabel"></h5>
          </div>
          <div class="modal-body">
            <table>
              <tr>
                <td>No. Reg Pendaftaran</td>
                <td>:</td>
                <td>sdhgfjd</td>
              </tr>
              <tr>
                <td>Email</td>
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
              <button type="button" class="btn btn-secondary" onclick="closeAnggota()">Close</button>
              <button type="button" class="btn btn-primary">Save</button>
          </div>
        </div>
      </div>
    </div>


<script>
  function viewAnggota(){
    // $('#add-group').trigger("reset");
    $('#modalAnggotaLabel').html("Data Anggota");
    $('#modalAnggota').modal('show');
    // $('#id').val('');
  }
  
  function closeAnggota() { 
    $('#modalAnggota').modal('hide');
  }
</script>
<?php
include '../../template/footer.php';
?>