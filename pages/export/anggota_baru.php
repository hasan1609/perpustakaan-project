<?php
include '../../config/function-export.php';
if (empty($_SESSION["level"])) {
    echo "<script type='text/javascript'>window.top.location='../../logout.php';</script>";
}
$tahun =  $_GET['tahun'];
$bulan = $_GET['bulan'];
?>

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
        @media print{
            .button{
                display: none;
            }
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
        <tbody>
            <?php export_anggota_baru($tahun,$bulan); ?>
        </tbody>
    </table>
</body>
<script type="text/javascript">
      window.onload = function() { window.print(); }
 </script>
</html>