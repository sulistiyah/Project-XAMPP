<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Fungsi Umum | Barang Keluar</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <style>
            .zoomable{
                width: 150px;
            }
            </style>
    </head>

<table class="table table-bordered"  cellpadding="25" width="100%" align="center">
    <thead>
        <tr>
        <th>No.</th>
        <th>Nama Barang</th>
        <th>Jumlah</th>
        <th>Satuan</th>
        <th>Keterangan</th>
    </tr>
</thead>
<tbody>
<strong><h2><p align="center"> Surat Permintaan ATK, ARK & CS</p></h2></strong>
<?php
                                            include 'function.php';
                                            $ambilsemuadatastock = mysqli_query($conn,"select * from keluar k, stock s where s.idbarang = k.idbarang");
                                            $i = 1;
                                            while($data = mysqli_fetch_array($ambilsemuadatastock)){
                                                $idk = $data['idkeluar'];
                                                $idb = $data['idbarang'];
                                                $namabarang = $data['namabarang'];
                                                $qty = $data['qty'];
                                                $satuan = $data['satuan'];
                                                $keterangan = $data['keterangan'];
                                                $penerima = $data['penerima'];

                                                
                                                    ?>
                                                <tr>
                                                <td><?=$i++;?></td>
                                                <td><?=$namabarang;?></td>
                                                <td><?=$qty;?></td>
                                                <td><?=$satuan;?></td>
                                                <td><?=$keterangan;?></td>
                                            <?php 
                                            };
                                            ?>
                                            
                                    <script>window.print();
                                </script>
                                    </table>
                                            </tbody>
                                            FSWJGOISHIGA
                                        </thead>