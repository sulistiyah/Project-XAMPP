<?php

    //Cara Ke dua mengambil nilai input pada form
    extract($_POST);
    if(isset($Submit)){
        echo "Film Kartun Favorit Anda Adalah : <font color=blue><b>$kartun</b></font><br>";
        
        echo"<a href='input_combobox.php'> Back </ad";
    }
?>