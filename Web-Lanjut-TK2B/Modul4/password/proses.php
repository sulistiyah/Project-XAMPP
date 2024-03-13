<?php

    //Cara Ke dua mengambil nilai input pada form
    extract($_POST);
    if(isset($Login)){
        if ($username == "sulis" && $password == "123") {
            echo "<h2>Login Berhasil</h2>";
        } else {
            echo "<h2>Login Gagal</h2>";
        }
        echo "<a href ='input_password.php'> Back </ad>";
    }
?>