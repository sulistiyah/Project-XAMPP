<?php

//Koneksi Ke Mysql
require_once('koneksi.php');

//Proses insert data ke table tb_penduduk
$id_penduduk = "1";
$no_kk = "123456789";
$nama = "Sulis Tiyah";
$alamat = "Gunung Raja, Muara Enim";

$sql = "UPDATE tb_penduduk SET no_kk='$no_kk', nama='$nama', alamat='$alamat' WHERE id_penduduk='$id_penduduk'";
$hasil = mysqli_query($db, $sql);
if($hasil) {
    echo "Data Berhasil di Update";
} else {
    echo "Data Gagal di Update";
}