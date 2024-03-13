<?php
//WEB Srvice untuk menampilkan data dari database dalam bentuk JSON

    require("koneksi.php");
    $perintah = "SELECT * FROM tb_laundry";
    $eksekusi = mysqli_query($db, $perintah);
    $cek = mysqli_affected_rows($db);

    if($cek > 0) {
        $response["kode"] = 1;
        $response["pesan"] = "Data Tersedia";
        $response["data"] = array();

        while($ambil = mysqli_fetch_object($eksekusi)) {
            $F["id"] = $ambil->id;
            $F["nama"] = $ambil->nama;
            $F["alamat"] = $ambil->alamat;
            $F["telepon"] = $ambil->telepon;

            array_push($response["data"], $F);

        }
    } else {
        $response["kode"] = 0;
        $response["pesan"] = "Data Tidak Tersedia";
    }

    echo json_encode($response);
    mysqli_close($db);

?>