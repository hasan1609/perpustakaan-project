<?php

function p_Januari()
{
    include 'koneksi.php';
    $sql = "SELECT COUNT(*) FROM `absen` WHERE `created` LIKE '%" . date("Y") . "-01-%' ORDER BY `absen`.`id` DESC;";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();

    echo $rows["COUNT(*)"];

}

function p_Februari()
{
    include 'koneksi.php';
    $sql = "SELECT COUNT(*) FROM `absen` WHERE `created` LIKE '%" . date("Y") . "-02-%' ORDER BY `absen`.`id` DESC;";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();

    echo $rows["COUNT(*)"];

}

function p_Maret()
{
    include 'koneksi.php';
    $sql = "SELECT COUNT(*) FROM `absen` WHERE `created` LIKE '%" . date("Y") . "-03-%' ORDER BY `absen`.`id` DESC;";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();

    echo $rows["COUNT(*)"];

}

function p_April()
{
    include 'koneksi.php';
    $sql = "SELECT COUNT(*) FROM `absen` WHERE `created` LIKE '%" . date("Y") . "-04-%' ORDER BY `absen`.`id` DESC;";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();

    echo $rows["COUNT(*)"];

}

function p_Mei()
{
    include 'koneksi.php';
    $sql = "SELECT COUNT(*) FROM `absen` WHERE `created` LIKE '%" . date("Y") . "-05-%' ORDER BY `absen`.`id` DESC;";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();

    echo $rows["COUNT(*)"];

}

function p_Juni()
{
    include 'koneksi.php';
    $sql = "SELECT COUNT(*) FROM `absen` WHERE `created` LIKE '%" . date("Y") . "-06-%' ORDER BY `absen`.`id` DESC;";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();

    echo $rows["COUNT(*)"];

}

function p_Juli()
{
    include 'koneksi.php';
    $sql = "SELECT COUNT(*) FROM `absen` WHERE `created` LIKE '%" . date("Y") . "-07-%' ORDER BY `absen`.`id` DESC;";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();

    echo $rows["COUNT(*)"];

}

function p_Agustus()
{
    include 'koneksi.php';
    $sql = "SELECT COUNT(*) FROM `absen` WHERE `created` LIKE '%" . date("Y") . "-08-%' ORDER BY `absen`.`id` DESC;";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();

    echo $rows["COUNT(*)"];

}

function p_September()
{
    include 'koneksi.php';
    $sql = "SELECT COUNT(*) FROM `absen` WHERE `created` LIKE '%" . date("Y") . "-09-%' ORDER BY `absen`.`id` DESC;";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();

    echo $rows["COUNT(*)"];

}

function p_Oktober()
{
    include 'koneksi.php';
    $sql = "SELECT COUNT(*) FROM `absen` WHERE `created` LIKE '%" . date("Y") . "-10-%' ORDER BY `absen`.`id` DESC;";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();

    echo $rows["COUNT(*)"];

}

function p_November()
{
    include 'koneksi.php';
    $sql = "SELECT COUNT(*) FROM `absen` WHERE `created` LIKE '%" . date("Y") . "-10-%' ORDER BY `absen`.`id` DESC;";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();

    echo $rows["COUNT(*)"];

}
function p_Desember()
{
    include 'koneksi.php';
    $sql = "SELECT COUNT(*) FROM `absen` WHERE `created` LIKE '%" . date("Y") . "-11-%' ORDER BY `absen`.`id` DESC;";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();

    echo $rows["COUNT(*)"];

}
?>