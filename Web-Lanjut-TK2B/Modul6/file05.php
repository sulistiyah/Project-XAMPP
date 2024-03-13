<?php

    $namafile = "data.txt";
    $handle = fopen ($namafile, "r");
    if (!$handle) {
        echo "<b> File tidak dapat dibuka atau belum ada</b>";
    }else {
        echo "<b>Isi File : </b><br>";

        while($isi = fgets($handle)) {
            echo "$isi<br>";
        }
    }
    fclose($handle);
?>    








