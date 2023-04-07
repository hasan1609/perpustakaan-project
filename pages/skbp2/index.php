<?php
session_start();
include '../../config/koneksi.php';
if (empty($_SESSION["level"])) {
  echo "<script type='text/javascript'>window.top.location='../../logout.php';</script>";
}
$sessionlevel = $_SESSION["level"];
include '../../template/header.php';
include '../../template/sidebar.php';
$sql = "SELECT skbp_2.*, anggota.nama, anggota.STB, anggota.fklts, anggota.jrsn FROM skbp_2 INNER JOIN anggota ON skbp_2.req_perpus = anggota.req_perpus";
$result = $conn->query($sql);
?>

<div class="main-panel">
  <div class="content-wrapper">
    <!-- UNTUK TAMPILAN ADMIN -->
    <div class="row">
      <div class="col-sm-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data SKBP 2</h4>
            <a href="javascript:void(0)" class="btn btn-primary btn-icon-text btn-md mt-0" onClick="exportSkbp2()">
            <i class="mdi mdi-printer btn-icon-prepend"></i> Export </a>
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
                      <?php if($sessionlevel = 1){ ?>
                      <th>Status</th>
                      <th>Opsi</th>
                      <?php } ?>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while ($row = $result->fetch_assoc()) {?>
                    <tr>
                      <td><?= $row['req_perpus'] ?></td>
                      <td><?= $row['nama'] ?></td>
                      <td><?= $row['STB'] ?></td>
                      <td><?= $row['fklts'] ?></td>
                      <td><?= $row['jrsn'] ?></td>
                      <td><?= $row['created'] ?></td>
                      <?php if($sessionlevel = 1){ ?>
                      <td><?php if($row['status'] == "0"){
                        echo'<label for="" class="badge badge-info">Pending</label>';
                      }elseif($row['status'] = "1"){
                        echo'<label for="" class="badge badge-success">Diterima</label>';
                      }else{
                        echo'<label for="" class="badge badge-danger">Ditolak</label>';
                      }
                      ?>
                      </td>
                      <td>
                        <a href="" data-toggle="modal" data-target="#modalSkbp2".<?= $row["id"] ?>." class="btn btn-info btn-icon-text btn-md mt-0">
                          <i class="mdi mdi-eye btn-icon-prepend"></i> View </a>

                          <div class="modal fade" id="modalSkbp2" tabindex="-1" role="dialog" aria-labelledby="modalSkbp2Label" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="modalSkbp2Label"></h5>
                                </div>
                                  <div class="modal-body">
                                    <input type="hidden" name="id" value="<?= $row['id']?>">
                                    <table>
                                      <tr>
                                        <td>Abstrak-Toc</td>
                                        <td>:</td>
                                        <?php if($row['Abstrak_Toc'] != null) {
                                          echo'<td><i class="mdi mdi-check btn-icon-prepend"></i></td>';
                                        }else{
                                          echo'<td><i class="mdi mdi-close btn-icon-prepend"></i></td>';
                                        }
                                        ?>
                                      </tr>
                                      <tr>
                                        <td>Appedieces</td>
                                        <td>:</td>
                                        <?php if($row['Appedieces'] != null) {
                                          echo'<td><i class="mdi mdi-check btn-icon-prepend"></i></td>';
                                        }else{
                                          echo'<td><i class="mdi mdi-close btn-icon-prepend"></i></td>';
                                        }
                                        ?>
                                      </tr>
                                      <tr>
                                        <td>Chapter 1</td>
                                        <td>:</td>
                                        <?php if($row['Chapter_1'] != null) {
                                          echo'<td><i class="mdi mdi-check btn-icon-prepend"></i></td>';
                                        }else{
                                          echo'<td><i class="mdi mdi-close btn-icon-prepend"></i></td>';
                                        }
                                        ?>
                                      </tr>
                                      <tr>
                                        <td>Chapter 2</td>
                                        <td>:</td>
                                        <?php if($row['Chapter_2'] != null) {
                                          echo'<td><i class="mdi mdi-check btn-icon-prepend"></i></td>';
                                        }else{
                                          echo'<td><i class="mdi mdi-close btn-icon-prepend"></i></td>';
                                        }
                                        ?>
                                      </tr>
                                      <tr>
                                        <td>Chapter 3</td>
                                        <td>:</td>
                                        <?php if($row['Chapter_3'] != null) {
                                          echo'<td><i class="mdi mdi-check btn-icon-prepend"></i></td>';
                                        }else{
                                          echo'<td><i class="mdi mdi-close btn-icon-prepend"></i></td>';
                                        }
                                        ?>
                                      </tr>
                                      <tr>
                                        <td>Chapter 4</td>
                                        <td>:</td>
                                        <?php if($row['Chapter_4'] != null) {
                                          echo'<td><i class="mdi mdi-check btn-icon-prepend"></i></td>';
                                        }else{
                                          echo'<td><i class="mdi mdi-close btn-icon-prepend"></i></td>';
                                        }
                                        ?>
                                      </tr>
                                      <tr>
                                        <td>Conclusiuon</td>
                                        <td>:</td>
                                        <?php if($row['Conclusiuon'] != null) {
                                          echo'<td><i class="mdi mdi-check btn-icon-prepend"></i></td>';
                                        }else{
                                          echo'<td><i class="mdi mdi-close btn-icon-prepend"></i></td>';
                                        }
                                        ?>
                                      </tr>
                                      <tr>
                                        <td>Cover</td>
                                        <td>:</td>
                                        <?php if($row['Cover'] != null) {
                                          echo'<td><i class="mdi mdi-check btn-icon-prepend"></i></td>';
                                        }else{
                                          echo'<td><i class="mdi mdi-close btn-icon-prepend"></i></td>';
                                        }
                                        ?>
                                      </tr>
                                      <tr>
                                        <td>References</td>
                                        <td>:</td>
                                        <?php if($row['References'] != null) {
                                          echo'<td><i class="mdi mdi-check btn-icon-prepend"></i></td>';
                                        }else{
                                          echo'<td><i class="mdi mdi-close btn-icon-prepend"></i></td>';
                                        }
                                        ?>
                                      </tr>
                                    </table>
                                  </div>
                                  <div class="modal-footer">
                                    <?php if($row['status'] = 0) { ?>
                                    <a href='../../config/skbp2.php?terima=<?= $row["id"]; ?>' type='submit' class='btn btn-primary btn-icon-text terima_skbp2'><i class='ti-check btn-icon-prepend'></i>Terima</a>
                                    <a href='../../config/skbp2.php?tolak=<?= $row["id"]; ?>' type='submit' class='btn btn-danger btn-icon-text tolak_skbp2'><i class='ti-close btn-icon-prepend'></i>Tolak</a>
                                    <?php } ?>
                                    <button type='button' class='btn btn-secondary'data-dismiss="modal">Close</button>
                                  </div>
                              </div>
                            </div>
                          </div>
                          <!-- jika sudah diterima -->
                        <a href="../export/skbp2.php?id=<?= $row['req_perpus'] ?>" target="_blank" class="btn btn-primary btn-icon-text btn-md mt-0">
                          <i class="mdi mdi-printer btn-icon-prepend"></i> Cetak </a>
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

    <!--Exports Skbp2 -->
    <div class='modal fade' id='exportSkbp2' tabindex='-1' role='dialog' aria-labelledby='exportSkbp2Label' aria-hidden='true'>
      <div class='modal-dialog' role='document'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h5 class='modal-title' id='exportSkbp2Label'></h5>
          </div>
          <form role='form' method='get' action='../export/list_skbp2.php' target="_blank">
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

   $(document).ready(function(){
        $('#myModal').on('show.bs.modal', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'detail.php',
                data :  'rowid='+ rowid,
                success : function(data){
                $('.fetched-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });

    function exportSkbp2(){
      // $('#add-group').trigger('reset');
      $('#exportSkbp2Label').html('Cetak Laporan');
      $('#exportSkbp2').modal('show');
      // $('#id').val('');
      }

      function closeExport() { 
        $('#exportSkbp2').modal('hide');
      }
</script>

<?php
include '../../template/footer.php';
?>