<?php
include "../../config/function-export.php";

?>


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
        @media print{
            .button{
                display: none;
            }
        }
        table {
      
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
    <h2><center>Denda <?php echo $_GET['bulan']."/".$_GET['tahun'];  ?></center></h2>
    <table>
        <thead>
            <tr>
                <th width="5%">No</th>
                <th width="20%">Nama</th>
                <th >Total Denda</th>
                <th width="15%">Status</th>
                <th width="15%">Tgl Pembayaran</th>
            </tr>
        </thead>
        <tbody>
            <?php export_denda($_GET['bulan'], $_GET['tahun']); ?>
        </tbody>
    </table>
</body>
<script type="text/javascript">
      window.onload = function() { window.print(); }
 </script>
</html>