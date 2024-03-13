<?php

//Ambil data dari idbuku
$sql_update="select * from tbvaksin_2014 where idvaksin_2014='$id'";
$query_update=mysqli_query($db, $sql_update);
$data_upadate=mysqli_fetch_array($query_update);

//Jika Tombol Button sudah di klik
if(isset($btnSimpan)){

    //Update ke table buku_2001082014 //
    $sql="UPDATE tbvaksin_2014 set idvaksin_2014='$idvaksin_2014',noktp_2014='$noktp_2014',nama_2014='$nama_2014',notlp_2014='$notlp_2014',jeniskelamin_2014='$jeniskelamin_2014',alamat_2014='$alamat_2014',vaksinke_2014='$vaksinke_2014',jeniskelamin_2014='$jenisvaksin_2014',tempatvaksin_2014='$tempatvaksin_2014'
    where `idvaksin_2014` = '$idvaksin_2014'";
    $hasil=mysqli_query($db,$sql);

    //jika berhasil diupdate ke tbvaksin_2014
    if($hasil){
    //--Direct Url ke index pada folder buku-//
        echo "<script>location='?r=vaksin';</script>";
    } else{
        //Jika gagal di insert ke buku_2001082014//
        echo "<div class=\"alert alert-warning\" role=\"alert\">Gagal disimpan</div>";
    }
}
?>

<form class="row g-3 needs-validation" enctype="multipart/form-data" action="index.php?r=fvaksincreate" 
method="POST" novalidate>

    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">ID Vaksin</label>
        <input type="text" name="idvaksin_2014" class="form-control" placeholder="ID Vaksin" value=<?=$data_upadate[0]?> required>
        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">No KTP</label>
        <input type="text" name="noktp_2014" class="form-control" placeholder="No KTP" value=<?=$data_upadate[1]?> required>
        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Nama Lengkap</label>
        <input type="text" name="nama_2014" class="form-control" placeholder="Nama Lengkap" value=<?=$data_upadate[2]?> required>
        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-6">
        <label for="validationCustom01" class="form-label">No TLPN</label>
        <input type="text" name="notlp_2014" class="form-control" placeholder="No TLPN" value=<?=$data_upadate[3]?> required>
        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-6">
        <label for="validationCustom01" class="form-label">Jenis Kelamin</label>

        <select class="form-select" name="jeniskelamin_2014">
        <option value="Pria" value=<?=$data_upadate[4]=="Pria" ? "selected":"" ?> >Pria</option>
        <option value="Wanita" value=<?=$data_upadate[4]=="Wanita" ? "selected":"" ?> >Wanita</option>
    </select>

        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-12">
        <label for="validationCustom01" class="form-label">Alamat</label>

        <textarea name="alamat_2014" class="form-control" cols="20" rows="3" placeholder="Alamat" value=<?=$data_upadate[5]?> required></textarea>

        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Vaksin Ke</label>

        <select class="form-select" name="vaksinke_2014">
        <option value="Pertama" value=<?=$data_upadate[6]=="Pertama" ? "selected":"" ?> >Pertama</option>
        <option value="Kedua" value=<?=$data_upadate[6]=="Kedua" ? "selected":"" ?> >Kedua</option>
    </select>

        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-8">
        <label for="validationCustom01" class="form-label">Jenis Vaksin</label>

        <select class="form-select" name="jenisvaksin_2014">
        <option value="Sinovac" value=<?=$data_upadate[7]=="Sinovac" ? "selected":"" ?> >Sinovac</option>
        <option value="Moderna" value=<?=$data_upadate[7]=="Moderna" ? "selected":"" ?> >Moderna</option>
        <option value="Astra Zeneca" value=<?=$data_upadate[7]=="Astra Seneca" ? "selected":"" ?> >Astra Zeneca</option>
    </select>

        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-12">
        <label for="validationCustom01" class="form-label">Tempat Vaksin</label>

        <textarea name="tempatvaksin_2014" class="form-control" cols="20" rows="3" placeholder="Tempat Vaksin" value=<?=$data_upadate[8]?> required></textarea>

        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-12">
        <button class="btn btn-primary" type="submit" name="btnSimpan">Simpan</button>
    </div>

</form>