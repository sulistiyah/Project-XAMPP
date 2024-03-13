<?php

    function tambah_string($str) {
        $str = $str . ", Jakarta";
        return $str;
    }

    //
    $str = "Universitas Budi Luhur";
    echo tambah_string($str). "<br>";


?>