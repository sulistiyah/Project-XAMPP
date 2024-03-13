<?php
    //Ambil data dari idanggota
    $sql_update = "select * from tanggota where idanggota='$id'";
    $query_update = mysqli_query($db, $sql_update);
    $data_update = mysqli_fetch_array($query_update);

    //Jika tombol Button sudah diklik
    if(isset($btnSimpan)){
             //Update ke table anggota//
            $sql="UPDATE tanggota set   nama='$nama', jeniskelamin='$jeniskelamin',
                                        prodi='$prodi',jurusan='$jurusan',alamat='$alamat'
                                        WHERE `idanggota` = '$idanggota'";
            $hasil = mysqli_query($db, $sql);
            if($hasil) {
                //--Direct Url ke index pada folder anggota--//
                echo "<script>location='?r=anggota';</script>";
            } else {
                //Jika gagal insert ke table anggota
                echo "<div class=\"alert alert-danger\" role=\"alert\">Gagal disimpan</div>";
            }
       
    }
    
?>
<form class="row g-3 needs-validation" enctype="multipart/form-data" action="?r=fanggotaedit&id=<?=$id?>" method="POST"
    novalidate>

    <div class="col-md-4">
        <label class="form-label">ID Anggota</label>
        <input type="text" class="form-control" value=<?=$data_update[0] ?> readonly placeholder="ID Anggota" name="idanggota" required>
        <div class="invalid-feedback">
            Harus di isi.
        </div>
    </div>

    <div class="col-md-4">
        <label class="form-label">Nama Anggota</label>
        <input type="text" class="form-control" value="<?= $data_update[1]; ?>" placeholder="Nama Anggota" name="nama" required>
        <div class="invalid-feedback">
            Harus di isi.
        </div>
    </div>

    <div class="col-md-4">
        <label class="form-label">Jenis Kelamin</label>
        
        <select class="form-select" name="jeniskelamin">
            <option value="Laki-Laki" <?= $data_update[2]=="Laki-Laki" ? "selected":"" ?>>Laki-Laki</option>
            <option value="Perempuan" <?= $data_update[2]=="Perempuan" ? "selected":"" ?>>Perempuan</option>
        </select>

        <div class="invalid-feedback">
            Harus di isi.
        </div>
    </div>

    <div class="col-md-6">
    <label class="form-label">Jurusan</label>
        
        <select class="form-select" name="jurusan">
            <option value="Teknik Mesin" <?= $data_update[3]=="Teknik Mesin" ? "selected":"" ?>>Teknik Mesin</option>
            <option value="Teknik Sipil" <?= $data_update[3]=="Teknik Sipil" ? "selected":"" ?>>Teknik Sipil</option>
            <option value="Teknik Elektro" <?= $data_update[3]=="Teknik Elektro" ? "selected":"" ?>>Teknik Elektro</option>
            <option value="Administrasi Niaga" <?= $data_update[3]=="Administrasi Niaga" ? "selected":"" ?>>Administrasi Niaga</option>
            <option value="Akuntansi" <?= $data_update[3]=="Teknik Mesin" ? "Akuntansi":"" ?>>Akuntansi</option>
            <option value="Teknologi Informasi" <?= $data_update[3]=="Teknologi Informasi" ? "selected":"" ?>>Tekonologi Informasi</option>
            <option value="Bahasa Inggris" <?= $data_update[3]=="Bahasa Inggris" ? "selected":"" ?>>Bahasa Inggris</option>
        </select>

        <div class="invalid-feedback">
            Harus di isi.
        </div>
    </div>

    <div class="col-md-6">
    <label class="form-label">Program Studi</label>
        
        <select class="form-select" name="prodi">
        <option value="D3 Konsentrasi Teknik Pemeliharaan" <?= $data_update[4]=="D3 Konsentrasi Teknik Pemeliharaan" ? "selected":"" ?>>D3 Konsentrasi Teknik Pemeliharaan </option>
        <option value="D3 Konsentrasi teknik Produksi" <?= $data_update[4]=="D3 Konsentrasi teknik Produksi" ? "selected":"" ?>>D3 Konsentrasi teknik Produksi</option>
        <option value="D3 Teknik Alat Berat" <?= $data_update[4]=="D3 Teknik Alat Berat" ? "selected":"" ?>>D3 Teknik Alat Berat</option>
        <option value="D4 Teknik Manufaktur" <?= $data_update[4]=="D4 Teknik Manufaktur" ? "selected":"" ?>> D4 Teknik Manufaktur</option>
        <option value="D3 Konsentrasi Konstruksi Sipil" <?= $data_update[4]=="D3 Konsentrasi Konstruksi Sipil" ? "selected":"" ?>>D3 Konsentrasi Konstruksi Sipil</option>
        <option value="D3 Konsentrasi Konstruksi Bangunan Gedung" <?= $data_update[4]=="D3 Konsentrasi Konstruksi Bangunan Gedung" ? "selected":"" ?>>D3 Konsentrasi Konstruksi Bangunan Gedung</option>
        <option value="D4 Teknik Perencanaan Irigasi dan Rawa" <?= $data_update[4]=="D4 Teknik Perencanaan Irigasi dan Rawa" ? "selected":"" ?>>D4 Teknik Perencanaan Irigasi dan Rawa</option>
        <option value="D4 Manajemen Rekayasa Konstruksi" <?= $data_update[4]=="D4 Manajemen Rekayasa Konstruksi" ? "selected":"" ?>>D4 Manajemen Rekayasa Konstruksi</option>
        <option value="D4 Perancangan Jalan dan Jembatan" <?= $data_update[4]=="D4 Perancangan Jalan dan Jembatan" ? "selected":"" ?>>D4 Perancangan Jalan dan Jembatan</option>
        <option value="D3 Teknik Listrik" <?= $data_update[4]=="D3 Teknik Listrik" ? "selected":"" ?>>D3 Teknik Listrik</option>
        <option value="D3 Teknik Elektronika" <?= $data_update[4]=="D3 Teknik Elektronika" ? "selected":"" ?>>D3 Teknik Elektronika</option>
        <option value="D3 Teknik Telekomunikasi" <?= $data_update[4]=="D3 Teknik Telekomunikasi" ? "selected":"" ?>>D3 Teknik Telekomunikasi</option>
        <option value="D4 Teknik Elektronika" <?= $data_update[4]=="D4 Teknik Elektronika" ? "selected":"" ?>>D4 Teknik Elektronika</option>
        <option value="D4 Teknik Telekomunikasi" <?= $data_update[4]=="D4 Teknik Telekomunikasi" ? "selected":"" ?>>D4 Teknik Telekomunikasi</option>
        <option value="D3 Administrasi Bisnis" <?= $data_update[4]=="D3 Administrasi Bisnis" ? "selected":"" ?>>D3 Administrasi Bisnis</option>
        <option value="D3 Usaha Perjalanan Wisata" <?= $data_update[4]=="D3 Usaha Perjalanan Wisata" ? "selected":"" ?>>D3 Usaha Perjalanan Wisata</option>
        <option value="D4 Destinasi Pariwisata" <?= $data_update[4]=="D4 Destinasi Pariwisata" ? "selected":"" ?>>D4 Destinasi Pariwisata</option>
        <option value="D3 Akuntansi" <?= $data_update[4]=="D3 Akuntansi" ? "selected":"" ?>>D3 Akuntansi</option>
        <option value="D4 Akuntansi" <?= $data_update[4]=="D4 Akuntansi" ? "selected":"" ?>>D4 Akuntansi</option>
        <option value="D3 Teknik Komputer" <?= $data_update[4]=="D3 Teknik Komputer" ? "selected":"" ?>>D3 Teknik Komputer</option>
        <option value="D3 Manajemen Informatika" <?= $data_update[4]=="D3 Manajemen Informatika" ? "selected":"" ?>>D3 Manajemen Informatika</option>
        <option value="D4 Teknik Rekayasa Perangkan Lunak" <?= $data_update[4]=="D4 Teknik Rekayasa Perangkan Lunak" ? "selected":"" ?>>D4 Teknik Rekayasa Perangkan Lunak</option>
        <option value="D3 Bahasa Inggris" <?= $data_update[4]=="D3 D4 Bahasa Inggris" ? "selected":"" ?>>D3 Bahasa Inggris</option>
        <option value="D4 Bahasa Inggris" <?= $data_update[4]=="D4 Bahasa Inggris" ? "selected":"" ?>>D4 Bahasa Inggris</option>
        </select>

        <div class="invalid-feedback">
            Harus di isi.
        </div>
    </div>

    <div class="col-md-12">
        <label class="form-label">Alamat</label>
        
        <textarea name="alamat" class="form-control" cols="20" rows="3" placeholder="Alamat" required><?= $data_update[5];?></textarea>
        
        <div class="invalid-feedback">
            Harus di isi.
        </div>
    </div>

    <div class="col-md-12">
        <button class="btn btn-primary" type="submit" name="btnSimpan">Simpan</button>
    </div>



</form>