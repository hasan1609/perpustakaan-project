<?php
session_start();
include "../../config/koneksi.php";
if (empty($_SESSION["level"])) {
    echo "<script type='text/javascript'>window.top.location='../../logout.php';</script>";
}

require '../../vendor/autoload.php';
// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();
$bulan=$_GET['bulan'];
$tahun = $_GET['tahun'];
$query = mysqli_query($conn,"SELECT * FROM p_buku where status = '2' and month(created)='$bulan' and year(created) = '$tahun'");

$i = 1;

$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DENDA</title>
    <style>
        table, td, th {
        border: 1px solid;
        }
        table {
      
        border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h2>Data Denda '.$bulan.'/'.$tahun.'</h2>
    <table width="100%">
        <thead>
            <tr>
                <th width="5%">No</th>
                <th width="40%">Nama</th>
                <th width="20%">Total Denda</th>
                <th width="15%">Status</th>
                <th width="20%">Tgl Pembayaran</th>
            </tr>
        </thead>
        <tbody>';
        while ($row = $query->fetch_assoc()) {
$html .='
            <tr>
                <td width="5%"><center>'. $i++ .'</center></td>
                <td width="40%"><center>'. $row["nama"] .'</center></td>
                <td width="20%"><center>'. $row["denda"] .'</center></td>
                <td width="15%"><center>LUNAS</center></td>
                <td width="20%"><center>'. $row["created"] .'</center></td>
            </tr>';
            }
$html .='
        </tbody>
    </table>
</body>

</html>';

$mpdf->WriteHTML($html);

// Output a PDF file directly to the browser
$mpdf->Output("data-denda.pdf", "I");
?>

