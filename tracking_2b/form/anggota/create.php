<?php

/*$result = array ();
$result['succes'] = 1;
$result['message'] = "Halaman Create";
echo json_encode($result); */

 if(isset($idanggota) or isset($nama)){
    $result = array();
    $table = "tbanggota_2001081002  ";

    $sqlcek="select * from $table where idanggota='$idanggota'";
    $cek = mysqli_query($db, $sqlcek);

    //--Verifikasi apakah Id sudah terdaftar--//
    if($cek->num_rows>=1){

        $result['success'] = 0;
        $result['message'] = "ID Anggota $idanggota sudah ada!";
        echo json_encode($result);
    }else{
        $rand = rand(10, 50);
        $api_key = md5(date('Y-m-d H:i:s').$idanggota.$nama.$rand);

        $sqlInsert="INSERT INTO $table
                    VALUES('$idanggota','$nama','$jeniskelamin','$alamat','$tahun','$api_key')";
        $insert= mysqli_query($db, $sqlInsert);
        // Proses insert Berhasil
        if($insert){

            $sqlcek2="select * from $table where idanggota='$idanggota'";
            $cek2= mysqli_query($db, $sqlcek2);

            $data=mysqli_fetch_array($cek2);
            $result['insert'] = array();

            $result['success'] = 1;
            $result['message'] = "Data berhasil di Simpan";
            //print_r($data);

            $index['idanggota']=$data['idanggota'];
            $index['nama']=$data['nama'];
            //$index['img']=$data['img'];//
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