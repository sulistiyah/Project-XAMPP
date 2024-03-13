<?php

extract($_POST);
$result = array();

//koneksi ke mysql
require_once('koneksi.php');
if(isset($id_penghasilan)) {
    $sql = "UPDATE tb_penghasilan SET nik='$nik', nama='$nama', pekerjaan='$pekerjaan', gaji='$gaji'
        WHERE id_penghasilan='$id_penghasilan'";

        $hasil = mysqli_query($db, $sql);
        if($hasil){
            $result['success'] = 1 ;
            $result['message'] = "Data Berhasil diupdate";
        }else {
            $result['success'] = 0;
            $result['message'] = "Data Gagal diupdate ".$sql;
        }

        echo json_encode($result);

       }else{
            $result['success'] = 0;
            $result['message'] = "Halaman Tidak Bisa di akses";

        echo json_encode($result);
    }
    mysqli_close($db);