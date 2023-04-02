<?php

function addskbp2($noreg){
    include 'koneksi.php';

    $sql = "SELECT * FROM `skbp_2` WHERE `req_perpus` LIKE '$noreg'";
    $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {

    $sql = "UPDATE `skbp_2` SET `Appedieces` = 'appedieces_$noreg', `Chapter_1` = 'chapter1_$noreg', `Chapter_2` = 'chapter2_$noreg', `Chapter_3` = 'chapter3_$noreg', `Chapter_4` = 'chapter4_$noreg', `Conclusiuon` = 'conclusion_$noreg', `Cover` = 'cover_$noreg', `References` = 'references_$noreg' WHERE `req_perpus` = '$noreg'";

    if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . $conn->error;
    }
  }else{

    $sql = " INSERT INTO `skbp_2` (`id`, `req_perpus`, `Abstrak_Toc`, `Appedieces`, `Chapter_1`, `Chapter_2`, `Chapter_3`, `Chapter_4`, `Conclusiuon`, `Cover`, `References`, `status`, `created`) VALUES (NULL, 'YTGJB356GBH24', 'abstrak_$noreg', 'appedieces_$noreg', 'chapter1_$noreg', 'chapter2_$noreg', 'chapter3_$noreg', 'chapter4_$noreg', 'conclusion_$noreg', 'cover_$noreg', 'references_$noreg', '0', current_timestamp());";


    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>window.top.location='index.php?sukses';</script>";
       
    } else {
        echo "<script type='text/javascript'>window.top.location='index.php?gagal';</script>";
     
    }


  }


    $conn->close();

    
}

function skbp2($noreg){

  include 'koneksi.php';

  $sql = "SELECT * FROM `skbp_2` WHERE `req_perpus` LIKE '$noreg' ORDER BY `skbp_2`.`id` DESC limit 1";
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