<?php
    //Extract Method Post dan Get//
    extract($_GET);
    extract($_POST);
    //Extract Method Post dan Get//

    //-- Koneksi --//
    require_once('koneksi_1002.php');

    switch($r){

        //Buku//
        case 'createbuku';
        include "form/buku/create_1002.php";
        break;

        
        // Jika Halaman tidak ditemukan //
        default;
        include "form/page-404_1002.php";
    }
?>