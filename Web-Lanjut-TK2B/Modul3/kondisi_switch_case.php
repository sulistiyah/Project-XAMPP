<?php

$level = 1;

switch($level) {
    case 1;
        echo "Pelajari HTML";
         break;
    case 2;
        echo "Pelajari CSS";
        break;
    case 3;
        echo "Pelajari Javascript";
        break;
    case 4;
        echo "Pelajari PHP";
        break;
    default ;
        echo "Kamu bukan programmer";
}

echo "<br>";


$nilai = 10;

switch($nilai) {
    case $nilai>=1 && $nilai<=5;
        echo "Nilai anda masukan antara 1 dan 5";
        break;
    case $nilai>=6 && $nilai<=10;
        echo "Nilai anda masukan antara 6 dan 10";
        break;
    default;
        echo "Nilai anda masukan besar dari 10 atau kecil dari 1";
}