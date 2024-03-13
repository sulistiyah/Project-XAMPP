<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <!-- Navbar content -->
    <div class="container-fluid">
         <a href="?r=fbukucreate" class="btn btn-primary">Tambah</a>
    </div>
</nav>

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID Buku</th>
      <th scope="col">Judul Buku</th>
      <th scope="col">Kategori</th>
      <th scope="col">Pengarang</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Status</th>
      <th scope="col">Tahun</th>
      <th scope="col" style="text-align: center"> Action </th>

    </tr>
  </thead>
  <tbody>

  <?php
  $sql="select * from buku_2001082014";
  $query= mysqli_query($db, $sql);
  $nomor=1;
  while($isi=mysqli_fetch_array($query)){

  ?>
  <tr>
      <th scope="row"><?=$nomor; ?> </th>
      <td><?= $isi['idbuku']; ?></td>
      <td><?= $isi['judulbuku']; ?></td>
      <td><?= $isi['kategori']; ?></td>
      <td><?= $isi['pengarang']; ?></td>
      <td><?= $isi['penerbit']; ?></td>
      <td><?= $isi['status']; ?></td>
      <td><?= $isi['tahun']; ?></td>
      <td style="text-align: center">

      <!-- Example single danger button -->
      <div class="btn-group">
          <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
           Action
          </button>
          <ul class="dropdown-menu">
               <li><a class="dropdown-item" href="?r=fbukuedit&id=<?=$isi['idbuku']?>">Edit</a></li>
               <li><a class="dropdown-item" href="?r=fbukudelete&id=<?=$isi['idbuku']?>"
                        onclick="return confirm ('Apakah Anda Yakin Akan Menghapus ID Buku : <?=$isi['idbuku']?>?')">
                        Delete
                    </a>
              </li>
          </ul>
      </div>
    </td>
      <td></td>

  </tr>  
  <?php
  $nomor++;
  }
  mysqli_close($db);
  ?>
  </tbody>
</table>