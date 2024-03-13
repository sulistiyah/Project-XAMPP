<?php

/*$result = array ();
$result['succes'] = 1;
$result['message'] = "Halaman Create";
echo json_encode($result); */

 if(isset($idbuku_1002) or isset($judulbuku_1002)){
    $result = array();
    $table = "buku_1002  ";

    $sqlcek="select * from $table where idbuku_1002='$idbuku_1002'";
    $cek = mysqli_query($db, $sqlcek);

    //--Verifikasi apakah Id sudah terdaftar--//
    if($cek->num_rows>=1){

        $result['success'] = 0;
        $result['message'] = "ID Buku $idbuku_1002 sudah ada!";
        echo json_encode($result);
    }else{
        $rand = rand(10, 50);
        $api_key = md5(date('Y-m-d H:i:s').$idbuku_1002.$judulbuku_1002.$rand);

        $sqlInsert="INSERT INTO $table
                    VALUES('$idbuku_1002','$judulbuku_1002','$kategori_1002',
                    '$pengarang_1002','$penerbit_1002','$tahun_1002','$status_1002','$api_key')";
        $insert= mysqli_query($db, $sqlInsert);
        // Proses insert Berhasil
        if($insert){

            $sqlcek2="select * from $table where idbuku_1002='$idbuku_1002'";
            $cek2= mysqli_query($db, $sqlcek2);

            $data=mysqli_fetch_array($cek2);
            $result['insert'] = array();

            $result['success'] = 1;
            $result['message'] = "Data berhasil di Simpan";
            //print_r($data);

            $index['idbuku_1002']=$data['idbuku_1002'];
            $index['judulbuku_1002']=$data['judulbuku_1002'];
            $index['api_key']=$data['api_key'];

            array_push($result['insert'], $index);
            echo json_encode($result);
            mysqli_close($db);
        }else{
            $result['success'] = 0;
            $result['message'] = "Data Gagal di Simpan";
            echo json_encode($result);
        }
    }

}else{
    $result['success'] = 0;
    $result['message'] = "Halaman tidak bisa di akses";
    echo json_encode($result);
} 

?>