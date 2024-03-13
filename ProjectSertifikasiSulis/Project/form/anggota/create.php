<?php
    //Jika tombol Button sudah diklik
    if(isset($btnSimpan)){

        //file foto
        $file_foto=$_FILES['foto']['name'];

        //Jika file foto diupload
        if(!empty($file_foto)) {

            //--Folder Untuk diupload
            $folder="images/";

            //--Tipe file atau ektensi file gambar yang diperbolehkan--//
            $file_type=array('jpg','jpeg','pnp','JPG');

            //Maximal Ukuran File
            $max_size = 1024; //1MB
            $nama_file = $_FILES['foto']['name'];
            $file_size = ($_FILES['foto']['size'])/1024;

            //Cari extensi dari file
            $explode = explode('.',$nama_file);
            $extensi = $explode[count($explode)-1];

            //Cek ektensi file gambar yang diperbolehkan
            if(in_array($extensi,$file_type)) {

                //Cek ukuran file gambar
                if($file_size<=$max_size){

                    //Proses memindahkan/uploadfile gambar ke folder images//
                    if(move_uploaded_file($_FILES['foto']['tmp_name'],$folder.$idanggota."_".$nama_file)) {

                        //Nama file foto gabungan dari $idanggota."_".$nama_file//
                        $nama_foto=$idanggota."_".$nama_file;
                        //Insert ke table tbanggota//
                        $sql="insert into tbanggota value ( '$idanggota','$nama','$jeniskelamin',
                                                            '$nama_foto','$tahun','$alamat')";
                        $hasil = mysqli_query($db, $sql);
                        
                        //Jika berhasil di insert ke table anggota
                        if($hasil) {
                            //--Direct Url ke index pada folder anggota--//
                            echo "<script>location='?r=anggota';</script>";
                        } else {
                            //Jika gagal insert ke table anggota
                            echo "<div class=\"alert alert-warning\" role=\"alert\">Gagal disimpan</div>";
                        }

                    } else {
                        //Jika Gagal diupload//
                        echo "<div class=\"alert alert-warning\" role=\"alert\">File foto gagal diupload</div>";
                    }

                } else {
                    //Jika ukuran file lebih dri 1MB
                    echo "<div class=\"alert alert-warning\" role=\"alert\">Ukuran file terlalu besar</div>";
                }

            } else {
                //Jika upload selain file yang diizinkan
                echo "<div class=\"alert alert-warning\" role=\"alert\">Tipe gambar tidak sesuai</div>";
            }

        } else {
            //Jika file foto tidak diupload//
            $sql="insert into tbanggota value ( '$idanggota','$nama','$jeniskelamin',
                                                '','$tahun','$alamat')";
            $hasil = mysqli_query($db, $sql);
            if($hasil) {
                //--Direct Url ke index pada folder anggota--//
                echo "<script>location='?r=anggota';</script>";
            } else {
                //Jika gagal insert ke table anggota
                echo "<div class=\"alert alert-danger\" role=\"alert\">Gagal disimpan</div>";
            }

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
            <option value="Pria">Pria</option>
            <option value="Wanita">Wanita</option>
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
        <label class="form-label">Tahun</label>
        <input type="number" class="form-control" placeholder="Tahun" name="tahun" required>
        <div class="invalid-feedback">
            Tidak Boleh Kosong!
        </div>
    </div>

    <div class="col-md-6">
        <label class="form-label">Foto</label>
        <input type="file" class="form-control" name="foto">
    </div>

    <div class="col-md-12">
        <button class="btn btn-primary" type="submit" name="btnSimpan">Simpan</button>
    </div>



</form>