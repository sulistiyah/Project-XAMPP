<?php
    //Extract Method Post dan Get//
    extract($_GET);
    extract($_POST);
    //Extract Method Post dan Get//

    //-- Koneksi --//
    require_once('koneksi.php');

    switch($r){

        // User //
        case 'login';
        include "form/user/login.php";
        break;

        case 'createuser';
        include "form/user/create.php";
        break;

        // Anggota//
        case 'createanggota':
        include "form/anggota/create.php";
        break;

        // Jika Halaman tidak ditemukan //
        default;
        include "form/page-404.php";
    }
?>