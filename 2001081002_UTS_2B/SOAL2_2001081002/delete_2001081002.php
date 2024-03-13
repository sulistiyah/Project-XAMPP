<?php
extract($_GET);
$result = array();

//koneksi ke mysql
require_once('koneksi_2001081002.php');
if(isset($id_peserta_2001081002)) {
    $sql = "DELETE FROM tb_peserta_2001081002 WHERE id_peserta_2001081002='$id_peserta_2001081002'";
    $hasil = mysqli_query($db, $sql);
    if($hasil){
        $result['success'] = 1 ;
        $result['message'] = "Data Berhasil didelete";
    }else {
        $result['success'] = 0;
        $result['message'] = "Data Gagal didelete";
    }

    echo json_encode($result);

   }else{
        $result['success'] = 0;
        $result['message'] = "Halaman Tidak Bisa di akses";

    echo json_encode($result);
}
mysqli_close($db);