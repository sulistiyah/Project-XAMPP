<?php

    //Cara Ke dua mengambil nilai input pada form
    extract($_POST);
    if(isset($Submit)){
        echo "Kritik / Saran Anda adalah : <br>";
        echo "<font color=blue><b>$saran</b></font><br>";
        echo"<a href='text-area.php'> Back </ad";
    }
?>