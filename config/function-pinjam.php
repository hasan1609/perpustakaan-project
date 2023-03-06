

<?php


function pinjambuku($code,$jdl_buku,$user){

  include 'koneksi.php';
  $sql = "INSERT INTO `p_buku` (`id`, `code`, `jdl_buku`, `tgl_pnjm`, `tgl_kmbl`, `status`, `nama`, `created`) VALUES (NULL, '$code', '$jdl_buku', current_timestamp(), DATE_ADD(current_timestamp(), INTERVAL 3 DAY), '0', '$user', current_timestamp());";
  $conn->query($sql);
  

}


function data_pinjam(){

    include 'koneksi.php';

    $sql = "SELECT * FROM `p_buku`";
    $result = $conn->query($sql);
    

    $i = 0;
    while ($row = $result->fetch_assoc()) {
     
        $i++;
        echo "
                    <tr>
                      <td>".$i."</td>
                      <td>".$row['code']."</td>
                      <td>".$row['jdl_buku']."</td>
                      <td>" . $row['nama'] . "</td>
                      <td>" . $row['tgl_pnjm'] . "</td>
                      <td>" . $row['tgl_kmbl'] . "</td>
                    ";
                    if ($row['status'] == '0') {
                         echo "  <td><label for='' class='badge badge-primary'>Proses</label></td>";
                    }elseif ($row['status'] == '1') {
                        echo "  <td><label for='' class='badge badge-warning'>Pinjam</label></td>";
                    } elseif ($row['status'] == '2') {
                        echo "  <td><label for='' class='badge badge-success'>Selesai</label></td>";
                    } else {
                        echo "  <td><label for='' class='badge badge-danger'>Tolak</label></td>";
                    }
                    echo "
                      <td>";

                      if ($row['status'] == '0'){

                        echo "<a href='index.php?terima=" . $row['id'] . "' type='submit' class='btn btn-primary btn-icon-text'>
                          <i class='ti-check btn-icon-prepend'></i>
                          Terima
                        </a>
                        <a href='index.php?tolak=" . $row['id'] . "&code=" . $row['code'] . "' type='submit' class='btn btn-warning btn-icon-text'>
                          <i class='ti-close btn-icon-prepend'></i>
                          Tolak
                        </a>
                        
                        <a href='index.php?hapus=" . $row['id'] . "' type='submit' class='btn btn-danger btn-icon-text'>
                          <i class='ti-trash btn-icon-prepend'></i>
                          Hapus
                        </a>";
                      }elseif(strtotime($row['tgl_kmbl']) < strtotime(date('Y-m-d')) && $row['status'] == '1') {
                        echo "<label for='' class='badge badge-danger'>KENA DENDA</label>";
                      } elseif ($row['status'] == '1') {
                         echo "
                       <a href='index.php?kembali=" . $row['id'] . "&code=" . $row['code'] . "' type='submit' class='btn btn-success btn-icon-text'>
                          <i class='ti-check btn-icon-prepend'></i>
                          Pengembalian Buku
                        </a>
                        ";
    }
                     
                        echo "
                      </td>
                    </tr>";
        
    }
    
}
function list_buku(){

    include 'koneksi.php';

    $sql = "SELECT * FROM `buku` WHERE `status` LIKE '1'";
    $result = $conn->query($sql);


    $i = 0;
    while ($row = $result->fetch_assoc()) {
        echo " <option value='". $row['code'].",". $row['jdl_buku']."'>" . $row['code'] . " - ".$row['jdl_buku']."</option>";
        
    }

}


function status_buku_pinjam($id){
    include 'koneksi.php';   
    $sql = "UPDATE `buku` SET `status` = '0' WHERE `buku`.`code` = $id";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>window.top.location='index.php';</script>";
    } else {
       
    }
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
function terima($id){
  

    include 'koneksi.php';
  $sql = "UPDATE `p_buku` SET `status` = '1' WHERE `p_buku`.`id` = $id";
  if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>window.top.location='index.php';</script>";

  } else {
    // echo "Error deleting record: " . $conn->error;
  }
  $conn->close();

}


function Kembali($id){


  include 'koneksi.php';
  $sql = "UPDATE `p_buku` SET `status` = '2' WHERE `p_buku`.`id` = $id";
  if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>window.top.location='index.php';</script>";

  } else {
    // echo "Error deleting record: " . $conn->error;
  }
  $conn->close();


}

function tolak($id){

  include 'koneksi.php';
  $sql = "UPDATE `p_buku` SET `status` = '3' WHERE `p_buku`.`id` = $id";
  if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>window.top.location='index.php';</script>";

  } else {
    // echo "Error deleting record: " . $conn->error;
  }
  $conn->close();

}


function hapus($id){
  include 'koneksi.php';
  $sql = "DELETE FROM `p_buku` WHERE `p_buku`.`id` = $id";
  if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>window.top.location='index.php';</script>";

  } else {
    // echo "Error deleting record: " . $conn->error;
  }
  $conn->close();
} 
  ?>