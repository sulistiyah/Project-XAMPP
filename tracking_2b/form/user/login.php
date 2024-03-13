<?php

   //Verifikasi username dan pass
   if(isset($username) or isset($pass)) {
        $result = array();
        $table="tb_user";

        $sql="select * from $table where username='$username' and password='$pass'";
        $login= mysqli_query($db,$sql);

        //--Login Berhasil--//
        if($login->num_rows>=1) {
            $result['success'] = 1;
            $result['message'] = "Login Berhasil";

            $result['login'] = array();

            $data= mysqli_fetch_array($login);
            $rand = rand(10, 50);
	 	    $api_key=md5(date('Y-m-d H:i:s').$data['nama'].$data['username'].$rand);

	 		$sqlKey = "UPDATE $table SET api_key='$api_key' WHERE id_user='".$data['id_user']."'";
            $hasilKey = mysqli_query($db, $sqlKey);

	 		$index['id_user']=$data['id_user'];
	 		$index['nama']=$data['nama'];
	 		$index['img']=$data['img'];
	 		$index['api_key']=$api_key;


	 		array_push($result['login'], $index);
	 		echo json_encode($result);
	
        }else {
            $result['success'] = 0;
            $result['message'] = "User atau Password Salah!";
            echo json_encode($result);
        }
        //Tutup Koneksi//
        mysqli_close($db);

   }else {
        $result['success'] = 0;
        $result['message'] = "Halaman Tidak Bisa Di Akses";
        echo json_encode($result);
   }

?>