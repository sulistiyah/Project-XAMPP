<?php
// Jika tombol Button sudah diklik
    if (isset($btnSimpan)) {	
        //--Insert ke table buku--//
            $sql="INSERT INTO tbuku VALUE
                                ('$idbuku','$judulbuku','$kategori',
                                '$pengarang','$penerbit','$status','$tahun')";
            $hasil= mysqli_query($db, $sql);

        // Jika berhasil di insert ke table buku
        if ($hasil) {
            //--Direct Url ke index pada folder buku--//
            echo "<script>location='?r=buku';</script>";
            
        } else {
            // Jika gagal di insert ke table buku_2001081002
            echo "<div class=\"alert alert-danger\" role=\"alert\">Gagal disimpan</div>";
        }
            
    }

?>

<form class="row g-3 needs-validation" enctype="multipart/form-data" action="index.php?r=fbukucreate" method="POST" novalidate>

	<div class="col-md-6">
    	<label class="form-label">ID Buku</label>
    	<input type="text" class="form-control" placeholder="ID Buku" name="idbuku" required>
    	<div class="invalid-feedback">
      		Harus di isi
    	</div>
  	</div>

  	<div class="col-md-6">
    	<label class="form-label">Judul Buku</label>
    	<input type="text" class="form-control" placeholder="Judul Buku" name="judulbuku" required>
    	<div class="invalid-feedback">
      		Harus di isi
    	</div>
  	</div>

  	<div class="col-md-4">
  		<label class="form-label">Kategori</label>
    	<input type="text" class="form-control" placeholder="Kategori" name="kategori" required>
    	<div class="invalid-feedback">
      		Harus di isi
    	</div>
  	</div>

  	<div class="col-md-4">
  		<label class="form-label">Pengarang</label>
    	<input type="text" class="form-control" placeholder="Pengarang" name="pengarang" required>
    	<div class="invalid-feedback">
      		Harus di isi
    	</div>
  	</div>

  	<div class="col-md-4">
  		<label class="form-label">Penerbit</label>
    	<input type="text" class="form-control" placeholder="Penerbit" name="penerbit" required>
    	<div class="invalid-feedback">
      		Harus di isi
    	</div>
  	</div>

  	<div class="col-md-8">
    	<label class="form-label">Status</label>

    	<select class="form-select" name="status">
    		<option value="Tersedia"> Tersedia</option>
    		<option value="Dipinjam"> Dipinjam </option>
    	</select>

    	<div class="invalid-feedback">
      		Harus di isi
    	</div>
  	</div>

  	<div class="col-md-4">
    	<label class="form-label">Tahun</label>
    	<input type="number" class="form-control" name="tahun" placeholder="Tahun" required>
    	<div class="invalid-feedback">
      		Tidak boleh kosong!
    	</div>
  	</div>
  	

  	<div class="col-12">
  		<button class="btn btn-primary" type="submit" name="btnSimpan">Simpan</button>
  	</div>

</form>