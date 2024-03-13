<?php

//program mencari elemen array
$arrBuah = array ("Mangga", "Apel", "Pisang","Kedondong", "Jeruk");
if (in_array ("Kedondong", $arrBuah)) {
    echo "Ada buah kedondong di sini";
} else {
    echo "Tidak ada buah kedondong di sini";
}