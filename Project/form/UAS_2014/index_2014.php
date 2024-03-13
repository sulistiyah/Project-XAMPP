<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <!-- Navbar content -->
    <div class="container-fluid">
         <a href="?r=fvaksincreate" class="btn btn-primary">Tambah</a>
    </div>
</nav>

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID Vaksin</th>
      <th scope="col">No KTP</th>
      <th scope="col">Nama</th>
      <th scope="col">No Tlp</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Alamat</th>
      <th scope="col">Vaksin Ke</th>
      <th scope="col">Jenis Vaksin</th>
      <th scope="col">Tempat Vaksin</th>
      <th scope="col" style="text-align: center"> Action </th>

    </tr>
  </thead>
  <tbody>

  <?php
  $sql="select * from tbvaksin_2014";
  $query= mysqli_query($db, $sql);
  $nomor=1;
  while($isi=mysqli_fetch_array($query)){

  ?>
  <tr>
      <th scope="row"><?=$nomor; ?> </th>
      <td><?= $isi['idvaksin_2014']; ?></td>
      <td><?= $isi['noktp_2014']; ?></td>
      <td><?= $isi['nama_2014']; ?></td>
      <td><?= $isi['notlp_2014']; ?></td>
      <td><?= $isi['jeniskelamin_2014']; ?></td>
      <td><?= $isi['alamat_2014']; ?></td>
      <td><?= $isi['vaksinke_2014']; ?></td>
      <td><?= $isi['jenisvaksin_2014']; ?></td>
      <td><?= $isi['tempatvaksin_2014']; ?></td>
      <td style="text-align: center">

      <!-- Example single danger button -->
      <div class="btn-group">
          <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
           Action
          </button>
          <ul class="dropdown-menu">
               <li><a class="dropdown-item" href="?r=fvaksinedit&id=<?=$isi['idvaksin_2014']?>">Edit</a></li>
               <li><a class="dropdown-item" href="?r=fvaksindelete&id=<?=$isi['idvaksin_2014']?>"
                        onclick="return confirm ('Apakah Anda Yakin Akan Menghapus ID Vaksin : <?=$isi['idvaksin_2014']?>?')">
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