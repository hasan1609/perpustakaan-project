<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Pegawai.xls");




    include 'koneksi.php';

    $sql = "SELECT * FROM `p_buku` WHERE `tgl_pnjm` LIKE '%-03-%' AND `status` LIKE '2'";
    $result = $conn->query($sql);
    

    $i = 0;
    while ($row = $result->fetch_assoc()) {
     
        $i++;
    }


    ?>