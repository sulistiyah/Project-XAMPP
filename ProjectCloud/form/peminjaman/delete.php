<?php
    $sql="DELETE FROM tpeminjaman WHERE idpinjam='$id'";
    $hasil= mysqli_query($db, $sql);
    if ($hasil) {
        echo "<script>location='?r=peminjaman';</script>";
    } else {
        echo "<div class=\"alert alert-danger\" role=\"alert\">Data tidak dapat di delete</div>";
    }
?>