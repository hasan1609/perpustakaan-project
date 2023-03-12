<?php

function check_anggota($noreg)
{
    include 'koneksi.php';
    $sql = "SELECT COUNT(*) FROM `p_buku` WHERE `status` NOT LIKE '2' AND `req_perpus` LIKE 'YTGJB356GBH19' ORDER BY `id` ASC";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();
    return $rows["COUNT(*)"];

}

?>