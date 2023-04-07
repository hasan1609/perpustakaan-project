<?php
session_start();
include "../../config/koneksi.php";
if (empty($_SESSION["level"])) {
    echo "<script type='text/javascript'>window.top.location='../../logout.php';</script>";
}

require '../../vendor/autoload.php';
// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();;
$bulan=$_GET['bulan'];
$tahun = $_GET['tahun'];
$query = mysqli_query($conn,"SELECT * FROM p_buku where status != '0' and month(tgl_pnjm)='$bulan' and year(tgl_pnjm) = '$tahun'");

$i = 1;


$html = '

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinjam Buku</title>
    <style>
        table, td, th {
        border: 1px solid;
        }

        table {
        width: 100%;
        border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Data Peminjaman Buku '.$bulan.'/'.$tahun.'</h2>
    <table>
        <thead>
            <tr>
                <th width="5%">No</th>
                <th width="20%">Nama Anggota</th>
                <th wifth="35%">Buku</th>
                <th width="15%">Tgl.Pinjam</th>
                <th width="15%">Tgl. Kembali</th>
            </tr>
        </thead>
        <tbody>';
        while ($row = $query->fetch_assoc()) {
$html .='
            <tr>
                <td style="text-align: center;" width="5%">'.$i++.'</td>
                <td width="20%">'.$row["nama"].'</td>
                <td wifth="35%">'.$row["jdl_buku"].'</td>
                <td width="15%">'.$row["tgl_pnjm"].'</td>
                <td width="15%">'.$row["tgl_kmbl"].'</td>
            </tr>';
        }
$html .='
        </tbody>
    </table>
</body>
</html>';

$mpdf->WriteHTML($html);

// Output a PDF file directly to the browser
$mpdf->Output("data-peminjaman-buku.pdf", "I");
?>