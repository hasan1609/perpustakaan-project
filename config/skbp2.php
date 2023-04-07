<?php

include 'koneksi.php';

if($_GET['terima']){
    $id = $_GET['terima'];
    $sql = "UPDATE skbp_2 SET status = '1' WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>window.top.location='../pages/skbp2/index.php'</script>";
        $_SESSION["tolak"] = 'Data Berhasil Diterima';
        exit;

    } else {

    }
}elseif($_GET['tolak']){
    $id = $_GET['tolak'];
    $sql = "UPDATE skbp_2 SET status = '2' WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>window.top.location='../pages/skbp2/index.php';</script>";
        $_SESSION["tolak"] = 'Data Berhasil Ditolak';
        exit;

    } else {

    }
}