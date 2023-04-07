<?php
include "../../config/koneksi.php";
if (empty($_SESSION["level"])) {
    echo "<script type='text/javascript'>window.top.location='../../logout.php';</script>";
}

require '../../vendor/autoload.php';
// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();
function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
// instantiate and use the dompdf class
$id=$_GET['id'];
$query = mysqli_query($conn,"SELECT * FROM anggota where id = '$id'");
$row = $query->fetch_assoc();
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$html = '
<!DOCTYPE html>

<html>

<head>

    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <title>KARTU ANGGOTA</title>
    <style>
        table {
        width: 100%;
        }
        div {
            width: 595px;
            border-style: double;
            padding: 5px;
        }
        td.start {
            text-align:start;
            vertical-align:text-top
        }
        /* table.center {
          margin-left: auto; 
          margin-right: auto;
        } */
        td.alignright { text-align: right; }
        td.alignleft { text-align: left; }
        td.center { text-align: center; }
    </style>

</head>
<body>
    <div>
        <table class="center">
            <thead>
                <tr>
                    <td colspan="3 ">
                        <table>
                            <thead>
                                <tr>
                                    <td>
                                        <img src="../../images/logo_yayasan.png" alt="Image" width="100">
                                    </td>
                                    <td>
                                        <h3 style="text-align: center"><center>Kartu Anggota<br>Perpustakaan UKIP<br>Makassar</center></h3>
                                    </td>
                                    <td class="alignright">
                                        <img src="../../images/logo.png" alt="Image" width="100">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3"><hr style="border: 2px solid black;"></td>
                                </tr>
                            </thead>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <table width="100%">
                            <thead>
                                <tr>
                                    <td width="30%">No. Reg Pendaftaran</td>
                                    <td width="5%">:</td>
                                    <td width="65%">' . $row["req_perpus"] . '</td>
                                </tr>
                                <tr>
                                    <td width="30%">Nama</td>
                                    <td width="5%">:</td>
                                    <td width="65%">' . $row["nama"] . '</td>
                                </tr>
                                <tr>
                                    <td width="30%">NIDN</td>
                                    <td width="5%">:</td>
                                    <td width="65%">' . $row["STB"] . '</td>
                                </tr>
                                <tr>
                                    <td width="30%">Fak / Jur</td>
                                    <td width="5%">:</td>
                                    <td width="65%">' . $row["fklts"] .' \ '.$row["jrsn"] .'</td>
                                </tr>
                                <tr>
                                    <td width="30%">Alamat</td>
                                    <td width="5%">:</td>
                                    <td width="65%">' . $row["almt"] .'</td>
                                </tr>
                            </thead>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td rowspan="4">
                        <div style=" border:1px solid #000;">
                        4 x 6
                        </div>
                    </td>
                    <td></td>
                    <td class="align-right">Makassar, '.tgl_indo(date('Y-m-d')).'</td>
                </tr>
                <tr>
                    <td></td>
                    <td class="alignright">Kepala Perpustakaan</td>
                </tr>
                <tr>
                    <td></td>
                    <td class="alignright">
                        <img src="../../images/logo.png" alt="Image" width="100"
                            height="100">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td class="alignright"><u>ELizabet. S.T.M.T</u><br>NIDN. 0930056501</td>
                </tr>
            </thead>    
        </table>
    </div>
    <br>
    <hr style="border: 2px solid black;">
    <br>
    <div>
        <table class="center">
            <thead>
                <tr>
                    <td colspan="3 ">
                        <table>
                            <thead>
                                <tr>
                                    <td>
                                        <img src="../../images/logo_yayasan.png" alt="Image" width="100">
                                    </td>
                                    <td>
                                        <h3 style="text-align: center"><center>Kartu Anggota<br>Perpustakaan UKIP<br>Makassar</center></h3>
                                    </td>
                                    <td class="alignright">
                                        <img src="../../images/logo.png" alt="Image" width="100">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3"><hr style="border: 2px solid black;"></td>
                                </tr>
                            </thead>
                        </table>
                    </td>
                </tr>
            </thead>    
        </table>
        <table class="center">
            <thead>
                <tr>
                    <td class="start">1</td>
                    <td>
                        Pinjaman hanya berlaku 1 minggu untuk Mahasiswa dan untuk Dosen berlau 2 minggu dan daat diperpanjang.
                    </td>
                </tr>
                <tr>
                    <td class="start">2</td>
                    <td>
                        Buku yang terlambat 1 hari dikembalikan didenda Rp. 500/Buku.
                    </td>
                </tr>
                <tr>
                    <td class="start">3</td>
                    <td>
                        Buku dan kartu mahasiswa tidak boleh dipinjamkan kepada orang lain, dan buku yang dikembalikan rusak dikenakan ongkos jilid Rp, 15.000/Buku.
                    </td>
                </tr>
                <tr>
                    <td class="start">4</td>
                    <td>
                        Total lost buku diganti sesuai harga buku dan denda sesuai aturan yang berlaku.
                    </td>
                </tr>
                <tr>
                    <td class="start">5</td>
                    <td>
                        Kartu ini berlaku selama yang bersangkutan masih terdaftar sebagai mahasiswa UKIP.
                    </td>
                </tr>
                <tr>
                    <td class="start">6</td>
                    <td>
                        Membawa pulang bahan pustaka tanpa prosedur akan dikenakan sanksi akademik.
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="center">
                        <br>
                        <img src="https://api.qrserver.com/v1/create-qr-code/?size=300x300&data='. $url.'" alt="Image" width="70">
                        <br>
                    </td>
                </tr>
            </thead>
        </table>
    </div>
    <br>
    <br>

</body>
</html>';

$mpdf->WriteHTML($html);

// Output a PDF file directly to the browser
$mpdf->Output("kartu-anggota.pdf", "I");
?>