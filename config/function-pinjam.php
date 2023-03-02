

<?php


function pinjambuku($value,$tgl_kembali){
    
include 'koneksi.php';
$sql = "SELECT * FROM `p_buku`";

if ($conn->query($sql) === TRUE) {
    echo "sukses";
} else {

}

$conn->close();
}



?>