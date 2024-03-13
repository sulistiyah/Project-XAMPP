<?php

    //Koneksi ke MySQL
    require_once('koneksi.php');

    //Proses insert data ke table tb_penduduk
    $no_kk = "123456789";
    $nama = "Sulis Tiyah";
    $alamat = "Palembang";
    $sql = "INSERT INTO tb_penduduk VALUE (NULL, '$no_kk','$nama','$alamat')";
    $hasil = mysqli_query($db, $sql);
    if($hasil){
        echo "Data berhasil di tambahkan";
    }else{
        echo "Data gagal ditambahkan";
    }

?>