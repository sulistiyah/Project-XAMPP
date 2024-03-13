<?php

extract($_GET);
require_once('koneksi_2001081002.php');
$sql = "SELECT * FROM tb_peserta_2001081002";
$query = mysqli_query($db,$sql);

$result = array();

if($query->num_rows>=1) {

   $data = array();
   $result['2001081002'] = array();

   $result['success'] = 1 ;
   $result['message'] = "Data Tersedia";

   while($row = mysqli_fetch_assoc($query)){
       $data[] = $row;
   }

   array_push($result['2001081002'], $data);
   echo json_encode($result);
}else {
    $result['success'] = 0;
    $result['message'] = "Data Masih Kosong";
    echo json_encode($result);
}
mysqli_close($db);
?>