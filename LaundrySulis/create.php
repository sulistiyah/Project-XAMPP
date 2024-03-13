<?php

    require("koneksi.php");

    $response = array();

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nama = $_POST["nama"];
        $alamat = $_POST["alamat"];
        $telepon = $_POST["telepon"];

        $perintah = "INSERT INTO tb_laundry (nama,alamat,telepon) VALUES ('$nama','$alamat','$telepon')";
        $eksekusi = mysqli_query($db, $perintah);
        $cek = mysqli_affected_rows($db);

        if($cek > 0) {
            $response["kode"] = 1;
            $response["pesan"] = "Simpan Data Berhasil";
        } else {
            $response["kode"] = 0;
            $response["pesan"] = "Gagal Menyimpan Data";
        }

    } else {
        $response["kode"] = 0;
        $response["pesan"] = "Tidak Ada Post Data";
    }

    echo json_encode($response);
    mysqli_close($db);
?>