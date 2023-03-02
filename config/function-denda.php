<?php


function Denda()
{
    include 'koneksi.php';

    $sql = "SELECT * FROM `p_buku`";
    $result = $conn->query($sql);


    $i = 0;
    while ($row = $result->fetch_assoc()) {

        $tgl = explode(" ", $row['tgl_kmbl']);
        $date1 = date("Y-m-d");
        $date2 = $row['tgl_kmbl'];

        $diff = strtotime($date1) - strtotime($date2); // menghitung selisih waktu dalam detik
        $days = floor($diff / (60 * 60 * 24)); // mengubah selisih waktu menjadi jumlah hari, dan membulatkannya ke bawah
        if ($days * 500 >= 1) {
            echo "  <tr>
                        <td>1</td>
                        <td>" . $row['nama'] . "</td>
                        <td>" . $row['jdl_buku'] . "</td>
                        <td><center>" . $row['tgl_kmbl'] . "</center></td>
                        <td>" . $days * 500 . "</td>
                        <td><label for='' class='badge badge-success'>Lunas</label></td>    
                        <td>
                        <button type='button' class='btn btn-primary btn-icon-text'>
                          <i class='ti-check btn-icon-prepend'></i>
                          Terima
                        </button>
                        <button type='button' class='btn btn-warning btn-icon-text'>
                          <i class='ti-close btn-icon-prepend'></i>
                          Tolak
                        </button>
                        <button type='button' class='btn btn-danger btn-icon-text'>
                          <i class='ti-trash btn-icon-prepend'></i>
                          Hapus
                        </button>
                        </td>
                    </tr>";
        }





    }
}




?>


