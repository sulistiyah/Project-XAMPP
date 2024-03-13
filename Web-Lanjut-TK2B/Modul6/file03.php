<?php

    $namafile = "data.txt";
    $handle = fopen ($namafile, "w");
    if (!$handle) {
        echo "<b> File tidak dapat dibuka atau belum ada</b>";
    }else {
        fwrite ($handle, "Fakultas Teknologi Informasi\n");
        fputs ($handle, "Politeknik Negeri Padang");
        echo "<b> File berhasil dibuka</b>";
    }
    fclose($handle);
?>    