<?php

function check_anggota($noreg)
{
    include 'koneksi.php';
    $sql = "SELECT COUNT(*) FROM `p_buku` WHERE `status` NOT LIKE '2' AND `req_perpus` LIKE '$noreg' ORDER BY `id` ASC";
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
        echo "<script type='text/javascript'>window.top.location='index.php?gagal';</script>";
     
    }

    $conn->close();

    
}

function skbp1($noreg){


    echo "  <td>noreg</td>
            <td>tgl</td>
            <td>
            <label for='' class='badge badge-info'>Pending</label>
            <label for='' class='badge badge-success'>Diterima</label>
            <label for='' class='badge badge-danger'>Ditolak</label>
            </td>";
}

?>