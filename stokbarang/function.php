<?php
session_start();
//Koneksi ke database
$conn = mysqli_connect("localhost", "root","","stokbarang");


//Menambah barang baru
if(isset($_POST['addnewbarang'])){
    $namabarang = $_POST['namabarang'];
    $stock = $_POST['stock'];
    $satuan =$_POST['satuan'];

    //Gambar
    $allowed_extension = array('png', 'jpg');
    $nama = $_FILES['file']['name']; //mengambil nama gambar
    $dot = explode('.',$nama);
    $ekstensi = strtolower(end($dot)); //mengambil ekstensinya
    $ukuran = $_FILES['file']['size']; //mengambil size filenya
    $file_tmp = $_FILES['file']['tmp_name']; //mengambil lokasi file

    //Penamaan file -> enkripsi
    $image = md5(uniqid($nama,true) . time()).'.'.$ekstensi; //Menggabung nama file yang di enkrispi dengan ekstensinya


    //validasi udah ada atau belum
    $cek = mysqli_query($conn, "select * from stock where namabarang='$namabarang'");
    $hitung = mysqli_num_rows($cek);

    if($hitung<1){
        //jika belum ada

        //proses upload gambar
        if(in_array($ekstensi, $allowed_extension)  === true){
            //validasi ukuran file
            if($ukuran < 15000000){
                move_uploaded_file($file_tmp, 'images/'.$image);

                $addtotable = mysqli_query($conn, "insert into stock (namabarang, stock, satuan, image) values ('$namabarang', '$stock', '$satuan', '$image')");
                if($addtotable){
                    header('location:index.php');
                } else{
                    echo 'Gagal';
                    header('location:index.php');
                }
            } else {
                //klaau file lebih dari 1,5mb
                echo'
                <script>
                    alert("File terlalu besar");
                    window.location.href="index.php";
                    </script>
                    ';
            }
        } else {
            //kalau file tidak sesuai format
            echo'
            <script>
                alert("Format gambar harus png/jpg/jpeg");
                window.location.href="index.php";
                </script>
                ';
        }
    

} else {
    //jika sudah ada
    echo'
    <script>
        alert("Nama barang sudah terdaftar");
        window.location.href="index.php";
        </script>
        ';
}
}


//Menambah barang masuk
if(isset($_POST['barangmasuk'])){
    $barangnya = $_POST['barangnya'];
    $qty = $_POST['qty'];
    $satuan = $_POST['satuan'];

    $cekstocksekarang = mysqli_query($conn, "select * from stock where idbarang= '$barangnya'");
    $ambildatanya = mysqli_fetch_array($cekstocksekarang);

    $stocksekarang = $ambildatanya['stock'];
    $tambahkanstocksekarangdenganquantity = $stocksekarang+$qty;

    $addtomasuk = mysqli_query($conn, "insert into masuk(idbarang, qty, keterangan) values ('$barangnya', '$qty', '$keterangan')");
    $updatestockmasuk = mysqli_query($conn, "update stock set stock = '$tambahkanstocksekarangdenganquantity' where idbarang='$barangnya'");
    if($addtomasuk&&$updatestockmasuk){
        header('location:masuk.php');
    } else{
        echo 'Gagal';
        header('location:masuk.php');
    }
}




//Menambah barang keluar
if(isset($_POST['addbarangkeluar'])){
    $barangnya = $_POST['barangnya'];
    $qty = $_POST['qty'];
    $satuan = $_POST['satuan'];
    $keterangan = $_POST['keterangan'];
    $penerima = $_POST['penerima'];

    $cekstocksekarang = mysqli_query($conn, "select * from stock where idbarang= '$barangnya'");
    $ambildatanya = mysqli_fetch_array($cekstocksekarang);

    $stocksekarang = $ambildatanya['stock'];
    // Kalau barangnya cukup
    if($stocksekarang >= $qty){
        $tambahkanstocksekarangdenganquantity = $stocksekarang-$qty;

        $addtokeluar = mysqli_query($conn, "insert into keluar(idbarang, qty, penerima, satuan, keterangan) values ('$barangnya', '$qty', '$penerima', '$satuan', '$keterangan')");
        $updatestockmasuk = mysqli_query($conn, "update stock set stock = '$tambahkanstocksekarangdenganquantity' where idbarang= '$barangnya'");
        if($addtokeluar&&$updatestockmasuk){
            header('location:keluar.php');
        } else{
            echo 'Gagal';
            header('location:keluar.php');
        }
} else {
    //kalau stoknya gak cukup
    echo '
    <script>
        alert("Stock sekarang tidak mencukupi");
        window.location.href="keluar.php";
    </script>
    ';
}

}




//update info barang
if(isset($_POST['updatebarang'])){
    $idb = $_POST['idb'];
    $namabarang = $_POST['namabarang'];
    $stock = $_POST['stock'];
    $satuan = $_POST['satuan'];
    
    //Gambar
    $allowed_extension = array('png', 'jpg');
    $nama = $_FILES['file']['name']; //mengambil nama gambar
    $dot = explode('.',$nama);
    $ekstensi = strtolower(end($dot)); //mengambil ekstensinya
    $ukuran = $_FILES['file']['size']; //mengambil size filenya
    $file_tmp = $_FILES['file']['tmp_name']; //mengambil lokasi file

    //Penamaan file -> enkripsi
    $image = md5(uniqid($nama,true) . time()).'.'.$ekstensi; //Menggabung nama file yang di enkrispi dengan ekstensinya

    if($ukuran==0){
        //Jika tidak ingin upload
        $update = mysqli_query($conn,"update stock set namabarang='$namabarang', stock='$stock', satuan='$satuan' where idbarang = '$idb'");
    if($update){
        header('location:index.php');
    } else{
        echo 'Gagal';
        header('location:index.php');
    }
    } else {
        //Jika ingin uplod
        move_uploaded_file($file_tmp, 'images/'.$image);
        $update = mysqli_query($conn,"update stock set namabarang='$namabarang', stock='$stock', satuan='$satuan', image='$image' where idbarang = '$idb'");
        if($update){
            header('location:index.php');
        } else{
            echo 'Gagal';
            header('location:index.php');
        }
        } 
}




//Mengapus barang stock

if(isset($_POST['hapusbarang'])){
    $idb = $_POST['idb'];

    $gambar = mysqli_query($conn, "select * from stock where idbarang ='$idb'");
    $get = mysqli_fetch_array($gambar);
    $img = 'images/'.$get['image'];
    unlink($img);


    $hapus = mysqli_query($conn, "delete from stock where idbarang='$idb'");
    if($hapus){
        header('location:index.php');
    } else{
        echo 'Gagal';
        header('location:index.php');
    }
};




//Mengubah data barang masuk
if(isset($_POST['updatebarangmasuk'])){
    $idb = $_POST['idb'];
    $idm = $_POST['idm'];
    $qty = $_POST['qty'];
    $satuan = $_POST['satuan'];

    $lihatstock = mysqli_query($conn, "select * from stock where idbarang='$idb'");
    $stocknya = mysqli_fetch_array($lihatstock);
    $stockskrg = $stocknya['stock'];

    $qtyskrg =mysqli_query($conn,"select * from masuk where idmasuk='$idm'");
    $qtynya = mysqli_fetch_array($qtyskrg);
    $qtyskrg = $qtynya['qty'];

    if($qty>$qtyskrg){
        $selisih = $qty-$qtyskrg;
        $kurangin = $stockskrg + $selisih;
        $kurangistocknya =mysqli_query($conn, "update stock set stock='$kurangin' where idbarang='$idb'");
        $updatenya = mysqli_query($conn,"update masuk set qty='$qty', satuan='$satuan' where idmasuk='$idm'");

        if($kurangistocknya&&$updatenya){
            header('location:masuk.php');
    } else {
        echo 'Gagal';
        header('location:masuk.php');
        }
    } else{
        $selisih = $qtyskrg-$qty;
        $kurangin = $stockskrg - $selisih;
        $kurangistock = mysqli_query($conn, "update stock set stock ='$kurangin' where idbarang='$idb'");
        $updatenya = mysqli_query($conn, "update masuk set qty='$qty', satuan='$satuan' where idmasuk='$idm'");
            if($kurangistocknya&&$updatenya){
                header('location:masuk.php');
                } else{
                    echo 'Gagal';
                    header('location:masuk.php');
    }
}
}



    //Menghapus barang masuk
        if(isset($_POST['hapusbarangmasuk'])){
            $idb = $_POST['idb'];
            $qty = $_POST['kty'];
            $idm = $_POST['idm'];
        

            $getdatastock = mysqli_query($conn,"select * from stock where idbarang='$idb'");
            $data = mysqli_fetch_array($getdatastock);
            $stock = $data['stock'];

            $selisih = $stock-$qty;

            $update = mysqli_query($conn,"update stock set stock='$selisih' where idbarang='$idb'");
            $hapusdata = mysqli_query($conn,"delete from masuk where idmasuk='$idm'");

            if($update&&$hapusdata){
                header('location:masuk.php');
            } else {
                header('location:masuk.php');
            }
        }



        //Mengubah data barang keluar

        if(isset($_POST['updatebarangkeluar'])){
            $idb = $_POST['idb'];
            $idk = $_POST['idk'];
            $qty = $_POST['qty'];
            $keterangan = $_POST['keterangan'];
        
            $lihatstock = mysqli_query($conn, "select * from stock where idbarang='$idb'");
            $stocknya = mysqli_fetch_array($lihatstock);
            $stockskrg = $stocknya['stock'];
        
            $qtyskrg =mysqli_query($conn,"select * from keluar where idkeluar='$idk'");
            $qtynya = mysqli_fetch_array($qtyskrg);
            $qtyskrg = $qtynya['qty'];
        
            if($qty>$qtyskrg){
                $selisih = $qty-$qtyskrg;
                $kurangin = $stockskrg - $selisih;
                $kurangistocknya =mysqli_query($conn, "update stock set stock='$kurangin' where idbarang='$idb'");
                $updatenya = mysqli_query($conn,"update keluar set qty='$qty', keterangan='$keterangan' where idkeluar='$idk'");
        
                if($kurangistocknya&&$updatenya){
                    header('location:keluar.php');
            } else{
                echo 'Gagal';
                header('location:keluar.php');
                }
            } else{
                $selisih = $qtyskrg-$qty;
                $kurangin = $stockskrg + $selisih;
                $kurangistock = mysqli_query($conn, "update stock set stock ='$kurangin' where idbarang='$idb'");
                $updatenya = mysqli_query($conn, "update keluar set qty='$qty', keterangan='$keterangan' where idkeluar='$idk'");
                    if($kurangistocknya&&$updatenya){
                        header('location:keluar.php');
                        } else{
                            echo 'Gagal';
                            header('location:keluar.php');
            }
        }
        }


        //Menghapus barang keluar

        if(isset($_POST['hapusbarangkeluar'])){
            $idb = $_POST['idb'];
            $qty = $_POST['kty'];
            $idk = $_POST['idk'];
        

            $getdatastock = mysqli_query($conn,"select * from stock where idbarang='$idb'");
            $data = mysqli_fetch_array($getdatastock);
            $stock = $data['stock'];

            $selisih = $stock+$qty;

            $update = mysqli_query($conn,"update stock set stock='$selisih' where idbarang='$idb'");
            $hapusdata = mysqli_query($conn,"delete from keluar where idkeluar='$idk'");

            if($update&&$hapusdata){
                header('location:keluar.php');
            } else {
                header('location:keluar.php');
            }
        }




        //Menambah Admin baru

        if(isset($_POST['addadmin'])){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $queryinsert = mysqli_query($conn,"insert into login (email, password) values ('$email','$password')");

            if($queryinsert){
                //if berhasil
                header('location: admin.php');

            }else{
                //Gagal Insert
                header('location : admin.php');
            }
        }


//Edit data admin
        if(isset($_POST['updateadmin'])){
            $emailbaru = $_POST['emailadmin'];
            $passwordbaru = $_POST['passwordbaru'];
            $idnya = $_POST['id'];

            $queryupdate = mysqli_query($conn, "update login set email='$emailbaru', password='$passwordbaru' where iduser='$idnya'");

            if($queryupdate){
                header('location: admin.php');
            }else{
                header('location: admin.php');
            }

        }


//Hapus admin

        if(isset($_POST['hapusadmin'])){
            $id = $_POST['id'];

            $querydelete = mysqli_query($conn, "delete from login where iduser='$id'");

            if($querydelete){
                header('location: admin.php');
            }else{
                header('location: admin.php');
            }
        }





?>