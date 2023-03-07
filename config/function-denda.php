<?php


function Denda()
{
    include 'koneksi.php';

    $sql = "SELECT * FROM `p_buku` WHERE `tgl_kmbl` < CURDATE() AND `status` LIKE '1'";
    $result = $conn->query($sql);

    $i = 0;
    while ($row = $result->fetch_assoc()) {
        $i++;
      

      
        $date1 = date("Y-m-d");
        $date2 = $row['tgl_kmbl'];

        

        $diff = strtotime($date1) - strtotime($date2); // menghitung selisih waktu dalam detik
        $days = round($diff / (60 * 60 * 24)); // mengubah selisih waktu menjadi jumlah hari, dan membulatkannya ke bawah
      
            echo "<tr>
                        <td>" . $i . "</td>
                        <td>" . $row['nama'] . "</td>
                        <td>" . $row['jdl_buku'] . "</td>
                        <td><center>" . $row['tgl_kmbl'] . "</center></td>
                        <td>" . $days * 500 . "</td>

                      
                        <td><label for='' class='badge badge-danger'> Belum Lunas</label></td>   
                        <td>
                        <a href='index.php?terima=" . $row['id'] . "&denda=". $days * 500 ."&code=". $row['code']."' type='submit' class='btn btn-primary btn-icon-text'>
                          <i class='ti-check btn-icon-prepend'></i>
                          Terima
                        </a>
        
                        </td>
                       
                    </tr>";
        }





    
}



function terima($id,$denda)
{


  include 'koneksi.php';
  $sql = "UPDATE `p_buku` SET `status` = '2',`denda` = '$denda', `created` = current_timestamp() WHERE `p_buku`.`id` = $id";
  if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>window.top.location='index.php';</script>";

  } else {
    // echo "Error deleting record: " . $conn->error;
  }
  $conn->close();

}
function status_buku_kembali($code)
{
  include 'koneksi.php';
  $sql = "UPDATE `buku` SET `status` = '1' WHERE `buku`.`code` = '$code'";

  if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>window.top.location='index.php';</script>";
  } else {

  }
}

function riwayat_Denda()
{
  include 'koneksi.php';

  $sql = "SELECT * FROM `p_buku` WHERE `tgl_kmbl` < CURDATE() AND `status` LIKE '2'";
  $result = $conn->query($sql);

  $i = 0;
  while ($row = $result->fetch_assoc()) {
    $i++;


    echo "<tr>
                        <td>" . $i . "</td>
                        <td>" . $row['nama'] . "</td>
                        <td>" . $row['jdl_buku'] . "</td>
                        <td><center>" . $row['created'] . "</center></td>
                        <td>" . $row['denda'] . "</td> <td><label for='' class='badge badge-success'>LUNAS</label></td>
                    </tr>";
  }






}
function export_denda($bulan,$tahun){

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

?>


