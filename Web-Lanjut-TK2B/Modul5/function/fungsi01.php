<?php

function cetak_ganjil () {
    for ($i=0; $i<100; $i++){
        if ($i%2 == 1){
            echo "$i ";
        }
    }
}

//Pemanggilan
cetak_ganjil();

?>