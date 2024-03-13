<?php
    //Jika tombol Button sudah diklik
    if (isset($btnSimpan)) {	
        //--Insert ke table buku--//
            $sql="INSERT INTO tanggota VALUE
                                ('$idanggota','$nama','$jeniskelamin',
                                '$prodi','$jurusan','$alamat')";
            $hasil= mysqli_query($db, $sql);

        // Jika berhasil di insert ke table buku
        if ($hasil) {
            //--Direct Url ke index pada folder buku--//
            echo "<script>location='?r=anggota';</script>";
            
        } else {
            // Jika gagal di insert ke table buku_2001081002
            echo "<div class=\"alert alert-danger\" role=\"alert\">Gagal disimpan</div>";
        }
            
    }
?>
<form class="row g-3 needs-validation" enctype="multipart/form-data" action="index.php?r=fanggotacreate" method="POST"
    novalidate>

    <div class="col-md-4">
        <label class="form-label">ID Anggota</label>
        <input type="text" class="form-control" placeholder="ID Anggota" name="idanggota" required>
        <div class="invalid-feedback">
            Harus di isi.
        </div>
    </div>

    <div class="col-md-4">
        <label class="form-label">Nama Anggota</label>
        <input type="text" class="form-control" placeholder="Nama Anggota" name="nama" required>
        <div class="invalid-feedback">
            Harus di isi.
        </div>
    </div>

    <div class="col-md-4">
        <label class="form-label">Jenis Kelamin</label>
        
        <select class="form-select" name="jeniskelamin">
            <option value="choose"selected>choose</option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>

        <div class="invalid-feedback">
            Harus di isi.
        </div>
    </div>

    <div class="col-md-6">
        <label class="form-label">Jurusan</label>
        
        <select class="form-select" name="jurusan">
            <option value="choose"selected>choose</option>
            <option value="Teknik Mesin">Teknik Mesin</option>
            <option value="Teknik Sipil">Teknik Sipil</option>
            <option value="Teknik Elektro">Teknik Elektro</option>
            <option value="Administrasi Niaga">Administrasi Niaga</option>
            <option value="Akuntansi">Akuntansi</option>
            <option value="Teknologi Informasi">Tekonologi Informasi</option>
            <option value="Bahasa Inggris">Bahasa Inggris</option>
        </select>

        <div class="invalid-feedback">
            Harus di isi.
        </div>
    </div>

    <div class="col-md-6">
        <label class="form-label">Program Studi</label>
        
        <select class="form-select" name="prodi">
        <option value="choose"selected>choose</option>
        <option value="D3 Konsentrasi Teknik Pemeliharaan">D3 Konsentrasi Teknik Pemeliharaan</option>
        <option value="D3 Konsentrasi teknik Produksi">D3 Konsentrasi teknik Produksi</option>
        <option value="D3 Teknik Alat Berat">D3 Teknik Alat Berat</option>
        <option value="D4 Teknik Manufaktur"> D4 Teknik Manufaktur</option>
        <option value="D3 Konsentrasi Konstruksi Sipil">D3 Konsentrasi Konstruksi Sipil</option>
        <option value="D3 Konsentrasi Konstruksi Bangunan Gedung">D3 Konsentrasi Konstruksi Bangunan Gedung</option>
        <option value="D4 Teknik Perencanaan Irigasi dan Rawa">D4 Teknik Perencanaan Irigasi dan Rawa</option>
        <option value="D4 Manajemen Rekayasa Konstruksi">D4 Manajemen Rekayasa Konstruksi</option>
        <option value="D4 Perancangan Jalan dan Jembatan">D4 Perancangan Jalan dan Jembatan</option>
        <option value="D3 Teknik Listrik">D3 Teknik Listrik</option>
        <option value="D3 Teknik Elektronika">D3 Teknik Elektronika</option>
        <option value="D3 Teknik Telekomunikasi">D3 Teknik Telekomunikasi</option>
        <option value="D4 Teknik Elektronika">D4 Teknik Elektronika</option>
        <option value="D4 Teknik Telekomunikasi">D4 Teknik Telekomunikasi</option>
        <option value="D3 Administrasi Bisnis">D3 Administrasi Bisnis</option>
        <option value="D3 Usaha Perjalanan Wisata">D3 Usaha Perjalanan Wisata</option>
        <option value="D4 Destinasi Pariwisata">D4 Destinasi Pariwisata</option>
        <option value="D3 Akuntansi">D3 Akuntansi</option>
        <option value="D4 Akuntansi">D4 Akuntansi</option>
        <option value="D3 Teknik Komputer">D3 Teknik Komputer</option>
        <option value="D3 Manajemen Informatika">D3 Manajemen Informatika</option>
        <option value="D4 Teknik Rekayasa Perangkan Lunak">D4 Teknik Rekayasa Perangkan Lunak</option>
        <option value="D3 Bahasa Inggris">D3 Bahasa Inggris</option>
        <option value="D4 Bahasa Inggris">D4 Bahasa Inggris</option>
        </select>

        <div class="invalid-feedback">
            Harus di isi.
        </div>
    </div>

    <div class="col-md-12">
        <label class="form-label">Alamat</label>
        
        <textarea name="alamat" class="form-control" cols="20" rows="3" placeholder="Alamat" required></textarea>
        
        <div class="invalid-feedback">
            Harus di isi.
        </div>
    </div>

    <div class="col-md-6">
        <button class="btn btn-primary" type="submit" name="btnSimpan">Simpan</button>
    </div>



</form>