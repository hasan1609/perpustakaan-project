<?php
session_start();
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

$id=$_GET['id'];
$query = mysqli_query($conn,"SELECT anggota.*, skbp_2.judul FROM anggota INNER JOIN skbp_2 ON anggota.req_perpus = skbp_2.req_perpus where anggota.req_perpus = '$id'");
$row = $query->fetch_assoc();

$html = '
<!DOCTYPE htmls>

<html>

<head>

    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <title></title>
    <style>
        table {
        width: 100%;
        }
        div {
            width: 595px;
            padding: 5px;
        }
        br{
            line-height:0;
        }
        h4, h5 , h3{
            margin: 0%;
            font-size: 14px;
        }
        p {
            font-size: 10px;
            margin: 0%;
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
        td.justify { text-align: justify; }
    </style>

</head>


<body>
    <div>
        <table class="center">
            <thead>
                <tr>
                    <td colspan="3">
                        <table width="100%">
                            <thead>
                                <tr>
                                    <td width="20%">
                                        <img src="../../images/logo_yayasan.png"  width="100" height="100">
                                    </td>
                                    <td class="center" width="60%">
                                        <h4>Yayasan Pendidikan Intelegensia Kristen Indonesia Paulufa-spin<br>(Yayasan PIKI Paulus)</h4>
                                        <br><h5>Universitas Kristen Indonesia Paulus (UKI Paulus)<br>Perpustakaan</h5>
                                        <p>
                                            <br>e-mail : perpus@ukipaulus.ac.id<br>
                                            Kampus Daya (Kampus Utama) : Jl. P. Kemerdekaan Km. 13, Tlp. (62-411) 582825 <br>
                                            Fax (62-411) 582825 (Rektor), Makassar, 90243<br>
                                            Web : <u>http://ukupaulus.ac.id</u>, e-mail : <u>ukip@ukipaulus.ac.id</u>, info@ukipaulus.ac.id<br>
                                            Kampus Program Pascasarjana : Jl. Cendrawasih No. 65, Tlp (62-411) 855397, 8732259,<br>
                                            Fax (62-411) 855397 Makssar, 20121
                                        </p>
                                    </td>
                                    <td class="alignright" width="20%">
                                        <img src="../../images/logo.png"  width="100">
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
                    <td class="center" colspan="3">
                        <h3><u>SURAT KETERANGAN BEBAS PUSTAKA</u></h3><br>
                        No. 18260//UKIP.04/2023
                    </td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td class="" colspan="3" style="padding-inline-start: 10px;">
                        Yang bertanda tangan dibawah ini menerangkan bahwa mahasiswa:
                    </td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td style="padding-left: 100px;">Nama</td>
                    <td>:</td>
                    <td style="padding-right: 150px;">'.$row['nama'].'</td>
                </tr>
                <tr>
                    <td style="padding-left: 100px;">NIDN</td>
                    <td>:</td>
                    <td style="padding-right: 150px;">'.$row['STB'].'</td>
                </tr>
                <tr>
                    <td style="padding-left: 100px;">Fakultas/Jurusan</td>
                    <td>:</td>
                    <td style="padding-right: 150px;">'.$row['fklts'].' / '.$row['jrsn'].'</td>
                </tr>
                <tr>
                    <td style="padding-left: 100px;">No. Reg. Perpus</td>
                    <td>:</td>
                    <td style="padding-right: 150px;">'.$row['req_perpus'].'</td>
                </tr>
                <tr>
                    <td style="padding-left: 100px;">Alamat</td>
                    <td>:</td>
                    <td style="padding-right: 150px;">'.$row['almt'].'</td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td class="justify" colspan="3" style="padding-inline-start: 10px;">
                        Mahasiswa tersebut sudah menyetor uang sumbangan buku sesuai ketentuan Universitas Kristen Indonesia Paulus Makassar, untuk digunakan melengkapi koleksi perpustakaan sesuai kebutuhan. Dan telah menyetor 1 (Satu) exemplar tugas akhir (Skripsi) dengan judul : 
                    </td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="3" class="center" style="padding: 5px 40px 5px 40px;">
                        "'.$row['judul'].'"
                    </td>
                </tr>  
                <tr>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td class="" colspan="3" style="padding-inline-start: 10px;">
                        Demikian surat keterangan dibawah ini kami berikan untuk digunakan seperlunya
                    </td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td class="alignright" colspan="3">Makassar,'.tgl_indo(date('Y-m-d')).'</td>
                </tr>
                <tr>
                    <td class="alignright" colspan="3">Kepala Perpustakaan</td>
                </tr>
                <tr>
                    <td class="alignright" colspan="3">
                        <img src="../../images/logo.png"  width="100"
                            height="100">
                    </td>
                </tr>
                <tr>
                    <td class="alignright" colspan="3"><u>gfjrhrfjk</u><br>NIDN.67589347598</td>
                </tr>
            </thead>    
        </table>
    </div>
</body>

</html>';

$mpdf->WriteHTML($html);

// Output a PDF file directly to the browser
$mpdf->Output("skbp-2.pdf", "I");
?>
