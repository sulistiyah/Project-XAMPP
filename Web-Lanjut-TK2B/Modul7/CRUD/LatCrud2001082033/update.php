<?php

//Koneksi Ke Mysql
require_once('koneksi.php');

//Proses insert data ke table tb_penduduk
$id_provinsi = "1";
$kode_provinsi = "01062001";
$nama_provinsi = "Sumatera Barat";
$jumlah_penduduk = "100000";

$sql = "UPDATE tb_provinsi_2001082033 SET kode_provinsi='$kode_provinsi', nama_provinsi='$nama_provinsi', jumlah_penduduk='$jumlah_penduduk' WHERE id_provinsi='$id_provinsi'";
$hasil = mysqli_query($db, $sql);
if($hasil) {
    echo "Data Berhasil di Update";
} else {
    echo "Data Gagal di Update";
}