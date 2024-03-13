<?php

require 'function.php';
require 'cek.php';

$email = $_SESSION['email'];

// Mendapatkan ID barang yang dipassng di halaman sebelumnya
$idbarang = $_GET['id']; //get id barangnya

//Get info barang berdasarkan database
$get = mysqli_query($conn, "select * from stock where idbarang='$idbarang'");
$fetch = mysqli_fetch_assoc($get);

//Set Variable
$namabarang  = $fetch['namabarang'];
$stock = $fetch['stock'];
$qty = $fetch['qty'];
$satuan = $fetch['satuan'];

//cek gambar ada or no
$gambar = $fetch['image']; //ambil gambar
if($gambar==null){
     //Jika tidak ada gambar
     $img = 'No Picture';
} else {
    //Jika ada gambar
    $img = '<img src="images/'.$gambar.'" class="zoomable">';
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Detail Barang</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <style>
            .zoomable{
                width: 300px;
                height:250px;
            }
            </style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Inventaris Gudang</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Fungsi Umum</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Stock Barang
                            </a>
                            <a class="nav-link" href="masuk.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-bars"></i></div>
                                Barang Masuk
                            </a>
                            <a class="nav-link" href="keluar.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Barang Keluar
                            </a>
                            <a class="nav-link" href="admin.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Pengelolaan Admin
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small"><h6>Hi, <?=$email;?></h6></div>

                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                       <center> <h1 class="mt-4">Detail Barang</h1></center>

                        <div class="card mb-4 mt-4">
                            <div class="card-header">
                            <h3><?=$namabarang;?></h3>
                            <?=$img;?>
                            </div>
                            
                            <div class="card-body">

                        <div class="row">
                            <div class="col-md-3">Stock</div>
                            <div class="col-md-9">: <?=$stock;?></div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">Satuan</div>
                            <div class="col-md-9">: <?=$satuan;?></div>
                        </div>

                        <br></br>

                            <h3>Barang Masuk</h3>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="barangmasuk" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Tanggal</th>
                                                <th>Kuantiti</th>
                                                <th>satuan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                           $ambildatamasuk = mysqli_query($conn,"select * from masuk  where idbarang ='$idbarang'");
                                            $i = 1;
                                           while($fetch=mysqli_fetch_array($ambildatamasuk)){
                                               $tanggal = $fetch['tanggal'];
                                               $qty = $fetch['qty'];



                                            ?>
                                            <tr>
                                                <td><?=$i++;?></td>
                                                <td><?=$tanggal;?></td>
                                                <td><?=$qty;?></td>
                                                <td><?=$satuan;?></td>
                                            </tr>
                                                    
                                            <?php
                                            };
                                            ?>

                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        <h3>Barang Keluar</h3>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="barangkeluar" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Tanggal</th>
                                                <th>Kuantiti</th>
                                                <th>satuan</th>
                                                <th>Keterangan</th>
                                                <th>Penerima</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                           $ambildatakeluar = mysqli_query($conn,"select * from keluar  where idbarang ='$idbarang'");
                                            $i = 1;
                                           while($fetch=mysqli_fetch_array($ambildatakeluar)){
                                               $tanggal = $fetch['tanggal'];
                                               $qty = $fetch['qty'];
                                               $satuan = $fetch['satuan'];
                                               $keterangan = $fetch['keterangan'];
                                               $penerima = $fetch['penerima'];



                                            ?>
                                            <tr>
                                                <td><?=$i++;?></td>
                                                <td><?=$tanggal;?></td>
                                                <td><?=$qty;?></td>
                                                <td><?=$satuan;?></td>
                                                <td><?=$keterangan;?></td>
                                                <td><?=$penerima;?></td>
                                            </tr>
                                                    
                                            <?php
                                            };
                                            ?>

                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>
                </main>
                 
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
                <!-- The Modal -->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                <div class="modal-content">
                
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Tambah Barang</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                  <!-- Modal body -->
                  <form method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                        <input type="text" name="namabarang" placeholder="Nama Barang" class="form-control" required>
                        <br>
                        <input type="number" name="stock" placeholder="Jumlah Stock" class="form-control" required>
                        <br>
                        <input type="text" name="satuan" placeholder="Pcs, Box, Kg, etc.." class="form-control" required>
                        <br>
                        <input type="file" name="file" class="form-control">
                        <br>
                        <button type="submit" class="btn btn-primary" name="addnewbarang">Submit</button>
                        
                        </div>
                        </form>

                   
                    
                </div>
                </div>
            </div>
</html>
