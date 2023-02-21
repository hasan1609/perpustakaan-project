<?php

function buku(){
    include 'koneksi.php';
    $sql = "SELECT COUNT(*) FROM `buku` WHERE 1;";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();
    // echo "TOTAL ANGGOTA BELUM AKTIF: " . $rows["COUNT(*)"] . "  <br><br><br><br>";
    return $rows["COUNT(*)"];

}
function p_buku()
{
    include 'koneksi.php';
    $sql = "SELECT COUNT(*) FROM `p_buku` WHERE 1;";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();
    // echo "TOTAL ANGGOTA BELUM AKTIF: " . $rows["COUNT(*)"] . "  <br><br><br><br>";
    return $rows["COUNT(*)"];

}
?>