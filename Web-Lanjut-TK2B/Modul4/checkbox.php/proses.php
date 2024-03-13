<?php

    //Cara Ke dua mengambil nilai input pada form
    extract($_POST);
    if(isset($Login)){
        echo "Band Favorit Anda Adalah :<br>";
        if(isset($band01)) {
            echo "+ " . $band01 . "<br>";
        }
        if(isset($band02)) {
            echo "+ " . $band02 . "<br>";
        }
        if(isset($band03)) {
            echo "+ " . $band03 . "<br>";
        }
        if(isset($band04)) {
            echo "+ " . $band04 . "<br>";
        }

        echo "<a href='input_checkbox.php'> Back </ad>";
    }
?>