<?php
//Jika Tombol Button sudah di klik
if(isset($btnSimpan)){

    //Insert ke table buku_2001082014 //
    $sql="insert into buku_2001082014 value ('$idbuku','$judulbuku','$kategori','$pengarang','$penerbit','$status','$tahun')";
    $hasil=mysqli_query($db,$sql);

    //jika berhasil diinsert ke buku_2001082014
    if($hasil){
    //--Direct Url ke index pada folder buku-//
        echo "<script>location='?r=buku';</script>";
    } else{
        //Jika gagal di insert ke buku_2001082014//
        echo "<div class=\"alert alert-warning\" role=\"alert\">Gagal disimpan</div>";
    }
}
?>

<form class="row g-3 needs-validation" enctype="multipart/form-data" action="index.php?r=fbukucreate" 
method="POST" novalidate>

    <div class="col-md-6">
        <label for="validationCustom01" class="form-label">ID Buku</label>
        <input type="text" name="idbuku" class="form-control" placeholder="ID Buku" required>
        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-6">
        <label for="validationCustom01" class="form-label">Judul Buku</label>
        <input type="text" name="judulbuku" class="form-control" placeholder="Judul Buku" required>
        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Kategori</label>
        <input type="text" name="kategori" class="form-control" placeholder="Kategori" required>
        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Pengarang</label>
        <input type="text" name="pengarang" class="form-control" placeholder="Pengarang" required>
        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Penerbit</label>
        <input type="text" name="penerbit" class="form-control" placeholder="Penerbit" required>
        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-8">
        <label for="validationCustom01" class="form-label">Status</label>

        <select class="form-select" name="status">
            <option value="Tersedia"> Tersedia </option>
            <option value="Dipinjam"> Dipinjam </option>
        </select>

        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Tahun</label>

        <input type="number"  class="form-control" name="tahun" placeholder="Tahun" required>

        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-12">
        <button class="btn btn-primary" type="submit" name="btnSimpan">Simpan</button>
    </div>

</form>