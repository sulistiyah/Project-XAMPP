<?php
    $sql="DELETE FROM tpengembalian WHERE idpinjam='$id'";
    $hasil= mysqli_query($db, $sql);
    if ($hasil) {
        echo "<script>location='?r=pengembalian';</script>";
    } else {
        echo "<div class=\"alert alert-danger\" role=\"alert\">Data tidak dapat di delete</div>";
    }
?>