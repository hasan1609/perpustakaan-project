<?php
$tanggal1 = '2023-03-05'; // tanggal pertama
$tanggal2 = date("Y-m-d"); // tanggal kedua

// konversi tanggal ke format waktu Unix
$waktu1 = strtotime($tanggal1);
$waktu2 = strtotime($tanggal2);

// hitung selisih waktu dalam detik
$selisih_detik = $waktu2 - $waktu1;

// konversi selisih waktu ke format yang diinginkan (dalam contoh ini, format "hari")
$selisih_hari = round($selisih_detik / (60 * 60 * 24));

echo "Selisih antara $tanggal1 dan $tanggal2 adalah $selisih_hari hari";
?>