<?php
//Jika Tombol Button sudah di klik
if(isset($btnSimpan)){

    //Insert ke table vaksin_2001081002 //
    $sql="insert into vaksin_2001081002 value ( '$idvaksin_1002','$noktp_1002','$nama_1002',
                                                '$notlpn_1002','$jeniskelamin_1002','$alamat_1002',
                                                '$vaksinke_1002','$jenisvaksin_1002','$tempatvaksin_1002')";
    $hasil=mysqli_query($db,$sql);

    //jika berhasil diinsert ke vaksin_2001081002
    if($hasil){
    //--Direct Url ke index pada folder UAS_1002-//
        echo "<script>location='?r=vaksin';</script>";
    } else{
        //Jika gagal di insert ke vaksin_2001081002//
        echo "<div class=\"alert alert-warning\" role=\"alert\">Gagal disimpan</div>";
    }
}
?>

<form class="row g-3 needs-validation" enctype="multipart/form-data" action="index.php?r=fvaksincreate" 
method="POST" novalidate>

    <div class="col-md-4">
        <label class="form-label">ID Vaksin</label>
        <input type="text" name="idvaksin_1002" class="form-control" placeholder="ID Vaksin" required>
        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-4">
        <label class="form-label">No KTP</label>
        <input type="text" name="noktp_1002" class="form-control" placeholder="No KTP" required>
        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-4">
        <label  class="form-label">Nama Lengkap</label>
        <input type="text" name="nama_1002" class="form-control" placeholder="Nama Lengkap" required>
        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-6">
        <label  class="form-label">No TLPN</label>
        <input type="text" name="notlpn_1002" class="form-control" placeholder="No TLPN" required>
        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-6">
        <label class="form-label">Jenis Kelamin</label>

        <select class="form-select" name="jeniskelamin_1002">
            <option value="Pria"> Pria </option>
            <option value="Wanita"> Wanita </option>
        </select>

        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-12">
        <label  class="form-label">Alamat</label>

        <textarea name="alamat_1002" class="form-control" cols="20" rows="3" placeholder="Alamat" required></textarea>

        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-4">
        <label  class="form-label">Vaksin Ke</label>

        <select class="form-select" name="vaksinke_1002">
            <option value="Pertama"> Pertama </option>
            <option value="Kedua"> Kedua </option>
        </select>

        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-8">
        <label  class="form-label">Jenis Vaksin</label>

        <select class="form-select" name="jenisvaksin_1002">
            <option value="Sinovac"> Sinovac </option>
            <option value="Moderna"> Moderna </option>
            <option value="Astra Zeneca"> Astra Zeneca </option>
        </select>

        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-12">
        <label class="form-label">Tempat Vaksin</label>

        <textarea name="tempatvaksin_1002" class="form-control" cols="20" rows="3" placeholder="Tempat Vaksin" required></textarea>

        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-12">
        <button class="btn btn-primary" type="submit" name="btnSimpan">Simpan</button>
    </div>

</form>