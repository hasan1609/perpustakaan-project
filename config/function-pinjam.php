

<?php


function pinjambuku($value){
    
include 'koneksi.php';
$sql = "INSERT INTO `p_buku` (`id`, `code`, `jdl_buku`, `tgl_pnjm`, `tgl_kmbl`, `status`, `stts_buku`, `username`, `created`)
VALUES (NULL, '$value', '3333', current_timestamp(), DATE_ADD(CURRENT_TIMESTAMP(), INTERVAL 6 DAY_HOUR), '0', '1', '1',
current_timestamp())";

if ($conn->query($sql) === TRUE) {
    echo "sukses";
} else {

}

$conn->close();
}



?>