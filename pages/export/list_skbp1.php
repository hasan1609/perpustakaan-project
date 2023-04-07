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
$query = mysqli_query($conn,"SELECT * FROM skbp_1 where status = '1' and month(created)='$bulan' and year(created) = '$tahun'");

$i = 1;

$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKBP 1</title>
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
    <h2 style="text-align: center;">DATA SKBP 1 '.$bulan.'/'.$tahun.'</h2>
    <table>
        <thead>
            <tr>
                <th width="10%">No</th>
                <th width="15%">NIDN</th>
                <th width="15%">Nama</th>
                <th width="15%">Fakultas</th>
                <th width="15%">Jurusan</th>
                <th width="15%">Tgl Pengajuan</th>
            </tr>
        </thead>
        <tbody>';
        while ($row = $query->fetch_assoc()) {
$html .='
            <tr>
                <td style="text-align: center;" width="10%">'.$i++.'</td>
                <td width="15%">'.$row['nidn'].'</td>
                <td width="15%">'.$row['nama'].'</td>
                <td width="15%">'.$row['fklts'].'</td>
                <td width="15%">'.$row['jrsn'].'</td>
                <td width="15%">'.$row['created'].'</td>
            </tr>';
        }
$html .='
        </tbody>
    </table>
</body>
</html>';

$mpdf->WriteHTML($html);

// Output a PDF file directly to the browser
$mpdf->Output("data-skbp-1.pdf", "I");
?>
