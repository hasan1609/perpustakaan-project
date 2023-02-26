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
                      <button type='button' class='btn btn-md btn-social-icon btn-outline-twitter' onClick='editFakultas()'><i class='ti-pencil'></i></button>
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
        echo "New record created successfully";
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