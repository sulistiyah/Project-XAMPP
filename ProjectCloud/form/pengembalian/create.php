<?php
// Jika tombol Button sudah diklik
    if (isset($btnSimpan)) {	
        //--Insert ke table pengembaliann--//
            $sql="INSERT INTO tpengembalian VALUE
                                ('$idpengembalian','$idanggota','$namaanggota',
                                '$idbuku','$judulbuku','$pengarang',
                                '$kategori','$tglkembali')";
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

<form class="row g-3 needs-validation" enctype="multipart/form-data" action="index.php?r=fpengembaliancreate" method="POST" novalidate>

    <div class="col-md-4">
  		<label class="form-label">ID Pengembalian</label>
    	<input type="text" class="form-control" placeholder="ID Pengembalian" name="idpengembalian" required>
    	<div class="invalid-feedback">
      		Harus di isi
    	</div>
  	</div>

  	<div class="col-md-4">
  		<label class="form-label">ID Anggota</label>
    	<input type="text" class="form-control" placeholder="ID Anggota" name="idanggota" required>
    	<div class="invalid-feedback">
      		Harus di isi
    	</div>
  	</div>

  	<div class="col-md-4">
  		<label class="form-label">ID Buku</label>
    	<input type="text" class="form-control" placeholder="ID Buku" name="idbuku" required>
    	<div class="invalid-feedback">
      		Harus di isi
    	</div>
  	</div>

	
<div class="col-md-6">
    	<label class="form-label">Nama Anggota</label>
    	<input type="text" class="form-control" placeholder="Nama Anggota" name="namaanggota" required>
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

  	
  	<div class="col-md-6">
        <label class="form-label">Pengarang</label>
    	<input type="text" class="form-control" placeholder="Pengarang" name="pengarang" required>
    	<div class="invalid-feedback">
      		Harus di isi
    	</div>
  	</div>

  	<div class="col-md-3">
        <label class="form-label">Kategori</label>
    	<input type="text" class="form-control" placeholder="Kategori" name="kategori" required>
    	<div class="invalid-feedback">
      		Harus di isi
    	</div>
  	</div>

      <div class="col-md-3">
        <label class="form-label">Tanggal Pengembalian</label>
    	<input type="text" class="form-control" placeholder="Tanggal Pengembalian" name="tglkembali" required>
    	<div class="invalid-feedback">
      		Harus di isi
    	</div>
  	</div>
  	

  	<div class="col-12">
  		<button class="btn btn-primary" type="submit" name="btnSimpan">Simpan</button>
  	</div>

</form>