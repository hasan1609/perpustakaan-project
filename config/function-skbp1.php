<?php

function check_anggota($noreg)
{
    include 'koneksi.php';
    $sql = "SELECT COUNT(*) FROM `p_buku` WHERE `status` NOT LIKE '2' AND `req_perpus` LIKE '$noreg' ORDER BY `id` ASC";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();
    return $rows["COUNT(*)"];

}
function addskbp1($noreg,$nidn,$nama,$fklts,$jrns){
    include 'koneksi.php';


    $sql = "INSERT INTO `skbp_1` (`id`, `req_perpus`, `status`, `nidn`, `nama`, `fklts`, `jrsn`, `created`) VALUES (NULL, '$noreg', '0', '$nidn', '$nama', '$fklts', '$jrns', current_timestamp())";


    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>window.top.location='index.php?sukses';</script>";
       
    } else {
        echo "<script type='text/javascript'>window.top.location='index.php?gagal';</script>";
     
    }

    $conn->close();

    
}

function skbp1($noreg){


  include 'koneksi.php';

  $sql = "SELECT * FROM `skbp_1` WHERE `req_perpus` LIKE '$noreg'";
  $result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
        echo "  <td>".$row['req_perpus']."</td>
            <td>".$row['created']."</td>
            <td>
           ";
           if ($row['status'] == 0) {
            echo " <label for='' class='badge badge-info'>Pending</label>";
           }elseif ($row['status'] == 1) {
            echo " <label for='' class='badge badge-success'>Diterima</label>";
           }elseif ($row['status'] == 2) {
           echo "<label for='' class='badge badge-danger'>Ditolak</label>";
           }
           echo "
            </td>";
  }
    } else {
        echo "         <td>TIDAK ADA PERMINTAAN</td>
                      <td>TIDAK ADA PERMINTAAN</td>
                      <td>
                       
                        <label for='' class='badge badge-danger'>TIDAK ADA PERMINTAAN</label>
                      </td>";
    }

   
}

?>