<?php

require 'function.php';
require 'cek.php';


$email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Fungsi Umum | Inventaris Gudang</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <style>
            .zoomable{
                width: 150px;
            }
            .zoomable:hover{
                transform: scale(2);
                transition: 0.3s ease;
            }
            a{
                text-decoration:none;
                color:black;
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
                        <h1 class="mt-4">Stock Barang</h1>

                        <div class="card mb-4">
                            <div class="card-header">
                                <!-- Button to Open the Modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                Tambah Barang
                            </button>
                            </div>
                            
                            <div class="card-body">

                            <?php
                            $ambildatastock = mysqli_query($conn,"select * from stock where stock < 1");

                            while($fetch=mysqli_fetch_array($ambildatastock)){
                                $barang = $fetch['namabarang'];
                            
                            
                            ?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Perhatian!</strong> Stock Barang <?=$barang;?> Telah Habis !
                            </div>
                            <?php
                                    }

                            ?>


                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Gambar</th>
                                                <th>Nama Barang</th>
                                                <th>stock</th>
                                                <th>satuan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $ambilsemuadatastock = mysqli_query($conn,"select * from stock");
                                            $i = 1;
                                            while($data = mysqli_fetch_array($ambilsemuadatastock)){
                                                
                                                $namabarang = $data['namabarang'];
                                                $stock = $data['stock'];
                                                $satuan = $data['satuan'];
                                                $idb = $data['idbarang'];

                                                    
                                                //cek gambar ada or no
                                                $gambar = $data['image']; //ambil gambar
                                                if($gambar==null){
                                                     //Jika tidak ada gambar
                                                     $img = 'No Picture';
                                                } else {
                                                    //Jika ada gambar
                                                    $img = '<img src="images/'.$gambar.'" class="zoomable">';
                                                }



                                            ?>
                                            <tr>
                                                <td><?=$i++;?></td>
                                                <td><?=$img;?></td>
                                                <td><strong><a href="detail.php?id=<?=$idb;?>"><?=$namabarang;?></a></strong></td>
                                                <td><?=$stock;?></td>
                                                <td><?=$satuan;?></td>
                                                <td>
                                                     <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?=$idb;?>">
                                                    Edit
                                                    </button>
                                                     <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?=$idb;?>">
                                                    Delete
                                                    </button>


                                                </td>
                                            </tr>

                                                            <!-- edit Modal -->
                                                <div class="modal fade" id="edit<?=$idb;?>">
                                                    <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    
                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                        <h4 class="modal-title">Edit Barang</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                                        
                                                    <!-- Modal body -->
                                                    <form method="post" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                            <input type="text" name="namabarang" value="<?=$namabarang;?>" class="form-control" required>
                                                            <br>
                                                            <input type="text" name="satuan" value="<?=$satuan;?>" class="form-control" required>
                                                            <br>
                                                            <input type="file" name="file" class="form-control">
                                                            <br>
                                                            <input type="hidden" name="idb" value="<?=$idb;?>">
                                                            <button type="submit" class="btn btn-primary" name="updatebarang">Update</button>
                                                            
                                                            </div>
                                                            </form>

                                                    
                                                        
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>


                                                    <!-- Delete Modal -->
                                                    <div class="modal fade" id="delete<?=$idb;?>">
                                                            <div class="modal-dialog">
                                                            <div class="modal-content">
                                                            
                                                                <!-- Modal Header -->
                                                                <div class="modal-header">
                                                                <h4 class="modal-title">Hapus Barang</h4>
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                </div>
                                                                
                                                            <!-- Modal body -->
                                                            <form method="post">
                                                                    <div class="modal-body">
                                                                    Apakah anda ingin mengapus <?=$namabarang;?> ?
                                                                    <input type="hidden" name="idb" value="<?=$idb;?>">
                                                                    <br>
                                                                    <br>
                                                                    <button type="submit" class="btn btn-danger" name="hapusbarang">Hapus</button>
                                                                    
                                                                    </div>
                                                                    </form>

                                                            
                                                                
                                                            </div>
                                                            </div>
                                                        </div>

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
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">All Right Reserved &copy; Erlangga Difa Yanzi <?php echo date('Y') ?></div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
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
