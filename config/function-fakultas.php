<?php


function addFakultas($code,$fklts){
    include 'koneksi.php';
  
    $sql = "INSERT INTO `fakultas` (`id`, `id_fklts`, `nama`) VALUES (NULL, '$code', '$fklts')";

    if ($conn->query($sql) === TRUE) {
         echo "New record created successfully";
    } else {
     
    }

    $conn->close();

    
}


function list_fakultas(){


    include 'koneksi.php';

    $sql = "SELECT * FROM `fakultas`";
    $result = $conn->query($sql);


        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "                  <tr>
                    <td>".$row['id']."</td>
                    <td>".$row['nama']."</td>
                    <td>
                      <button type='button' class='btn btn-md btn-social-icon btn-outline-twitter' onClick='editFakultas" . $row['id'] . "()'><i class='ti-pencil'></i></button>
                     
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
                                         <input class='form-control' type='hidden' name='code' id='code' value='" . $row['id_fklts'] . "'>
                                        <input class='form-control' type='text' name='fakultas' id='fakultas' value='". $row['nama']."'>
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
                     
                     
                      <button type='button' class='btn btn-social-icon btn-outline-youtube'><i class='ti-trash'></i></button>
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
        echo "    <option value='". $row['id_fklts']."'>". $row['nama']."</option>
                 ";

    }


}




function addJurusan($fklts, $jrsn)
{

    include 'koneksi.php';

    $sql = "INSERT INTO `jurusan` (`id`, `id_fklts`, `jrsn`) VALUES (NULL, '$fklts', '$jrsn');";

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


    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo " 
                  <tr>
                    <td>1</td>
                    <td>".$row['id_fklts']."</td>
                    <td>".$row['jrsn']."</td>
                    <td>
                      <button type='button' class='btn btn-md btn-social-icon btn-outline-twitter' onClick='editJurusan()'><i class='ti-pencil'></i></button>
                      <button type='button' class='btn btn-social-icon btn-outline-youtube'><i class='ti-trash'></i></button>
                    </td>
             
                 ";

    }
    echo " </tr>";

}
?>