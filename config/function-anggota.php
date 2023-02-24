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
                            <button type='button' class='btn btn-primary'>Cetak</button>
                        </div>
                        </div>
                    </div>
                    </div>


                 <!-- Button delete anggota -->

                   <button type='button' class='btn btn-social-icon btn-outline-youtube' data-toggle='modal' data-target='#modalDeleteAnggota" . $row["id"] . "'><i class='ti-trash'></i></button>
          
                   <!-- Button trigger modal -->
                        <!-- Modal -->
                        <div class='modal fade' id='modalDeleteAnggota" . $row['id'] . "' tabindex='-1' role='dialog' aria-labelledby='modalDeleteAnggotaLabel' aria-hidden='true'>
                    <div class='modal-dialog' role='document'>
                        <div class='modal-content'>
                        <div class='modal-header'>
                            <h5 class='modal-title' id='modalDeleteAnggotaLabel'>HAPUS ANGGOTA</h5>
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
                            
                             <form role='form' method='get' action='index.php'>
                                <input type='hidden' id='hapus' name='hapus' value=" . $row["id"] . " />
                                <button type='submit' class='btn btn-danger'>Hapus</button>
                            </form>
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

function deletanggota($id){

    

    include 'koneksi.php';
    $sql = "DELETE FROM `anggota` WHERE `anggota`.`id` = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    $conn->close();
}

?>