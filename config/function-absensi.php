<?php


function list_absensi(){
    include 'koneksi.php';

    $sql = "SELECT * FROM `absen` WHERE `status` = 0 ORDER BY `absen`.`id` DESC";
    $result = $conn->query($sql);
    // output data of each row
    $i = 0;
    while ($row = $result->fetch_assoc()) {
        $i++;
        echo "  <tr>
                    <td>".$i."</td>
                    <td>".$row['username']."</td>
                    <td>
                      <a href='index.php?terima=" . $row['id'] . "' type='submit' class='btn btn-success btn-icon-text'>
                        <i class='ti-check btn-icon-prepend'></i>
                        Terima
                      </a>
                      <a href='index.php?tolak=" . $row['id'] . "' type='submit' class='btn btn-danger btn-icon-text'>
                        <i class='ti-close btn-icon-prepend'></i>
                        Tolak
                      </a>
                      <a href='index.php?hapus=" . $row['id'] . "' type='submit' class='btn btn-warning btn-icon-text'>
                        <i class='ti-trash btn-icon-prepend'></i>
                        Hapus
                      </a>
                    </td>
                 ";
        
    }
echo ' </tr>';


}


function list_absensi_terima()
{
    include 'koneksi.php';

    $sql = "SELECT * FROM `absen` WHERE `status` = 1 ORDER BY `absen`.`id` DESC";
    $result = $conn->query($sql);
    // output data of each row
    $i = 0;
    while ($row = $result->fetch_assoc()) {
        $i++;
        echo "  <tr>
                    <td>" . $i . "</td>

                    <td>".$row['username']."</td>
                    <td>bukuku</td>
        
                    </td>
                 ";

    }
    echo ' </tr>';


}

function terima_absensi_anggota($id)
{


    include 'koneksi.php';
    $sql = "UPDATE `absen` SET `status` = '1' WHERE `absen`.`id` = $id";
    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>window.top.location='index.php';</script>";
        exit;

    } else {
        
    }
    $conn->close();
}


function tolak_absensi_anggota($id)
{


    include 'koneksi.php';
    $sql = "UPDATE `absen` SET `status` = '2' WHERE `absen`.`id` = $id";
    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>window.top.location='index.php';</script>";
        exit;

    } else {
        
    }
    $conn->close();
}


function delete_absensi_anggota($id)
{


    include 'koneksi.php';
    $sql = "DELETE FROM `absen` WHERE `absen`.`id` = $id";
    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>window.top.location='index.php';</script>";
        exit;

    } else {
        
    }
    $conn->close();
}

?>