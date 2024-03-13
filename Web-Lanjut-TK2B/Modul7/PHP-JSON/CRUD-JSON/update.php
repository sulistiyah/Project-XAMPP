<?php

extract($_POST);
$result = array();

//koneksi ke mysql
require_once('koneksi.php');
if(isset($id_vaksin)) {
    $sql = "UPDATE tb_vaksin_penduduk SET no_vaksin = '$no_vaksin', nik = '$nik', nama= '$nama', alamat='$alamat', no_tlpn='$no_tlpn'
        WHERE id_vaksin='$id_vaksin'";

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