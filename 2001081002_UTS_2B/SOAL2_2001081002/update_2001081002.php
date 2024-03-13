<?php

extract($_POST);
$result = array();

//koneksi ke mysql
require_once('koneksi_2001081002.php');
if(isset($id_peserta_2001081002)) {
    $sql = "UPDATE tb_peserta_2001081002 SET email_2001081002='$email_2001081002', username_2001081002='$username_2001081002',
            password_2001081002='$password_2001081002', nama_lengkap_2001081002='$nama_lengkap_2001081002',
            institusi_2001081002='$institusi_2001081002', jenis_kelamin_2001081002='$jenis_kelamin_2001081002',
            profesi_2001081002='$profesi_2001081002' WHERE id_peserta_2001081002='$id_peserta_2001081002'";

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