<?php

    // Ambil data dari vaksin_2001081002
    $sql_update="SELECT * FROM vaksin_2001081002 WHERE idvaksin_1002='$id'";
    $query_update= mysqli_query($db, $sql_update);
    $data_update=mysqli_fetch_array($query_update);

    // Jika tombol Button sudah diklik
    if (isset($btnSimpan)) {

        //Update ke table vaksin_2001081002 //
        $sql="UPDATE vaksin_2001081002 SET  noktp_1002='$noktp_1002', nama_1002='$nama_1002',
                                            notlpn_1002='$notlpn_1002', jeniskelamin_1002='$jeniskelamin_1002',
                                            alamat_1002='$alamat_1002', vaksinke_1002='$vaksinke_1002',
                                            jenisvaksin_1002='$jenisvaksin_1002', tempatvaksin_1002='$tempatvaksin_1002'
                                            WHERE `idvaksin_1002`='$idvaksin_1002'";
        $hasil=mysqli_query($db,$sql);

        //jika berhasil diinsert ke vaksin_2001081002
            if($hasil){
                //--Direct Url ke index pada folder UAS_1002-//
                echo "<script>location='?r=vaksin';</script>";
            } else  {
                //Jika gagal di insert ke vaksin_2001081002//
                echo "<div class=\"alert alert-danger\" role=\"alert\">Gagal disimpan</div>";
            }
    }
?>

<form class="row g-3 needs-validation" enctype="multipart/form-data" action="?r=fvaksinedit&id=<?=$id?>"  method="POST" novalidate>

    <div class="col-md-4">
        <label class="form-label">ID Vaksin</label>
        <input type="text"  class="form-control" value=<?=$data_update[0] ?> name="idvaksin_1002"  readonly placeholder="ID Vaksin" required>
        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-4">
        <label class="form-label">No KTP</label>
        <input type="text" value=<?=$data_update[1] ?> name="noktp_1002" class="form-control" placeholder="No KTP" required>
        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-4">
        <label  class="form-label">Nama Lengkap</label>
        <input type="text" value=<?=$data_update[2] ?> name="nama_1002" class="form-control" placeholder="Nama Lengkap" required>
        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-6">
        <label  class="form-label">No TLPN</label>
        <input type="text" value=<?=$data_update[3] ?> name="notlpn_1002" class="form-control" placeholder="No TLPN" required>
        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-6">
        <label class="form-label">Jenis Kelamin</label>

        <select class="form-select" name="jeniskelamin_1002">
            <option value="Pria" <?= $data_update[4]=="Pria" ? "selected":"" ?>>Pria</option>
            <option value="Wanita" <?= $data_update[4]=="Wanita" ? "selected":"" ?>> Wanita</option>
        </select>

        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-12">
        <label class="form-label">Alamat</label>
        
        <textarea name="alamat_1002" class="form-control" cols="20" rows="3" placeholder="Alamat" required><?= $data_update[5];?></textarea>
        
        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-4">
        <label  class="form-label">Vaksin Ke</label>

        <select class="form-select" name="vaksinke_1002">
            <option value="Pertama" <?= $data_update[6]=="Pertama" ? "selected":"" ?>> Pertama </option>
            <option value="Kedua" <?= $data_update[6]=="Kedua" ? "selected":"" ?>> Kedua </option>
        </select>

        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-8">
        <label  class="form-label">Jenis Vaksin</label>

        <select class="form-select" name="jenisvaksin_1002">
            <option value="Sinovac" <?= $data_update[7]=="Sinovac" ? "selected":"" ?>> Sinovac </option>
            <option value="Moderna" <?= $data_update[7]=="Moderna" ? "selected":"" ?>> Moderna </option>
            <option value="Astra Zeneca" <?= $data_update[7]=="Astra Zeneca" ? "selected":"" ?>> Astra Zeneca </option>
        </select>

        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-12">
        <label class="form-label">Tempat Vaksin</label>

        <textarea name="tempatvaksin_1002"  class="form-control" cols="20" rows="3" placeholder="Tempat Vaksin" required><?= $data_update[8];?></textarea>

        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-12">
        <button class="btn btn-primary" type="submit" name="btnSimpan">Simpan</button>
    </div>

</form>