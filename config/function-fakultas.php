<?php


function addFakultas($fklts){
    include 'koneksi.php';
  
    $sql = "INSERT INTO `fakultas` (`id`, `nama`) VALUES (NULL, '$fklts')";

    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>window.top.location='index.php';</script>";
    } else {
     
    }

    $conn->close();

    
}


function list_fakultas(){


    include 'koneksi.php';

    $sql = "SELECT * FROM `fakultas`";
    $result = $conn->query($sql);


    $i = 0;
    while ($row = $result->fetch_assoc()) {
        $i++;
        echo "<tr>
                    <td>" . $i . "</td>
                    <td>".strtoupper($row['nama'])."</td>
                    <td>
                      <button type='button' class='btn btn-primary btn-icon-text' onClick='editFakultas" . $row['id'] . "()'><i class='ti-pencil'></i></button>
                     
                         <!-- editFakultas -->
                            <div class='modal fade' id='editFakultas" . $row['id'] . "' tabindex='-1' role='dialog' aria-labelledby='editFakultasLabel' aria-hidden='true'>
                            <div class='modal-dialog' role='document'>
                                <div class='modal-content'>
                                <div class='modal-header'>
                                    <h5 class='modal-title' id='editFakultasLabel'></h5>
                                </div>
                                <form role='form' method='post' action='index.php'>
                                    <div class='modal-body'>
                                    <div class='form-group'>
                                        <label for='example-text-input' class='form-control-label'>Nama Fakultas</label>
                                        
                                        <input class='form-control' type='hidden' name='id' id='id' value='". $row['id']."'>
                                        <input class='form-control' type='text' name='fakultas' id='fakultas' value='" . $row['nama'] . "'>
                                    </div>
                                    </div>
                                    <div class='modal-footer'>
                                    <button type='button' class='btn btn-secondary' onclick='closeFakultas()'>Close</button>
                                    <button type='submit'  value='updatefakultas' name='updatefakultas' class='btn btn-primary'>Save</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                            </div>
                     
                     <script>
                         function editFakultas" . $row['id'] . "(){
                        // $('#add-group').trigger('reset');
                        $('#editFakultasLabel').html('Edit Fakultas');
                        $('#editFakultas" . $row['id'] . "').modal('show');
                        // $('#id').val('');
                        }
                     </script>
                     
                     
                      <a href=index.php?hapusf=" . $row['id'] . " type='submit' class='btn btn-danger btn-icon-text'><i class='ti-trash'></i></a>
                    </td>
                 ";

        }
        echo " </tr>";

}




function list_fakultas2()
{


    include 'koneksi.php';

    $sql = "SELECT * FROM `fakultas`";
    $result = $conn->query($sql);


    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "    <option value='" . $row['nama'] . "'>". $row['nama']."</option>
                 ";

    }


}




function addJurusan($fklts, $jrsn)
{

    include 'koneksi.php';

    $sql = "INSERT INTO `jurusan` (`id`, `fklts`, `jrsn`) VALUES (NULL, '$fklts', '$jrsn');";

    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>window.top.location='index.php';</script>";
    } else {

    }

    $conn->close();


}

function list_jurusan()
{


    include 'koneksi.php';

    $sql = "SELECT * FROM `jurusan`";
    $result = $conn->query($sql);

    $i = 0;
    while ($row = $result->fetch_assoc()) {
        $i++;
        echo "<tr>
                    <td>" . $i . "</td>
                    <td>".strtoupper($row['fklts'])."</td>
                    <td>".strtoupper($row['jrsn'])."</td>
                    <td>
                      <button type='button' class='btn btn-primary btn-icon-text' onClick='editJurusan". $row['id']."()'><i class='ti-pencil'></i></button>
                        <!-- edit jurusan -->
                        <div class='modal fade' id='editJurusan" . $row['id'] . "' tabindex='-1' role='dialog' aria-labelledby='editJurusanLabel' aria-hidden='true'>
                        <div class='modal-dialog' role='document'>
                            <div class='modal-content'>
                            <div class='modal-header'>
                                <h5 class='modal-title' id='editJurusanLabel'></h5>
                            </div>
                            <form role='form' method='post' action='index.php'>
                                <div class='modal-body'>
        
                                    <div class='form-group'>
                                    <label for='example-text-input' class='form-control-label'>Nama Fakultas</label>
                                    <input class='form-control' type='text' name='jurusan' id='jurusan' value='" . $row['fklts'] . "'  disabled>
                                </div>
                                <div class='form-group'>
                                    <label for='example-text-input' class='form-control-label'>Nama Jurusan</label>
                                    <input class='form-control' type='text' name='jurusan' id='jurusan' value='". $row['jrsn']."' >
                                    <input class='form-control' type='hidden' name='id' id='id' value='" . $row['id'] . "' >
                                </div>
                                </div>
                                <div class='modal-footer'>
                                <button type='button' class='btn btn-secondary' onclick='closeJurusan()'>Close</button>
                                <button type='submit'  value='updatejurusan' name='updatejurusan' class='btn btn-primary'>Save</button>
                                </div>
                            </form>
                            </div>
                        </div>
                        </div>
                      
                      
                      <script>
                          function editJurusan" . $row['id'] . "(){
                            // $('#add-group').trigger('reset');
                            $('#editJurusanLabel').html('Edit Jurusan');
                            $('#editJurusan" . $row['id'] . "').modal('show');
                            // $('#id').val('');
                            }
                      </script>
                      
                      
                      <a  href=index.php?hapusj=" . $row['id'] . " type='submit'  class='btn btn-danger btn-icon-text'><i class='ti-trash'></i></a>
                    </td>
             
                 ";

    }
    echo " </tr>";

}


function updatefakultas($id, $fklts)
{

    include 'koneksi.php';

  
        $sql = "UPDATE `fakultas` SET `nama` = '$fklts' WHERE `fakultas`.`id` = $id";
    

    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>window.top.location='index.php';</script>";
    } else {

    }

    $conn->close();


}


function deletefakultas($id)
{


    include 'koneksi.php';
    $sql = "DELETE FROM `fakultas` WHERE `fakultas`.`id` = $id";
    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>window.top.location='index.php';</script>";
        exit;

    } else {

    }
    $conn->close();
}





function updatejurusan($id, $jrsn)
{

    include 'koneksi.php';


    $sql = "UPDATE `jurusan` SET `jrsn` = '$jrsn' WHERE `jurusan`.`id` = $id";


    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>window.top.location='index.php';</script>";
    } else {

    }

    $conn->close();


}


function deletejurusan($id)
{


    include 'koneksi.php';
    $sql = " DELETE FROM `jurusan` WHERE `jurusan`.`id` = $id";
    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>window.top.location='index.php';</script>";
        exit;

    } else {
        // echo "Error deleting record: " . $conn->error;
    }
    $conn->close();


}
?>