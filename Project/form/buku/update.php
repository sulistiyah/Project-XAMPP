<?php

//Ambil data dari idbuku
$sql_update="select * from buku_2001082014 where idbuku='$id'";
$query_update=mysqli_query($db, $sql_update);
$data_upadate=mysqli_fetch_array($query_update);

//Jika Tombol Button sudah di klik
if(isset($btnSimpan)){

    //Update ke table buku_2001082014 //
    $sql="UPDATE buku_2001082014 set judulbuku='$judulbuku',kategori='$kategori',pengarang='$pengarang',penerbit='$penerbit',status='$status',tahun='$tahun'
    where `idbuku` = '$idbuku'";
    $hasil=mysqli_query($db,$sql);

    //jika berhasil diupdate ke buku_2001082014
    if($hasil){
    //--Direct Url ke index pada folder buku-//
        echo "<script>location='?r=buku';</script>";
    } else{
        //Jika gagal di insert ke buku_2001082014//
        echo "<div class=\"alert alert-warning\" role=\"alert\">Gagal disimpan</div>";
    }
}
?>

<form class="row g-3 needs-validation" enctype="multipart/form-data" action="?r=fbukuedit&id=<?=$id?>" 
method="POST" novalidate>

    <div class="col-md-6">
        <label for="validationCustom01" class="form-label">ID Buku</label>
        <input type="text" name ="idbuku" class="form-control" readonly placeholder="Id Buku" value=<?=$data_upadate[0]?> required>        
        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-6">
        <label for="validationCustom01" class="form-label">Judul Buku</label>
        <input type="text" name="judulbuku" class="form-control" placeholder="Judul Buku" value=<?=$data_upadate[1]?>  required>
        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Kategori</label>
        <input type="text" name="kategori" class="form-control" placeholder="Kategori" value=<?=$data_upadate[2]?>  required>
        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Pengarang</label>
        <input type="text" name="pengarang" class="form-control" placeholder="Pengarang" value=<?=$data_upadate[3]?>  required>
        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Penerbit</label>
        <input type="text" name="penerbit" class="form-control" placeholder="Penerbit" value=<?=$data_upadate[4]?>  required>
        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-8">
        <label for="validationCustom01" class="form-label">Status</label>

        <select class="form-select" name="status">
            <option value="Tersedia" <?=$data_upadate[5]=="Tersedia" ? "selected":""?>> Tersedia </option>
            <option value="Dipinjam" <?=$data_upadate[5]=="Dipinjam" ? "selected":""?>> Dipinjam </option>
        </select>

        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Tahun</label>

        <input type="number"  class="form-control" value=<?=$data_upadate[6]?> name="tahun" placeholder="Tahun" required>

        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-12">
        <button class="btn btn-primary" type="submit" name="btnSimpan">Simpan</button>
    </div>

</form>