<?php

// Ambil data dari idanggota
$sql_update="select * from tbanggota where idanggota='$id'";
$query_update= mysqli_query($db, $sql_update);
$data_update= mysqli_fetch_array($query_update);

// Jika tombol Button sudah di-klik
if(isset($btnSimpan)) {

    // File foto
    $file_foto = $_FILES['foto']['name'];

    //-- Nama table --//
    $table = "tbanggota";

    //-- Url --//
    $url = "?folder=anggota&file=index";

    // Jika file foto di-upload
    if(!empty($file_foto)) {

        //-- Folder untuk di-upload
        $folder = "images/";

        //-- Tipe file atau extension
        $file_type = array('jpg', 'jpeg', 'png', 'JPG');

        // Maximal ukuran file
        $max_size = 1024;   // 1MB
        $nama_file = $_FILES['foto']['name'];
        $file_size = ($_FILES['foto']['size'])/1024;

        // Cari extensi dari file
        $explode = explode('.', $nama_file);
        $extensi = $explode[count($explode)-1];

        // Cek extensi file gambar yang diperbolehkan //
        if(in_array($extensi, $file_type)) {

            // Cek ukuran file gambar
            if($file_size<=$max_size) {

                // Proses memindahkan file gambar ke folder images
                if(move_uploaded_file($FILES['foto']['tmp_name'],$folder.$idanggota."".$nama_file)) {
                
                    $nama_foto = $idanggota."_".$nama_file;
                    // Update ke tabel tbanggota //
                    $sql = "UPDATE tbanggota set nama='$nama',jeniskelamin='$jeniskelamin',tahun='$tahun',alamat='$alamat',foto='$nama_foto' WHERE `idanggota` = '$idanggota'";
                    $hasil= mysqli_query($db, $sql);                                
                    if($hasil) {
                     //-- Direct Url ke index pada folder anggota --//
                        echo "<script>location='?r=anggota';</script>";
                    } else {
                        echo "<div class=\"alert alert-danger\" role=\"alert\">Gagal disimpan</div>";
                    }
                    
                } else {
                    echo "<div class=\"alert alert-warning\" role=\"alert\">Gagal upload file foto</div>";
                }
            
            } else {
                echo "<div class=\"alert alert-warning\" role=\"alert\">Ukuran gambar maksimal 1MB</div>";
            }
        
        } else {
            echo "<div class=\"alert alert-warning\" role=\"alert\">Tipe gambar tidak sesuai</div>";
        }


    } else {

        // Jika file foto tidak diupload //
        $sql="UPDATE tbanggota set nama='$nama',jeniskelamin='$jeniskelamin',alamat=
                                            '$alamat',tahun='$tahun'
                                            WHERE `idanggota` = '$idanggota'";
        $hasil= mysqli_query($db, $sql);
        if($hasil){
            //--Direct url ke index pada folder anggota--//;
            echo "<script>location='?r=anggota';</script>";
        }else{
            echo "<div class=\"alert alert-danger\" role=\"alert\">Gagal disimpan</div>";
        }

    }

}
?>

<form class="row g-3 needs-validation" enctype="multipart/form-data" action="?r=fanggotaedit&id=<?=$id?>" 
method="POST" novalidate>

  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">ID Anggota</label>
    <input type="text" name="idanggota" class="form-control" readonly placeholder="ID Anggota" 
        value=<?=$data_update[0] ?> required>
    <div class="invalid-feedback">
        Tidak boleh kosong!
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nama Anggota</label>
    <input type="text" name="nama" value=<?=$data_update[1]?> class="form-control" placeholder="Nama" required>
    <div class="invalid-feedback">
        Tidak boleh kosong!
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Jenis Kelamin</label>

    <select class="form-select" name="jeniskelamin">
        <option value="Pria" value=<?=$data_update[2]=="Pria" ? "selected":"" ?> >Pria</option>
        <option value="Wanita" value=<?=$data_update[2]=="Wanita" ? "selected":"" ?> >Wanita</option>
    </select>

    <div class="invalid-feedback">
        Tidak boleh kosong!
    </div>
  </div>

  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">Alamat</label>

    <textarea name="alamat" class="form-control" cols="20" rows="3" placeholder="Alamat" required> <?=$data_update[3] ?> </textarea>

    <div class="invalid-feedback">
        Tidak boleh kosong!
    </div>
  </div>

  <div class="col-md-6">
    <label for="validationCustom01" class="form-label">Tahun</label>

    <input type="number" class="form-control" value=<?=$data_update[4]?> name="tahun" placeholder="Tahun" required>

    <div class="invalid-feedback">
        Tidak boleh kosong!
    </div>
  </div>

  <div class="col-md-6">
    <label for="validationCustom01" class="form-label">Foto</label>

    <input type="file" class="form-control" name="foto">

  </div>

  <div class="col-12">
    <button class="btn btn-primary" type="submit" name="btnSimpan">Simpan</button>
  </div>


</form>