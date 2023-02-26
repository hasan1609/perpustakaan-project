<?php


function list_absensi(){
    include 'koneksi.php';

    $sql = "SELECT * FROM `anggota` WHERE `status` = 1 ORDER BY `anggota`.`status` ASC;";
    $result = $conn->query($sql);
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        
    }



}
?>