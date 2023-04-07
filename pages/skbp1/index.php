<?php
session_start();
$sessionlevel = $_SESSION["level"];
include '../../config/koneksi.php';
include '../../template/header.php';
include '../../template/sidebar.php';
if (empty($_SESSION["level"])) {
  echo "<script type='text/javascript'>window.top.location='../../logout.php';</script>";
}
$no = 1;
$sql = "SELECT * FROM skbp_1";
$result = $conn->query($sql);

?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-sm-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data SKBP 1</h4>
            <a href="javascript:void(0)" class="btn btn-primary btn-icon-text btn-md mt-0" onClick="exportSkbp1()">
            <i class="mdi mdi-printer btn-icon-prepend"></i> Export </a>
            <br>
            <br>
              <div class="table-responsive">
                <table class="table table-striped table-bordered" id="example">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>No. Registrasi</th>
                      <th>Nama</th>
                      <th>NIDN</th>
                      <th>Fakultas</th>
                      <th>Jurusan</th>
                      <th>Tgl Pengajuan</th>
                      <th>Status</th>
                      <?php 
                      if ($sessionlevel == 1) {
                        echo " <th>Opsi</th>";
                      }
                    
                      ?>
                     
                    </tr>
                  </thead>
                  <tbody>
                    <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $row["req_perpus"] ?></td>
                      <td><?= $row["nama"] ?></td>
                      <td><?= $row["nidn"] ?></td>
                      <td><?= $row["fklts"] ?></td>
                      <td><?= $row["jrsn"] ?></td>
                      <td><?= $row["created"] ?></td>
                      <td>
                        <?php if($row["status"] = "0"){
                          echo '<label for="" class="badge badge-info">Proses</label>';
                        }elseif($row["status"] = "1"){
                          echo '<label for="" class="badge badge-success">Diterima</label>';
                        }else{
                          echo '<label for="" class="badge badge-danger">Ditolak</label>';
                        }
                        ?>
                      </td>
                      <?php
                      if ($sessionlevel == 1) { ?>
                      <td>
                        <?php if($row["status"] == "0") { ?>
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
                      <?php }elseif($row["status"] == "1") { ?>
                      <a href="../export/skbp1.php?id=<?= $row['id'] ?>." target="_blank" class='btn btn-primary btn-icon-text btn-md mt-0' onClick='viewSkbp2()'>
                        <i class='mdi mdi-printer btn-icon-prepend'></i> Cetak </a>
                      <?php 
                        }else{
                          echo"hjgfdjh";
                        }
                      ?>
                      </td>
                      <?php } ?>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
        </div>
      </div>
    </div>

        <!--add Skbp1 -->
    <div class='modal fade' id='exportSkbp1' tabindex='-1' role='dialog' aria-labelledby='exportSkbp1Label' aria-hidden='true'>
      <div class='modal-dialog' role='document'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h5 class='modal-title' id='exportSkbp1Label'></h5>
          </div>
          <form role='form' method='get' action='../export/list_skbp1.php' target="_blank">
            <div class='modal-body'>
              <div class='form-group mb-3'>
                <label for='example-text-input' class='form-control-label'>Masukkan Tahun</label>
                <input class='form-control' type='number' name='tahun' id='tahun'>
              </div>
              <div class='form-group mb-3'>
                <label for='jurusan'>Pilih Bulan</label>
                <select class='form-control' id='bulan' name='bulan'>
                  <option value='' disabled selected>Pilih Bulan</option>
                  <option value='01'>Januari</option>
                  <option value='02'>Februari</option>
                  <option value='03'>Maret</option>
                  <option value='04'>April</option>
                  <option value='05'>Mei</option>
                  <option value='06'>Juni</option>
                  <option value='07'>Juli</option>
                  <option value='08'>Agustus</option>
                  <option value='09'>September</option>
                  <option value='10'>Oktober</option>
                  <option value='11'>November</option>
                  <option value='12'>Desember</option>
                </select>
              </div>
            </div>
            <div class='modal-footer'>
              <button type='button' class='btn btn-secondary' onclick='closeExport()'>Close</button>
              <button type='submit' class='btn btn-primary'>Export</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script>
    function exportSkbp1(){
      // $('#add-group').trigger('reset');
      $('#exportSkbp1Label').html('Cetak Laporan');
      $('#exportSkbp1').modal('show');
      // $('#id').val('');
      }

      function closeExport() { 
        $('#exportSkbp1').modal('hide');
      }
    </script>
<?php
include '../../template/footer.php';
?>