<?php
    $file = "data.txt";

    if(is_file($file)) {
        echo "File <b>$file</b> adalah FILE<br>";
    //
        if (is_executable($file)){
            echo "File <b>$file</b> bisa dijalankan secara langsung (executable)<br>";
        }else {
            echo "File <b>$file</b> Tidak executable<br>";
        }
    //
    
    if (is_writable($file)){
        echo "File <b>$file</b> bisa ditulis / diedit<br>";
    }else {
        echo "File <b>$file</b> TIDAK bisa ditulis /diedit<br>";
    }
    //

    if (is_readable($file)){
        echo "File <b>$file</b> bisa dibaca<br>";
    }else {
        echo "File <b>$file</b> TIDAk bisa dibaca<br>";
    }
    //

    echo "Akses terakhir File <b>$file</b> = ". date("d-m-Y H:i:s.", fileatime($file)). "<br>";

    echo "File <b>$file</b> dibuat = ". date("d-m-Y H:i:s.", filectime($file)). "<br>";

    echo "Modifikasi Terakhir File <b>$file</b> = ". date ("d-m-Y H:i:s.", filemtime($file)). "<br>";

    echo "Ukuran File <b>$file</b> = ". filesize($file). "bytes<br>";

    echo "Jenis File <b>$file</b> = ". filetype($file). "<br>";

    } else if (is_dir($file)){
        echo "File <b>$file</b> adalah DIREKTORI<br>";
    }else {
        echo "File <b>$file</b> tidak dikenal<br>";
    }

?>
