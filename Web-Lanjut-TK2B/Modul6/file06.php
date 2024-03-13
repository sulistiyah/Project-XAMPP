<?php

    $namafile = "data.txt";
    $handle = @fopen ($namafile, "r");
    if ($handle) {
        while (!feof($handle)){
            $buffer = fgets($handle);
            echo $buffer."<br>";
        }
        fclose($handle);
    }
       
?>    