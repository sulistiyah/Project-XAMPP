<?php
$sql="delete from tbvaksin_2014 where idvaksin='$id'";
$hasil= mysqli_query($db, $sql);
if($hasil){
    echo"<script>location='?r=vaksin';</script>";
}else{
    echo "<div class=\"alert alert-danger\" role=\"alert\">Data tidak ditemukan</div>";
}
?>