<?php

    //Koneksi ke MySQL
    require_once('koneksi.php');

    //Proses insert data ke table tb_penduduk
    $kode_provinsi = "4567";
    $nama_provinsi = "Sumatara Barat";
    $jumlah_penduduk = "5670000";

    $sql = "INSERT INTO tb_provinsi_2001082029 VALUE (NULL, '$kode_provinsi','$nama_provinsi','$jumlah_penduduk')";
    $hasil = mysqli_query($db, $sql);
    if($hasil){
        echo "Data berhasil di tambahkan";
    }else{
        echo "Data gagal ditambahkan";
    }

?>