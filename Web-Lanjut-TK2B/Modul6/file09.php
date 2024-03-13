<?php

    $dir = "images";
    //hapus direktori
    $del = rmdir($dir);
    if ($del) {
        echo "Direktori <b>$dir</b> berhasil dihapus";
    }else {
        echo "Direktori <b>$dir</b> gagal dihapus";
    }

?>