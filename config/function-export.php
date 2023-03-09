
<?php

function export_denda($bulan, $tahun)
{

    include 'koneksi.php';

    $sql = "SELECT * FROM `p_buku` WHERE `tgl_kmbl` < CURDATE() AND `status` LIKE '2' AND `created` LIKE '%$tahun-$bulan-%'";
    $result = $conn->query($sql);

    $i = 0;
    while ($row = $result->fetch_assoc()) {
        $i++;


        $tgl = explode(" ", $row['tgl_kmbl']);
        $date1 = date("Y-m-d");
        $date2 = $row['tgl_kmbl'];

        $diff = strtotime($date1) - strtotime($date2); // menghitung selisih waktu dalam detik
        $days = floor($diff / (60 * 60 * 24)); // mengubah selisih waktu menjadi jumlah hari, dan membulatkannya ke bawah

        echo " <tr>
                <td width='5%'><center>" . $i . "</center></td>
                <td width='20%'><center>" . $row['nama'] . "</center></td>
                <td><center>" . $row['denda'] . "</center></td>
                <td width='15%'><center>LUNAS</center></td>
                <td width='15%'><center>" . $row['created'] . "</center></td>
            </tr>";
    }




}

function export_anggota_baru(){
    include 'koneksi.php';

    $sql = "SELECT * FROM `anggota` WHERE `created` LIKE '%2023-02%' ORDER BY `anggota`.`id` ASC";
    $result = $conn->query($sql);
    $i = 0;
    while ($row = $result->fetch_assoc()) {
        $i++;
        echo "<tr>
                <td width='5%'>".$row['req_perpus']."</td>
                <td width='20%'>".$row['nama']."</td>
                <td width='10%'>" . $row['STB'] . "</td>
                <td width='8%'>" . $row['fklts'] . "</td>
                <td width='8%'>" . $row['jrsn'] . "</td>
                <td width='25%'>" . $row['almt'] . "</td>
                <td width='14%'>" . $row['email'] . "</td>
                <td width='10%'>" . $row['created'] . "</td>
            </tr>";
    }
}



    ?>