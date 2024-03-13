<?php

//Koneksi Ke Mysql
require_once('koneksi.php');

//Proses insert data ke table tb_penduduk
$id_provinsi = "1";


$sql = "DELETE FROM tb_provinsi_2001082029 WHERE id_provinsi='$id_provinsi'";
$hasil = mysqli_query($db, $sql);
if($hasil) {
    echo "Data Berhasil di Delete";
} else {
    echo "Data Gagal di Delete";
}