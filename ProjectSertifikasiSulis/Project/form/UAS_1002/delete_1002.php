<?php
    $sql="delete from vaksin_2001081002 where idvaksin_1002='$id'";
    $hasil= mysqli_query($db, $sql);
        if($hasil){
            echo"<script>location='?r=vaksin';</script>";
        } else {
            echo "<div class=\"alert alert-danger\" role=\"alert\">Data tidak dapat di delete</div>";
        }
?>