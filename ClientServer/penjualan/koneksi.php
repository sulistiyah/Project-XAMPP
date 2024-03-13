<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "ServicePenjualan";

    $koneksi = mysqli_connect($servername, $username, $password, $databasename);
    if(!$koneksi){
        die("koneksi gagal");
    }
?>