<?php

    $no_bp = "2001081002";
    $nama = 'Sulis Tiyah';
    $umur  = 18;
    $nilai = 83.50;
    $status = FALSE;

    $minuman = array("Kopi", "Teh", "Jus Jeruk");
    $makanan = ["Nasi Goreng", "Soto", "Bubur"];

    echo "No Bp : " . $no_bp . "<br>";
    echo "Nama : $nama<br>";
    print "Umur : " . $umur; print "<br>";
    printf ("Nilai : %.3f<br>", $nilai)."<br>";
    echo "Tipe data boolean : ".$status;

    echo "<pre>";
    print_r($minuman);
    echo "</pre>";

    echo "<pre>";
    print_r($makanan);
    echo "</pre>";



?>