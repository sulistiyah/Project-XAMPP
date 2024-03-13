<?php

//Koneksi Ke Mysql
require_once('koneksi.php');

//Proses insert data ke table tb_penduduk
$id_penduduk = "1";


$sql = "DELETE FROM tb_penduduk WHERE id_penduduk='$id_penduduk'";
$hasil = mysqli_query($db, $sql);
if($hasil) {
    echo "Data Berhasil di Delete";
} else {
    echo "Data Gagal di Delete";
}