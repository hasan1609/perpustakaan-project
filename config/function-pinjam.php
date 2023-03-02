

<?php


function pinjambuku($value,$tgl_kembali){

}

function list_buku(){

    include 'koneksi.php';

    $sql = "SELECT * FROM `buku` WHERE `status` LIKE '1'";
    $result = $conn->query($sql);


    $i = 0;
    while ($row = $result->fetch_assoc()) {
        echo " <option value='".$row['id'].",". $row['jdl_buku']."'>".$row['jdl_buku']."</option>";
        
    }

}


function update_status_buku($id){
    include 'koneksi.php';   
    $sql = "UPDATE `buku` SET `status` = '0' WHERE `buku`.`id` = $id";
    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>window.top.location='index.php';</script>";
    } else {
       
    }
}




?>