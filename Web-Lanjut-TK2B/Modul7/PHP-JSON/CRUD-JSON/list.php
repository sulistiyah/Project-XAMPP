<?php

extract($_GET);
require_once('koneksi.php');
$sql = "SELECT * FROM tb_vaksin_penduduk";
$query = mysqli_query($db,$sql);

$result = array();

if($query->num_rows>=1) {

   $data = array();
   $result['mahasiswa'] = array();

   $result['success'] = 1 ;
   $result['message'] = "Data Tersedia";

   while($row = mysqli_fetch_assoc($query)){
       $data[] = $row;
   }

   array_push($result['mahasiswa'], $data);
   echo json_encode($result);
}else {
    $result['success'] = 0;
    $result['message'] = "Data Masih Kosong";
    echo json_encode($result);
}
mysqli_close($db);
?>