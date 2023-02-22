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
         
            <button name='view' value='". $row["id"]."' class='btn btn-social-icon btn-outline-facebook' href='javascript:void(0)' onClick='viewAnggota()'><i class='ti-printer'></i></button>
            <button name='print' value='" . $row["id"] . "' class='btn btn-social-icon btn-outline-youtube'><i class='ti-trash'></i></button>


                    </td>" ;


        }
    } else {
        echo "0 results";
    }

echo "</tr>";
                      


}

?>