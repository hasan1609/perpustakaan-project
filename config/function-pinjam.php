

<?php


function pinjambuku($value,$tgl_kembali){
    
include 'koneksi.php';
$sql = "INSERT INTO `p_buku` (`id`, `code`, `jdl_buku`, `tgl_pnjm`, `tgl_kmbl`, `status`, `stts_buku`, `username`, `created`)
VALUES (NULL, '$value', '3333', current_timestamp(), '$tgl_kembali 07:00:00', '0', '1', '1',
current_timestamp())";

if ($conn->query($sql) === TRUE) {
    echo "sukses";
} else {

}

$conn->close();
}



?>