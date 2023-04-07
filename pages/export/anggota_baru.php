<?php
session_start();
include '../../config/koneksi.php';
if (empty($_SESSION["level"])) {
    echo "<script type='text/javascript'>window.top.location='../../logout.php';</script>";
}
require '../../vendor/autoload.php';
// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();;
$bulan=$_GET['bulan'];
$tahun = $_GET['tahun'];
$query = mysqli_query($conn,"SELECT * FROM anggota where status = '1' and month(created)='$bulan' and year(created) = '$tahun'");

$i = 0;

$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggota Baru</title>
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
<button onclick="goBack()" class="button">Go Back</button>
<script>
    function goBack() {
        window.history.back();
    }
</script>
<body>
    <h2 style="text-align: center;">Data Anggota Baru 01/2023</h2>
    <table>
        <thead>
            <tr>
                <th width="10%">No.Reg</th>
                <th width="15%">Nama</th>
                <th width="10%">NIDN</th>
                <th width="10%">Fakultas</th>
                <th width="10%">Jurusan</th>
                <th width="25%">Alamat</th>
                <th width="10%">Email</th>
                <th width="10%">Tgl.Pendaftaran</th>
            </tr>
        </thead>
        <tbody>';
        while ($row = $query->fetch_assoc()) {
$html .='
            <tr>
                <td width="5%">'.$row["req_perpus"].'</td>
                <td width="20%">'.$row["nama"].'</td>
                <td width="10%">' . $row["STB"] . '</td>
                <td width="8%">' . $row["fklts"] . '</td>
                <td width="8%">' . $row["jrsn"] . '</td>
                <td width="25%">' . $row["almt"] . '</td>
                <td width="14%">' . $row["email"] . '</td>
                <td width="10%">' . $row['created'] . '</td>
            </tr>';

        }
$html .='
        </tbody>
    </table>
</body>
        
</html>';
        
$mpdf->WriteHTML($html);

// Output a PDF file directly to the browser
$mpdf->Output("data-anggota-baru.pdf", "I");
?>
        