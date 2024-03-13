<?php

    // Ambil data dari idbuku
    $sql_update="SELECT * FROM tbuku WHERE idbuku='$id'";
    $query_update= mysqli_query($db, $sql_update);
    $data_update=mysqli_fetch_array($query_update);

    // Jika tombol Button sudah diklik
    if (isset($btnSimpan)) {
        
        // Update ke table buku_2001081002 //
        $sql="UPDATE tbuku set  judulbuku='$judulbuku',kategori='$kategori',
                                pengarang='$pengarang',penerbit='$penerbit',
                                status='$status',tahun='$tahun'
                                WHERE `idbuku` = '$idbuku'";
        $hasil= mysqli_query($db, $sql);

        // Jika berhasil di insert ke table buku_2001081002
        if ($hasil) {
            //--Direct Url ke index pada folder buku_2001081002--//
            echo "<script>location='?r=buku';</script>";

        } else {
            // Jika gagal di insert ke table buku_2001081002
            echo "<div class=\"alert alert-danger\" role=\"alert\">Gagal disimpan</div>";
        }
    }
?>

<form class="row g-3 needs-validation" enctype="multipart/form-data" action="?r=fbukuedit&id=<?=$id?>" method="POST" novalidate>

	<div class="col-md-6">
    	<label class="form-label">ID Buku</label>
    	<input type="text" class="form-control" value=<?=$data_update[0] ?> readonly placeholder="ID Buku" name="idbuku" required>
    	<div class="invalid-feedback">
      		Harus di isi
    	</div>
  	</div>

  	<div class="col-md-6">
    	<label class="form-label">Judul Buku</label>
    	<input type="text" class="form-control" value="<?= $data_update[1];?>" placeholder="Judul Buku" name="judulbuku" required>
    	<div class="invalid-feedback">
      		Harus di isi
    	</div>
  	</div>

	<div class="col-md-4">
    	<label class="form-label">Kategori</label>
    	<input type="text" class="form-control" value="<?= $data_update[2];?>" placeholder="Kategori" name="kategori" required>
    	<div class="invalid-feedback">
      		Harus di isi
    	</div>
  	</div>

  	<div class="col-md-4">
  		<label class="form-label">Pengarang</label>
    	<input type="text" class="form-control" value="<?= $data_update[3];?>" placeholder="Pengarang" name="pengarang" required>
    	<div class="invalid-feedback">
      		Harus di isi
    	</div>
  	</div>
  	
	<div class="col-md-4">
  		<label class="form-label">Penerbit</label>
    	<input type="text" class="form-control" value="<?= $data_update[4];?>" placeholder="Penerbit" name="penerbit" required>
    	<div class="invalid-feedback">
      		Harus di isi
    	</div>
  	</div>

  	<div class="col-md-8">
    	<label class="form-label">Status</label>

    	<select class="form-select" name="status">
    		<option value="Tersedia" <?= $data_update[5]=="Tersedia" ? "selected":"" ?>> Tersedia</option>
    		<option value="Dipinjam" <?= $data_update[5]=="Dipinjam" ? "selected":"" ?>> Dipinjam </option>
    	</select>

    	<div class="invalid-feedback">
      		Harus di isi
    	</div>
  	</div>

  	<div class="col-md-4">
    	<label class="form-label">Tahun</label>
    	<input type="number" class="form-control" value="<?= $data_update[6];?>" name="tahun" placeholder="Tahun" required>
    	<div class="invalid-feedback">
      		Tidak boleh kosong!
    	</div>
  	</div>  	

  	<div class="col-12">
  		<button class="btn btn-primary" type="submit" name="btnSimpan">Simpan</button>
  	</div>

</form>