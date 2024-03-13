<?php
    $sql ="delete from tbanggota where idanggota='$id'";
    $hasil = mysqli_query($db, $sql);
    if ($hasil) {
        echo "<script>location='?r=anggota';</script>";
    } else {
        echo "<div class=\"alert alert-danger\" role=\"alert\">Data tidak dapat di delete</div>";
    }
?>