<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <!-- Navbar content -->
  <div class="container-fluid">
      <a href="?r=fanggotacreate" class="btn btn-primary">Tambah</a>
  </div>
</nav>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">ID Anggota</th>
            <th scope="col">Nama</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Program Studi</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Alamat</th>
            <th scope="col" style="text-align:center">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "select * from tanggota";
        $query = mysqli_query($db, $sql);
        $nomor = 1;
        while($isi = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <th scope="row"><?= $nomor; ?></th>
            <td><?= $isi['idanggota']; ?></td>
            <td><?= $isi['nama']; ?></td>
            <td><?= $isi['jeniskelamin']; ?></td>
            <td><?= $isi['prodi']; ?></td>
            <td><?= $isi['jurusan']; ?></td>
            <td><?= $isi['alamat']; ?></td>
            <td style="text-align:center">
                <!-- Example single danger button -->
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?r=fanggotaedit&id=<?=$isi['idanggota']?>">Edit</a></li>
                        <li><a class="dropdown-item" href="?r=fanggotadelete&id=<?=$isi['idanggota']?>"
                                    onclick="return confirm ('Apakah Anda Yakin Akan Menghapus ID Anggota : <?=$isi['idanggota']?>?')">
                                    Delete
                            </a>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
        <?php
        $nomor++;
        }
        mysqli_close($db);
        ?>

    </tbody>
</table>