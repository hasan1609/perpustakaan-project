<?php

function list_anggota_baru($sessionlevel)
{

    include 'koneksi.php';

    $sql = "SELECT * FROM `anggota` WHERE `status` = 0 ORDER BY `anggota`.`status` ASC;";
    $result = $conn->query($sql);
    $i = 0;
    while ($row = $result->fetch_assoc()) {
        $i++;
            echo "<tr>
                    <td>". $i."</td>
                    <td>" . $row["nama"] . "</td>
                    <td>" . $row["created"] . "</td>
                    ";
                    if ($sessionlevel == 1) {
                        echo "<td>
                      <a href='javascript:void(0)' onClick='viewAnggota" . $row["id"] . "()' class='btn btn-info btn-icon-text'>
                        <i class='ti-eye btn-icon-prepend'></i>
                        Lihat
                      </a>
                      
                <!-- view -->
                <div class='modal fade' id='modalView" . $row["id"] . "' tabindex='-1' role='dialog' aria-labelledby='modalViewLabel' aria-hidden='true'>
                    <div class='modal-dialog' role='document'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h5 class='modal-title' id='modalViewLabel'></h5>
                            </div>
                            <form role='form' method='' action=''>
                                <div class='modal-body'>
                                    <table>
                                        <tr>
                                            <td>No. Reg Pendaftaran</td>
                                            <td>:</td>
                                            <td>" . $row["req_perpus"] . "</td>
                                        </tr>
                                        <tr>
                                            <td>Nama</td>
                                            <td>:</td>
                                            <td>" . $row["nama"] . "</td>
                                        </tr>
                                        <tr>
                                            <td>NIDN</td>
                                            <td>:</td>
                                            <td>" . $row["STB"] . "</td>
                                        </tr>
                                        <tr>
                                            <td>Fak/Jur</td>
                                            <td>:</td>
                                            <td>" . $row["fklts"] . " \ " . $row["jrsn"] . "</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td>" . $row["almt"] . "</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class='modal-footer'>
                                    <a href=index.php?aktif=" . $row['id'] . " type='submit' class='btn btn-primary btn-icon-text terima_anggota'><i class='ti-check btn-icon-prepend'></i>Terima</a>
                                    <a href=index.php?tolak=" . $row['id'] . " type='submit' class='btn btn-danger btn-icon-text tolak_anggota'><i class='ti-close btn-icon-prepend'></i>Tolak</a>
                                    <button type='button' class='btn btn-secondary' onclick='closeView()'>Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <script>
                    function viewAnggota" . $row["id"] . "(){
                        // $('#add-group').trigger('reset');
                        $('#modalViewLabel').html('Data Anggota Baru');
                        $('#modalView" . $row["id"] . "').modal('show');
                        // $('#id').val('');
                    }
                </script>
                <a href='index.php?hapus=" . $row['id'] . "' class='btn btn-warning btn-icon-text hapus_anggota'>
                    <i class='ti-trash btn-icon-prepend'></i>
                    Hapus
                </a>
            </td> ";
                    }
                   
       echo " </tr>";
                
    }

} 

                      
function tolak_anggota($id){
    include 'koneksi.php';
    $sql = "UPDATE `anggota` SET `status` = '2' WHERE `anggota`.`id` = $id";
    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>window.top.location='index.php';</script>";
        $_SESSION["tolak"] = 'Data Berhasil Ditolak';
        exit;

    } else {

    }
    $conn->close();
}
function terima_anggota($id){

    
    include 'koneksi.php';
    $sql = "UPDATE `anggota` SET `status` = '1' WHERE `anggota`.`id` = $id";
    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>window.top.location='index.php';</script>";
        $_SESSION["terima"] = 'Data Berhasil Diterima';
        exit;

    } else {

    }
    $conn->close();

}

function anggota()
{
    include 'koneksi.php';
    $sql = "SELECT COUNT(*) FROM `anggota` WHERE `status` = 1 ORDER BY `id` DESC;";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();
    // echo "TOTAL ANGGOTA BELUM AKTIF: " . $rows["COUNT(*)"] . "  <br><br><br><br>";
    return $rows["COUNT(*)"];

}
function anggota_baru()
{
    include 'koneksi.php';
    $sql = "SELECT COUNT(*) FROM `anggota` WHERE `status` = 0 ORDER BY `id` DESC;";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();
    // echo "TOTAL ANGGOTA BELUM AKTIF: " . $rows["COUNT(*)"] . "  <br><br><br><br>";
    return $rows["COUNT(*)"];

}
function list_anggota($sessionlevel){

    include 'koneksi.php';

    $sql = "SELECT * FROM `anggota` WHERE `status` = 1 ORDER BY `anggota`.`status` ASC;";
    $result = $conn->query($sql);
    $i = 0;
    while ($row = $result->fetch_assoc()) {
        if ($row['level'] == 1) {
            $level = 'ADMIN';
        }elseif ($row['level'] == 2) {
            $level = 'DOSEN';
        } elseif ($row['level'] == 3) {
            $level = 'MAHASISWA';
        } elseif ($row['level'] == 4) {
            $level = 'TATA USAHA(TU)';
        }


        $i++;
        echo "<tr>
                    <td>" . $i . "</td>
            <td> " . $row['nama'] . "</td>
            <td>" . $row['fklts'] . "</td>
            <td>" . $row['jrsn'] . "</td>


            <td> " . $level . "</td>
            <td> 
                <button type='button' class='btn btn-primary btn-icon-text' data-toggle='modal' data-target='#modalAnggota" . $row["id"] . "'><i class='ti-eye'></i></button>
                <!-- Button trigger modal -->
                <!-- Modal -->
                <div class='modal fade' id='modalAnggota".$row['id']."' tabindex='-1' role='dialog' aria-labelledby='modalAnggotaLabel' aria-hidden='true'>
                    <div class='modal-dialog' role='document'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h5 class='modal-title' id='modalAnggotaLabel'>DATA ANGGOTA</h5>
                            </div>
                            <div class='modal-body'>
                                <div class='table-responsive'>
                                    <table>
                                        <tr>
                                            <td>No. Reg Pendaftaran</td>
                                            <td>:</td>
                                            <td>" . $row["req_perpus"] . "</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>:</td>
                                            <td>" . $row["email"] . "</td>
                                        </tr>
                                        <tr>
                                            <td>Nama</td>
                                            <td>:</td>
                                            <td>" . $row["nama"] . "</td>
                                        </tr>
                                        <tr>
                                            <td>NIDN</td>
                                            <td>:</td>
                                            <td>" . $row["STB"] . "</td>
                                        </tr>
                                        <tr>
                                            <td>Fak/Jur</td>
                                            <td>:</td>
                                            <td>" . $row["fklts"] . " \ " . $row["jrsn"] . "</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td>" . $row["almt"] . "</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class='modal-footer'>
                                <button type='button' class='btn btn-secondary' data-dismiss='modal' >Close</button>
                                <a href='../export/kartu_anggota.php?id=" . $row['id'] . "' target='_blank' class='btn btn-primary'>Cetak</a>
                            </div>
                        </div>
                    </div>
                </div>";
                 if ($sessionlevel == 1) {
                echo "
                <!-- Button delete anggota -->
                <a href='index.php?hapus=".$row['id']."' type='submit' class='btn btn btn-danger btn-icon-text hapus_anggota'><i class='ti-trash'></i></a>";
                 }
                echo"
            </td>
        </tr>";
        
    }
                   
}

function deletanggota($id){


    include 'koneksi.php';
    $sql = "DELETE FROM `anggota` WHERE `anggota`.`id` = $id";
    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>window.top.location='index.php';</script>";
        $_SESSION["sukses"] = 'Data Berhasil Dihapus';
        // header('Location: index.php');  
        exit;

    } else {
        // echo "Error deleting record: " . $conn->error;
    }
    $conn->close();
}



function kartu_anggota($reg){
    
    include 'koneksi.php';
    $sql = "SELECT * FROM `anggota` WHERE `req_perpus` LIKE '$reg' ORDER BY `id` ASC";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    echo "  <tr>
                                    <td width='30%'>No. Reg Pendaftaran</td>
                                    <td width='5%'>:</td>
                                    <td width='65%'>" . $row["req_perpus"] . "</td>
                                </tr>
                                <tr>
                                    <td width='30%'>Nama</td>
                                    <td width='5%'>:</td>
                                    <td width='65%'>" . $row["nama"] . "</td>
                                </tr>
                                <tr>
                                    <td width='30%'>NIDN</td>
                                    <td width='5%'>:</td>
                                    <td width='65%'>" . $row["STB"] . "</td>
                                </tr>
                                <tr>
                                    <td width='30%'>Fak / Jur</td>
                                    <td width='5%'>:</td>
                                    <td width='65%'>" . $row["fklts"] . " \ " . $row["jrsn"] . "</td>
                                </tr>
                                <tr>
                                    <td width='30%'>Alamat</td>
                                    <td width='5%'>:</td>
                                    <td width='65%'>" . $row["almt"] . "</td>
                                </tr>";
   
}


?>