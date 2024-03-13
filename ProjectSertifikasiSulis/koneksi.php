<?php

    $server = "localhost";
    $user = "root";
    $password = "";
    $nama_database = "db_pustaka_2b";
    $db = mysqli_connect($server,$user,$password,$nama_database);
    if(!$db){
        die("Gagal terhubung dengan database: " . mysqli_connect_error());
    }

?>

<?php
$servername = "localhost";
$username = "nama_user";
$password = "kata_sandi";
$database = "sekolah";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

echo "Koneksi berhasil";
?>
