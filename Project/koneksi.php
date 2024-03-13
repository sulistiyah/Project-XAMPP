<?php

$_server = "localhost";
$user = "root";
$password = "";
$nama_database = "db_pustaka_2b";
$db = mysqli_connect($_server, $user, $password, $nama_database);
if(!$db){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());

}