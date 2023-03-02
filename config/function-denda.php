<?php


function Denda()
{
    include 'koneksi.php';

    $sql = "SELECT * FROM `denda`";
    $result = $conn->query($sql);


    $i = 0;
    while ($row = $result->fetch_assoc()) {
        $awal = date_create($row['created']);
        $akhir = date_create(); // waktu sekarang
        $diff = date_diff($awal, $akhir);
        $denda = number_format($diff->days * 500, 2, ',', '.');

        echo "  <tr>
                        <td>1</td>
                        <td>" . $row['nama'] . "</td>
                        <td>" . $row['jdl_buku'] . "</td>
                        <td>" . $row['status'] . "</td>
                        <td>" . $denda . "</td>
                        <td>
                        ";
                        if ($row['status'] == '1') {
                           echo "<label for='' class='badge badge-success'>Lunas</label>";
                        }else {
                           echo "<label for='' class='badge badge-danger'>Belum Lunas</label>";
                        }
                        echo "
                            
                        </td>
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




?>