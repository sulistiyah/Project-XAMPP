<?php

    //Koneksi ke MySQL
    require_once('koneksi.php');

    //Proses insert data ke table tb_penduduk
    $kode_provinsi = "3122";
    $nama_provinsi = "Sumatera Selatan";
    $jumlah_penduduk = "12000";

    $sql = "INSERT INTO tb_provinsi_2001081002 VALUE (NULL, '$kode_provinsi','$nama_provinsi','$jumlah_penduduk')";
    $hasil = mysqli_query($db, $sql);
    if($hasil){
        echo "Data berhasil di tambahkan";
    }else{
        echo "Data gagal ditambahkan";
    }

?>