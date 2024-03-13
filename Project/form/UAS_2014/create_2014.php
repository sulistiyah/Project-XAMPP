<?php
//Jika Tombol Button sudah di klik
if(isset($btnSimpan)){

    //Insert ke table tbvaksin_2014 //
    $sql="insert into tbvaksin_2014 value ('$idvaksin_2014','$noktp_2014','$nama_2014','$notlp_2014','$jeniskelamin_2014','$alamat_2014','$vaksinke_2014','$jenisvaksin_2014','$tempatvaksin_2014')";
    $hasil=mysqli_query($db,$sql);

    //jika berhasil diinsert ke tbvaksin_2014
    if($hasil){
    //--Direct Url ke index pada folder UAS_2014-//
        echo "<script>location='?r=vaksin';</script>";
    } else{
        //Jika gagal di insert ke tbvaksin_2014//
        echo "<div class=\"alert alert-warning\" role=\"alert\">Gagal disimpan</div>";
    }
}
?>

<form class="row g-3 needs-validation" enctype="multipart/form-data" action="index.php?r=fvaksincreate" 
method="POST" novalidate>

    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">ID Vaksin</label>
        <input type="text" name="idvaksin_2014" class="form-control" placeholder="ID Vaksin" required>
        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">No KTP</label>
        <input type="text" name="noktp_2014" class="form-control" placeholder="No KTP" required>
        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Nama Lengkap</label>
        <input type="text" name="nama_2014" class="form-control" placeholder="Nama Lengkap" required>
        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-6">
        <label for="validationCustom01" class="form-label">No TLPN</label>
        <input type="text" name="notlp_2014" class="form-control" placeholder="No TLPN" required>
        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-6">
        <label for="validationCustom01" class="form-label">Jenis Kelamin</label>

        <select class="form-select" name="jeniskelamin_2014">
            <option value="Pria"> Pria </option>
            <option value="Wanita"> Wanita </option>
        </select>

        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-12">
        <label for="validationCustom01" class="form-label">Alamat</label>

        <textarea name="alamat_2014" class="form-control" cols="20" rows="3" placeholder="Alamat" required></textarea>

        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Vaksin Ke</label>

        <select class="form-select" name="vaksinke_2014">
            <option value="Pertama"> Pertama </option>
            <option value="Kedua"> Kedua </option>
        </select>

        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-8">
        <label for="validationCustom01" class="form-label">Jenis Vaksin</label>

        <select class="form-select" name="jenisvaksin_2014">
            <option value="Sinovac"> Sinovac </option>
            <option value="Moderna"> Moderna </option>
            <option value="Astra Zeneca"> Astra Zeneca </option>
        </select>

        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-12">
        <label for="validationCustom01" class="form-label">Tempat Vaksin</label>

        <textarea name="tempatvaksin_2014" class="form-control" cols="20" rows="3" placeholder="Tempat Vaksin" required></textarea>

        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-12">
        <button class="btn btn-primary" type="submit" name="btnSimpan">Simpan</button>
    </div>

</form>