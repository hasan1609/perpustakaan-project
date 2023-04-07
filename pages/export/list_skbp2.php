<?php
session_start();
include "../../config/koneksi.php";
if (empty($_SESSION["level"])) {
    echo "<script type='text/javascript'>window.top.location='../../logout.php';</script>";
}

require '../../vendor/autoload.php';
// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf([
    'mode' => 'utf-8',
    'format' => 'A4-L',
    'orientation' => 'L'
]);
$bulan=$_GET['bulan'];
$tahun = $_GET['tahun'];
$query = mysqli_query($conn,"SELECT skbp_2.*, anggota.nama FROM skbp_2 INNER JOIN anggota ON skbp_2.req_perpus = anggota.req_perpus where skbp_2.status = '1' and month(skbp_2.created)='$bulan' and year(skbp_2.created) = '$tahun'");

$i = 1;

$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKBP 2</title>
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
    <h2 style="text-align: center;">Data SKBP 2  '.$bulan.'/'.$tahun.'</h2>
    <table>
        <thead>
            <tr>
                <th width="5%" rowspan="2">No</th>
                <th width="10%" rowspan="2">Nama</th>
                <th width="20%" rowspan="2">Judul Skripsi</th>
                <th width="5%" rowspan="2">Status</th>
                <th width="45%" colspan="9">Berkas</th>
                <th width="10%" rowspan="2">Tgl Pengajuan</th>
            </tr>
            <tr>
                <th width="5%">Abstrak-Toc</th>
                <th width="5%">Appedieces</th>
                <th width="5%">Chapter 1</th>
                <th width="5%">Chapter 2</th>
                <th width="5%">Chapter 3</th>
                <th width="5%">Chapter 4</th>
                <th width="5%">Conclusion</th>
                <th width="5%">Cover</th>
                <th width="5%">Reverences</th>
            </tr>
        </thead>
        <tbody>';
        while ($row = $query->fetch_assoc()) {
$html .='
            <tr>
                <td width="5%" style="text-align: center;">'.$i++.'</td>
                <td width="10%">'.$row['nama'].'</td>
                <td width="20%">'.$row['judul'].'</td>';
                if($row['status'] = '0'){
                    $html.='<td width="5%">Pending</td>';
                }elseif($row['status'] = '1'){
                    $html.= '<td width="5%">Diterima</td>';
                }else{
                    $html.= '<td width="5%">Ditolak</td>';
                }
                if($row['Abstrak_Toc'] != null) {
                    $html .='<td width="5%">OK</td>';
                  }else{
                    $html .='<td width="5%">NO</td>';
                }
                
                if($row['Appedieces'] != null) {
                    $html .='<td width="5%">OK</td>';
                  }else{
                    $html .='<td width="5%">NO</td>';
                }

                if($row['Chapter_1'] != null) {
                    $html .='<td width="5%">OK</td>';
                  }else{
                    $html .='<td width="5%">NO</td>';
                }

                if($row['Chapter_2'] != null) {
                    $html .='<td width="5%">OK</td>';
                  }else{
                    $html .='<td width="5%">NO</td>';
                }

                if($row['Chapter_3'] != null) {
                    $html .='<td width="5%">OK</td>';
                  }else{
                    $html .='<td width="5%">NO</td>';
                }

                if($row['Chapter_4'] != null) {
                    $html .='<td width="5%">OK</td>';
                  }else{
                    $html .='<td width="5%">NO</td>';
                }

                if($row['Conclusiuon'] != null) {
                    $html .='<td width="5%">OK</td>';
                  }else{
                    $html .='<td width="5%">NO</td>';
                }

                if($row['Cover'] != null) {
                    $html .='<td width="5%">OK</td>';
                  }else{
                    $html .='<td width="5%">NO</td>';
                }

                if($row['References'] != null) {
                    $html .='<td width="5%">OK</td>';
                  }else{
                    $html .='<td width="5%">NO</td>';
                }
$html .='
                <td width="10%">'.$row['created'].'</td>
            </tr>';
        }
$html .='
        </tbody>
    </table>
</body>
</html>';

$mpdf->WriteHTML($html);

// Output a PDF file directly to the browser
$mpdf->Output("data-skbp-2.pdf", "I");