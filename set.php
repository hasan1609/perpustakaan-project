<?php

    session_start();

include "config/koneksi.php";

    // echo "<script type='text/javascript'>window.top.location='pages/dashboard/';</script>";
    $email = $_GET['email'];
    $password = $_GET['password'];

    $sql = "SELECT * FROM `anggota` WHERE `email` LIKE '$email' AND `password` LIKE '$password' ORDER BY `id` DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $_SESSION = $row;
            print_r($row);
            // echo "<script type='text/javascript'>window.top.location='pages/dashboard/index.php';</script>";
        }
    } else {
        // echo "<script type='text/javascript'>window.top.location='index.php?login=gagal';</script>";
    }



?>