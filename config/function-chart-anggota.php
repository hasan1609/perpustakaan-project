<?php

function Januari()
{
    include 'koneksi.php';
    $sql = "SELECT COUNT(*) FROM `anggota` WHERE `created` LIKE '%" . date("Y") . "-01-%' ORDER BY `anggota`.`id` DESC;";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();

    echo $rows["COUNT(*)"];

}

function Februari()
{
    include 'koneksi.php';
    $sql = "SELECT COUNT(*) FROM `anggota` WHERE `created` LIKE '%" . date("Y") . "-02-%' ORDER BY `anggota`.`id` DESC;";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();

    echo $rows["COUNT(*)"];

}

function Maret()
{
    include 'koneksi.php';
    $sql = "SELECT COUNT(*) FROM `anggota` WHERE `created` LIKE '%" . date("Y") . "-03-%' ORDER BY `anggota`.`id` DESC;";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();

    echo $rows["COUNT(*)"];

}

function April()
{
    include 'koneksi.php';
    $sql = "SELECT COUNT(*) FROM `anggota` WHERE `created` LIKE '%" . date("Y") . "-04-%' ORDER BY `anggota`.`id` DESC;";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();

    echo $rows["COUNT(*)"];

}

function Mei()
{
    include 'koneksi.php';
    $sql = "SELECT COUNT(*) FROM `anggota` WHERE `created` LIKE '%" . date("Y") . "-05-%' ORDER BY `anggota`.`id` DESC;";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();

    echo $rows["COUNT(*)"];

}

function Juni()
{
    include 'koneksi.php';
    $sql = "SELECT COUNT(*) FROM `anggota` WHERE `created` LIKE '%" . date("Y") . "-06-%' ORDER BY `anggota`.`id` DESC;";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();

    echo $rows["COUNT(*)"];

}

function Juli()
{
    include 'koneksi.php';
    $sql = "SELECT COUNT(*) FROM `anggota` WHERE `created` LIKE '%" . date("Y") . "-07-%' ORDER BY `anggota`.`id` DESC;";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();

    echo $rows["COUNT(*)"];

}

function Agustus()
{
    include 'koneksi.php';
    $sql = "SELECT COUNT(*) FROM `anggota` WHERE `created` LIKE '%" . date("Y") . "-08-%' ORDER BY `anggota`.`id` DESC;";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();

    echo $rows["COUNT(*)"];

}

function September()
{
    include 'koneksi.php';
    $sql = "SELECT COUNT(*) FROM `anggota` WHERE `created` LIKE '%" . date("Y") . "-09-%' ORDER BY `anggota`.`id` DESC;";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();

    echo $rows["COUNT(*)"];

}

function Oktober()
{
    include 'koneksi.php';
    $sql = "SELECT COUNT(*) FROM `anggota` WHERE `created` LIKE '%" . date("Y") . "-10-%' ORDER BY `anggota`.`id` DESC;";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();

    echo $rows["COUNT(*)"];

}

function November()
{
    include 'koneksi.php';
    $sql = "SELECT COUNT(*) FROM `anggota` WHERE `created` LIKE '%" . date("Y") . "-10-%' ORDER BY `anggota`.`id` DESC;";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();

    echo $rows["COUNT(*)"];

}
function Desember()
{
    include 'koneksi.php';
    $sql = "SELECT COUNT(*) FROM `anggota` WHERE `created` LIKE '%" . date("Y") . "-11-%' ORDER BY `anggota`.`id` DESC;";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();

    echo $rows["COUNT(*)"];

}
?>