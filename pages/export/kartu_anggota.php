<?php
include '../../config/function-anggota.php';
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

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
                @media print{
            .button{
                display: none;
            }
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

<button onclick="goBack()" class="button">Go Back</button>
<script>
    function goBack() {
        window.history.back();
    }
</script>

<br>
<br>
<br>
<br>
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
                                        <h3 style="text-align: center">Kartu Anggota<br>Perpustakaan UKIP<br>Makassar</h3>
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
                              <?php kartu_anggota($_GET['id']); ?>
                            </thead>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td rowspan="4">
                        <img src="../../images/logo.png" alt="Image" width="100"
                            height="100">
                    </td>
                    <td></td>
                    <td class="alignright">Makassar, <?php echo date('d F Y'); ?></td>
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
    <div>
        <table class="center">
            <thead>
                <tr>
                    <td colspan="3 ">
                        <table>
                            <thead>
                                <tr>
                                    <td>
                                        <img src="../../images/logo.png" alt="Image" width="100">
                                    </td>
                                    <td>
                                        <h3 style="text-align: center">Kartu Anggota<br>Perpustakaan UKIP<br>Makassar</h3>
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
                        <img src="https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" alt="Image" width="70">
                        <br>
                    </td>
                </tr>
            </thead>
        </table>
    </div>
    <br>
    <br>

</body>
<script type="text/javascript">
      window.onload = function() { window.print(); }
 </script>
</html>
