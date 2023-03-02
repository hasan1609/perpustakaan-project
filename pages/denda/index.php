<?php
include '../../template/header.php';
include '../../template/sidebar.php';
include '../../config/function-denda.php';
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-sm-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Denda</h4>
            <a href="javascript:void(0)" class="btn btn-primary btn-icon-text btn-md mt-0" onClick="exportDenda()">
            <i class="mdi mdi-printer btn-icon-prepend"></i> Export </a>
            <br>
            <br>
            <div class="table-responsive">
              <table class="table table-striped table-bordered" id="example">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Anggota</th>
                    <th>Judul Buku</th>
                    <th>Tgl Pengembalian</th>
                    <th>Denda</th>
                    <th>Status</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php Denda(); ?>
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

            <!--add Denda -->
    <div class="modal fade" id="exportDenda" tabindex="-1" role="dialog" aria-labelledby="exportDendaLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exportDendaLabel"></h5>
          </div>
          <form role="form" method="post" action="index.php">
            <div class="modal-body">
              <div class="form-group mb-3">
                <label for="example-text-input" class="form-control-label">Masukkan Tahun</label>
                <input class="form-control" type="number" name="tahun" id="tahun">
              </div>
              <div class="form-group mb-3">
                <label for="jurusan">Pilih Bulan</label>
                <select class="form-control" id="level" name="level">
                  <option value="" disabled selected>Pilih Bulan</option>
                  <option >Januari</option>
                  <option value="">Februari</option>
                  <option value="">Maret</option>
                  <option value="">April</option>
                  <option value="">Mei</option>
                  <option value="">Juni</option>
                  <option value="">Juli</option>
                  <option value="">Agustus</option>
                  <option value="">September</option>
                  <option value="">Oktober</option>
                  <option value="">November</option>
                  <option value="">Desember</option>
                </select>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" onclick="closeExport()">Close</button>
              <button type="submit" value="addDenda" name="addDenda" class="btn btn-primary">Export</button>
            </div>
          </form>
        </div>
      </div>
    </div>
<script>
 function exportDenda(){
   // $('#add-group').trigger('reset');
   $('#exportDendaLabel').html('Cetak Laporan');
   $('#exportDenda').modal('show');
   // $('#id').val('');
   }

   function closeExport() { 
    $('#exportDenda').modal('hide');
   }
</script>



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