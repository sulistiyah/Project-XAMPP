<?php
$sql="delete from buku_2001082014 where idbuku='$id'";
$hasil= mysqli_query($db, $sql);
if($hasil){
    echo"<script>location='?r=buku';</script>";
}else{
    echo "<div class=\"alert alert-danger\" role=\"alert\">Data tidak ditemukan</div>";
}
?>