<?php

function check_anggota($noreg)
{
    include 'koneksi.php';
    $sql = "SELECT COUNT(*) FROM `p_buku` WHERE `status` NOT LIKE '2' AND `req_perpus` LIKE 'YTGJB356GBH19' ORDER BY `id` ASC";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();
    return $rows["COUNT(*)"];

}
function addskbp1($noreg,$nidn,$nama,$fklts,$jrns){
    include 'koneksi.php';


    $sql = "INSERT INTO `skbp_1` (`id`, `req_perpus`, `status`, `nidn`, `nama`, `fklts`, `jrsn`, `created`) VALUES (NULL, '$noreg', '0', '$nidn', '$nama', '$fklts', '$jrns', current_timestamp())";


    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>window.top.location='index.php?sukses';</script>";
       
    } else {
     
    }

    $conn->close();

    
}


?>