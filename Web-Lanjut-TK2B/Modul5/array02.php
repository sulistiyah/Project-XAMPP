<?php

//Program mendlekarasikan array dengan index string ( aray assosiatif).

    $arrNilai = array ( "Ani" => 80,
                        "Otim" => 90,
                        "Ana" => 75,
                        "Budi" => 85);

//Cara Menampilkan value array

    echo $arrNilai['Ani']. "<br>";
    echo $arrNilai['Otim']. "<br>";

//Cara ke 2

$arrNilai = array ();
$arrNilai['Ami'] = 80;
$arrNilai['Asma'] = 95;
$arrNilai['Sri'] = 77;

echo $arrNilai['Asma']."<br>";
echo $arrNilai['Ami']."<br>";