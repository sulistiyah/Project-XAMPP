<?php

    // Ambil data dari idpengembalian
    $sql_update="SELECT * FROM tpengembalian WHERE idpengembalian='$id'";
    $query_update= mysqli_query($db, $sql_update);
    $data_update=mysqli_fetch_array($query_update);

    // Jika tombol Button sudah diklik
    if (isset($btnSimpan)) {
        
        // Update ke table tpengembalian //
        $sql="UPDATE tpengembalian set    idanggota='$idanggota', namaanggota='$namaanggota',
                                        idbuku='$idbuku', judulbuku='$judulbuku',
                                        pengarang='$pengarang',kategori='$kategori',
                                        tglkembali='$tglkembali'
                                        WHERE `idpengembalian` = '$idpengembalian'";
        $hasil= mysqli_query($db, $sql);

        // Jika berhasil di insert ke table pengembalian
        if ($hasil) {
            //--Direct Url ke index pada folder pengembalian--//
            echo "<script>location='?r=pengembalian';</script>";

        } else {
            // Jika gagal di insert ke table pengembalian
            echo "<div class=\"alert alert-danger\" role=\"alert\">Gagal disimpan</div>";
        }
    }
?>

<form class="row g-3 needs-validation" enctype="multipart/form-data" action="?r=fpengembalianedit&id=<?=$id?>" method="POST" novalidate>

    <div class="col-md-4">
    	<label class="form-label">ID Pengembalian</label>
    	<input type="text" class="form-control" value=<?=$data_update[0]?> readonly placeholder="ID Pengembalian" name="idpengembalian" required>
    	<div class="invalid-feedback">
      		Harus di isi
    	</div>
  	</div>

  	<div class="col-md-4">
  		<label class="form-label">ID Anggota</label>
    	<input type="text" class="form-control" value="<?=$data_update[1];?>"  placeholder="ID Anggota" name="idanggota" required>
    	<div class="invalid-feedback">
      		Harus di isi
    	</div>
  	</div>

  	<div class="col-md-4">
  		<label class="form-label">ID Buku</label>
    	<input type="text" class="form-control" value="<?=$data_update[2];?>" placeholder="ID Buku" name="idbuku" required>
    	<div class="invalid-feedback">
      		Harus di isi
    	</div>
  	</div>

	
<div class="col-md-6">
    	<label class="form-label">Nama Anggota</label>
    	<input type="text" class="form-control" value="<?=$data_update[3];?>"  placeholder="Nama Anggota" name="namaanggota" required>
    	<div class="invalid-feedback">
      		Harus di isi
    	</div>
  	</div>

  	<div class="col-md-6">
    	<label class="form-label">Judul Buku</label>
    	<input type="text" class="form-control" value="<?=$data_update[4];?>"  placeholder="Judul Buku" name="judulbuku" required>
    	<div class="invalid-feedback">
      		Harus di isi
    	</div>
  	</div>

  	
  	<div class="col-md-6">
        <label class="form-label">Pengarang</label>
    	<input type="text" class="form-control" value="<?=$data_update[5];?>"  placeholder="Pengarang" name="pengarang" required>
    	<div class="invalid-feedback">
      		Harus di isi
    	</div>
  	</div>

  	<div class="col-md-3">
        <label class="form-label">Kategori</label>
    	<input type="text" class="form-control" value="<?=$data_update[6];?>"  placeholder="Kategori" name="kategori" required>
    	<div class="invalid-feedback">
      		Harus di isi
    	</div>
  	</div>

    <div class="col-md-3">
        <label class="form-label">Tanggal Pengembalian</label>
    	<input type="text" class="form-control" value="<?=$data_update[6];?>"  placeholder="Tanggal Pengembalian" name="tglkembali" required>
    	<div class="invalid-feedback">
      		Harus di isi
    	</div>
  	</div>
    

  	<div class="col-12">
  		<button class="btn btn-primary" type="submit" name="btnSimpan">Simpan</button>
  	</div>

</form>