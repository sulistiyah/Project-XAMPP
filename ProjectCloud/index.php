<?php

    extract($_GET);
    extract($_POST);

    //Session//
    session_start();
    //--Cek Session--//

    //--Koneksi--//
    require_once('koneksi.php');
?>

<!doctype html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Admin Project Cloud">
        <meta name="generator" content="Hugo 0.88.1">
        <title><?=$_SESSION['nama'];?></title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/jumbotron/">

    

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
        </style>

    
    </head>
    <body>
    
        <main>
            <div class="container py-4">
                <header class="pb-3 mb-4 border-bottom">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="index.php">Home</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                
                                    <!--Blok Menu Drop Down-->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Data Master
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="?r=anggota">Anggota</a></li>
                                            <li><a class="dropdown-item" href="?r=buku">Buku</a></li>                                            
                                        </ul>
                                    </li>
                                    <!--Blok Menu Drop Down-->


                                    <!--Blok Menu Drop Down-->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Transaksi
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="?r=peminjaman">Peminjaman</a></li>
                                            <li><a class="dropdown-item" href="?r=pengembalian">Pengembalian</a></li>                                            
                                        </ul>
                                    </li>
                                    <!--Blok Menu Drop Down-->


                                    <li class="nav-item">
                                        <a class="nav-link" href="logout.php">
                                            Logout (<?=$_SESSION['nama'];?>)                            
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav> 
                </header>
                <div class="p-3 mb-4 bg-light rounded-3">
                    
                    <?php
                        
                        //--Jika Sudah Berhasil Login--//
                        if(isset($_SESSION['project_cloud'])) {

                            if(isset($r)) {
                                switch($r) {
    
                                    //Dashboard//
                                    case 'dashboard':
                                    include "form/dashboard.php";
                                    break;

                                    //Anggota//
                                    case 'anggota':
                                    include "form/anggota/index.php";
                                    break;

                                    case 'fanggotacreate':
                                    include "form/anggota/create.php";
                                    break;

                                    case 'fanggotadelete':
                                    include "form/anggota/delete.php";
                                    break;

                                    case 'fanggotaedit':
                                    include "form/anggota/update.php";
                                    break;

                                    //Buku//
                                    case 'buku':
                                    include "form/buku/index.php";
                                    break;

                                    case 'fbukucreate':
                                    include "form/buku/create.php";
                                    break;
                                            
                                    case 'fbukudelete':
                                    include "form/buku/delete.php";
                                    break;
                                                
                                    case 'fbukuedit':
                                    include "form/buku/update.php";
                                    break;

                                    //Peminjaman//
                                    case 'peminjaman':
                                    include "form/peminjaman/index.php";
                                    break;
    
                                    case 'fpeminjamancreate':
                                    include "form/peminjaman/create.php";
                                    break;
                                                
                                    case 'fpeminjamandelete':
                                    include "form/peminjaman/delete.php";
                                    break;
                                                    
                                    case 'fpeminjamanedit':
                                    include "form/peminjaman/update.php";
                                    break;

                                    //Pengembalian//
                                    case 'pengembalian':
                                    include "form/pengembalian/index.php";
                                    break;
    
                                    case 'fpengembaliancreate':
                                    include "form/pengembalian/create.php";
                                    break;
                                                
                                    case 'fpengembaliandelete':
                                    include "form/pengembalian/delete.php";
                                    break;
                                                    
                                    case 'fpengembalianedit':
                                    include "form/pengembalian/update.php";
                                    break;    

    
                                    //Jika Halaman tidak ditemukan//
                                    default:
                                    include "form/page-404.php";
                                }
                            }else {
                                include "form/dashboard.php";
                            }

                        }else {
                            //Form Login//
                            echo "<script>location='login.php';</script>";
                        }

                        
                    ?>
                </div>

                <footer class="pt-3 mt-4 text-muted border-top">
                        Kelompok I &copy; 2022
                </footer>
            </div>
        </main>


    
    </body>
</html>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
        })
    })()
</script>

<script src="js/bootstrap.bundle.min.js"></script>
