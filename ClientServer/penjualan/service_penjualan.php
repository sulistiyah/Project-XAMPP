<?php
    include "koneksi.php";

    $sql = "SELECT *FROM penjualan";
    $query = mysqli_query($koneksi, $sql);
    while($data = mysqli_fetch_array($query)){
        
        $item[] = array(
            'id_barang'=>$data["id_barang"],
            'Nama_Barang'=>$data["Nama_Barang"],
            'Stock_Barang' =>$data["Stock_Barang"]
        );
    }

    $response = array(
        'status'=>'OK',
        'data'=>$item
    );
    echo json_encode($response);

?>