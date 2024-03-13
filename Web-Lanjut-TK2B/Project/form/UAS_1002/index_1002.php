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
            <th scope="col">No TLPN</th>
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
            $sql="SELECT * FROM  vaksin_2001081002";
            $query= mysqli_query($db, $sql);
            $nomor=1;
            while($isi=mysqli_fetch_array($query)){
        ?>
        <tr>
            <th scope="row"><?=$nomor; ?> </th>
                <td><?= $isi['idvaksin_1002']; ?></td>
                <td><?= $isi['noktp_1002']; ?></td>
                <td><?= $isi['nama_1002']; ?></td>
                <td><?= $isi['notlpn_1002']; ?></td>
                <td><?= $isi['jeniskelamin_1002']; ?></td>
                <td><?= $isi['alamat_1002']; ?></td>
                <td><?= $isi['vaksinke_1002']; ?></td>
                <td><?= $isi['jenisvaksin_1002']; ?></td>
                <td><?= $isi['tempatvaksin_1002']; ?></td>
                <td style="text-align: center">

                <!-- Example single danger button -->
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?r=fvaksinedit&id=<?=$isi['idvaksin_1002']?>">Edit</a></li>
                        <li><a class="dropdown-item" href="?r=fvaksindelete&id=<?=$isi['idvaksin_1002']?>"
                                onclick="return confirm ('Apakah Anda Yakin Akan Menghapus ID Vaksin : <?=$isi['idvaksin_1002']?>?')">
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