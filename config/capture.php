<?php
include 'koneksi.php';
$img = $_POST['image'];
$username = $_POST['username'];
$folderPath = "../images/absensi/";

$image_parts = explode(";base64,", $img);
$image_type_aux = explode("image/", $image_parts[0]);
$image_type = $image_type_aux[1];

$image_base64 = base64_decode($image_parts[1]);
$fileName = uniqid() . '.png';

$file = $folderPath . $fileName;
file_put_contents($file, $image_base64);

// print_r($fileName);
    
//memasukkan data ke dalam tabel biodata
mysqli_query($conn, "INSERT into absen SET username= '$username' , foto='$fileName'");
echo "<script type='text/javascript'>window.top.location='../pages/dashboard/index.php';</script>";

?>