<?php

    //Cara Ke dua mengambil nilai input pada form
    extract($_POST);
    if(isset($Submit)){
        echo "Jurusan Anda adalah <b><font color-'red'>$jurusan</font><br> <br>";
        echo"<a href='input_radio.php'> Back </ad";
    }
?>