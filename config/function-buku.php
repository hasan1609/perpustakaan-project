<?php

function buku(){
    include 'koneksi.php';
    $sql = "SELECT COUNT(*) FROM `buku` WHERE 1";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();
    // echo "TOTAL ANGGOTA BELUM AKTIF: " . $rows["COUNT(*)"] . "  <br><br><br><br>";
    return $rows["COUNT(*)"];

}


function list_buku(){

    include 'koneksi.php';

    $sql = "SELECT * FROM `buku`";
    $result = $conn->query($sql);


        // output data of each row
        while ($row = $result->fetch_assoc()) {
                echo "                  <tr>
                    <td>" . $row['id'] . "</td>
                    <td>" . $row['code'] . "</td>
                    <td>" . $row['jdl_buku'] . "</td>
                    <td>
                      <button type='button' class='btn btn-md btn-social-icon btn-outline-twitter'onClick='editBuku" . $row['id'] . "()'><i class='ti-pencil'></i></button>

                         <!-- edit buku -->
                        <div class='modal fade' id='editBuku" . $row['id'] . "' tabindex='-1' role='dialog' aria-labelledby='editBukuLabel' aria-hidden='true'>
                        <div class='modal-dialog' role='document'>
                            <div class='modal-content'>
                            <div class='modal-header'>
                                <h5 class='modal-title' id='editBukuLabel'></h5>
                            </div>
                            <form role='form' method='post' action='index.php'>
                                <div class='modal-body'>
                                <input type='hidden' id='idEdit' name='idEdit' value='". $row['id']."'>
                                <div class='form-group mb-3'>
                                    <label for='example-text-input' class='form-control-label'>Kode Buku</label>
                                    <input class='form-control' type='number' value='". $row['code']."' name='kodeEdit' id='kodeEdit'>
                                </div>
                                <div class='form-group mb-3'>
                                    <label for='example-text-input' class='form-control-label'>Nama Buku</label>
                                    <input class='form-control' type='text' value='" . $row['jdl_buku'] . "' name='namaEdit' id='namaEdit'>
                                </div>
                                <img id='previewEdit' src='#' style='width: 100px; margin: 5px;' alt='Foto'><br>
                                <div class='form-group mb-3'>
                                    <label for='example-text-input' class='form-control-label'>Foto Buku</label>
                                    <input class='form-control' type='file' name='gambarEdit' id='gambarEdit'>
                                </div>
                                </div>
                                <div class='modal-footer'>
                                <button type='button' class='btn btn-secondary' onclick='closeBuku()'>Close</button>
                                <button type='submit'  value='updatebuku' name='updatebuku' class='btn btn-primary'>Save</button>
                                </div>
                            </form>
                            </div>
                        </div>
                        </div>
                        <script>


                            function editBuku" . $row['id'] . "(){
                                // $('#add-group').trigger('reset');
                                $('#editBukuLabel').html('Update Buku');
                                $('#editBuku" . $row['id'] . "').modal('show');
                                // $('#id').val('');
                            }
                            
                            function closeBuku() { 
                                $('#modalBuku').modal('hide');
                                $('#editBuku').modal('hide');
                            }
                            </script>







                       <a href=index.php?hapus=" . $row['id'] . " type='submit' class='btn btn-social-icon btn-outline-youtube' '><i class='ti-trash'></i></a>
                   </td> 
                    </td>
                  </tr>";


        }
}

function deletebuku($id)
{


    include 'koneksi.php';
    $sql = "DELETE FROM `buku` WHERE `buku`.`id` = $id";
    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>window.top.location='index.php';</script>";
        exit;

    } else {
        // echo "Error deleting record: " . $conn->error;
    }
    $conn->close();
}



function addbuku($code,$judul,$jpg){
    include 'koneksi.php';

    if (empty($jpg)) {
        $sql = "INSERT INTO `buku` (`id`, `code`, `jdl_buku`, `status`, `img_bk`, `created`) VALUES (NULL, '$code', '$judul', '1', NULL, current_timestamp())";
    }else{
        $sql = "INSERT INTO `buku` (`id`, `code`, `jdl_buku`, `status`, `img_bk`, `created`) VALUES (NULL, '$code', '$judul', '1', '$jpg', current_timestamp())";
    }
   

    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>window.top.location='index.php';</script>";
    } else {
     
    }

    $conn->close();

    
}

function updatebuku($judul,$img,$id,$code){

    include 'koneksi.php';

    if (empty($img)) {
      
      $sql = "UPDATE `buku` SET `jdl_buku` = '$judul',`code` = '$code' WHERE `buku`.`id` = $id";
    }else{

      $sql = " UPDATE `buku` SET `jdl_buku` = '$judul', `img_bk` = '$img',`code` = '$code' WHERE `buku`.`id` = $id";
    }

    

        if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>window.top.location='index.php';</script>";
        } else {
       
        }

$conn->close();

    
}

function p_buku()
{
    include 'koneksi.php';
    $sql = "SELECT COUNT(*) FROM `p_buku` WHERE 1;";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();
    // echo "TOTAL ANGGOTA BELUM AKTIF: " . $rows["COUNT(*)"] . "  <br><br><br><br>";
    return $rows["COUNT(*)"];

}
?>