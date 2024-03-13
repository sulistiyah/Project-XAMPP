<?php
    $sql="DELETE FROM tbuku WHERE idbuku='$id'";
    $hasil= mysqli_query($db, $sql);
    if ($hasil) {
        echo "<script>location='?r=buku';</script>";
    } else {
        echo "<div class=\"alert alert-danger\" role=\"alert\">Data tidak dapat di delete</div>";
    }
?>