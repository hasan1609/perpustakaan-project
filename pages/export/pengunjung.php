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
$query = mysqli_query($conn,"SELECT * FROM absen where status = 1 and month(created)='$bulan' and year(created) = '$tahun'");



$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengunjung</title>
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
    <h2 style="text-align: center;">Data Pengunjung 01/2023</h2>
    <table>
        <thead>
            <tr>
                <th width="12%">No</th>
                <th width="23%">Nama</th>
                <th width="23%">Username</th>
                <th wifth="23%">Jabatan</th>
                <th width="23%">Tgl.Absensi</th>
            </tr>
        </thead>
        <tbody>';
        $no = 1;
            while ($row = $query->fetch_assoc()) { 
$html .='
            <tr>
                <td style="text-align: center;" width="12%">'.$no++.'</td>
                <td width="23%">'.$row["nama"].'</td>
                <td width="23 %">'.$row["username"].'</td>
                <td wifth="23 %">'.$row['jabatan'].'</td>
                <td width="23 %">'.$row["created"].'</td>
            </tr>';
            } 
$html .='
        </tbody>
    </table>
</body>
</html>';

$mpdf->WriteHTML($html);

// Output a PDF file directly to the browser
$mpdf->Output("data-absensi-pengunjung.pdf", "I");
?>