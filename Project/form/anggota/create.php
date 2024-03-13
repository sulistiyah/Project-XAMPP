<?php
// Jika tombol Button sudah diklik
if (isset($btnSimpan)) {
    
    // file foto
    $file_foto=$_FILES['foto']['name'];

    //--Nama table ---//
    $table="tbanggota";

    //--Url ---//
    $url="?folder=anggota&file=index";

    // Jika file foto diupload
    if (!empty($file_foto)) {
        
        //--Folder Untuk Diupload
        $folder="images/";

        //--Tipe file atau extention
        $file_type=array('jpg','jpeg','png','JPG');

        //Maximal Ukuran File
        $max_size=1024; // 1MB
        $nama_file=$_FILES['foto']['name'];
        $file_size=($_FILES['foto']['size'])/1024;

        //Cari extensi dari file
        $explode = explode('.',$nama_file);
        $extensi= $explode[count($explode)-1];

        // Cek extensi file gambar yang diperbolehkan//
        if (in_array($extensi,$file_type)) {

            // Cek ukuran file gambar
            if ($file_size<=$max_size) {

                // Proses memindahkan file gambar ke folder images
                if (move_uploaded_file($_FILES['foto']['tmp_name'],$folder.$idanggota."".$nama_file)) {

                    $nama_foto=$idanggota."_".$nama_file;
                    // Insert ke table tbanggota //
                    $sql="insert into tbanggota value ('$idanggota','$nama','$jeniskelamin',
                                                    '$alamat','$tahun','$nama_foto')";
                    $hasil= mysqli_query($db, $sql);
                    if ($hasil) {
                        //--Direct Url ke index pada folder anggota--//;
                        echo "<script>location='?r=anggota'</script>";
                    }else{
                        echo "<div class=\"alert alert-danger\" role=\"alert\">Gagal disimpan</div>";
                    }

                }else{
                    echo "<div class=\"alert alert-warning\" role=\"alert\">Gagal upload file foto</div>";
                }

            }else{
                echo "<div class=\"alert alert-warning\" role=\"alert\">Ukuran gambar maximal 1MB</div>";
            }

        }else{
            echo "<div class=\"alert alert-warning\" role=\"alert\">Tipe gambar tidak sesuai</div>";
        }

    }else{

        // Jika file foto tidak diupload //
        $sql="insert into tbanggota value ('$idanggota','$nama','$jeniskelamin',
                                            '$alamat','$tahun','')";
        $hasil= mysqli_query($db, $sql);
        if ($hasil) {
            //--Direct Url ke index pada folder anggota--//;
            echo "<script>location='?r=anggota';</script>";
        }else{
            echo "<div class=\"alert alert-danger\" role=\"alert\">Gagal disimpan</div>";
        }
    

    }
}
?>

<form class="row g-3 needs-validation" enctype="multipart/form-data" action="index.php?r=fanggotacreate" 
method="POST" novalidate>

    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">ID Anggota</label>
        <input type="text" name="idanggota" class="form-control" placeholder="ID Anggota" required>
        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Nama Anggota</label>
        <input type="text" name="nama" class="form-control" placeholder="Nama Anggota" required>
        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Jenis Kelamin</label>

        <select class="form-select" name="jeniskelamin">
            <option value="Pria"> Pria </option>
            <option value="Wanita"> Wanita </option>
        </select>

        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-12">
        <label for="validationCustom01" class="form-label">Alamat</label>

        <textarea name="alamat" class="form-control" cols="20" rows="3" placeholder="Alamat" required></textarea>

        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-6">
        <label for="validationCustom01" class="form-label">Tahun</label>

        <input type="number"  class="form-control" name="tahun" placeholder="Tahun" required>

        <div class="invalid-feedback">
            Tidak boleh kosong!
        </div>
    </div>

    <div class="col-md-6">
        <label for="validationCustom01" class="form-label">Foto</label>

        <input type="file"  class="form-control" name="foto">

    </div>

    <div class="col-12">
        <button class="btn btn-primary" type="submit" name="btnSimpan">Simpan</button>
    </div>

</form>