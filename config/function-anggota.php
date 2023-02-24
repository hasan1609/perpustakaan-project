<?php

function anggota_baru(){
    include 'koneksi.php';
    $sql = "SELECT COUNT(*) FROM `anggota` WHERE `status` = 0 ORDER BY `id` DESC;";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();
    // echo "TOTAL ANGGOTA BELUM AKTIF: " . $rows["COUNT(*)"] . "  <br><br><br><br>";
    return $rows["COUNT(*)"];

}
function anggota()
{
    include 'koneksi.php';
    $sql = "SELECT COUNT(*) FROM `anggota` WHERE `status` = 1 ORDER BY `id` DESC;";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();
    // echo "TOTAL ANGGOTA BELUM AKTIF: " . $rows["COUNT(*)"] . "  <br><br><br><br>";
    return $rows["COUNT(*)"];

}

function list_anggota(){

    include 'koneksi.php';

    $sql = "SELECT * FROM `anggota` ORDER BY `anggota`.`id`";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td><td> " . $row["nama"] . "</td><td>" . $row["fklts"] . "</td><td>" . $row["jrsn"] . "</td><td> " . $row["level"] . "        <td>
     


           <button type='button'class='btn btn-social-icon btn-outline-facebook' data-toggle='modal' data-target='#modalAnggota" . $row["id"] . "'><i class='ti-printer'></i></button>
                   <!-- Button trigger modal -->
                        <!-- Modal -->
                        <div class='modal fade' id='modalAnggota".$row['id']."' tabindex='-1' role='dialog' aria-labelledby='modalAnggotaLabel' aria-hidden='true'>
      <div class='modal-dialog' role='document'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h5 class='modal-title' id='modalAnggotaLabel'>DATA ANGGOTA</h5>
          </div>
          <div class='modal-body'>
            <table>
              <tr>
                <td>No. Reg Pendaftaran</td>
                <td>:</td>
                <td>" . $row["req_perpus"] . "</td>
              </tr>
              <tr>
                <td>Email</td>
                <td>:</td>
                <td>" . $row["email"] . "</td>
              </tr>
              <tr>
                <td>Nama</td>
                <td>:</td>
                <td>" . $row["nama"] . "</td>
              </tr>
              <tr>
                <td>NIDN</td>
                <td>:</td>
                <td>" . $row["STB"] . "</td>
              </tr>
              <tr>
                <td>Fak/Jur</td>
                <td>:</td>
                <td>" . $row["fklts"] . " \ " . $row["jrsn"] . "</td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>" . $row["almt"] . "</td>
              </tr>
            </table>
          </div>
          <div class='modal-footer'>
              <button type='button' class='btn btn-secondary' data-dismiss='modal' >Close</button>
              <button type='button' class='btn btn-primary'>Save</button>
          </div>
        </div>
      </div>
    </div>

                   </td> 

                    " ;


   



        }
    } else {
        echo "0 results";
    }

echo "</tr>";
                      
}

function viewanggota($id){

    

    include 'koneksi.php';
    $sql = "SELECT * FROM `anggota` WHERE `id` = $id";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();
    // echo "TOTAL ANGGOTA BELUM AKTIF: " . $rows["COUNT(*)"] . "  <br><br><br><br>";

    echo "
    <div class='modal fade' id='modalAnggota' tabindex='-1' role='dialog' aria-labelledby='modalAnggotaLabel' aria-hidden='true'>
      <div class='modal-dialog' role='document'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h5 class='modal-title' id='modalAnggotaLabel'></h5>
          </div>
          <div class='modal-body'>
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
                <td>" . $rows["nama"] . "</td>
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
          <div class='modal-footer'>
              <button type='button' class='btn btn-secondary' onclick='closeAnggota()'>Close</button>
              <button type='button' class='btn btn-primary'>Save</button>
          </div>
        </div>
      </div>
    </div>

<script>
  function viewAnggota(){
    // $('#add-group').trigger('reset');
    $('#modalAnggotaLabel').html('Data Anggota');
    $('#modalAnggota').modal('show');
    // $('#id').val('');
  }
  
  function closeAnggota() { 
    $('#modalAnggota').modal('hide');
  }
</script>";
}

?>